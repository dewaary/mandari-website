<?php
require $_SERVER['DOCUMENT_ROOT'] . '/cn/config.php';
$tpr_active = 'home';
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>帕拉乌布度假村 | 巴厘岛乌布私人泳池别墅</title>
  <meta name="description" content="帕拉乌布度假村位于巴厘岛乌布，六栋私人泳池别墅，农场餐饮与丛林景观。在线查询空房与房价。">

 <link rel="stylesheet" href="<?php echo tpr_asset('css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo tpr_asset('css/section-film.css'); ?>">
</head>

<body>

  <!-- HEADER -->
  	<?php require TPR_ROOT . '/header.php'; ?>


  <!-- ===================== SECTION 1: HERO =====================
       data-video-src  = LOOP PENDEK hasil kompresi (target < 2 MB)
       data-poster-src = gambar poster WebP (target < 150 KB)
       Bukan video 60 MB — itu dipasang di SECTION 2 di bawah.        -->
  <section
    class="pala-hero"
    aria-label="帕拉乌布度假村预订"
    data-video-src="<?php echo TPR_BASE; ?>/assets/videos/full.mp4"
    data-poster-src="<?php echo TPR_BASE; ?>/assets/images/hero-poster.webp"
  >
    <div class="pala-hero__media" aria-hidden="true">
      <img class="pala-hero__poster" alt="" hidden>
      <video class="pala-hero__video" autoplay muted loop playsinline preload="metadata"></video>
    </div>

    <!-- Tombol mute sudah dihapus: loop hero di-encode tanpa trek audio (-an),
         jadi tombolnya tidak akan melakukan apa pun. -->
    <div class="pala-hero__video-controls" aria-label="视频控制" hidden>
      <button class="pala-hero__control" type="button" data-video-action="play" aria-label="暂停视频">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path data-icon-play d="M8 5v14l11-7z" fill="currentColor" stroke="none" hidden></path>
          <path data-icon-pause d="M8 5v14M16 5v14"></path>
        </svg>
      </button>
    </div>

    <form class="pala-booking" data-booking-url="" novalidate>
      <div class="pala-booking__group">
        <span class="pala-booking__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <rect x="3" y="5" width="18" height="16" rx="2"></rect>
            <path d="M16 3v4M8 3v4M3 10h18"></path>
          </svg>
        </span>
        <div class="pala-booking__dates">
          <button class="pala-booking__date" type="button" data-date-button="checkin" aria-label="选择入住日期" aria-expanded="false">
            <span class="pala-booking__date-label" data-date-label="checkin">入住日期</span>
          </button>
          <span class="pala-booking__arrow" aria-hidden="true">→</span>
          <button class="pala-booking__date" type="button" data-date-button="checkout" aria-label="选择退房日期" aria-expanded="false">
            <span class="pala-booking__date-label" data-date-label="checkout">退房日期</span>
          </button>
        </div>
        <input type="hidden" name="checkin">
        <input type="hidden" name="checkout">

        <div class="pala-calendar" data-calendar role="dialog" aria-modal="false" aria-label="选择入住和退房日期">
          <div class="pala-calendar__header">
            <h2 class="pala-calendar__title" data-calendar-title>选择入住日期</h2>
            <div class="pala-calendar__actions">
              <button class="pala-calendar__nav" type="button" data-calendar-prev aria-label="上个月">‹</button>
              <button class="pala-calendar__nav" type="button" data-calendar-next aria-label="下个月">›</button>
              <button class="pala-calendar__close" type="button" data-calendar-close aria-label="关闭日历">×</button>
            </div>
          </div>
          <div class="pala-calendar__months" data-calendar-months></div>
        </div>
      </div>

      <div class="pala-booking__group pala-booking__group--guest">
        <span class="pala-booking__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <circle cx="12" cy="8" r="3"></circle>
            <path d="M5 21v-2a7 7 0 0 1 14 0v2"></path>
          </svg>
        </span>
        <button class="pala-booking__button" type="button" data-guest-toggle aria-expanded="false">
          <span data-guest-summary>1位成人，0名儿童</span>
        </button>

        <div class="pala-guests" data-guest-panel>
          <div class="pala-guests__row">
            <div>
              <span class="pala-guests__title">成人</span>
              <span class="pala-guests__note">13岁及以上</span>
            </div>
            <div class="pala-guests__counter">
              <button class="pala-guests__step" type="button" data-step="adult:-1" aria-label="减少成人数量">−</button>
              <span class="pala-guests__count" data-count="adult">1</span>
              <button class="pala-guests__step" type="button" data-step="adult:1" aria-label="增加成人数量">+</button>
            </div>
          </div>
          <div class="pala-guests__row">
            <div>
              <span class="pala-guests__title">儿童</span>
              <span class="pala-guests__note">0至12岁</span>
            </div>
            <div class="pala-guests__counter">
              <button class="pala-guests__step" type="button" data-step="child:-1" aria-label="减少儿童数量">−</button>
              <span class="pala-guests__count" data-count="child">0</span>
              <button class="pala-guests__step" type="button" data-step="child:1" aria-label="增加儿童数量">+</button>
            </div>
          </div>
        </div>
      </div>

      <div class="pala-booking__group">
        <span class="pala-booking__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M3 21V9l9-6 9 6v12H3z"></path>
            <path d="M9 21v-7h6v7"></path>
          </svg>
        </span>
        <div class="pala-booking__select-wrap">
          <select class="pala-booking__select" name="villa" aria-label="选择别墅">
            <option value="">选择别墅</option>
            <option value="agung">阿贡别墅</option>
            <option value="batur">巴图尔别墅</option>
            <option value="catur">卡图尔别墅</option>
            <option value="seraya-a">塞拉雅A别墅</option>
            <option value="seraya-b">塞拉雅B别墅</option>
            <option value="sanghyang">桑香别墅</option>
          </select>
        </div>
      </div>

      <button class="pala-booking__submit" type="submit">
        <span>查询可订房</span>
        <span class="pala-booking__search-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="7"></circle>
            <path d="m20 20-4-4"></path>
          </svg>
        </span>
      </button>

      <div class="pala-booking__status" data-booking-status aria-live="polite"></div>
    </form>
  </section>
  <!-- =================== END SECTION 1: HERO =================== -->

