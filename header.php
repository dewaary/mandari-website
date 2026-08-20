<?php /* ============================================================
   THE PALA UBUD — HEADER COMPONENT (versi Mandarin)

   Dipanggil dari halaman:  <?php require TPR_ROOT . '/header.php'; ?>
   Menu aktif:  $tpr_active = 'villas';  (sebelum require)
   Nilai: villas, resort, wedding, hura, experiences, contact

   Semua tautan memakai tpr_url() dari config.php, jadi tetap benar
   berapa pun kedalaman folder halaman yang memanggilnya.
   ============================================================ */
if (!defined('TPR_BASE')) { require $_SERVER['DOCUMENT_ROOT'] . '/cn/config.php'; }
if (!isset($tpr_active)) { $tpr_active = ''; }
function tpr_on($k, $active) { return $k === $active ? 'active' : ''; }
?>
<style>
/* ============================================================
   FONT — tanpa berkas font sendiri

   Deklarasi @font-face dihapus karena berkasnya tidak ada di
   server; setiap kunjungan memicu 404 yang terbuang percuma.

   Aksara Han memang SELALU dirender font sistem — Cormorant dan
   Jost tidak punya glyph Han sama sekali. Yang berubah hanya teks
   Latin, dan susunan di bawah memilih serif sistem terbaik yang
   tersedia, bukan langsung jatuh ke Times New Roman.

   KALAU NANTI INGIN MEMAKAI CORMORANT:
   unduh cormorant-garamond-300/400/500.woff2 (charset latin) dari
   https://gwfh.mranftl.com/fonts, taruh di assets/fonts/, lalu buka
   komentar blok @font-face di bawah. Namanya sudah ada di urutan
   pertama --tpr-serif, jadi langsung terpakai.
   ============================================================ */
/*
@font-face {
  font-family: 'Cormorant Garamond';
  src: url('<?php echo TPR_BASE; ?>/assets/fonts/cormorant-garamond-300.woff2') format('woff2');
  font-weight: 300; font-style: normal; font-display: swap;
  unicode-range: U+0000-00FF, U+2000-206F, U+20AC, U+2122;
}
@font-face {
  font-family: 'Cormorant Garamond';
  src: url('<?php echo TPR_BASE; ?>/assets/fonts/cormorant-garamond-400.woff2') format('woff2');
  font-weight: 400; font-style: normal; font-display: swap;
  unicode-range: U+0000-00FF, U+2000-206F, U+20AC, U+2122;
}
@font-face {
  font-family: 'Cormorant Garamond';
  src: url('<?php echo TPR_BASE; ?>/assets/fonts/cormorant-garamond-500.woff2') format('woff2');
  font-weight: 500; font-style: normal; font-display: swap;
  unicode-range: U+0000-00FF, U+2000-206F, U+20AC, U+2122;
}
*/

:root {
  /* Serif — untuk judul. Baskerville & Hoefler Text ada di macOS/iOS,
     Georgia di Windows. Aksara Han dari Songti SC / SimSun. */
  --tpr-serif: 'Cormorant Garamond', Baskerville, 'Hoefler Text',
               Garamond, Georgia, 'Noto Serif SC', 'Songti SC',
               'SimSun', serif;

  /* Sans — untuk teks isi. -apple-system memberi San Francisco di
     iPhone/Mac, Segoe UI di Windows. Keduanya lebih rapi dari Arial. */
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

/* Grid 3 kolom: 1fr | logo | 1fr
   Nav kiri menempel ke KANAN kolomnya, nav kanan ke KIRI —
   keduanya merapat ke logo. Tombol dilepas dari grid (absolute)
   supaya logo tetap presisi di tengah. */
.tpr-hdr-inner {
  --logo-gap: 96px;              /* <- kecilkan kalau mau lebih rapat */

  position: relative;
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  max-width: 1600px; margin: 0 auto; padding: 0 40px;
  height: 110px;
}

.tpr-hdr-logo { justify-self: center; line-height: 0; }
.tpr-hdr-logo img { height: 63px; width: auto; display: block; }

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

/* Hamburger -> X */
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

/* Menu mobile */
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

/* Ditulis a.… supaya lebih spesifik daripada .tpr-hdr-mobile a,
   kalau tidak warna teksnya kalah dan tombol jadi hijau di atas hijau */
.tpr-hdr-mobile a.tpr-hdr-mobile-book {
  margin: 20px 24px 0; text-align: center;
  background: #043323; color: #f1eee4;
  border-radius: 999px; padding: 14px;
  font-size: 16px; letter-spacing: 1px;
  border-bottom: none;
}

/* Responsif */
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

    <nav class="tpr-hdr-nav tpr-hdr-nav--left">
      <a href="<?php echo tpr_url('villas'); ?>"   class="<?php echo tpr_on('villas',$tpr_active); ?>">别墅</a>
      <a href="<?php echo tpr_url('resort'); ?>"   class="<?php echo tpr_on('resort',$tpr_active); ?>">度假村</a>
      <a href="<?php echo tpr_url('weddings'); ?>" class="<?php echo tpr_on('wedding',$tpr_active); ?>">婚礼与活动</a>
    </nav>

    <a href="<?php echo tpr_url(); ?>" class="tpr-hdr-logo">
      <img src="<?php echo tpr_file('assets/website-logo.png'); ?>" alt="The Pala Ubud 帕拉乌布">
    </a>

    <nav class="tpr-hdr-nav tpr-hdr-nav--right">
      <a href="<?php echo tpr_url('dining'); ?>"      class="<?php echo tpr_on('hura',$tpr_active); ?>">Hura 餐厅</a>
      <a href="<?php echo tpr_url('experiences'); ?>" class="<?php echo tpr_on('experiences',$tpr_active); ?>">体验</a>
      <a href="<?php echo tpr_url('contact'); ?>"     class="<?php echo tpr_on('contact',$tpr_active); ?>">联系我们</a>
    </nav>

    <div class="tpr-hdr-end">
      <a href="<?php echo TPR_BOOK_URL; ?>" class="tpr-hdr-book">立即预订</a>

      <button class="tpr-hdr-burger" aria-label="菜单"
              onclick="this.closest('.tpr-hdr').classList.toggle('menu-open')">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>

  <nav class="tpr-hdr-mobile">
    <div class="tpr-hdr-mobile-inner"
         onclick="if(event.target.tagName==='A'){this.closest('.tpr-hdr').classList.remove('menu-open');}">
      <a href="<?php echo tpr_url('villas'); ?>">别墅</a>
      <a href="<?php echo tpr_url('resort'); ?>">度假村</a>
      <a href="<?php echo tpr_url('weddings'); ?>">婚礼与活动</a>
      <a href="<?php echo tpr_url('dining'); ?>">Hura 餐厅</a>
      <a href="<?php echo tpr_url('experiences'); ?>">体验</a>
      <a href="<?php echo tpr_url('contact'); ?>">联系我们</a>
      <a href="<?php echo TPR_BOOK_URL; ?>" class="tpr-hdr-mobile-book">立即预订</a>
    </div>
  </nav>
</header>