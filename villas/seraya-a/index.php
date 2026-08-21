<?php
require $_SERVER['DOCUMENT_ROOT'] . '/cn/config.php';

/* =========================================================
   VILLA SERAYA A — 塞拉雅 A 别墅

   Seluruh isi diambil dari halaman resmi
   thepalaubudresort.com/villa-seraya-a/ — termasuk harga,
   deskripsi, fitur, dan denah lantai.

   Berbeda dari villa lain: ada $villa['note'], kotak catatan
   tentang Seraya A & B yang bisa disatukan. Halaman villa lain
   tidak punya kunci ini, jadi kotaknya tidak muncul di sana.
   ========================================================= */

$tpr_active = 'villas';

$villa = [
   'slug'        => 'seraya-a',
   'type'        => '无边泳池别墅',
   'name_cn'     => '塞拉雅 A',
   'name_latin'  => 'Seraya A',
   'tagline'     => '静水，无尽远景',
   'specs'       => '2 卧室 · 284 m² · 4 位宾客 · 1 层',

   'price'       => 'IDR 9,400,000',
   'price_unit'  => '/ 晚',
   'price_note'  => '门市价 · 含每日早餐',

   'hero'        => 'assets/villas/gallery/seraya-a/hero.webp',
   'hero_alt'    => '塞拉雅 A 别墅无边泳池',

   'desc'        => '塞拉雅 A 拒绝在室内与室外之间划下界线。'
      . '整栋别墅铺展于单一而流畅的平层之上，每一个房间都朝向同一片景致——'
      . '横贯别墅整个宽度的无边泳池、其后的森林，'
      . '以及在谷底静静流淌的帕克里桑河。'
      . '这里没有需要上下的台阶，也没有需要穿行的楼层，'
      . '只有一片不被打断的生活平面：卧室、起居区与泳池，'
      . '构成一段彼此相连的完整体验。'
      . '两对伴侣可以各自找到自己的节奏，一家人也可以只是好好地待在一起——'
      . '从容、宽裕，全然不慌不忙。',

   /* Kotak catatan — hanya ada di Seraya A dan Seraya B */
   'note'        => '<b>塞拉雅 A 与 B</b> —— 两栋各自独立的别墅，'
      . '既可分开入住，也可合为一体。'
      . '合并后形成一栋四卧室的宅邸，'
      . '让家庭与团体同时拥有共享的空间与真正的私密。'
      . '如需连通，请与您的管家团队联系安排。',

   'features'    => [
      '主卧配特大号床（Super King）、独立卫浴，面朝泳池',
      '双床客卧配独立卫浴，面朝泳池',
      '横贯别墅整个宽度的无边泳池，面朝森林与河谷',
      '单层平面布局——全屋无台阶',
      '宽敞的起居与用餐区，直通泳池',
   ],

   'inclusions'  => TPR_INCLUSIONS,

   'floors'      => [
      ['name' => '一层', 'rooms' => '起居与用餐区 · 主卧 · 双床客卧 · 泳池'],
   ],

   'gallery'     => [
      ['file' => '01', 'alt' => '塞拉雅 A 别墅外观与无边泳池', 'size' => 'large'],
      ['file' => '02', 'alt' => '主卧套房',                   'size' => 'half'],
      ['file' => '03', 'alt' => '起居与用餐区',               'size' => 'tall'],
      ['file' => '04', 'alt' => '无边泳池与森林景观',         'size' => 'tall'],
      ['file' => '05', 'alt' => '主卧卫浴与双台盆',           'size' => 'tall'],
      ['file' => '06', 'alt' => '双床客卧',                   'size' => 'tall'],
      ['file' => '07', 'alt' => '泳池平台与躺椅',             'size' => 'tall'],
      ['file' => '08', 'alt' => '河谷与丛林景观',             'size' => 'tall'],
      ['file' => '11', 'alt' => '河谷与丛林景观',             'size' => 'half'],
   ],

   'seo_title'   => '塞拉雅 A 别墅 | 帕拉乌布度假村 · 巴厘岛乌布两卧室无边泳池别墅',
   'seo_desc'    => '塞拉雅 A 别墅：两卧室平层别墅，284 m²，可住 4 位宾客。'
      . '横贯全宽的无边泳池、全屋无台阶设计，可与塞拉雅 B 连通为四卧室宅邸。',
];

/* Tautan pemesanan khusus villa ini */
$villa_book = 'mailto:enquiry@thepalaubudresort.com'
   . '?subject=' . rawurlencode('预订咨询 · ' . $villa['name_cn'] . '别墅')
   . '&body='    . rawurlencode(
      "您好，我想咨询{$villa['name_cn']}别墅的预订：\r\n\r\n"
         . "入住日期：\r\n退房日期：\r\n入住人数：\r\n"
         . "是否需要与塞拉雅 B 连通：\r\n联系电话：\r\n\r\n"
   );