<section class="pala-welcome" aria-labelledby="pala-welcome-title">
  <div class="pala-welcome__inner">

    <div class="pala-welcome__head">
      <p class="pala-welcome__eyebrow">欢迎来到</p>
      <h2 class="pala-welcome__title" id="pala-welcome-title">帕拉乌布度假村</h2>
      <p class="pala-welcome__location">印度尼西亚 · 巴厘岛</p>
    </div>

    <div class="pala-welcome__body">
      <p>
        在这个鲜少停歇的世界里，我们创造了帕拉乌布——一处可以停下、呼吸、安然自处的地方。
        四周是稻田、帕克里桑河与森林山谷，邀请您暂别日常的匆忙，重新发现静谧之乐。
      </p>
      <p>
        由创办人与巴厘岛知名建筑师 Popo Danes 共同构想，六栋别墅构成一处精致而不张扬的庇护所，
        现代舒适与自然节奏在此交汇。专为家庭、情侣与寻求宁静的小型团体而设。
      </p>
      <p>
        帕拉乌布静立于距离乌布文化中心仅 15 分钟车程之处。
      </p>
    </div>

    <!-- ---------------- Info kontak ---------------- -->
    <div class="pala-contact">

      <div class="pala-contact__item pala-contact__item--address">
        <h4 class="pala-contact__label">地址</h4>
        <p>
          <!-- Amap (高德地图) — pengganti Google Maps.
               Ganti angka koordinat/nama kalau sudah punya POI resmi di Amap. -->
          <a href="https://uri.amap.com/marker?position=115.3016055,-8.509576&name=帕拉乌布度假村"
             target="_blank" rel="noopener">
            印度尼西亚 巴厘岛 吉安雅县 塔曼西林<br>
            Jl. Kelusu, Pejeng Kelod, Bali 80552
          </a>
        </p>
      </div>

      <div class="pala-contact__item pala-contact__wechat">
        <h4 class="pala-contact__label">电话 / 微信</h4>
        <p>
          <span class="pala-contact__qr">
            <img src="<?php echo TPR_BASE; ?>/assets/images/wechat-qr.jpg" alt="微信二维码" loading="lazy">
          </span>
          <a href="tel:+628113888565">+62 811-3888-565</a>
          <span class="pala-contact__sub">微信号：Pala Ubud</span>
        </p>
      </div>

      <div class="pala-contact__item">
        <h4 class="pala-contact__label">邮箱</h4>
        <p>
          <a href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%B8%95%E6%8B%89%E4%B9%8C%E5%B8%83%E5%BA%A6%E5%81%87%E6%9D%91&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E4%BB%A5%E4%B8%8B%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E6%84%8F%E5%90%91%E5%88%AB%E5%A2%85%EF%BC%9A%0D%0A%E5%BE%AE%E4%BF%A1%E5%8F%B7%20%2F%20%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A%E5%85%B6%E4%BB%96%E9%9C%80%E6%B1%82%EF%BC%9A%0D%0A">enquiry@thepalaubudresort.com</a>
        </p>
      </div>

      <div class="pala-contact__item">
        <h4 class="pala-contact__label">度假村简介</h4>
        <p>
          <!-- Nama file jangan pakai kurung penuh 【】 — akan jadi %E3%80%90
               di URL dan sering bermasalah di browser dalam aplikasi WeChat. -->
          <a href="<?php echo TPR_BASE; ?>/assets/docs/pala-ubud-factsheet-cn.pdf" target="_blank" rel="noopener">
            下载 PDF
          </a>
          <span class="pala-contact__sub">约 2 MB</span>
        </p>
      </div>

    </div>
  </div>
