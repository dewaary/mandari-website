
<?php $tpr_active = 'resort'; ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>度假村 | 帕拉乌布度假村 · 巴厘岛乌布</title>
  <meta name="description" content="帕拉乌布度假村坐落于巴厘岛乌布圣河帕克里桑之上，六栋私人别墅，由巴厘岛建筑师 Popo Danes 设计。">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/page-resort.css">

  <!-- Foto hero adalah elemen terbesar di layar pertama (LCP).
       Di-preload supaya unduhannya mulai bersamaan dengan CSS. -->
  <link rel="preload" as="image" href="assets/resort/images/hero.webp" fetchpriority="high">
</head>

<body>

  <?php include 'header.php'; ?>


  <!-- ==================== 1. HERO ==================== -->
  <section class="pala-rs-hero" aria-labelledby="pala-rs-hero-title">

    <img class="pala-rs-hero__bg"
         src="assets/home/images/resort-banner.webp"
         alt=""
         aria-hidden="true"
         fetchpriority="high"
         decoding="async">

    <div class="pala-rs-hero__content">
      <p class="pala-rs-hero__eyebrow">The Pala Ubud Resort</p>

      <h1 class="pala-rs-hero__title" id="pala-rs-hero-title">静谧之乐</h1>

      <p class="pala-rs-hero__subtitle">
        六栋私人别墅，坐落于圣河帕克里桑之上。<br>
        所需皆备，多余皆无。
      </p>
    </div>

  </section>
  <!-- ================== END 1. HERO ================== -->


<!-- ============= SECTION 2: 度假村平面图 (MASTERPLAN) =============
     Perbedaan dari versi Inggris:
     - TIDAK ada Google Fonts dan TIDAK ada Font Awesome dari cdnjs
       (keduanya diblokir / tidak andal di Tiongkok). Ikon diganti
       sprite SVG inline.
     - Emoji 🎉🌳🌾 diganti ikon SVG: emoji tampil sangat berbeda
       antar perangkat, dan pada Android Tiongkok sering terlihat kasar.
     - Blok data tooltip disatukan ke dalam section ini.
     ================================================================ -->
