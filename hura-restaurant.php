<?php $tpr_active = 'hura'; ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hura 餐厅 | 帕拉乌布度假村 · 巴厘岛乌布</title>
  <meta name="description" content="Hura 餐厅位于帕拉乌布度假村，本地种植、简单烹调、慢慢品尝。可整体包场，用于婚礼与私人晚宴。">

  <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">
  <link rel="stylesheet" href="css/page-hura.css">

  <!-- Foto hero adalah elemen terbesar di layar pertama (LCP) -->
  <link rel="preload" as="image" href="assets/hura-page/hura-hero.jpg" fetchpriority="high">
</head>

<body>

  <?php include 'header.php'; ?>


  <!-- ==================== 1. HERO ==================== -->
  <section class="pala-hr-hero" aria-labelledby="pala-hr-hero-title" data-hero-parallax>

    <img class="pala-hr-hero__bg"
         src="assets/hura-page/hura-hero.jpg"
         alt=""
         aria-hidden="true"
         fetchpriority="high"
         decoding="async">

    <div class="pala-hr-hero__content">
      <p class="pala-hr-hero__eyebrow">The Hura Restaurant</p>

      <h1 class="pala-hr-hero__title">
        家常滋味<br>
        温暖人心
      </h1>

      <p class="pala-hr-hero__subtitle">
        本地种植 · 简单烹调 · 慢慢品尝
      </p>
    </div>

  </section>
  <!-- ================== END 1. HERO ================== -->

<section class="pala-hp" aria-labelledby="pala-hp-title">
  <div class="pala-hp__inner">

    <h2 class="pala-hp__title" id="pala-hp-title">Hura 餐厅</h2>

    <div class="pala-hp__divider" aria-hidden="true"></div>

    <p class="pala-hp__body">
      Hura 餐厅是帕拉乌布的中心所在，专注于精致的家常料理——
      既讲究滋味，也保留那份熟悉感。半开放式的空间设计营造出放松的氛围，
      让您在葱郁的丛林景致之中，慢慢品尝令人满足的家常菜肴。
      在乌布的山丘之间，这份菜单只为纯粹的享受与彻底的放松而设。
    </p>

  </div>
</section>
<!-- =========== END SECTION 2: Hura 餐厅 =========== -->
<!-- ============= SECTION 3: 预订餐位 (RESERVE YOUR TABLE) =============
     PERBEDAAN PENTING dari versi Inggris:

     Kartu WhatsApp DIHAPUS — WhatsApp diblokir total di Tiongkok.
     Tautannya tidak akan terbuka, dan logo hijaunya justru memberi
     kesan situs ini tidak dibuat untuk pengunjung Tiongkok.
     Diganti kartu 邮件 (email).

     Kartu "Reservation" yang di versi asli tidak jelas menuju ke mana
     kini membuka email dengan formulir pemesanan yang sudah terisi.

     PERIKSA NOMOR TELEPON: +62 811-3880-5108 di section ini berbeda
     dengan +62 811-3888-565 yang dipakai di footer dan halaman lain.
     ==================================================================== -->
<section class="pala-hres" aria-labelledby="pala-hres-title">
  <div class="pala-hres__inner">

    <h2 class="pala-hres__title" id="pala-hres-title">预订餐位</h2>

    <p class="pala-hres__desc">
      Hura 餐厅是别墅群的中心所在，选用新鲜的本地食材，
      提供传统与国际风味兼备的菜单，带来独特的用餐体验。
    </p>

    <div class="pala-hres__grid">

      <!-- 电话 -->
      <a class="pala-hres__card" href="tel:+6281138805108">
        <span class="pala-hres__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
               stroke-linecap="round" stroke-linejoin="round">
            <path d="M6.6 3.5 9 3.9l1 4.1-2.1 1.5a12 12 0 0 0 6.6 6.6l1.5-2.1 4.1 1 .4 2.4a2 2 0 0 1-2 2.3A17 17 0 0 1 4.3 5.5a2 2 0 0 1 2.3-2z"/>
          </svg>
        </span>
        <span class="pala-hres__text">
          <span class="pala-hres__label">电话</span>
          <span class="pala-hres__value">+62 811-3880-5108</span>
        </span>
      </a>

      <!-- 邮件 -->
      <a class="pala-hres__card" href="mailto:enquiry@thepalaubudresort.com">
        <span class="pala-hres__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
               stroke-linecap="round" stroke-linejoin="round">
            <rect x="2.5" y="5" width="19" height="14" rx="2"/>
            <path d="m3 7 9 6 9-6"/>
          </svg>
        </span>
        <span class="pala-hres__text">
          <span class="pala-hres__label">邮件</span>
          <span class="pala-hres__value">enquiry@thepalaubudresort.com</span>
        </span>
      </a>

      <!-- 在线预订 -->
      <a class="pala-hres__card pala-hres__card--single"
         href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A4%90%E4%BD%8D%E9%A2%84%E8%AE%A2%20%C2%B7%20Hura%20%E9%A4%90%E5%8E%85&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E9%A2%84%E8%AE%A2%20Hura%20%E9%A4%90%E5%8E%85%E7%9A%84%E9%A4%90%E4%BD%8D%EF%BC%9A%0D%0A%0D%0A%E7%94%A8%E9%A4%90%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E7%94%A8%E9%A4%90%E6%97%B6%E9%97%B4%EF%BC%9A%0D%0A%E7%94%A8%E9%A4%90%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A%E9%A5%AE%E9%A3%9F%E7%A6%81%E5%BF%8C%E6%88%96%E5%85%B6%E4%BB%96%E9%9C%80%E6%B1%82%EF%BC%9A%0D%0A">
        <span class="pala-hres__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
               stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="4" width="16" height="17" rx="2"/>
            <path d="M4 9h16M9 2v4M15 2v4"/>
            <path d="m9.5 14.5 1.8 1.8 3.4-3.6"/>
          </svg>
        </span>
        <span class="pala-hres__text">
          <span class="pala-hres__label">在线预订</span>
        </span>
      </a>

      <!-- 营业时间 — bukan tautan, jadi memakai <div> -->
      <div class="pala-hres__card">
        <span class="pala-hres__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
               stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5.4l3.4 2"/>
          </svg>
        </span>
        <span class="pala-hres__text">
          <span class="pala-hres__label">营业时间</span>
          <span class="pala-hres__value">07:00 – 22:00</span>
        </span>
      </div>

    </div>
  </div>
