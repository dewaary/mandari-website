<?php /* ============================================================
   THE PALA UBUD — TEMPLATE HALAMAN "敬请期待"
   Satu file ini melayani SEMUA halaman yang belum jadi.

   Cara pakai — buat file tipis, contoh the-resort.php:

       <?php
       $tpr_page_latin = 'The Resort';
       $tpr_page_title = '度假村';
       $tpr_page_note  = '我们正在整理度假村的故事与照片。';
       $tpr_progress   = '65%';
       $tpr_active     = 'resort';
       include 'coming-soon.php';

   Semua variabel opsional kecuali $tpr_page_title.
   ============================================================ */

if (!isset($tpr_page_latin)) { $tpr_page_latin = 'Coming Soon'; }
if (!isset($tpr_page_title)) { $tpr_page_title = '敬请期待'; }
if (!isset($tpr_page_note))  { $tpr_page_note  = '我们正在用心准备这个页面的内容。'; }
if (!isset($tpr_progress))   { $tpr_progress   = '60%'; }
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $tpr_page_title; ?> · 敬请期待 | 帕拉乌布度假村</title>

  <!-- Halaman kosong sebaiknya tidak diindeks — hapus baris ini saat halaman jadi -->
  <meta name="robots" content="noindex, follow">

  <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">
  <link rel="stylesheet" href="css/page-coming-soon.css">
</head>

<!-- Tanpa hero, jadi header langsung solid -->
<body class="pala-page--solid-header">

  <?php include 'header.php'; ?>

  <main class="pala-soon">
    <div class="pala-soon__inner">

      <!-- Ornamen frangipani: lingkaran menggambar diri, kelopak mekar -->
      <div class="pala-soon__mark" aria-hidden="true">
        <svg viewBox="0 0 128 128" fill="none" stroke="currentColor">
          <circle class="pala-soon__ring" cx="64" cy="64" r="57.5" stroke-width="1"></circle>
          <g class="pala-soon__petals" stroke-width="1.1">
            <ellipse cx="64" cy="46" rx="9" ry="18"></ellipse>
            <ellipse cx="64" cy="46" rx="9" ry="18" transform="rotate(72 64 64)"></ellipse>
            <ellipse cx="64" cy="46" rx="9" ry="18" transform="rotate(144 64 64)"></ellipse>
            <ellipse cx="64" cy="46" rx="9" ry="18" transform="rotate(216 64 64)"></ellipse>
            <ellipse cx="64" cy="46" rx="9" ry="18" transform="rotate(288 64 64)"></ellipse>
            <circle cx="64" cy="64" r="3.4"></circle>
          </g>
        </svg>
      </div>

      <p class="pala-soon__eyebrow"><?php echo $tpr_page_latin; ?></p>

      <h1 class="pala-soon__title"><?php echo $tpr_page_title; ?></h1>

      <div class="pala-soon__rule"></div>

      <p class="pala-soon__text">
        <?php echo $tpr_page_note; ?><br>
        在此期间，欢迎浏览我们的别墅，或直接与我们联系，我们很乐意为您解答。
      </p>

      <div class="pala-soon__progress">
        <div class="pala-soon__progress-label">
          <span>建设进度</span>
          <span><?php echo $tpr_progress; ?></span>
        </div>
        <div class="pala-soon__bar"
             role="progressbar"
             aria-label="页面建设进度"
             aria-valuenow="<?php echo (int) $tpr_progress; ?>"
             aria-valuemin="0" aria-valuemax="100">
          <span style="--pala-progress: <?php echo $tpr_progress; ?>;"></span>
        </div>
      </div>

      <div class="pala-soon__actions">
        <a href="index.php" class="pala-soon__btn pala-soon__btn--solid">返回首页</a>
        <a href="contact.php" class="pala-soon__btn pala-soon__btn--ghost">联系我们</a>
      </div>

    </div>
  </main>

  <?php include 'footer.php'; ?>

</body>
</html>