<section class="pala-mp" aria-labelledby="pala-mp-title">

  <!-- ---------- Sprite ikon ---------- -->
  <svg class="pala-vp-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <g id="mp-house" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 11 12 4l9 7"/><path d="M5 10v10h14V10"/><path d="M10 20v-6h4v6"/>
      </g>
      <g id="mp-event" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M19 5l-2 2M7 17l-2 2"/>
        <circle cx="12" cy="12" r="3.5"/>
      </g>
      <g id="mp-leaf" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 20C4 11 10 5 20 4c1 10-5 16-14 16z"/><path d="M4 20 14 10"/>
      </g>
      <g id="mp-rice" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 21V8"/><path d="M12 12c-3 0-4-2-4-4 3 0 4 2 4 4z"/>
        <path d="M12 12c3 0 4-2 4-4-3 0-4 2-4 4z"/><path d="M12 8c-2.5 0-3.5-1.8-3.5-3.5C11 4.5 12 6.3 12 8z"/>
        <path d="M12 8c2.5 0 3.5-1.8 3.5-3.5C13 4.5 12 6.3 12 8z"/>
      </g>
      <g id="mp-tree" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 3 6.5 11h3L5 17h14l-4.5-6h3z"/><path d="M12 17v4"/>
      </g>
    </defs>
  </svg>

  <!-- ---------- Judul ---------- -->
  <div class="pala-mp__head">
    <p class="pala-mp__eyebrow">Masterplan</p>
    <h2 class="pala-mp__title" id="pala-mp-title">度假村平面图</h2>
    <p class="pala-mp__lead">点击地图上的标记，查看别墅与活动场地的详细信息。</p>
  </div>

  <!-- ---------- Peta ---------- -->
  <div class="pala-mp__scroll">
    <div class="pala-mp__wrapper" data-mp-wrapper>

      <img class="pala-mp__image"
           src="assets/masterplan.png"
           alt="帕拉乌布度假村平面图"
           width="1300" height="900" loading="lazy" decoding="async">

      <!-- ===== 活动场地 ===== -->
      <button class="pala-mp__point pala-mp__point--event" type="button" style="top:36%; left:54%;"
        data-title="活动草坪" data-subtitle="阿贡别墅"
        data-content="#mp-data-lawn" data-link="#" data-button="">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-event"/></svg></span>
        <span class="pala-mp__label">活动草坪</span>
      </button>

      <button class="pala-mp__point pala-mp__point--event" type="button" style="top:52%; left:42%;"
        data-title="Hura 餐厅与草坪" data-subtitle="Hura 餐厅"
        data-content="#mp-data-hura" data-link="hura-restaurant.php" data-button="查看详情">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-event"/></svg></span>
        <span class="pala-mp__label">Hura 餐厅</span>
      </button>

      <button class="pala-mp__point pala-mp__point--event" type="button" style="top:70%; left:20%;"
        data-title="桑香别墅屋顶露台" data-subtitle="屋顶露台"
        data-content="#mp-data-rooftop" data-link="villa-sanghyang.php" data-button="查看详情">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-event"/></svg></span>
        <span class="pala-mp__label">屋顶露台</span>
      </button>

      <button class="pala-mp__point pala-mp__point--event" type="button" style="top:65%; left:80%;"
        data-title="河畔草坪" data-subtitle="Riverside Lawn"
        data-content="#mp-data-river" data-link="#" data-button="">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-event"/></svg></span>
        <span class="pala-mp__label">河畔草坪</span>
      </button>

      <!-- ===== 别墅 ===== -->
      <button class="pala-mp__point" type="button" style="top:30%; left:48%;"
        data-title="尊尚别墅" data-subtitle="阿贡 Agung"
        data-description="5 卧室 · 2,092 m² · 10 位宾客 · 2 层"
        data-link="villa-agung.php" data-button="了解更多">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-house"/></svg></span>
        <span class="pala-mp__label">阿贡别墅 · 5 卧</span>
      </button>

      <button class="pala-mp__point" type="button" style="top:30%; left:65%;"
        data-title="静谧别墅" data-subtitle="巴图尔 Batur"
        data-description="2 卧室 · 424 m² · 4 位宾客 · 3 层"
        data-link="villa-batur.php" data-button="了解更多">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-house"/></svg></span>
        <span class="pala-mp__label">巴图尔别墅 · 2 卧</span>
      </button>

      <button class="pala-mp__point" type="button" style="top:39%; left:65%;"
        data-title="蜜月别墅" data-subtitle="卡图尔 Catur"
        data-description="1 卧室 · 272 m² · 2 位宾客 · 2 层"
        data-link="villa-catur.php" data-button="了解更多">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-house"/></svg></span>
        <span class="pala-mp__label">卡图尔别墅 · 1 卧</span>
      </button>

      <button class="pala-mp__point" type="button" style="top:55%; left:65%;"
        data-title="无边泳池别墅" data-subtitle="塞拉雅 A · Seraya A"
        data-description="2 卧室 · 284 m² · 4 位宾客 · 1 层"
        data-link="villa-seraya-a.php" data-button="了解更多">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-house"/></svg></span>
        <span class="pala-mp__label">塞拉雅 A · 2 卧</span>
      </button>

      <button class="pala-mp__point" type="button" style="top:65%; left:65%;"
        data-title="疗愈别墅" data-subtitle="塞拉雅 B · Seraya B"
        data-description="1 卧室 + 私人水疗室 · 300 m² · 2–4 位宾客 · 1 层"
        data-link="villa-seraya-b.php" data-button="了解更多">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-house"/></svg></span>
        <span class="pala-mp__label">塞拉雅 B · 1 卧 + 水疗</span>
      </button>

      <button class="pala-mp__point" type="button" style="top:75%; left:30%;"
        data-title="家庭别墅" data-subtitle="桑香 Sanghyang"
        data-description="4 卧室 · 1,393 m² · 8 位宾客 · 3 层"
        data-link="villa-sanghyang.php" data-button="了解更多">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-house"/></svg></span>
        <span class="pala-mp__label">桑香别墅 · 4 卧</span>
      </button>

      <!-- ===== 自然景观 ===== -->
      <button class="pala-mp__point" type="button" style="top:56%; left:56%;"
        data-title="花园" data-subtitle="果园与香料园"
        data-description="一片被热带绿意环抱的开放式花园，适合小型聚会、日落时光，以及在自然氛围中举行的户外庆典。"
        data-link="" data-button="">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-leaf"/></svg></span>
        <span class="pala-mp__label">果园与香料园</span>
      </button>

      <button class="pala-mp__point" type="button" style="top:75%; left:48%;"
        data-title="稻田" data-subtitle="Rice Paddy"
        data-description="视野开阔的稻田景观，绿意绵延至天际，营造出宁静的巴厘氛围，适合放松、私人活动与亲近自然的体验。"
        data-link="" data-button="">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-rice"/></svg></span>
        <span class="pala-mp__label">稻田</span>
      </button>

      <button class="pala-mp__point" type="button" style="top:55%; left:93%;"
        data-title="森林" data-subtitle="冥想森林"
        data-description="一处隐于高大树木之间的森林静地，空气清新，是瑜伽疗愈、安静独处与沉浸自然的理想之所。"
        data-link="" data-button="">
        <span class="pala-mp__icon"><svg viewBox="0 0 24 24"><use href="#mp-tree"/></svg></span>
        <span class="pala-mp__label">冥想森林</span>
      </button>

      <!-- ===== Tooltip ===== -->
      <div class="pala-mp__tooltip" data-mp-tooltip role="dialog" aria-label="地点详情">
        <p class="pala-mp__tt-title" data-mp-title></p>
        <p class="pala-mp__tt-subtitle" data-mp-subtitle></p>
        <div class="pala-mp__tt-body" data-mp-body></div>
        <a class="pala-mp__tt-link" data-mp-link href="#" hidden>了解更多</a>
      </div>

    </div>
  </div>

  <p class="pala-mp__hint">← 左右滑动查看完整平面图 →</p>

  <!-- ---------- Data tooltip ----------
       display:none lewat CSS, tapi tetap ada di HTML sehingga
       angka luas dan kapasitasnya bisa diindeks Baidu. -->
  <div class="pala-mp__data" aria-hidden="true">

    <div id="mp-data-lawn">
      <div class="pala-mp__table">
        <div class="pala-mp__row"><span>面积</span><strong>360 m²</strong></div>
        <div class="pala-mp__row"><span>容纳人数</span><strong>200 人</strong></div>
        <div class="pala-mp__row"><span>尺寸</span><strong>20 × 18 m</strong></div>
      </div>
    </div>

    <div id="mp-data-rooftop">
      <div class="pala-mp__table">
        <div class="pala-mp__row"><span>面积</span><strong>340 m²</strong></div>
        <div class="pala-mp__row"><span>容纳人数</span><strong>65 人</strong></div>
        <div class="pala-mp__row"><span>尺寸</span><strong>12 × 4.5 m</strong></div>
      </div>
    </div>

    <div id="mp-data-hura">
      <div class="pala-mp__table">
        <div class="pala-mp__row"><span>面积</span><strong>240 m²</strong></div>
        <div class="pala-mp__row"><span>尺寸</span><strong>24 × 10 m</strong></div>
        <div class="pala-mp__row"><span>适合</span><strong>婚礼与活动</strong></div>
      </div>
    </div>

    <div id="mp-data-river">
      <div class="pala-mp__table">
        <div class="pala-mp__row"><span>面积</span><strong>270 m²</strong></div>
        <div class="pala-mp__row"><span>容纳人数</span><strong>60 人</strong></div>
        <div class="pala-mp__row"><span>尺寸</span><strong>21 × 13 m</strong></div>
      </div>
    </div>

  </div>

