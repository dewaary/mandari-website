<?php
require $_SERVER['DOCUMENT_ROOT'] . '/cn/config.php';
$tpr_active = 'contact';   // sesuaikan per halaman
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>联系我们 | 帕拉乌布度假村 · 巴厘岛乌布</title>
  <meta name="description" content="联系帕拉乌布度假村：预订咨询、婚礼与活动筹划、行程安排。电话 +62 811-3888-565，邮箱 enquiry@thepalaubudresort.com。">

 <link rel="stylesheet" href="<?php echo tpr_asset('css/style.css'); ?>">

  <!-- Foto hero adalah elemen terbesar di layar pertama (LCP) -->
  <link rel="preload" as="image" href="<?php echo TPR_BASE; ?>/assets/contact/images/hero.webp" fetchpriority="high">
</head>

<body>

  	<?php require TPR_ROOT . '/header.php'; ?>


  <!-- ==================== 1. HERO ==================== -->
  <section class="pala-ct-hero" aria-labelledby="pala-ct-hero-title">

    <img class="pala-ct-hero__bg"
         src="<?php echo TPR_BASE; ?>/assets/home/images/card-villa-agung.webp"
         alt=""
         aria-hidden="true"
         fetchpriority="high"
         decoding="async">
  </section>
  <!-- ================== END 1. HERO ================== -->

  <!-- ============= SECTION 2: 我们的位置 (MAP + CONTACT) =============
     PERBEDAAN TERPENTING dari versi Inggris:

     Embed Google Maps DIBUANG. Google Maps diblokir total di
     Tiongkok — iframe-nya hanya akan jadi kotak kosong, dan justru
     memberi kesan halaman ini tidak dibuat untuk pengunjung Tiongkok.

     Diganti: gambar peta statis + dua tombol —
       · 在高德地图中打开  -> uri.amap.com (Amap / 高德地图)
       · 复制地址          -> menyalin alamat Latin ke clipboard

     Tombol salin itu bukan hiasan: sopir taksi dan ojek di Bali
     membaca alamat dalam huruf Latin, bukan aksara Han. Tamu perlu
     bisa menunjukkan atau mengirimkan teks itu ke sopir.

     YANG PERLU DISIAPKAN:
     assets/contact/images/map.webp — tangkapan layar peta lokasi,
     lebar 1600px, rasio sekitar 16:7. Bisa diambil dari peta mana
     pun lalu dikompres; yang penting jalan Jl. Kelusu dan penanda
     resort terlihat jelas.

     Judul section ini 我们的位置, bukan 联系我们 — supaya tidak
     mengulang <h1> di hero tepat di atasnya.
     =================================================================== -->
<section class="pala-cm" aria-labelledby="pala-cm-title">
  <div class="pala-cm__inner">

    <h2 class="pala-cm__title" id="pala-cm-title">我们的位置</h2>

    <p class="pala-cm__sub">
      欢迎联系我们的团队，我们会为您提供一对一的协助与解答。
    </p>

    <!-- ---------- Peta ---------- -->
    <div class="pala-cm__map">
      <img src="<?php echo TPR_BASE; ?>/assets/contact/images/map.webp"
           alt="帕拉乌布度假村位置图 · 巴厘岛乌布 Jl. Kelusu"
           width="1600" height="700" loading="lazy" decoding="async">

      <div class="pala-cm__card">
        <p class="pala-cm__card-name">帕拉乌布度假村</p>
        <p class="pala-cm__card-addr">
          Jl. Kelusu, Pejeng Kelod, Kec. Tampaksiring,<br>
          Kabupaten Gianyar, Bali 80552, Indonesia
        </p>

        <div class="pala-cm__card-actions">
          <a class="pala-cm__card-btn"
             href="https://uri.amap.com/marker?position=115.3016055,-8.509576&name=%E5%B8%95%E6%8B%89%E4%B9%8C%E5%B8%83%E5%BA%A6%E5%81%87%E6%9D%91"
             target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
            在高德地图中打开
          </a>

          <button class="pala-cm__card-btn" type="button"
                  data-copy-address="Jl. Kelusu, Pejeng Kelod, Kec. Tampaksiring, Kabupaten Gianyar, Bali 80552, Indonesia">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <rect x="9" y="9" width="12" height="12" rx="2"/>
              <path d="M5 15V5a2 2 0 0 1 2-2h10"/>
            </svg>
            复制地址
          </button>
        </div>

        <p class="pala-cm__copied" data-copy-notice hidden></p>
      </div>
    </div>

    <!-- ---------- Kartu kontak ---------- -->
    <div class="pala-cm__grid">

      <a class="pala-cm__item" href="tel:+628113888565">
        <span class="pala-cm__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
               stroke-linecap="round" stroke-linejoin="round">
            <path d="M6.6 3.5 9 3.9l1 4.1-2.1 1.5a12 12 0 0 0 6.6 6.6l1.5-2.1 4.1 1 .4 2.4a2 2 0 0 1-2 2.3A17 17 0 0 1 4.3 5.5a2 2 0 0 1 2.3-2z"/>
          </svg>
        </span>
        <span>
          <span class="pala-cm__label">电话</span>
          <span class="pala-cm__value">+62 811-3888-565</span>
        </span>
      </a>

      <a class="pala-cm__item" href="mailto:enquiry@thepalaubudresort.com">
        <span class="pala-cm__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
               stroke-linecap="round" stroke-linejoin="round">
            <rect x="2.5" y="5" width="19" height="14" rx="2"/>
            <path d="m3 7 9 6 9-6"/>
          </svg>
        </span>
        <span>
          <span class="pala-cm__label">邮箱</span>
          <span class="pala-cm__value">enquiry@thepalaubudresort.com</span>
        </span>
      </a>

      <!-- Bukan tautan, jadi memakai <div> -->
      <div class="pala-cm__item">
        <span class="pala-cm__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
               stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </span>
        <span>
          <span class="pala-cm__label">地址</span>
          <span class="pala-cm__value">印度尼西亚 巴厘岛 乌布</span>
        </span>
      </div>

    </div>

  </div>