?>
<!doctype html>
<html lang="zh-CN">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?php echo $villa['seo_title']; ?></title>
   <meta name="description" content="<?php echo $villa['seo_desc']; ?>">

   <link rel="stylesheet" href="<?php echo tpr_asset('css/style.css'); ?>">
   <link rel="stylesheet" href="<?php echo tpr_asset('css/page-villa-detail.css'); ?>">

   <link rel="preload" as="image" href="<?php echo tpr_file($villa['hero']); ?>" fetchpriority="high">
</head>

<body>

   <?php require TPR_ROOT . '/header.php'; ?>

   <section class="pala-vd-hero">
      <img src="<?php echo tpr_file($villa['hero']); ?>"
         alt="<?php echo $villa['hero_alt']; ?>"
         width="2000" height="1000"
         fetchpriority="high" decoding="async">
   </section>


   <!-- ==================== 2. PENGANTAR ==================== -->
   <section class="pala-vd-intro" aria-labelledby="pala-vd-name">
      <div class="pala-vd-intro__inner">

         <div>
            <p class="pala-vd-type"><?php echo $villa['type']; ?></p>

            <h1 class="pala-vd-name" id="pala-vd-name">
               <?php echo $villa['name_cn']; ?>
               <small><?php echo $villa['name_latin']; ?></small>
            </h1>

            <p class="pala-vd-tagline"><?php echo $villa['tagline']; ?></p>
            <p class="pala-vd-specs"><?php echo $villa['specs']; ?></p>

            <p class="pala-vd-price">
               <b><?php echo $villa['price']; ?></b> <?php echo $villa['price_unit']; ?>
            </p>
            <p class="pala-vd-price-note"><?php echo $villa['price_note']; ?></p>
         </div>

         <div>
            <p class="pala-vd-desc"><?php echo $villa['desc']; ?></p>
            <a class="pala-vd-cta" href="<?php echo $villa_book; ?>">查询空房</a>
            <?php if (!empty($villa['note'])): ?>
               <p class="pala-vd-note"><?php echo $villa['note']; ?></p>
            <?php endif; ?>
         </div>
      </div>

   </section>

   <section class="pala-vv"
      aria-label="别墅影片"
      data-loop-src="<?php echo tpr_file('assets/villas/' . $villa['slug'] . '/loop.mp4'); ?>"
      data-embed-url=""
      data-full-src="">

      <img class="pala-vv__poster" data-vv-poster
         src="<?php echo tpr_file('assets/villas/' . $villa['slug'] . '/video-poster.webp'); ?>"
         alt="<?php echo $villa['name_cn']; ?>别墅室内"
         width="2000" height="1000" loading="lazy" decoding="async">

      <video class="pala-vv__video" data-vv-video
         muted loop playsinline preload="none" aria-hidden="true"></video>

      <!-- Tombol putar/jeda klip latar -->
      <div class="pala-vv__controls" data-vv-controls hidden>
         <button class="pala-vv__btn" type="button" data-vv-play aria-label="暂停视频">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
               <path data-vv-icon-play d="M8 5v14l11-7z" fill="currentColor" stroke="none" hidden></path>
               <path data-vv-icon-pause d="M8 5v14M16 5v14"></path>
            </svg>
         </button>
      </div>

      <!-- Tombol video lengkap — muncul hanya kalau sumbernya diisi -->
      <button class="pala-vv__full" type="button" data-vv-full hidden>
         <span class="pala-vv__full-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
               <path d="M8 5v14l11-7z" />
            </svg>
         </span>
         观看完整影片
      </button>

      <!-- Popup. Kosong sampai tombol ditekan. -->
      <div class="pala-vv__popup" data-vv-popup role="dialog" aria-modal="true"
         aria-label="别墅影片" aria-hidden="true">
         <div class="pala-vv__popup-inner">
            <button class="pala-vv__close" type="button" data-vv-close aria-label="关闭">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" aria-hidden="true">
                  <path d="M6 6l12 12M18 6L6 18" />
               </svg>
            </button>
            <div data-vv-stage style="width:100%;height:100%;"></div>
         </div>
      </div>

   </section>
   <section class="pala-vf" aria-label="别墅特色与房价包含">
      <div class="pala-vf__inner">

         <!-- ---------- 别墅特色 ---------- -->
         <div class="pala-vf__group">
            <h2 class="pala-vf__title">别墅特色</h2>
            <ul class="pala-vf__list">
               <?php foreach ($villa['features'] as $item): ?>
                  <li><?php echo $item; ?></li>
               <?php endforeach; ?>
            </ul>
         </div>

         <!-- ---------- 房价包含 ---------- -->
         <div class="pala-vf__group">
            <h2 class="pala-vf__title">房价包含</h2>
            <ul class="pala-vf__list pala-vf__list--two">
               <?php foreach ($villa['inclusions'] as $item): ?>
                  <li><?php echo $item; ?></li>
               <?php endforeach; ?>
            </ul>
         </div>

         <!-- ---------- 平面布局 ---------- -->
         <div class="pala-vf__group">
            <h2 class="pala-vf__title">平面布局</h2>
            <ul class="pala-vf__list">
               <?php foreach ($villa['floors'] as $floor): ?>
                  <li>
                     <b class="pala-vf__floor"><?php echo $floor['name']; ?></b>
                     <?php echo $floor['rooms']; ?>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>

      </div>
   </section>
   <!-- =========== END SECTION 4: 别墅特色 & 房价包含 =========== -->
   <?php if (!empty($villa['gallery'])): ?>
      <?php
      $gal_dir = rtrim($villa['gallery_dir'] ?? 'assets/villas/gallery/seraya-a', '/');
      ?>
      <section class="pala-gal" aria-labelledby="pala-gal-title">
         <div class="pala-gal__inner">

            <div class="pala-gal__head">
               <p class="pala-gal__eyebrow">Gallery</p>
               <h2 class="pala-gal__title" id="pala-gal-title">图片集</h2>
            </div>

            <div class="pala-gal__grid">
               <?php foreach ($villa['gallery'] as $img): ?>
                  <?php
                  $name = $img['file'] ?? '';
                  if ($name === '') {
                     continue;
                  }

                  $size = $img['size'] ?? 'tall';
                  $alt  = $img['alt']  ?? ($villa['name_cn'] . '别墅');

                  $card = $gal_dir . '/' . $name . '.webp';
                  $full = $gal_dir . '/' . $name . '-full.webp';
                  $has_full = is_file(TPR_ROOT . '/' . $full);
                  ?>
                  <button class="pala-gal__item pala-gal__item--<?php echo $size; ?>"
                     type="button"
                     <?php if ($has_full): ?>data-full="<?php echo tpr_file($full); ?>" <?php endif; ?>
                     aria-label="查看大图：<?php echo $alt; ?>">
                     <img src="<?php echo tpr_file($card); ?>"
                        alt="<?php echo $alt; ?>"
                        width="800" height="800" loading="lazy" decoding="async">
                  </button>
               <?php endforeach; ?>
            </div>

         </div>

         <!-- ---------- Lightbox ---------- -->
         <div class="pala-gal__box" data-gal-box role="dialog" aria-modal="true"
            aria-label="图片查看" aria-hidden="true">

            <button class="pala-gal__btn pala-gal__btn--close" type="button"
               data-gal-close aria-label="关闭">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" aria-hidden="true">
                  <path d="M6 6l12 12M18 6L6 18" />
               </svg>
            </button>

            <button class="pala-gal__btn pala-gal__btn--prev" type="button"
               data-gal-prev aria-label="上一张">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M15 5l-7 7 7 7" />
               </svg>
            </button>

            <img data-gal-img alt="">

            <button class="pala-gal__btn pala-gal__btn--next" type="button"
               data-gal-next aria-label="下一张">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M9 5l7 7-7 7" />
               </svg>
            </button>

            <p class="pala-gal__counter" data-gal-counter aria-live="polite">
               1 / <?php echo count($villa['gallery']); ?>
            </p>

         </div>
      </section>
   <?php endif; ?>

   <?php
   $lainnya = array_values(array_filter(
      TPR_VILLAS,
      fn($v) => $v['slug'] !== ($villa['slug'] ?? '')
   ));
   ?>
   <?php if (!empty($lainnya)): ?>
      <section class="pala-ov" aria-labelledby="pala-ov-title">

         <h2 class="pala-ov__title" id="pala-ov-title">其他别墅</h2>

         <div class="pala-ov__slider">

            <button class="pala-ov__nav pala-ov__nav--prev" type="button" aria-label="上一个">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M15 5l-7 7 7 7" />
               </svg>
            </button>

            <button class="pala-ov__nav pala-ov__nav--next" type="button" aria-label="下一个">
               <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M9 5l7 7-7 7" />
               </svg>
            </button>

            <div class="pala-ov__track" tabindex="0" role="group" aria-label="其他别墅">
               <?php foreach ($lainnya as $v): ?>
                  <div class="pala-ov__slide">
                     <a class="pala-ov__card" href="<?php echo tpr_url($v['url']); ?>">
                        <img src="<?php echo tpr_file('assets/villas/other/' . $v['slug'] . '.webp'); ?>"
                           alt="<?php echo $v['name_cn']; ?>别墅"
                           width="800" height="680" loading="lazy" decoding="async">
                        <p class="pala-ov__name">
                           <?php echo $v['type']; ?> · <?php echo $v['name_cn']; ?>
                           <small><?php echo $v['name_latin']; ?></small>
                        </p>
                     </a>
                  </div>
               <?php endforeach; ?>
            </div>

         </div>
      </section>
   <?php endif; ?>

   <?php require TPR_ROOT . '/villa-offer.php'; ?>
   <?php require TPR_ROOT . '/footer.php'; ?>

   <script src="<?php echo tpr_asset('js/script.js'); ?>"></script>
</body>

</html>