</section>
<!-- =============== END SECTION 2: SAMBUTAN + KONTAK =============== -->

<section class="pala-villas" aria-labelledby="pala-villas-title">

  <!-- Foto latar. Kompres dulu: WebP, lebar 2000px, target < 250 KB -->
  <img class="pala-villas__bg" src="<?php echo TPR_BASE; ?>/assets/home/images/banner-villa.jpeg" alt="Banner Villa" aria-hidden="true">

  <div class="pala-villas__inner">

    <p class="pala-villas__eyebrow">我们的别墅</p>
    <h2 class="pala-villas__title" id="pala-villas-title">静谧之乐</h2>

    <div class="pala-villas__grid">
      <div class="pala-villas__meta">
        六栋私人别墅<br>坐落于乌布圣河帕克里桑之上
      </div>

      <div class="pala-villas__content">
        <p>
          不受打扰地思考，不慌不忙地行动，与所爱之人相伴，温柔地回到自己。
          我们相信，最有意义的奢华并非环绕你的事物，而是它让你感受到什么。
        </p>
        <a href="<?php echo tpr_url('villas'); ?>" class="pala-villas__cta">了解更多</a>
      </div>
    </div>

    <!-- ---------------- Slider ---------------- -->
    <div class="pala-villas__slider">

      <button class="pala-villas__nav pala-villas__nav--prev" type="button" aria-label="上一张">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path d="M15 5l-7 7 7 7"></path>
        </svg>
      </button>

      <button class="pala-villas__nav pala-villas__nav--next" type="button" aria-label="下一张">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path d="M9 5l7 7-7 7"></path>
        </svg>
      </button>

      <div class="pala-villas__track" tabindex="0" role="group" aria-label="别墅列表">

        <div class="pala-villas__slide">
          <a href="<?php echo tpr_url('villas/catur'); ?>" class="pala-card">
            <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-villa-catur.webp" alt="卡图尔别墅" width="600" height="460" loading="lazy" decoding="async">
            <div class="pala-card__overlay">
              <div>
                <div class="pala-card__type">蜜月别墅</div>
                <h3 class="pala-card__name">卡图尔</h3>
                <p class="pala-card__tagline">二人的私密之所</p>
                <p class="pala-card__specs">1 卧室 · 272 m² · 2 位宾客 · 2 层</p>
              </div>
            </div>
          </a>
        </div>

         <div class="pala-villas__slide">
          <a href="<?php echo tpr_url('villas/catur'); ?>" class="pala-card">
            <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-villa-batur.jpg" alt="卡图尔别墅" width="600" height="460" loading="lazy" decoding="async">
            <div class="pala-card__overlay">
              <div>
                <div class="pala-card__type">蜜月别墅</div>
                <h3 class="pala-card__name">卡图尔</h3>
                <p class="pala-card__tagline">二人的私密之所</p>
                <p class="pala-card__specs">2 卧室 · 424 m² · 4 位宾客 · 3 层</p>
              </div>
            </div>
          </a>
        </div>


        <div class="pala-villas__slide">
          <a href="<?php echo tpr_url('villas/seraya-a'); ?>" class="pala-card">
            <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-villa-seraya-a.webp" alt="塞拉雅 A 别墅" width="600" height="460" loading="lazy" decoding="async">
            <div class="pala-card__overlay">
              <div>
                <div class="pala-card__type">无边泳池别墅</div>
                <h3 class="pala-card__name">塞拉雅 A</h3>
                <p class="pala-card__tagline">静水，无尽远景</p>
                <p class="pala-card__specs">2 卧室 · 284 m² · 4 位宾客 · 1 层</p>
              </div>
            </div>
          </a>
        </div>

        <div class="pala-villas__slide">
          <a href="<?php echo tpr_url('villas/seraya-b'); ?>" class="pala-card">
            <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-villa-seraya-b.webp" alt="塞拉雅 B 别墅" width="600" height="460" loading="lazy" decoding="async">
            <div class="pala-card__overlay">
              <div>
                <div class="pala-card__type">疗愈别墅</div>
                <h3 class="pala-card__name">塞拉雅 B</h3>
                <p class="pala-card__tagline">森林温柔地将你留住</p>
                <p class="pala-card__specs">1 卧室 + 私人水疗室 · 300 m² · 2–4 位宾客 · 1 层</p>
              </div>
            </div>
          </a>
        </div>

        <div class="pala-villas__slide">
          <a href="<?php echo tpr_url('villas/sanghyang'); ?>" class="pala-card">
            <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-villa-sanghyang.webp" alt="桑香别墅" width="600" height="460" loading="lazy" decoding="async">
            <div class="pala-card__overlay">
              <div>
                <div class="pala-card__type">家庭别墅</div>
                <h3 class="pala-card__name">桑香</h3>
                <p class="pala-card__tagline">不只是别墅，而是家</p>
                <p class="pala-card__specs">4 卧室 · 1393 m² · 8 位宾客 · 3 层</p>
              </div>
            </div>
          </a>
        </div>

        <div class="pala-villas__slide">
          <a href="<?php echo tpr_url('villas/agung'); ?>" class="pala-card">
            <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-villa-agung.webp" alt="阿贡别墅" width="600" height="460" loading="lazy" decoding="async">
            <div class="pala-card__overlay">
              <div>
                <div class="pala-card__type">尊尚别墅</div>
                <h3 class="pala-card__name">阿贡</h3>
                <p class="pala-card__tagline">盛大庆典，私密举行</p>
                <p class="pala-card__specs">5 卧室 · 2092 m² · 10 位宾客 · 2 层</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>

  </div>
