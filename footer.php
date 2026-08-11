<?php /* ============================================================
   THE PALA UBUD — FOOTER COMPONENT (versi Mandarin)
   Tipografi diukur dari footer asli thepalaubudresort.com

   Pakai:  <?php include 'footer.php'; ?>
   Letakkan sebelum </body> di tiap halaman.

   ATUR LEBAR BLOK KOLOM lewat --top-width di .tpr-ftr-top
   ============================================================ */ ?>
<style>
/* ===== TPR FOOTER (scoped .tpr-ftr) ===== */
.tpr-ftr, .tpr-ftr * { box-sizing: border-box; margin: 0; padding: 0; }

.tpr-ftr {
  background: #f1eee4 !important;
  font-family: 'Jost', "PingFang SC", "Microsoft YaHei", sans-serif;
  color: #043323;
  padding: 88px 0 44px;                 /* asli: atas ±88px, bawah ±44px */
}

/* Container luar = selebar garis pemisah di situs asli (1320px) */
.tpr-ftr-inner { max-width: 1320px; margin: 0 auto; padding: 0 32px; }

/* --- Bagian atas: logo + 3 kolom ---
   Di situs asli titik tengah tiap kolom berjarak persis 255px
   (logo 466 / Villas 719 / Links 974 / Contacts 1229),
   jadi blok ini lebih sempit daripada garis pemisah dan diletakkan di tengah.
   Naikkan --top-width kalau ingin kolomnya lebih melebar. */
.tpr-ftr-top {
  --top-width: 1020px;

  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 0 32px;
  align-items: start;
  max-width: var(--top-width); margin: 0 auto;
  padding-bottom: 58px;
}

.tpr-ftr-logo { display: flex; justify-content: center; align-items: center; }
.tpr-ftr-logo img { height: 94px; width: auto; display: block; }   /* asli ±64px */

/* ---------- Judul kolom ----------
   Hasil ukur: tinggi huruf kapital ±17px → font-size ±26px, weight 400 (tipis).
   Untuk aksara Han letter-spacing dikecilkan: 别墅 sudah punya ruang bawaan. */
.tpr-ftr-col { text-align: center; }
.tpr-ftr-col h4 {
  font-family: 'Cormorant Garamond', 'Noto Serif SC', "Songti SC", "SimSun", serif;
  font-size: 26px; font-weight: 400; color: #043323 !important;
  letter-spacing: .5px; line-height: 1.2;
  margin-bottom: 18px;
}

/* ---------- Item link ----------
   Hasil ukur: tinggi huruf kapital 11px → font-size ±17px,
   jarak antar baris 36px → line-height 1.4 + margin 12px. */
