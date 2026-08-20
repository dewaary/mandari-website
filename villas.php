<?php $tpr_active = 'villas'; ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>别墅 | 帕拉乌布度假村 · 巴厘岛乌布私人泳池别墅</title>
  <meta name="description" content="帕拉乌布度假村六栋私人泳池别墅：卡图尔、巴图尔、塞拉雅 A、塞拉雅 B、桑香、阿贡。可容纳 2 至 10 位宾客，均配私人泳池与森林河谷景观。">

  <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">
  <!-- <link rel="stylesheet" href="css/page-villas.css"> -->
</head>

<body>

  <?php include 'header.php'; ?>

  <!-- ============ SPRITE IKON ============
       Didefinisikan sekali, dipakai berulang lewat <use>.
       Jauh lebih ringan daripada menempel SVG di setiap item. -->
  <svg class="pala-vp-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <g id="i-tree" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 3 6.5 11h3L5 17h14l-4.5-6h3z"/><path d="M12 17v4"/>
      </g>
      <g id="i-pool" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2 17c1.7 0 1.7 1.4 3.4 1.4S7.1 17 8.8 17s1.7 1.4 3.4 1.4S13.9 17 15.6 17s1.7 1.4 3.4 1.4S20.7 17 22 17"/>
        <path d="M7 14V5a2 2 0 0 1 4 0v9M13 14V5a2 2 0 0 1 4 0v9M7 9h4M13 9h4"/>
      </g>
      <g id="i-deck" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 10h18L12 3z"/><path d="M12 10v11"/><path d="M8 21h8"/>
      </g>
      <g id="i-shower" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 21V6a3 3 0 0 1 6 0v1"/><path d="M9 9h10l-2.5 4h-5z"/>
        <path d="M12 17v1M15.5 17v1M18.5 17v1"/>
      </g>
      <g id="i-dining" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 3v7a2 2 0 0 0 4 0V3M8 12v9"/>
        <path d="M17 3c-1.5 1.5-2 3-2 5s.7 3 2 3v10"/>
      </g>
      <g id="i-bath" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 12h18v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4z"/>
        <path d="M6 12V6a2 2 0 0 1 4 0"/><path d="M6 19l-1 2M18 19l1 2"/>
      </g>
      <g id="i-sofa" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 12V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4"/>
        <path d="M2 13a2 2 0 0 1 4 0v3h12v-3a2 2 0 0 1 4 0v5H2z"/><path d="M5 18v2M19 18v2"/>
      </g>
      <g id="i-bed" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 19V7"/><path d="M3 13h18v6"/><path d="M3 13v-2a2 2 0 0 1 2-2h6v4"/>
        <circle cx="7.5" cy="10.5" r="0"/>
      </g>
      <g id="i-flat" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 16h18"/><path d="M6 12h12"/><path d="M9 8h6"/>
      </g>
      <g id="i-link" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M10 13a4 4 0 0 0 5.6.6l2.6-2.6a4 4 0 0 0-5.6-5.6l-1.5 1.4"/>
        <path d="M14 11a4 4 0 0 0-5.6-.6l-2.6 2.6a4 4 0 0 0 5.6 5.6l1.5-1.4"/>
      </g>
      <g id="i-spa" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 20c0-4 2-7 6-8-1 4-3 6-6 8z"/><path d="M12 20c0-4-2-7-6-8 1 4 3 6 6 8z"/>
        <path d="M12 20c0-5 1-8 0-14-1 6 0 9 0 14z"/>
      </g>
      <g id="i-kitchen" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 10h16v4a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5z"/><path d="M2 10h20"/>
        <path d="M9 6c0-1 1-1 1-2M13 6c0-1 1-1 1-2"/>
      </g>
      <g id="i-lawn" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 20h18"/><path d="M6 20c0-4 1-6 2-8M10 20c0-5 1-7 2-10M14 20c0-4 1-6 2-8M18 20c0-3 .6-4.5 1.5-6"/>
      </g>
      <g id="i-people" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="9" cy="8" r="3"/><path d="M3 20v-1a6 6 0 0 1 12 0v1"/>
        <path d="M16 5.5a3 3 0 0 1 0 5"/><path d="M18 20v-1a5 5 0 0 0-2-4"/>
      </g>
      <g id="i-gazebo" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2 11 12 4l10 7z"/><path d="M5 11v9M19 11v9"/><path d="M5 15h14"/>
      </g>
      <g id="i-flow" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 3v18"/><path d="M6 8 3 12l3 4"/><path d="M18 8l3 4-3 4"/>
      </g>
      <g id="i-truck" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2 7h11v9H2z"/><path d="M13 10h4l3 3v3h-7z"/>
        <circle cx="6" cy="18" r="2"/><circle cx="17" cy="18" r="2"/>
      </g>
      <g id="i-power" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M13 2 5 14h6l-1 8 8-12h-6z"/>
      </g>
      <g id="i-wifi" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M2.5 9a15 15 0 0 1 19 0"/><path d="M6 12.5a10 10 0 0 1 12 0"/>
        <path d="M9.5 16a5 5 0 0 1 5 0"/><circle cx="12" cy="19.5" r="1"/>
      </g>
      <g id="i-bell" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 18h16a8 8 0 0 0-16 0z"/><path d="M2 21h20"/><path d="M12 7v3"/><circle cx="12" cy="5" r="1.5"/>
      </g>
      <g id="i-air" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="5" width="18" height="7" rx="2"/><path d="M6 9h12"/>
        <path d="M7 15c0 2 1 2 1 4M12 15c0 2 1 2 1 4M17 15c0 2 1 2 1 4"/>
      </g>
      <g id="i-dryer" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 8a4 4 0 0 1 4-4h6a4 4 0 0 1 0 8h-2l-1 8H8l-1-8H7a4 4 0 0 1-4-4z"/>
        <path d="M17 12l3 3"/>
      </g>
      <g id="i-robe" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9 3 5 6v14h14V6l-4-3"/><path d="M9 3l3 5 3-5"/><path d="M16 13v4"/>
      </g>
      <g id="i-slipper" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 20c-1-4-1-9 0-13a3 3 0 0 1 6 0c1 4 1 9 0 13z"/>
        <path d="M14 20c-1-4-1-9 0-13a3 3 0 0 1 6 0c1 4 1 9 0 13z"/>
      </g>
      <g id="i-amenity" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M8 8h8l1 12H7z"/><path d="M10 8V5a2 2 0 0 1 4 0v3"/><path d="M8 13h8"/>
      </g>
      <g id="i-coffee" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 9h13v6a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4z"/>
        <path d="M17 11h2a2 2 0 0 1 0 4h-2"/><path d="M8 3c0 1.5 1 1.5 1 3M12 3c0 1.5 1 1.5 1 3"/>
      </g>
      <g id="i-safe" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="11" cy="12" r="3.5"/>
        <path d="M11 8.5v-1M17.5 9v6"/>
      </g>
    </defs>
  </svg>


  <!-- ==================== 1. HERO ==================== -->
  <section class="pala-vp-hero" aria-labelledby="pala-vp-hero-title">
    <img class="pala-vp-hero__bg" src="assets/home/images/banner-villa.jpeg" alt="" aria-hidden="true">
  </section>


  <!-- ==================== 2. KARTU VILLA ==================== -->
  <section class="pala-vp-list" aria-label="别墅列表">
    <div class="pala-vp-list__inner">
      <div class="pala-vp-grid">

        <!-- ---------- 卡图尔 ---------- -->
        <article class="pala-vp-card">
          <a class="pala-vp-card__media" href="villa-catur.php">
            <img src="assets/home/images/card-villa-catur.webp" alt="卡图尔别墅"
                 width="800" height="686" loading="lazy" decoding="async">
          </a>
          <div class="pala-vp-card__body">
            <h2 class="pala-vp-card__name">蜜月别墅 · 卡图尔 Catur</h2>
            <p class="pala-vp-card__specs">1 卧室 | 272 m² | 2 位宾客 | 2 层</p>

            <ul class="pala-vp-card__features">
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-tree"/></svg>森林与河谷景观</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-shower"/></svg>室内与户外淋浴</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-pool"/></svg>双人无边泳池</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-dining"/></svg>烛光晚餐空间</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-deck"/></svg>私人屋顶露台</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-bath"/></svg>浴缸</li>
            </ul>

            <div class="pala-vp-card__actions">
              <a class="pala-vp-btn pala-vp-btn--ghost" href="villa-catur.php">查看详情</a>
              <a class="pala-vp-btn pala-vp-btn--solid" href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%8D%A1%E5%9B%BE%E5%B0%94%E5%88%AB%E5%A2%85&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E5%8D%A1%E5%9B%BE%E5%B0%94%E5%88%AB%E5%A2%85%E7%9A%84%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A">立即预订</a>
            </div>
          </div>
        </article>

        <!-- ---------- 巴图尔 ---------- -->
        <article class="pala-vp-card">
          <a class="pala-vp-card__media" href="villa-batur.php">
            <img src="assets/home/images/card-villa-batur.jpg" alt="巴图尔别墅"
                 width="800" height="686" loading="lazy" decoding="async">
          </a>
          <div class="pala-vp-card__body">
            <h2 class="pala-vp-card__name">静谧别墅 · 巴图尔 Batur</h2>
            <p class="pala-vp-card__specs">2 卧室 | 424 m² | 4 位宾客 | 3 层</p>

            <ul class="pala-vp-card__features">
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-tree"/></svg>森林与河谷景观</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-deck"/></svg>私人屋顶露台</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-sofa"/></svg>静谧起居空间</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-pool"/></svg>独立层无边泳池</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-bed"/></svg>舒适主卧套房</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-bath"/></svg>浴缸</li>
            </ul>

            <div class="pala-vp-card__actions">
              <a class="pala-vp-btn pala-vp-btn--ghost" href="villa-batur.php">查看详情</a>
              <a class="pala-vp-btn pala-vp-btn--solid" href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%B7%B4%E5%9B%BE%E5%B0%94%E5%88%AB%E5%A2%85&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E5%B7%B4%E5%9B%BE%E5%B0%94%E5%88%AB%E5%A2%85%E7%9A%84%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A">立即预订</a>
            </div>
          </div>
        </article>

        <!-- ---------- 塞拉雅 A ---------- -->
        <article class="pala-vp-card">
          <a class="pala-vp-card__media" href="villa-seraya-a.php">
            <img src="assets/home/images/card-villa-seraya-a.webp" alt="塞拉雅 A 别墅"
                 width="800" height="686" loading="lazy" decoding="async">
          </a>
          <div class="pala-vp-card__body">
            <h2 class="pala-vp-card__name">无边泳池别墅 · 塞拉雅 A</h2>
            <p class="pala-vp-card__specs">2 卧室 | 284 m² | 4 位宾客 | 1 层</p>

            <ul class="pala-vp-card__features">
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-tree"/></svg>森林与河谷景观</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-flat"/></svg>无台阶平层设计</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-bed"/></svg>全部房间面向泳池</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-link"/></svg>可与相邻别墅连通</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-pool"/></svg>无边泳池</li>
            </ul>

            <div class="pala-vp-card__actions">
              <a class="pala-vp-btn pala-vp-btn--ghost" href="villa-seraya-a.php">查看详情</a>
              <a class="pala-vp-btn pala-vp-btn--solid" href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%A1%9E%E6%8B%89%E9%9B%85%20A%20%E5%88%AB%E5%A2%85&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E5%A1%9E%E6%8B%89%E9%9B%85%20A%20%E5%88%AB%E5%A2%85%E7%9A%84%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A">立即预订</a>
            </div>
          </div>
        </article>

        <!-- ---------- 塞拉雅 B ---------- -->
        <article class="pala-vp-card">
          <a class="pala-vp-card__media" href="villa-seraya-b.php">
            <img src="assets/home/images/card-villa-seraya-b.webp" alt="塞拉雅 B 别墅"
                 width="800" height="686" loading="lazy" decoding="async">
          </a>
          <div class="pala-vp-card__body">
            <h2 class="pala-vp-card__name">疗愈别墅 · 塞拉雅 B</h2>
            <p class="pala-vp-card__specs">1 卧室 + 私人水疗室 | 300 m² | 2–4 位宾客 | 1 层</p>

            <ul class="pala-vp-card__features">
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-bed"/></svg>森林环抱主卧套房</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-spa"/></svg>私人水疗室（已含）</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-pool"/></svg>悬浮感无边泳池</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-link"/></svg>可与相邻别墅连通</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-flat"/></svg>无台阶平层设计</li>
            </ul>

            <div class="pala-vp-card__actions">
              <a class="pala-vp-btn pala-vp-btn--ghost" href="villa-seraya-b.php">查看详情</a>
              <a class="pala-vp-btn pala-vp-btn--solid" href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%A1%9E%E6%8B%89%E9%9B%85%20B%20%E5%88%AB%E5%A2%85&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E5%A1%9E%E6%8B%89%E9%9B%85%20B%20%E5%88%AB%E5%A2%85%E7%9A%84%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A">立即预订</a>
            </div>
          </div>
        </article>

        <!-- ---------- 桑香 ---------- -->
        <article class="pala-vp-card">
          <a class="pala-vp-card__media" href="villa-sanghyang.php">
            <img src="assets/home/images/card-villa-sanghyang.webp" alt="桑香别墅"
                 width="800" height="686" loading="lazy" decoding="async">
          </a>
          <div class="pala-vp-card__body">
            <h2 class="pala-vp-card__name">家庭别墅 · 桑香 Sanghyang</h2>
            <p class="pala-vp-card__specs">4 卧室 | 1393 m² | 8 位宾客 | 3 层</p>

            <ul class="pala-vp-card__features">
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-deck"/></svg>屋顶露台</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-pool"/></svg>儿童友好泳池</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-gazebo"/></svg>巴厘风格凉亭</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-flow"/></svg>室内外无缝衔接</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-sofa"/></svg>阳光房休憩区</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-spa"/></svg>屋顶私人水疗（可选）</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-kitchen"/></svg>半开放式厨房</li>
            </ul>

            <div class="pala-vp-card__actions">
              <a class="pala-vp-btn pala-vp-btn--ghost" href="villa-sanghyang.php">查看详情</a>
              <a class="pala-vp-btn pala-vp-btn--solid" href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E6%A1%91%E9%A6%99%E5%88%AB%E5%A2%85&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E6%A1%91%E9%A6%99%E5%88%AB%E5%A2%85%E7%9A%84%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A">立即预订</a>
            </div>
          </div>
        </article>

        <!-- ---------- 阿贡 ---------- -->
        <article class="pala-vp-card">
          <a class="pala-vp-card__media" href="villa-agung.php">
            <img src="assets/home/images/card-villa-agung.webp" alt="阿贡别墅"
                 width="800" height="686" loading="lazy" decoding="async">
          </a>
          <div class="pala-vp-card__body">
            <h2 class="pala-vp-card__name">尊尚别墅 · 阿贡 Agung</h2>
            <p class="pala-vp-card__specs">5 卧室 | 2092 m² | 10 位宾客 | 2 层</p>

            <ul class="pala-vp-card__features">
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-lawn"/></svg>活动草坪</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-truck"/></svg>供应商通道便利</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-people"/></svg>适合三代同行</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-power"/></svg>活动级基础设施</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-pool"/></svg>私人泳池 + 儿童泳池</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-kitchen"/></svg>设备齐全的厨房</li>
              <li><svg class="pala-vp-ico" viewBox="0 0 24 24"><use href="#i-bath"/></svg>浴缸</li>
            </ul>

            <div class="pala-vp-card__actions">
              <a class="pala-vp-btn pala-vp-btn--ghost" href="villa-agung.php">查看详情</a>
              <a class="pala-vp-btn pala-vp-btn--solid" href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E9%98%BF%E8%B4%A1%E5%88%AB%E5%A2%85&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E9%98%BF%E8%B4%A1%E5%88%AB%E5%A2%85%E7%9A%84%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A">立即预订</a>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>


  <!-- ==================== 3. FASILITAS ==================== -->
  <section class="pala-vp-fac" aria-labelledby="pala-vp-fac-title">
    <div class="pala-vp-fac__inner">

      <p class="pala-vp-fac__eyebrow">Facilities &amp; Amenities</p>
      <h2 class="pala-vp-fac__title" id="pala-vp-fac-title">设施与服务</h2>
      <p class="pala-vp-fac__lead">以下设施与服务，六栋别墅均已包含，无需额外付费。</p>

      <ul class="pala-vp-fac__list">
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-wifi"/></svg>免费 Starlink 卫星 Wi-Fi</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-robe"/></svg>浴袍</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-pool"/></svg>私人泳池</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-slipper"/></svg>拖鞋</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-bell"/></svg>专属管家服务</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-amenity"/></svg>洗漱用品套装</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-air"/></svg>空调</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-coffee"/></svg>茶与咖啡冲泡设备</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-dryer"/></svg>吹风机</li>
        <li><svg class="pala-vp-ico-facilities" viewBox="0 0 24 24"><use href="#i-safe"/></svg>保险箱</li>
      </ul>

    </div>
  </section>


  <!-- ==================== 4. FAQ ====================
       Memakai <details>/<summary> bawaan HTML — tanpa JavaScript.
       Isinya tetap ada di HTML sehingga bisa dibaca Baiduspider. -->
  <section class="pala-vp-faq" aria-labelledby="pala-vp-faq-title">
    <div class="pala-vp-faq__inner">

      <div class="pala-vp-faq__head">
        <p class="pala-vp-faq__eyebrow">Frequently Asked Questions</p>
        <h2 class="pala-vp-faq__title" id="pala-vp-faq-title">常见问题</h2>
      </div>

      <details class="pala-vp-faq__item">
        <summary class="pala-vp-faq__q">入住和退房时间是几点？</summary>
        <div class="pala-vp-faq__a">
          <p>入住时间为 15:00，退房时间为 12:00。<br>
             如需提前入住或延迟退房，可根据当日房况安排，欢迎提前告知。</p>
        </div>
      </details>

      <details class="pala-vp-faq__item">
        <summary class="pala-vp-faq__q">别墅预订包含哪些内容？</summary>
        <div class="pala-vp-faq__a">
          <ul>
            <li>每日早餐（按确认入住人数）</li>
            <li>免费 Wi-Fi（Starlink 卫星直连）</li>
            <li>免费停车</li>
            <li>每日客房清洁及夜床服务</li>
            <li>专属管家服务与安保</li>
          </ul>
        </div>
      </details>

      <details class="pala-vp-faq__item">
        <summary class="pala-vp-faq__q">可以加床吗？</summary>
        <div class="pala-vp-faq__a">
          <p>可应要求加床，需另行收费。请提前联系我们的团队了解详情。</p>
        </div>
      </details>

      <details class="pala-vp-faq__item">
        <summary class="pala-vp-faq__q">提供接送服务吗？</summary>
        <div class="pala-vp-faq__a">
          <p>所有别墅均可安排配司机的车辆服务，并享专属优惠价。
             详情请参阅交通价目表，或联系我们的团队。</p>
        </div>
      </details>

      <details class="pala-vp-faq__item">
        <summary class="pala-vp-faq__q">别墅适合携带幼儿的家庭入住吗？</summary>
        <div class="pala-vp-faq__a">
          <p>适合。我们可应要求提供婴儿床与儿童高脚椅。
             建议提前告知，以便我们妥善安排。</p>
        </div>
      </details>

      <details class="pala-vp-faq__item">
        <summary class="pala-vp-faq__q">别墅可以携带宠物吗？</summary>
        <div class="pala-vp-faq__a">
          <p>很抱歉，目前别墅暂不接待宠物。我们理解宠物往往是家庭的一员，
             但为了保障所有宾客的舒适体验并维护别墅的环境，目前执行此项政策，敬请谅解。</p>
        </div>
      </details>

    </div>
  </section>


  <?php include 'footer.php'; ?>

 <script src="js/script.js?v=<?php echo filemtime('js/script.js'); ?>"></script>
</body>
</html>