</section>

<section class="pala-events" aria-labelledby="pala-events-title">
  <div class="pala-events__grid">

    <!-- KIRI: kolase foto -->
    <div class="pala-events__photos">
      <div class="pala-events__photo pala-events__photo--1">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-event-hura.webp" alt="别墅中的婚礼布置" width="480" height="640" loading="lazy" decoding="async">
      </div>
      <div class="pala-events__photo pala-events__photo--2">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-event-agung.jpg" alt="户外晚宴长桌" width="440" height="560" loading="lazy" decoding="async">
      </div>
      <div class="pala-events__photo pala-events__photo--3">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-event-hura1.webp" alt="庆典细节" width="360" height="440" loading="lazy" decoding="async">
      </div>
      <div class="pala-events__photo pala-events__photo--4">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-event-sanghyang.webp" alt="家庭聚会" width="560" height="360" loading="lazy" decoding="async">
      </div>
      <div class="pala-events__photo pala-events__photo--5">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-event-river.jpg" alt="企业团队活动" width="560" height="360" loading="lazy" decoding="async">
      </div>
    </div>

    <!-- KANAN: teks -->
    <div class="pala-events__text">

      <p class="pala-events__eyebrow">活动与庆典</p>

      <h2 class="pala-events__title" id="pala-events-title">值得相聚的日子</h2>

      <div class="pala-events__meta">
        <p>私密 · 不受打扰 · 用心相待</p>
      </div>

      <p class="pala-events__body">
        一座完整包场的私人庄园：空间开阔，服务团队精简而周到，
        大门在您的宾客身后静静合上，只留下属于你们的时光。
      </p>

      <div class="pala-events__links">
        <a href="<?php echo tpr_url('weddings'); ?>">婚礼</a>
        <a href="<?php echo tpr_url('weddings'); ?>">家庭聚会</a>
        <a href="<?php echo tpr_url('weddings'); ?>">静修与疗愈</a>
        <a href="<?php echo tpr_url('weddings'); ?>">企业活动</a>
      </div>

      <a href="<?php echo tpr_url('weddings'); ?>" class="pala-events__cta">筹划您的活动</a>

    </div>

  </div>
