<?php /* ============================================================
   THE PALA UBUD — HEADER COMPONENT (versi Mandarin)

   Pakai:  <?php include 'header.php'; ?>
   Menu aktif:  <?php $tpr_active = 'villas'; include 'header.php'; ?>
   Nilai: villas, resort, wedding, hura, experiences, contact

   ATUR JARAK NAV KE LOGO lewat --logo-gap di .tpr-hdr-inner
   ============================================================ */
if (!isset($tpr_active)) { $tpr_active = ''; }
function tpr_on($k, $active) { return $k === $active ? 'active' : ''; }

/* Tautan pemesanan dipakai di tiga tempat — ditulis sekali di sini */
$tpr_book_url = 'mailto:enquiry@thepalaubudresort.com'
  . '?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%B8%95%E6%8B%89%E4%B9%8C%E5%B8%83%E5%BA%A6%E5%81%87%E6%9D%91'
  . '&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E4%BB%A5%E4%B8%8B%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A'
  . '%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A'
  . '%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A'
  . '%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A'
  . '%E6%84%8F%E5%90%91%E5%88%AB%E5%A2%85%EF%BC%9A%0D%0A'
  . '%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A';
?>
<style>

:root {
  --tpr-serif: 'Cormorant Garamond', Baskerville, 'Hoefler Text',
               Garamond, Georgia, 'Noto Serif SC', 'Songti SC',
               'SimSun', serif;

  --tpr-sans: 'Jost', -apple-system, BlinkMacSystemFont, 'Segoe UI',
              'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei',
              'Helvetica Neue', Helvetica, Arial, sans-serif;
}

/* ===== TPR HEADER (scoped .tpr-hdr) ===== */
.tpr-hdr, .tpr-hdr * { box-sizing: border-box; margin: 0; padding: 0; }

.tpr-hdr {
  position: sticky; top: 0; z-index: 1000;
  background: #f1eee4;
  border-bottom: 1px solid rgba(4,51,35,.10);
  font-family: var(--tpr-sans);
}

/* ---------- Struktur ----------
   Grid 3 kolom: 1fr | logo | 1fr
   Nav kiri  menempel ke KANAN kolomnya  -> merapat ke logo
   Nav kanan menempel ke KIRI  kolomnya  -> merapat ke logo
   Tombol dilepas dari grid (absolute) supaya logo tetap presisi di tengah. */
.tpr-hdr-inner {
  --logo-gap: 96px;              /* <- kecilkan angka ini kalau mau lebih rapat */

  position: relative;
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  max-width: 1600px; margin: 0 auto; padding: 0 40px;
  height: 110px;
}

/* Logo tengah */
.tpr-hdr-logo { justify-self: center; line-height: 0; }
.tpr-hdr-logo img { height: 63px; width: auto; display: block; }

/* ---------- MENU ---------- */
.tpr-hdr-nav { display: flex; align-items: center; gap: 32px; }