</section>
<!-- =========== END SECTION 3: 预订餐位 =========== -->

<section class="pala-menu"
         aria-labelledby="pala-menu-title"
         tabindex="0"
         data-base="assets/hura-page/menu/"
         data-pages="1.webp, 2.webp, 3.webp, 4.webp, 5.webp,
                     6.webp, 7.webp, 8.webp, 9.webp, 10.webp,
                     11.webp, 12.webp, 13.webp, 14.webp, 15.webp, 16.webp">

  <div class="pala-menu__head">
    <p class="pala-menu__eyebrow">Our Menu</p>
    <h2 class="pala-menu__title" id="pala-menu-title">菜单</h2>
  </div>

  <div class="pala-menu__scene">
    <div class="pala-menu__book at-start" data-menu-book>
      <div class="pala-menu__shadow" aria-hidden="true"></div>
    </div>
  </div>

  <div class="pala-menu__controls">
    <button class="pala-menu__btn" type="button" data-menu-prev aria-label="上一页">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M15 5l-7 7 7 7"/>
      </svg>
    </button>

    <span class="pala-menu__info" data-menu-info aria-live="polite">封面</span>

    <button class="pala-menu__btn" type="button" data-menu-next aria-label="下一页">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M9 5l7 7-7 7"/>
      </svg>
    </button>
  </div>

  <p class="pala-menu__note">点击书页或使用箭头翻页</p>

</section>
<!-- =========== END SECTION 4: 菜单 =========== -->

<section class="pala-gal" aria-labelledby="pala-gal-title">
  <div class="pala-gal__inner">

    <div class="pala-gal__head">
      <p class="pala-gal__eyebrow">Gallery</p>
      <h2 class="pala-gal__title" id="pala-gal-title">图片集</h2>
    </div>

    <div class="pala-gal__grid">

      <button class="pala-gal__item pala-gal__item--large" type="button"
              data-full="assets/hura-page/gallery/1.webp" aria-label="查看大图：餐厅全景">
        <img src="assets/hura-page/gallery/1.webp" alt="Hura 餐厅全景"
             width="900" height="900" loading="lazy" decoding="async">
      </button>

      <button class="pala-gal__item pala-gal__item--tall" type="button"
              data-full="assets/hura-page/gallery/2.webp" aria-label="查看大图：脆皮鸭">
        <img src="assets/hura-page/gallery/2.webp" alt="脆皮鸭"
             width="600" height="800" loading="lazy" decoding="async">
      </button>

      <button class="pala-gal__item pala-gal__item--half" type="button"
              data-full="assets/hura-page/gallery/3.webp" aria-label="查看大图：用餐区">
        <img src="assets/hura-page/gallery/3.webp" alt="用餐区"
             width="600" height="900" loading="lazy" decoding="async">
      </button>

      <button class="pala-gal__item pala-gal__item--tall" type="button"
              data-full="assets/hura-page/gallery/6.webp" aria-label="查看大图：活动场地">
        <img src="assets/hura-page/gallery/6.webp" alt="活动场地"
             width="600" height="800" loading="lazy" decoding="async">
      </button>

      <button class="pala-gal__item pala-gal__item--tall" type="button"
              data-full="assets/hura-page/gallery/5.webp" aria-label="查看大图：晚餐布置">
        <img src="assets/hura-page/gallery/5.webp" alt="晚餐布置"
             width="600" height="800" loading="lazy" decoding="async">
      </button>

        <button class="pala-gal__item pala-gal__item--tall" type="button"
              data-full="assets/hura-page/gallery/4.webp" aria-label="查看大图：餐厅外观">
        <img src="assets/hura-page/gallery/4.webp" alt="Hura 餐厅外观"
             width="600" height="800" loading="lazy" decoding="async">
      </button>

      <button class="pala-gal__item pala-gal__item--tall" type="button"
              data-full="assets/hura-page/gallery/7.webp" aria-label="查看大图：酒架">
        <img src="assets/hura-page/gallery/7.webp" alt="酒架"
             width="600" height="800" loading="lazy" decoding="async">
      </button>

      <button class="pala-gal__item pala-gal__item--tall" type="button"
              data-full="assets/hura-page/gallery/8.webp" aria-label="查看大图：菜品">
        <img src="assets/hura-page/gallery/8.webp" alt="菜品"
             width="600" height="800" loading="lazy" decoding="async">
      </button>

    </div>
  </div>

  <!-- ---------- Lightbox ---------- -->
  <div class="pala-gal__box" data-gal-box role="dialog" aria-modal="true"
       aria-label="图片查看" aria-hidden="true">

    <button class="pala-gal__btn pala-gal__btn--close" type="button" data-gal-close aria-label="关闭">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" aria-hidden="true">
        <path d="M6 6l12 12M18 6L6 18"/>
      </svg>
    </button>

    <button class="pala-gal__btn pala-gal__btn--prev" type="button" data-gal-prev aria-label="上一张">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M15 5l-7 7 7 7"/>
      </svg>
    </button>

    <img data-gal-img alt="">

    <button class="pala-gal__btn pala-gal__btn--next" type="button" data-gal-next aria-label="下一张">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M9 5l7 7-7 7"/>
      </svg>
    </button>

    <p class="pala-gal__counter" data-gal-counter aria-live="polite">1 / 8</p>

  </div>
