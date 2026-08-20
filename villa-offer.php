<?php
/* =========================================================
   villa-offer.php — 直订礼遇 (kartu penawaran di pojok)

   Dipanggil dari tiap halaman detail villa, sebelum footer:
       <?php require TPR_ROOT . '/villa-offer.php'; ?>

   Isinya SAMA di keenam halaman. Nama villa dan fotonya diambil
   dari $villa di halaman pemanggil.

   Perbedaan dari versi Elementor:
   - Tombol "Contact Us" tidak lagi ke WhatsApp (diblokir di Tiongkok)
   - Tulisan "2026 offers" dihapus — tahun yang tertulis akan basi
     dengan sendirinya, dan sekarang pun sudah lewat pertengahan
   ========================================================= */

if (!defined('TPR_BASE')) { require $_SERVER['DOCUMENT_ROOT'] . '/cn/config.php'; }

/* Foto kartu: pakai foto khusus kalau ada, kalau tidak pakai hero villa */
$of_img  = $villa['offer_image'] ?? ($villa['hero'] ?? 'assets/villas/offer.webp');
$of_name = $villa['name_cn'] ?? '';

$of_link = 'mailto:enquiry@thepalaubudresort.com'
  . '?subject=' . rawurlencode('直订咨询 · ' . $of_name . '别墅')
  . '&body='    . rawurlencode(
        "您好，我想了解{$of_name}别墅的官网直订礼遇：\r\n\r\n"
      . "入住日期：\r\n退房日期：\r\n入住人数：\r\n联系电话：\r\n\r\n"
    );
?>

<div class="pala-of">

  <!-- Tombol mengambang — muncul setelah kartunya ditutup -->
  <button class="pala-of__fab" type="button" data-of-fab aria-label="查看直订礼遇">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
         stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
      <path d="M20.6 13.4 12 22l-9-9V4a1 1 0 0 1 1-1h9l7.6 7.6a2 2 0 0 1 0 2.8z"/>
      <circle cx="7.8" cy="7.8" r="1.4"/>
    </svg>
  </button>

  <!-- Kartu.
       role="complementary", bukan dialog — kartunya tidak menghalangi
       halaman, jadi tidak seharusnya diperlakukan sebagai modal. -->
  <div class="pala-of__box" data-of-box role="complementary"
       aria-labelledby="pala-of-title" aria-hidden="true">

    <button class="pala-of__close" type="button" data-of-close aria-label="关闭">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
           stroke-linecap="round" aria-hidden="true">
        <path d="M6 6l12 12M18 6L6 18"/>
      </svg>
    </button>

    <div class="pala-of__body">
      <p class="pala-of__eyebrow"><?php echo $of_name; ?>别墅</p>

      <p class="pala-of__title" id="pala-of-title">
        通过官网直接预订，享受我们为您保留的专属条件。
      </p>

      <ul class="pala-of__list">
        <li>
          <svg class="pala-of__check" viewBox="0 0 24 24" fill="none" stroke="currentColor"
               stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M20 6 9 17l-5-5"/>
          </svg>
          官网直订专属房价
        </li>
        <li>
          <svg class="pala-of__check" viewBox="0 0 24 24" fill="none" stroke="currentColor"
               stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M20 6 9 17l-5-5"/>
          </svg>
          灵活且可定制的预订方案
        </li>
      </ul>

      <a class="pala-of__btn" href="<?php echo $of_link; ?>">联系我们</a>
    </div>

    <div class="pala-of__media">
      <img src="<?php echo tpr_file($of_img); ?>"
           alt="<?php echo $of_name; ?>别墅"
           width="360" height="520" loading="lazy" decoding="async">
    </div>

  </div>

</div>