</section>
<!-- =========== END SECTION 2: 度假村平面图 =========== -->


<!-- ============= SECTION 3: 别墅内的服务 (WITHIN YOUR VILLA) =============
     Perbedaan dari versi Inggris:
     - TIDAK ada <link> ke fonts.googleapis.com
     - Foto memakai <img> (bukan CSS background-image) supaya
       loading="lazy" bisa bekerja.
     - Ditambah judul Mandarin: eyebrow Latin kecil saja kurang kuat
       sebagai penanda section bagi pembaca Tiongkok.
     - Di mobile, foto muncul di ATAS teks (diatur lewat CSS order).
     ======================================================================= -->
<section class="pala-wv" aria-labelledby="pala-wv-title">

  <div class="pala-wv__content">
    <p class="pala-wv__eyebrow">Within Your Villa</p>
    <h2 class="pala-wv__title" id="pala-wv-title">别墅内的服务</h2>
    <p class="pala-wv__subtitle">在您开口之前，一切已然备妥。</p>

    <ul class="pala-wv__list">
      <li class="pala-wv__item">私人泳池</li>
      <li class="pala-wv__item">私人用餐</li>
      <li class="pala-wv__item">管家服务</li>
      <li class="pala-wv__item">
        私人厨师
        <span class="pala-wv__note">仅阿贡别墅与桑香别墅</span>
      </li>
      <li class="pala-wv__item">按摩与水疗</li>
      <li class="pala-wv__item">美甲与美容</li>
    </ul>
  </div>

  <div class="pala-wv__media">
    <img src="assets/home/images/banner-villa.jpeg"
         alt="别墅内的私人用餐与管家服务"
         width="1000" height="750" loading="lazy" decoding="async">
  </div>

</section>
<!-- =========== END SECTION 3: 别墅内的服务 =========== -->


<!-- ============= SECTION 4: 庄园周边体验 (AROUND THE ESTATE) =============
     Perbedaan dari versi Inggris:
     - TIDAK ada <link> ke fonts.googleapis.com
     - Foto kartu memakai <img> (bukan CSS background-image) supaya
       loading="lazy" bekerja. Enam foto besar sekaligus terlalu berat
       untuk koneksi lewat GFW.
     - onclick="" dihapus; listener dipasang dari script.js.
     - Semua tautan mengarah ke experiences.php karena halaman detail
       tiap pengalaman belum dibuat versi Mandarinnya.
     ======================================================================= -->