</section>
<!-- =========== END SECTION 5: 图片集 =========== -->

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

  <!-- Section berikutnya ditulis di sini -->

  <!-- ============= SECTION 6: 常见问题 (FAQ) =============
     Isi diambil dari FAQ halaman Hura versi Inggris.

     Memakai <details>/<summary> bawaan HTML — tanpa JavaScript.
     Isinya tetap ada di HTML sehingga bisa dibaca Baiduspider.

     Kelas .pala-vp-faq- dipakai ulang dari halaman villas —
     tampilannya identik, jadi tidak perlu CSS baru. Pastikan
     bagian FAQ di page-villas.css sudah ikut masuk style.css.

     CATATAN: kalimat pengantar di versi Inggris berbunyi
     "Everything you need to know about exploring Bali from
     The Pala Ubud" — itu sisa dari halaman Experiences dan tidak
     nyambung dengan restoran. Diganti kalimat yang sesuai.
     ======================================================= -->
<section class="pala-vp-faq" aria-labelledby="pala-hfaq-title">
  <div class="pala-vp-faq__inner">

    <div class="pala-vp-faq__head">
      <p class="pala-vp-faq__eyebrow">Frequently Asked Questions</p>
      <h2 class="pala-vp-faq__title" id="pala-hfaq-title">常见问题</h2>
    </div>

    <details class="pala-vp-faq__item">
      <summary class="pala-vp-faq__q">餐厅的营业时间是几点？</summary>
      <div class="pala-vp-faq__a">
        <p>餐厅每日营业，时间为 07:00 至 22:00，周一至周日全周无休。</p>
      </div>
    </details>

    <details class="pala-vp-faq__item">
      <summary class="pala-vp-faq__q">非住店客人可以前来用餐吗？</summary>
      <div class="pala-vp-faq__a">
        <p>可以，我们同样欢迎非住店的客人。<br>
           建议提前预订，以确保有位。</p>
      </div>
    </details>

    <details class="pala-vp-faq__item">
      <summary class="pala-vp-faq__q">住店客人可以安排私人用餐或特别布置吗？</summary>
      <div class="pala-vp-faq__a">
        <p>可以。私人用餐、浪漫布置及其他特别安排均可为住店客人提供，
           请提前告知，以便我们从容准备。</p>
      </div>
    </details>

    <details class="pala-vp-faq__item">
      <summary class="pala-vp-faq__q">团体用餐可以定制菜单或配合饮食需求吗？</summary>
      <div class="pala-vp-faq__a">
        <p>可以。团体用餐的菜单可按需定制，
           素食、清真、过敏及其他饮食需求也可提前安排配合。</p>
      </div>
    </details>

    <details class="pala-vp-faq__item">
      <summary class="pala-vp-faq__q">餐厅适合举办庆祝活动吗？</summary>
      <div class="pala-vp-faq__a">
        <p>适合。除用餐区之外，餐厅旁还设有一片小草坪与可食用植物花园，
           适合举办 1 至 50 位宾客的庆典与聚会。</p>
      </div>
    </details>

  </div>
</section>
<!-- =========== END SECTION 6: 常见问题 =========== -->

  <?php include 'footer.php'; ?>

 <script src="js/script.js?v=<?php echo filemtime('js/script.js'); ?>"></script>
</body>
</html>