</section>

<section class="pala-hura" aria-labelledby="pala-hura-title">

  <!-- Ganti dengan foto Hura, WebP, lebar 2000px, target < 250 KB -->
  <img class="pala-hura__bg" src="<?php echo TPR_BASE; ?>/assets/home/images/hura-banner-image.jpeg" alt="" aria-hidden="true">

  <div class="pala-hura__content">
    <div class="pala-hura__inner">

      <p class="pala-hura__eyebrow">Hura 餐厅</p>

      <h2 class="pala-hura__title" id="pala-hura-title">
        家常滋味
        <span>温暖人心</span>
      </h2>

      <div class="pala-hura__divider"></div>

      <p class="pala-hura__subtitle">本地种植 · 简单烹调 · 慢慢品尝</p>

      <p class="pala-hura__text">
        Hura 不是需要盛装赴约的餐厅——它更像是一个你会不自觉地每天清晨、每个傍晚都想回来的地方。
        食物本就如此：它记录着人们从何而来、这片土地给予了什么，以及一种文化如何选择滋养自己。
        这里的烹调不慌不忙，也不刻意雕琢，因为我们相信食物不是一场活动，而是一种节奏——
        日常生活里安静的脉搏。它比任何言语都更能告诉你：你身处一个真实的地方，而且，欢迎你留下。
      </p>

      <a href="<?php echo tpr_url('dining'); ?>" class="pala-hura__cta">预订餐位</a>

    </div>
  </div>
</section>
<!-- =============== END SECTION 5: HURA RESTAURANT =============== -->

<!-- ================= SECTION 6: PENGALAMAN DI LUAR UBUD =================
     Perbedaan dari versi Inggris:
     - TIDAK ada <link> ke fonts.googleapis.com
     - Foto TIDAK lagi memakai CSS background-image, tapi <img> asli
       supaya loading="lazy" bisa bekerja.
     - Semua foto di-host lokal, WebP.
     - Animasi memakai IntersectionObserver (lihat catatan di bawah),
       bukan animation-on-load yang selesai sebelum tamu sampai ke sini.
     ======================================================================= -->
<section class="pala-beyond" aria-labelledby="pala-beyond-title">
  <div class="pala-beyond__grid">

    <!-- KIRI: teks -->
    <div class="pala-beyond__text">

      <p class="pala-beyond__eyebrow">体验</p>

      <h2 class="pala-beyond__title" id="pala-beyond-title">
        <span class="pala-beyond__line pala-beyond__line--1">乌布之外</span>
        <span class="pala-beyond__line pala-beyond__line--2">往北</span>
        <span class="pala-beyond__line pala-beyond__line--3">往东</span>
      </h2>

      <div class="pala-beyond__rule"></div>

      <p class="pala-beyond__subtitle">被时光留住的巴厘岛</p>

      <p class="pala-beyond__body">
        巴厘岛的北部与东部有着另一种节奏：庙宇仍被细心照料，仪式仍在举行，
        地貌也依旧保留着真正古老的模样。巴厘文化在这里成形，也在这里静静延续。
      </p>

      <a href="<?php echo tpr_url('experiences'); ?>" class="pala-beyond__cta">探索体验</a>

    </div>

    <!-- KANAN: galeri -->
    <div class="pala-beyond__gallery">

      <figure class="pala-beyond__card">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-experience-1.jpg" alt="佩内格利普兰传统村落"
             width="800" height="600" loading="lazy" decoding="async">
        <figcaption class="pala-beyond__info">
          <span class="pala-beyond__region">巴厘岛北部</span>
          <span class="pala-beyond__place">佩内格利普兰村</span>
        </figcaption>
      </figure>

      <figure class="pala-beyond__card">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-experience-2.jpg" alt="古农卡威石窟寺"
             width="800" height="600" loading="lazy" decoding="async">
        <figcaption class="pala-beyond__info">
          <span class="pala-beyond__region">文化古迹</span>
          <span class="pala-beyond__place">古农卡威 · 塔曼西林</span>
        </figcaption>
      </figure>

      <figure class="pala-beyond__card">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-expereience-3.jpg" alt="巴图尔火山日出"
             width="800" height="600" loading="lazy" decoding="async">
        <figcaption class="pala-beyond__info">
          <span class="pala-beyond__region">日出</span>
          <span class="pala-beyond__place">巴图尔火山日出徒步</span>
        </figcaption>
      </figure>

      <figure class="pala-beyond__card">
        <img src="<?php echo TPR_BASE; ?>/assets/home/images/card-experience-4.jpg" alt="蒂尔塔冈加水宫"
             width="800" height="600" loading="lazy" decoding="async">
        <figcaption class="pala-beyond__info">
          <span class="pala-beyond__region">巴厘岛东部</span>
          <span class="pala-beyond__place">蒂尔塔冈加水宫</span>
        </figcaption>
      </figure>

    </div>

  </div>