.tpr-hdr-nav a {
  font-family: var(--tpr-serif);
  color: #043323; text-decoration: none;
  font-size: 16px;
  font-weight: 400;
  letter-spacing: .5px;
  text-transform: uppercase; white-space: nowrap;
  transition: color .2s; opacity: .92;
}
.tpr-hdr-nav a:hover, .tpr-hdr-nav a.active { color: #b08d4f; opacity: 1; }

.tpr-hdr-nav--left  { justify-self: end;   margin-right: var(--logo-gap); }
.tpr-hdr-nav--right { justify-self: start; margin-left:  var(--logo-gap); }

/* ---------- Tombol + hamburger: dipaku ke tepi kanan ---------- */
.tpr-hdr-end {
  position: absolute; right: 40px; top: 50%;
  transform: translateY(-50%);
  display: flex; align-items: center; gap: 20px;
}

.tpr-hdr-book {
  font-family: var(--tpr-serif);
  background: #043323; color: #f1eee4; text-decoration: none;
  padding: 10px 30px; border-radius: 999px;
  font-size: 16px; font-weight: 400; letter-spacing: 1px;
  line-height: 1.1; text-transform: uppercase;
  white-space: nowrap; transition: background .25s;
}
.tpr-hdr-book:hover { background: #0a4a33; }

/* ---------- Hamburger -> X ---------- */
.tpr-hdr-burger {
  display: none; position: relative; width: 30px; height: 24px;
  background: none; border: none; cursor: pointer; padding: 0;
}
.tpr-hdr-burger span {
  position: absolute; left: 3px; right: 3px; height: 1px; background: #043323;
  transition: transform .3s ease, opacity .2s ease, top .3s ease;
}
.tpr-hdr-burger span:nth-child(1) { top: 5px; }
.tpr-hdr-burger span:nth-child(2) { top: 11px; }
.tpr-hdr-burger span:nth-child(3) { top: 17px; }
.tpr-hdr.menu-open .tpr-hdr-burger span:nth-child(1) { top: 11px; transform: rotate(45deg); }
.tpr-hdr.menu-open .tpr-hdr-burger span:nth-child(2) { opacity: 0; }
.tpr-hdr.menu-open .tpr-hdr-burger span:nth-child(3) { top: 11px; transform: rotate(-45deg); }

/* ---------- Menu mobile ---------- */
.tpr-hdr-mobile {
  overflow: hidden; max-height: 0;
  transition: max-height .38s ease;
  background: #f1eee4; border-top: 0 solid rgba(4,51,35,.12);
}
.tpr-hdr.menu-open .tpr-hdr-mobile { max-height: 560px; border-top-width: 1px; }
.tpr-hdr-mobile-inner { padding: 8px 0 22px; }

.tpr-hdr-mobile a {
  display: block;
  font-family: var(--tpr-serif);
  color: #043323;
  text-decoration: none; padding: 14px 24px;
  font-size: 17px; letter-spacing: .5px;
  text-transform: uppercase; border-bottom: 1px solid rgba(4,51,35,.07);
}
.tpr-hdr-mobile a:not(.tpr-hdr-mobile-book):hover { color: #b08d4f; }

/* Selector ditulis a.… supaya lebih spesifik daripada .tpr-hdr-mobile a,
   kalau tidak warna teksnya kalah dan tombolnya jadi hijau di atas hijau */
.tpr-hdr-mobile a.tpr-hdr-mobile-book {
  margin: 20px 24px 0; text-align: center;
  background: #043323; color: #f1eee4;
  border-radius: 999px; padding: 14px;
  font-size: 16px; letter-spacing: 1px;
  border-bottom: none;
}

/* ---------- Responsif ---------- */
@media (max-width: 1400px) { .tpr-hdr-inner { --logo-gap: 36px; } }

@media (max-width: 1280px) {
  .tpr-hdr-inner { --logo-gap: 22px; padding: 0 28px; }
  .tpr-hdr-nav { gap: 22px; }
  .tpr-hdr-nav a { font-size: 15px; }
  .tpr-hdr-book { padding: 10px 22px; font-size: 15px; }
  .tpr-hdr-end { right: 28px; }
}

@media (max-width: 1100px) {
  .tpr-hdr-inner { height: 76px; padding: 0 24px; }
  .tpr-hdr-nav--left, .tpr-hdr-nav--right { display: none; }
  .tpr-hdr-logo { grid-column: 2; }
  .tpr-hdr-logo img { height: 46px; }
  .tpr-hdr-book { display: none; }
  .tpr-hdr-end { right: 24px; }
  .tpr-hdr-burger { display: block; }
}
</style>

<header class="tpr-hdr">
  <div class="tpr-hdr-inner">

    <!-- Kolom kiri -->
    <nav class="tpr-hdr-nav tpr-hdr-nav--left">
      <a href="villas.php"         class="<?php echo tpr_on('villas',$tpr_active); ?>">别墅</a>
      <a href="the-resort.php"     class="<?php echo tpr_on('resort',$tpr_active); ?>">度假村</a>
      <a href="wedding-events.php" class="<?php echo tpr_on('wedding',$tpr_active); ?>">婚礼与活动</a>
    </nav>

    <!-- Kolom tengah: logo -->
    <a href="index.php" class="tpr-hdr-logo">
      <img src="assets/website-logo.png" alt="The Pala Ubud 帕拉乌布">
    </a>

    <!-- Kolom kanan.
         联系我们 mengarah ke contact.php, BUKAN mailto — supaya sama
         dengan menu mobile, dan supaya penanda menu aktif berfungsi. -->
    <nav class="tpr-hdr-nav tpr-hdr-nav--right">
      <a href="hura-restaurant.php" class="<?php echo tpr_on('hura',$tpr_active); ?>">Hura 餐厅</a>
      <a href="experiences.php"     class="<?php echo tpr_on('experiences',$tpr_active); ?>">体验</a>
      <a href="contact.php"         class="<?php echo tpr_on('contact',$tpr_active); ?>">联系我们</a>
    </nav>

    <!-- Dipaku ke tepi kanan, di luar aliran grid -->
    <div class="tpr-hdr-end">
      <a href="<?php echo $tpr_book_url; ?>" class="tpr-hdr-book">立即预订</a>

      <button class="tpr-hdr-burger" aria-label="菜单"
              onclick="this.closest('.tpr-hdr').classList.toggle('menu-open')">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>

  <!-- Menu mobile -->
  <nav class="tpr-hdr-mobile">
    <div class="tpr-hdr-mobile-inner"
         onclick="if(event.target.tagName==='A'){this.closest('.tpr-hdr').classList.remove('menu-open');}">
      <a href="villas.php">别墅</a>
      <a href="the-resort.php">度假村</a>
      <a href="wedding-events.php">婚礼与活动</a>
      <a href="hura-restaurant.php">Hura 餐厅</a>
      <a href="experiences.php">体验</a>
      <a href="contact.php">联系我们</a>
      <a href="<?php echo $tpr_book_url; ?>" class="tpr-hdr-mobile-book">立即预订</a>
    </div>
  </nav>
</header>