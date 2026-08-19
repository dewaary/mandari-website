<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

/* ---------- Pengaturan ---------- */
const INQUIRY_TO   = 'enquiry@thepalaubudresort.com';
const INQUIRY_FROM = 'noreply@thepalaubudresort.com';   // harus domain sendiri
const RATE_SECONDS = 30;                                 // jeda antar kiriman

/* ---------- Hanya menerima POST ---------- */
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'message' => '请求方式不正确。']);
    exit;
}

/* ---------- Perangkap spam ----------
   Kolom tersembunyi. Manusia tidak pernah mengisinya; bot hampir selalu.
   Sengaja membalas "berhasil" supaya bot tidak mencoba cara lain. */
if (trim((string)($_POST['website'] ?? '')) !== '') {
    echo json_encode(['ok' => true]);
    exit;
}

/* ---------- Pembatas laju sederhana ---------- */
session_start();
$now = time();
if (isset($_SESSION['last_inquiry']) && $now - $_SESSION['last_inquiry'] < RATE_SECONDS) {
    http_response_code(429);
    echo json_encode(['ok' => false, 'message' => '提交过于频繁，请稍候再试。']);
    exit;
}

/* ---------- Ambil data ---------- */
$field = static function (string $key, int $max = 500): string {
    $value = trim((string)($_POST[$key] ?? ''));
    return mb_substr($value, 0, $max, 'UTF-8');
};

$eventType = $field('event', 60);
$name      = $field('name', 60);
$phone     = $field('phone', 30);
$email     = $field('email', 120);
$wechat    = $field('wechat', 60);
$date      = $field('date', 10);
$guests    = $field('guests', 6);
$notes     = $field('notes', 1000);

/* ---------- Validasi ---------- */
$errors = [];

$allowedEvents = ['婚礼', '静修与疗愈', '企业活动', '家庭聚会', '其他活动'];
if (!in_array($eventType, $allowedEvents, true)) {
    $errors['event'] = '请选择活动类型';
}

// mb_strlen dipakai, bukan strlen: satu aksara Han = 3 byte,
// jadi strlen akan salah menghitung panjang nama Mandarin.
if (mb_strlen($name, 'UTF-8') < 2) {
    $errors['name'] = '请填写您的姓名';
}

if (!preg_match('/^\+?[0-9][0-9\s-]{6,}$/', $phone)) {
    $errors['phone'] = '请填写有效的联系电话';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = '请填写有效的邮箱地址';
}

$dateObj = DateTime::createFromFormat('Y-m-d', $date);
if (!$dateObj || $dateObj->format('Y-m-d') !== $date) {
    $errors['date'] = '请选择意向日期';
} elseif ($dateObj < new DateTime('today')) {
    $errors['date'] = '日期不能早于今天';
}

if (!ctype_digit($guests) || (int)$guests < 10 || (int)$guests > 500) {
    $errors['guests'] = '人数请填写 10 至 500 之间';
}

if (mb_strlen($notes, 'UTF-8') < 5) {
    $errors['notes'] = '请简单描述您的活动';
}

if ($errors) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'errors' => $errors], JSON_UNESCAPED_UNICODE);
    exit;
}

/* ---------- Susun email ----------
   Baris baru dibuang dari nilai yang masuk ke header,
   supaya tidak bisa dipakai menyisipkan header tambahan. */
$clean = static fn(string $v): string => str_replace(["\r", "\n"], ' ', $v);

$subject = sprintf('活动咨询 · %s · %s · %s 人', $eventType, $date, $guests);

$body = implode("\r\n", [
    '新的活动咨询',
    str_repeat('-', 40),
    '活动类型：' . $eventType,
    '姓名　　：' . $name,
    '电话　　：' . $phone,
    '邮箱　　：' . $email,
    '微信号　：' . ($wechat !== '' ? $wechat : '（未填写）'),
    '意向日期：' . $date,
    '宾客人数：' . $guests . ' 人',
    str_repeat('-', 40),
    '补充说明：',
    $notes,
    '',
    str_repeat('-', 40),
    '来源：中文官网 /cn/ 活动咨询表单',
    '时间：' . date('Y-m-d H:i:s'),
]);

/* Subjek harus di-encode MIME — tanpa ini aksara Han jadi kacau
   di sebagian besar klien email. */
$headers = implode("\r\n", [
    'From: The Pala Ubud <' . INQUIRY_FROM . '>',
    'Reply-To: ' . $clean($name) . ' <' . $clean($email) . '>',
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'Content-Transfer-Encoding: 8bit',
]);

$encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

$sent = mail(INQUIRY_TO, $encodedSubject, $body, $headers, '-f' . INQUIRY_FROM);

if (!$sent) {
    http_response_code(500);
    echo json_encode([
        'ok' => false,
        'message' => '发送失败，请直接发送邮件至 ' . INQUIRY_TO,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

$_SESSION['last_inquiry'] = $now;
echo json_encode(['ok' => true], JSON_UNESCAPED_UNICODE);