<section class="pala-ae" aria-labelledby="pala-ae-title">

  <!-- ---------- Header ---------- -->
  <div class="pala-ae__header">
    <div class="pala-ae__head-left">
      <p class="pala-ae__eyebrow">Around the Estate</p>
      <h2 class="pala-ae__title" id="pala-ae-title">庄园周边体验</h2>
      <p class="pala-ae__subtitle">源自巴厘岛日常生活的文化体验</p>
    </div>

    <div class="pala-ae__nav">
      <span class="pala-ae__count" data-ae-count aria-live="polite">1 / 6</span>

      <button class="pala-ae__btn" type="button" data-ae-prev aria-label="上一项">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M15 5l-7 7 7 7"/>
        </svg>
      </button>

      <button class="pala-ae__btn" type="button" data-ae-next aria-label="下一项">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M9 5l7 7-7 7"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- ---------- Kartu ---------- -->
  <div class="pala-ae__track" data-ae-track tabindex="0" role="group" aria-label="体验列表">

    <a class="pala-ae__card" href="experiences.php">
      <div class="pala-ae__media">
        <img src="assets/resort/slider/1.png" alt="巴厘料理课"
             width="700" height="520" loading="lazy" decoding="async">
        <span class="pala-ae__tag">文化与美食</span>
        <h3 class="pala-ae__name">巴厘料理课</h3>
      </div>
      <div class="pala-ae__body">
        <p class="pala-ae__meta">约 3 小时 · 上午 · 可安排私人课程</p>
      </div>
    </a>

    <a class="pala-ae__card" href="experiences.php">
      <div class="pala-ae__media">
        <img src="assets/resort/slider/2.jpg" alt="稻田体验"
             width="700" height="520" loading="lazy" decoding="async">
        <span class="pala-ae__tag">自然</span>
        <h3 class="pala-ae__name">稻田体验</h3>
      </div>
      <div class="pala-ae__body">
        <p class="pala-ae__meta">约 1.5 小时 · 季节性 · 仅插秧季开放</p>
      </div>
    </a>

    <a class="pala-ae__card" href="experiences.php">
      <div class="pala-ae__media">
        <img src="assets/resort/slider/3.jpg" alt="供品制作"
             width="700" height="520" loading="lazy" decoding="async">
        <span class="pala-ae__tag">文化</span>
        <h3 class="pala-ae__name">供品制作</h3>
      </div>
      <div class="pala-ae__body">
        <p class="pala-ae__meta">1 小时以内 · 时间灵活</p>
      </div>
    </a>

    <a class="pala-ae__card" href="experiences.php">
      <div class="pala-ae__media">
        <img src="assets/resort/slider/4.webp" alt="巴厘舞蹈表演"
             width="700" height="520" loading="lazy" decoding="async">
        <span class="pala-ae__tag">表演</span>
        <h3 class="pala-ae__name">巴厘舞蹈</h3>
      </div>
      <div class="pala-ae__body">
        <p class="pala-ae__meta">傍晚 · 需提前预约</p>
      </div>
    </a>

    <a class="pala-ae__card" href="experiences.php">
      <div class="pala-ae__media">
        <img src="assets/resort/slider/5.png" alt="颂钵疗愈"
             width="700" height="520" loading="lazy" decoding="async">
        <span class="pala-ae__tag">疗愈</span>
        <h3 class="pala-ae__name">颂钵疗愈</h3>
      </div>
      <div class="pala-ae__body">
        <p class="pala-ae__meta">约 1 小时 · 需提前预约</p>
      </div>
    </a>

    <a class="pala-ae__card" href="experiences.php">
      <div class="pala-ae__media">
        <img src="assets/resort/slider/6.jpeg" alt="果阿加尔巴古迹"
             width="700" height="520" loading="lazy" decoding="async">
        <span class="pala-ae__tag">圣地 · 就在门外</span>
        <h3 class="pala-ae__name">果阿加尔巴</h3>
      </div>
      <div class="pala-ae__body">
        <p class="pala-ae__meta">净化仪式 · 寺庙参观 · 河边漫步 · 需提前预约</p>
      </div>
    </a>

  </div>

  <!-- ---------- Footer ---------- -->
  <div class="pala-ae__footer">
    <a class="pala-ae__link" href="experiences.php">查看全部体验</a>
  </div>

</section>
<!-- =========== END SECTION 4: 庄园周边体验 =========== -->


  <?php include 'footer.php'; ?>

  <script src="js/script.js"></script>
</body>
</html>