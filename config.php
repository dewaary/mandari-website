<?php

/* Path sistem berkas ke folder /cn/ — dipakai PHP */
define('TPR_ROOT', __DIR__);

/* Awalan URL — dipakai browser.
   Kalau nanti situs dipindah ke domain sendiri, cukup ubah
   baris ini jadi '' dan seluruh tautan ikut menyesuaikan. */
define('TPR_BASE', '/cn');


/**
 * Alamat berkas CSS/JS/gambar, lengkap dengan penanda versi.
 * Angka versinya diambil dari waktu modifikasi berkas, jadi
 * berubah sendiri setiap kali diedit — browser tidak akan
 * menyajikan versi lama dari cache.
 *
 *   tpr_asset('css/style.css')  ->  /cn/css/style.css?v=1755680400
 */
function tpr_asset(string $path): string {
    $rel  = ltrim($path, '/');
    $full = TPR_ROOT . '/' . $rel;
    $ver  = is_file($full) ? filemtime($full) : '1';
    return TPR_BASE . '/' . $rel . '?v=' . $ver;
}

/**
 * Alamat halaman.
 *
 *   tpr_url()                 ->  /cn/
 *   tpr_url('villas')         ->  /cn/villas/
 *   tpr_url('villas/catur')   ->  /cn/villas/catur/
 */
function tpr_url(string $path = ''): string {
    $rel = trim($path, '/');
    return TPR_BASE . '/' . ($rel !== '' ? $rel . '/' : '');
}

/**
 * Alamat berkas yang bukan CSS/JS — PDF, video, gambar biasa.
 * Sama seperti tpr_asset tapi tanpa penanda versi.
 *
 *   tpr_file('assets/images/hero.webp')  ->  /cn/assets/images/hero.webp
 */
function tpr_file(string $path): string {
    return TPR_BASE . '/' . ltrim($path, '/');
}

/* Tautan pemesanan lewat email — dipakai di header, sticky bar,
   dan beberapa tombol. Ditulis sekali di sini. */
define('TPR_BOOK_URL',
    'mailto:enquiry@thepalaubudresort.com'
    . '?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%B8%95%E6%8B%89%E4%B9%8C%E5%B8%83%E5%BA%A6%E5%81%87%E6%9D%91'
    . '&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E4%BB%A5%E4%B8%8B%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A'
    . '%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A'
    . '%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A'
    . '%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A'
    . '%E6%84%8F%E5%90%91%E5%88%AB%E5%A2%85%EF%BC%9A%0D%0A'
    . '%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A'
);

const TPR_INCLUSIONS = [
    '每日早餐（按入住人数）',
    '免费停车',
    '吹风机',
    '浴袍与拖鞋',
    '保险箱',
    '专属管家服务与安保',
    '免费 Wi-Fi（Starlink 卫星直连）',
    '空调',
    '高级洗漱用品',
    '别墅内茶与咖啡',
    '每日客房清洁及夜床服务',
];

const TPR_VILLAS = [
    ['slug' => 'catur', 'type' => '蜜月别墅', 'name_cn' => '卡图尔', 'name_latin' => 'Catur', 'url' => 'villas/catur'],
    ['slug' => 'batur', 'type' => '静谧别墅', 'name_cn' => '巴图尔', 'name_latin' => 'Batur', 'url' => 'villas/batur'],
    ['slug' => 'seraya-a', 'type' => '无边泳池别墅', 'name_cn' => '塞拉雅 A', 'name_latin' => 'Seraya A', 'url' => 'villas/seraya-a'],
    ['slug' => 'seraya-b', 'type' => '疗愈别墅', 'name_cn' => '塞拉雅 B', 'name_latin' => 'Seraya B', 'url' => 'villas/seraya-b'],
    ['slug' => 'sanghyang', 'type' => '家庭别墅', 'name_cn' => '桑香', 'name_latin' => 'Sanghyang', 'url' => 'villas/sanghyang'],
    ['slug' => 'agung', 'type' => '尊尚别墅', 'name_cn' => '阿贡', 'name_latin' => 'Agung', 'url' => 'villas/agung'],
];