</section>
<!-- =========== END SECTION 2: 我们的位置 =========== -->

<!-- ============= SECTION 3: 在线咨询 (TABBED FORMS) =============
     PERBEDAAN TERPENTING dari versi Inggris:

     reCAPTCHA DIBUANG. Itu layanan Google, diblokir di Tiongkok.
     Kotaknya tidak akan muncul — dan karena formulir tidak bisa
     dikirim tanpa mencentangnya, seluruh formulir jadi MATI bagi
     pengunjung Tiongkok. Ini bukan sekadar tampilan yang rusak,
     tapi hilangnya satu-satunya jalur kontak di halaman ini.

     Penggantinya tiga lapis, semuanya di sisi server:
       1. Kolom perangkap tersembunyi (honeypot)
       2. Batas waktu minimum — bot mengisi dalam < 3 detik
       3. Pembatas laju per sesi

     Keduanya mengirim ke send-inquiry.php lewat form_type.

     YANG PERLU DISIAPKAN:
     assets/contact/images/form-general.webp  (foto kamar)
     assets/contact/images/form-event.webp    (foto acara)
     =================================================================== -->
<section class="pala-cf" aria-labelledby="pala-cf-title">
  <div class="pala-cf__inner">

    <div class="pala-cf__head">
      <h2 class="pala-cf__title" id="pala-cf-title">在线咨询</h2>
    </div>

    <!-- ---------- Tab ---------- -->
    <div class="pala-cf__tabs" role="tablist" data-cf-tablist aria-label="咨询类型">
      <button class="pala-cf__tab is-active" type="button" role="tab"
              data-cf-tab="general" aria-selected="true">一般预订</button>
      <button class="pala-cf__tab" type="button" role="tab"
              data-cf-tab="event" aria-selected="false">活动、团体与婚礼</button>
    </div>

    <!-- ==================== TAB 1: 一般预订 ==================== -->
    <div class="pala-cf__panel is-active" data-cf-panel="general" role="tabpanel">
      <div class="pala-cf__grid">

        <div class="pala-cf__media">
          <img src="<?php echo TPR_BASE; ?>/assets/wedding-events/images/main-lawn-agung.png" alt="别墅客房"
               width="1000" height="1120" loading="lazy" decoding="async">
        </div>

        <div class="pala-cf__body">
          <h3 class="pala-cf__form-title">一般预订</h3>

          <form data-cf-form novalidate>
            <input type="hidden" name="form_type" value="general">
            <input type="hidden" name="started_at" value="0">

            <p class="pala-cf__notice" data-cf-notice hidden></p>

            <!-- Perangkap spam: manusia tidak akan pernah mengisinya -->
            <div class="pala-cf__trap" aria-hidden="true">
              <label for="cf-g-website">Website</label>
              <input type="text" id="cf-g-website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="pala-cf__row">
              <div class="pala-cf__group">
                <label for="cf-g-name">姓名 <span class="pala-cf__req">*</span></label>
                <input type="text" id="cf-g-name" name="name"
                       placeholder="您的姓名" maxlength="60" autocomplete="name" required>
              </div>

              <div class="pala-cf__group">
                <label for="cf-g-phone">联系电话 <span class="pala-cf__req">*</span></label>
                <input type="tel" id="cf-g-phone" name="phone"
                       placeholder="+86" inputmode="tel" autocomplete="tel" required>
              </div>
            </div>

            <div class="pala-cf__row">
              <div class="pala-cf__group">
                <label for="cf-g-email">邮箱地址 <span class="pala-cf__req">*</span></label>
                <input type="email" id="cf-g-email" name="email"
                       placeholder="your@email.com" autocomplete="email" required>
              </div>

              <div class="pala-cf__group">
                <label for="cf-g-subject">咨询主题 <span class="pala-cf__req">*</span></label>
                <input type="text" id="cf-g-subject" name="subject"
                       placeholder="例如：8 月别墅预订" maxlength="120" required>
              </div>
            </div>

            <div class="pala-cf__group">
              <label for="cf-g-wechat">微信号 <span class="pala-cf__optional">（选填）</span></label>
              <input type="text" id="cf-g-wechat" name="wechat"
                     placeholder="方便我们更快与您联系" maxlength="60">
            </div>

            <div class="pala-cf__group">
              <label for="cf-g-message">留言内容</label>
              <textarea id="cf-g-message" name="message"
                        placeholder="请告诉我们您的需求…" maxlength="1500"></textarea>
            </div>

            <button class="pala-cf__submit" type="submit" data-cf-submit>
              <span class="pala-cf__text">发送咨询</span>
              <span class="pala-cf__loading">发送中…</span>
            </button>

            <p class="pala-cf__note">
              我们会在 24 小时内回复。您的信息仅用于回复本次咨询。
            </p>
          </form>
        </div>

      </div>
    </div>

    <!-- ============== TAB 2: 活动、团体与婚礼 ============== -->
    <div class="pala-cf__panel" data-cf-panel="event" role="tabpanel">
      <div class="pala-cf__grid">

        <div class="pala-cf__media">
          <img src="<?php echo TPR_BASE; ?>/assets/contact/tab1-image.webp" alt="草坪婚礼布置"
               width="1000" height="1120" loading="lazy" decoding="async">
        </div>

        <div class="pala-cf__body">
          <h3 class="pala-cf__form-title">活动、团体与婚礼</h3>

          <form data-cf-form novalidate>
            <input type="hidden" name="form_type" value="event">
            <input type="hidden" name="started_at" value="0">

            <p class="pala-cf__notice" data-cf-notice hidden></p>

            <div class="pala-cf__trap" aria-hidden="true">
              <label for="cf-e-website">Website</label>
              <input type="text" id="cf-e-website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="pala-cf__group">
              <label for="cf-e-event">活动类型 <span class="pala-cf__req">*</span></label>
              <select id="cf-e-event" name="event" required>
                <option value="" selected hidden>请选择</option>
                <option value="婚礼">婚礼</option>
                <option value="静修与疗愈">静修与疗愈</option>
                <option value="企业活动">企业活动</option>
                <option value="家庭聚会">家庭聚会</option>
                <option value="其他活动">其他活动</option>
              </select>
            </div>

            <div class="pala-cf__group">
              <label for="cf-e-name">姓名 <span class="pala-cf__req">*</span></label>
              <input type="text" id="cf-e-name" name="name"
                     placeholder="您的姓名" maxlength="60" autocomplete="name" required>
            </div>

            <div class="pala-cf__row">
              <div class="pala-cf__group">
                <label for="cf-e-phone">联系电话 <span class="pala-cf__req">*</span></label>
                <input type="tel" id="cf-e-phone" name="phone"
                       placeholder="+86" inputmode="tel" autocomplete="tel" required>
              </div>

              <div class="pala-cf__group">
                <label for="cf-e-email">邮箱地址 <span class="pala-cf__req">*</span></label>
                <input type="email" id="cf-e-email" name="email"
                       placeholder="your@email.com" autocomplete="email" required>
              </div>
            </div>

            <div class="pala-cf__row">
              <div class="pala-cf__group">
                <label for="cf-e-date">意向日期 <span class="pala-cf__req">*</span></label>
                <input type="date" id="cf-e-date" name="date" required>
              </div>

              <div class="pala-cf__group">
                <label for="cf-e-guests">宾客人数 <span class="pala-cf__req">*</span></label>
                <input type="number" id="cf-e-guests" name="guests"
                       placeholder="60" min="1" max="500" inputmode="numeric" required>
              </div>
            </div>

            <div class="pala-cf__group">
              <label for="cf-e-wechat">微信号 <span class="pala-cf__optional">（选填）</span></label>
              <input type="text" id="cf-e-wechat" name="wechat"
                     placeholder="方便我们更快与您联系" maxlength="60">
            </div>

            <div class="pala-cf__group">
              <label for="cf-e-notes">活动详情 <span class="pala-cf__req">*</span></label>
              <textarea id="cf-e-notes" name="notes"
                        placeholder="请简单描述您的活动设想…" maxlength="1500" required></textarea>
            </div>

            <button class="pala-cf__submit" type="submit" data-cf-submit>
              <span class="pala-cf__text">索取方案</span>
              <span class="pala-cf__loading">发送中…</span>
            </button>

            <p class="pala-cf__note">
              我们会在 24 小时内回复，并附上场地与报价方案。
            </p>
          </form>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- =========== END SECTION 3: 在线咨询 =========== -->

  <!-- Section berikutnya ditulis di sini -->


 <?php require TPR_ROOT . '/footer.php'; ?>

  <script src="<?php echo tpr_asset('js/script.js'); ?>"></script>
</body>
</html>