.tpr-ftr-col ul { list-style: none; }
.tpr-ftr-col ul li { margin-bottom: 12px; }
.tpr-ftr-col ul a {
  font-family: 'Cormorant Garamond', 'Noto Serif SC', "Songti SC", serif;
  font-size: 17px; line-height: 1.4;
  color: #043323 !important; text-decoration: none; opacity: .88;
  transition: color .2s, opacity .2s;
}
.tpr-ftr-col ul a:hover { color: #b08d4f !important; opacity: 1; }

/* Kolom kontak — jarak baris asli 25px pada font 16px */
.tpr-ftr-contact p {
  font-family: 'Cormorant Garamond', 'Noto Serif SC', "Songti SC", serif;
  font-size: 16px; line-height: 1.55; color: #043323 !important;
  opacity: .88; margin-bottom: 16px;
}
.tpr-ftr-contact a { color: #043323 !important; text-decoration: none; transition: color .2s; }
.tpr-ftr-contact a:hover { color: #b08d4f !important; }

/* --- Garis pemisah: selebar container, 1320px --- */
.tpr-ftr-divider { height: 1px; background: rgba(4,51,35,.14); margin-bottom: 68px; }

/* --- Follow us: font sama besar dengan judul kolom (26px) --- */
.tpr-ftr-social {
  display: flex; align-items: center; justify-content: center; gap: 20px;
  margin-bottom: 30px; flex-wrap: wrap;
}
.tpr-ftr-social .tpr-ftr-follow {
  font-family: 'Cormorant Garamond', 'Noto Serif SC', "Songti SC", serif;
  font-size: 26px; font-weight: 400; color: #043323;
  letter-spacing: .5px; margin-right: 22px;
}
.tpr-ftr-social a {
  position: relative;
  display: inline-flex; align-items: center; justify-content: center;
  width: 24px; height: 24px; transition: transform .2s;
}
.tpr-ftr-social a:hover { transform: translateY(-2px); }
.tpr-ftr-social svg { width: 22px; height: 22px; fill: #043323; transition: fill .2s; }
.tpr-ftr-social a:hover svg { fill: #b08d4f; }

/* QR WeChat muncul saat ikon di-hover / difokus */
.tpr-ftr-qr {
  position: absolute; left: 50%; bottom: calc(100% + 12px);
  transform: translateX(-50%);
  display: none; padding: 8px;
  background: #fff; border-radius: 8px;
  box-shadow: 0 10px 30px rgba(4,51,35,.18);
}
.tpr-ftr-qr img { display: block; width: 132px; height: 132px; }
.tpr-ftr-social a:hover .tpr-ftr-qr,
.tpr-ftr-social a:focus-visible .tpr-ftr-qr { display: block; }

/* --- Legal + copyright (Jost, bukan serif) --- */
.tpr-ftr-legal {
  display: flex; justify-content: center; gap: 36px; margin-bottom: 20px; flex-wrap: wrap;
}
.tpr-ftr-legal a {
  font-size: 14px; color: rgba(4,51,35,.6) !important;
  text-decoration: none; transition: color .2s;
}
.tpr-ftr-legal a:hover { color: #b08d4f !important; }

.tpr-ftr-copy { text-align: center; font-size: 14px; color: rgba(4,51,35,.5); }

/* --- Responsif --- */
@media (max-width: 1100px) {
  .tpr-ftr-top { --top-width: 100%; gap: 0 24px; }
}
@media (max-width: 900px) {
  .tpr-ftr { padding-top: 64px; }
  .tpr-ftr-top { grid-template-columns: 1fr 1fr; gap: 40px 24px; padding-bottom: 44px; }
  .tpr-ftr-logo { grid-column: 1 / -1; margin-bottom: 8px; }
  .tpr-ftr-divider { margin-bottom: 48px; }
}
@media (max-width: 560px) {
  .tpr-ftr { padding-top: 56px; }
  .tpr-ftr-top { grid-template-columns: 1fr; gap: 34px; }
  .tpr-ftr-social { gap: 16px; }
  .tpr-ftr-social .tpr-ftr-follow { width: 100%; text-align: center; margin: 0 0 6px; }
  .tpr-ftr-legal { gap: 24px; }
}
</style>

<footer class="tpr-ftr">
  <div class="tpr-ftr-inner">

    <div class="tpr-ftr-top">

      <!-- Logo -->
      <div class="tpr-ftr-logo">
        <a href="index.php">
          <img src="assets/website-logo.png" alt="The Pala Ubud 帕拉乌布">
        </a>
      </div>

      <!-- Kolom: Villas -->
      <div class="tpr-ftr-col">
        <h4>别墅</h4>
        <ul>
          <li><a href="villa-catur.php">Catur 别墅</a></li>
          <li><a href="villa-batur.php">Batur 别墅</a></li>
          <li><a href="villa-seraya-a.php">Seraya A 别墅</a></li>
          <li><a href="villa-seraya-b.php">Seraya B 别墅</a></li>
          <li><a href="villa-sanghyang.php">Sanghyang 别墅</a></li>
          <li><a href="villa-agung.php">Agung 别墅</a></li>
        </ul>
      </div>

      <!-- Kolom: Links -->
      <div class="tpr-ftr-col">
        <h4>快速链接</h4>
        <ul>
          <li><a href="index.php">别墅</a></li>
          <li><a href="the-resort.php">度假村</a></li>
          <li><a href="wedding-events.php">婚礼与活动</a></li>
          <li><a href="hura-restaurant.php">Hura 餐厅</a></li>
          <li><a href="experiences.php">体验</a></li>
          <li><a href="contact.php">联系我们</a></li>
        </ul>
      </div>

      <!-- Kolom: Contacts -->
      <div class="tpr-ftr-col tpr-ftr-contact">
        <h4>联系方式</h4>
        <p>印度尼西亚 巴厘岛 吉安雅县 塔曼西林<br>Jl. Kelusu, Pejeng Kelod, Bali 80552</p>
        <p><a href="tel:+628113888565">+62 811-3888-565</a></p>
        <p><a href="mailto:enquiry@thepalaubudresort.com">enquiry@thepalaubudresort.com</a></p>
      </div>

    </div>

    <div class="tpr-ftr-divider"></div>

    <!-- Follow us — platform Tiongkok.
         Facebook / Instagram / YouTube / TikTok sengaja TIDAK dipakai
         karena keempatnya diblokir di Tiongkok daratan.
         Ganti href="#" di bawah dengan tautan akun resmi. -->
    <div class="tpr-ftr-social">
      <span class="tpr-ftr-follow">关注我们</span>

      <!-- WeChat: hover memunculkan QR. Taruh gambar di assets/images/wechat-qr.jpg -->
      <a href="javascript:void(0)" aria-label="微信" tabindex="0">
        <span class="tpr-ftr-qr"><img src="assets/images/wechat-qr.jpg" alt="微信二维码"></span>
        <svg viewBox="0 0 24 24"><path d="M9 3C4.9 3 1.6 5.8 1.6 9.2c0 1.9 1 3.6 2.7 4.8L3.5 16l2.4-1.2c.9.3 2 .5 3.1.5h.5A5.6 5.6 0 0 1 9 14c0-3.4 3.4-6.1 7.6-6.1h.6C16.7 5.1 13.2 3 9 3Zm-2.5 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2Zm5 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z"/><path d="M16.6 9C13 9 10 11.3 10 14.2c0 2.9 3 5.2 6.6 5.2.8 0 1.5-.1 2.2-.3l2 1-.6-1.7c1.4-1 2.3-2.5 2.3-4.2C22.5 11.3 20 9 16.6 9Zm-2.2 3.4a.9.9 0 1 1 0 1.8.9.9 0 0 1 0-1.8Zm4.4 0a.9.9 0 1 1 0 1.8.9.9 0 0 1 0-1.8Z"/></svg>
      </a>

      <!-- Weibo 微博 -->
      <a href="#" aria-label="微博">
        <svg viewBox="0 0 24 24"><path d="M10.1 19.9c-4 0-7.3-1.9-7.3-4.4 0-1.3.8-2.8 2.3-4.2 2-1.9 4.3-2.7 5.2-1.9.4.4.4 1 .2 1.8-.1.4.4.2.4.2 1.6-.7 3-.7 3.5.1.3.4.2 1 0 1.7-.1.3 0 .4.3.4 1 .3 2.1 1.1 2.1 2.4 0 2.1-3.1 3.9-6.7 3.9Zm-.5-6.6c-2 .2-3.5 1.4-3.4 2.8.1 1.3 1.8 2.1 3.8 1.9 2-.2 3.5-1.4 3.4-2.8-.1-1.3-1.8-2.1-3.8-1.9Zm-.3 1.3c.7-.1 1.3.3 1.4.8.1.5-.4 1-1.1 1.1-.7.1-1.3-.2-1.4-.7-.1-.5.4-1 1.1-1.2Zm9.4-4.2a.8.8 0 0 1-.8-1c.2-1-.1-2-.8-2.8-.7-.7-1.7-1-2.7-.8a.8.8 0 1 1-.3-1.6c1.5-.3 3.1.1 4.2 1.3 1.1 1.2 1.5 2.7 1.2 4.2a.8.8 0 0 1-.8.7Zm2.6.9a.9.9 0 0 1-.9-1.1c.4-2-.2-4-1.6-5.4-1.4-1.4-3.4-2-5.4-1.6a.9.9 0 1 1-.3-1.8c2.6-.5 5.2.3 7 2.1 1.8 1.8 2.5 4.4 2 7a.9.9 0 0 1-.8.8Z"/></svg>
      </a>

      <!-- Xiaohongshu 小红书 -->
      <a href="#" aria-label="小红书">
        <svg viewBox="0 0 24 24"><path d="M3 6h2.2v12H3zM7.4 6h4.4v1.9H9.3v2.7h2.3v1.9H9.3v3.6h2.6V18H7.4zM13.7 6h2v12h-2zM17.8 6H21v1.9h-1.3v8.2H21V18h-3.2z"/></svg>
      </a>

      <!-- Douyin 抖音 -->
      <a href="#" aria-label="抖音">
        <svg viewBox="0 0 24 24"><path d="M16.5 3c.3 2.1 1.5 3.4 3.5 3.5v2.4c-1.2.1-2.3-.3-3.5-1v5.6c0 3.6-2.6 5.9-5.7 5.9-2.7 0-4.9-2-4.9-4.7 0-2.9 2.4-4.9 5.4-4.6v2.5c-.4-.1-.9-.2-1.3-.1-1.1.1-1.9.8-1.8 2 .1 1.1 1 1.8 2.1 1.7 1.2-.1 1.9-1 1.9-2.3V3z"/></svg>
      </a>
    </div>

    <!-- Legal -->
    <div class="tpr-ftr-legal">
      <a href="term-conditions.php">条款与条件</a>
      <a href="privacy-policy.php">隐私政策</a>
    </div>

    <!-- Copyright -->
    <div class="tpr-ftr-copy">版权所有 © 2026 The Pala Ubud Resort 保留所有权利</div>

  </div>
</footer>