</section>
<!-- =============== END SECTION 6: PENGALAMAN DI LUAR UBUD =============== -->
<section class="pala-reviews" aria-labelledby="pala-reviews-title">
  <div class="pala-reviews__inner">

    <div class="pala-reviews__head">
      <p class="pala-reviews__eyebrow">Words From Our Guests</p>
      <h2 class="pala-reviews__title" id="pala-reviews-title">宾客之声</h2>
    </div>

    <div class="pala-reviews__slider">

      <button class="pala-reviews__nav pala-reviews__nav--prev" type="button" aria-label="上一条">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path d="M15 5l-7 7 7 7"></path>
        </svg>
      </button>

      <button class="pala-reviews__nav pala-reviews__nav--next" type="button" aria-label="下一条">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
          <path d="M9 5l7 7-7 7"></path>
        </svg>
      </button>

      <div class="pala-reviews__track" tabindex="0" role="group" aria-label="宾客评价">

        <div class="pala-reviews__slide">
          <article class="pala-reviews__card">
            <div class="pala-reviews__profile">
              <span class="pala-reviews__avatar" aria-hidden="true">K</span>
              <span>
                <span class="pala-reviews__name">Kristin Atzemian</span>
                <span class="pala-reviews__time">一年前</span>
              </span>
            </div>
            <p class="pala-reviews__stars" aria-label="5 分，满分 5 分">★★★★★</p>
            <div class="pala-reviews__text">
              <p>丛林中的美丽度假村！体验非常棒，工作人员友善又亲切。这是我们的蜜月旅行，他们把每一个细节都安排得特别用心、令人难忘。别墅干净、私密，从清晨到夜晚，丛林的氛围都像有魔力一般。整段入住都既宁静又奢华。</p>
            </div>
            <button class="pala-reviews__more" type="button" hidden>展开全文</button>
          </article>
        </div>

        <div class="pala-reviews__slide">
          <article class="pala-reviews__card">
            <div class="pala-reviews__profile">
              <span class="pala-reviews__avatar" aria-hidden="true">A</span>
              <span>
                <span class="pala-reviews__name">Andrew Miller</span>
                <span class="pala-reviews__time">两个月前</span>
              </span>
            </div>
            <p class="pala-reviews__stars" aria-label="5 分，满分 5 分">★★★★★</p>
            <div class="pala-reviews__text">
              <p>氛围绝佳，设计精美，环境非常安静，是放松身心、亲近自然的完美之地。别墅干净私密，从清晨到夜晚，丛林的景致都令人着迷。工作人员的服务超出预期，整段入住都让人感到宁静而奢华。我们已经开始计划下一次再来了。</p>
            </div>
            <button class="pala-reviews__more" type="button" hidden>展开全文</button>
          </article>
        </div>

        <div class="pala-reviews__slide">
          <article class="pala-reviews__card">
            <div class="pala-reviews__profile">
              <span class="pala-reviews__avatar" aria-hidden="true">S</span>
              <span>
                <span class="pala-reviews__name">Sarah Johnson</span>
                <span class="pala-reviews__time">三周前</span>
              </span>
            </div>
            <p class="pala-reviews__stars" aria-label="5 分，满分 5 分">★★★★★</p>
            <div class="pala-reviews__text">
              <p>藏在丛林里的美丽度假村，体验令人惊喜，工作人员非常热情。这是我们的蜜月之旅，他们把一切都安排得既特别又难忘。别墅整洁而私密，丛林的氛围从早到晚都很迷人。</p>
            </div>
            <button class="pala-reviews__more" type="button" hidden>展开全文</button>
          </article>
        </div>

        <div class="pala-reviews__slide">
          <article class="pala-reviews__card">
            <div class="pala-reviews__profile">
              <span class="pala-reviews__avatar" aria-hidden="true">M</span>
              <span>
                <span class="pala-reviews__name">Michael Brown</span>
                <span class="pala-reviews__time">两周前</span>
              </span>
            </div>
            <p class="pala-reviews__stars" aria-label="5 分，满分 5 分">★★★★★</p>
            <div class="pala-reviews__text">
              <p>度假村美得令人惊叹！俯瞰丛林的泳池尤其震撼。工作人员为了让我们住得舒心，付出了远超预期的努力。一定会再来！</p>
            </div>
            <button class="pala-reviews__more" type="button" hidden>展开全文</button>
          </article>
        </div>

        <div class="pala-reviews__slide">
          <article class="pala-reviews__card">
            <div class="pala-reviews__profile">
              <span class="pala-reviews__avatar" aria-hidden="true">E</span>
              <span>
                <span class="pala-reviews__name">Emily Davis</span>
                <span class="pala-reviews__time">一个月前</span>
              </span>
            </div>
            <p class="pala-reviews__stars" aria-label="5 分，满分 5 分">★★★★★</p>
            <div class="pala-reviews__text">
              <p>丛林深处的一处秘境。水疗体验非常出色，餐食也很美味。如果你想找一个宁静的度假地，强烈推荐这里。工作人员的用心让整趟旅程更加完美。</p>
            </div>
            <button class="pala-reviews__more" type="button" hidden>展开全文</button>
          </article>
        </div>

        <div class="pala-reviews__slide">
          <article class="pala-reviews__card">
            <div class="pala-reviews__profile">
              <span class="pala-reviews__avatar" aria-hidden="true">D</span>
              <span>
                <span class="pala-reviews__name">David Wilson</span>
                <span class="pala-reviews__time">三个月前</span>
              </span>
            </div>
            <p class="pala-reviews__stars" aria-label="4 分，满分 5 分">★★★★☆</p>
            <div class="pala-reviews__text">
              <p>景观非常好，房间宽敞干净。唯一的小问题是部分区域的 Wi-Fi 信号偏弱，但整体来说依然是一次很棒的体验。工作人员的服务无可挑剔。</p>
            </div>
            <button class="pala-reviews__more" type="button" hidden>展开全文</button>
          </article>
        </div>

        <div class="pala-reviews__slide">
          <article class="pala-reviews__card">
            <div class="pala-reviews__profile">
              <span class="pala-reviews__avatar" aria-hidden="true">J</span>
              <span>
                <span class="pala-reviews__name">Jessica Martinez</span>
                <span class="pala-reviews__time">一周前</span>
              </span>
            </div>
            <p class="pala-reviews__stars" aria-label="5 分，满分 5 分">★★★★★</p>
            <div class="pala-reviews__text">
              <p>这是我住过最好的一家酒店！从入住到退房，一切都无可挑剔。无边泳池、餐厅、服务——全都值五星。工作人员为了让我们住得舒心付出了很多，一定会再来。</p>
            </div>
            <button class="pala-reviews__more" type="button" hidden>展开全文</button>
          </article>
        </div>

      </div>
    </div>

    <p class="pala-reviews__note">评价来自入住宾客的真实反馈，原文为英文，中文为翻译版本。</p>

  </div>
</section>
<!-- =============== END SECTION 7: 宾客之声 =============== -->

  <!-- FOOTER -->
 <?php require TPR_ROOT . '/footer.php'; ?>

 
<script src="<?php echo tpr_asset('js/script.js'); ?>"></script>
</body>
</html>