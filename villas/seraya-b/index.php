<?php
require $_SERVER['DOCUMENT_ROOT'] . '/cn/config.php';

/* =========================================================
   VILLA SERAYA B — 塞拉雅 B 别墅（疗愈别墅）
   Isi diambil dari thepalaubudresort.com/wellness-villa-seraya-b/

   Empat hal yang tidak ada di villa lain:
     'note'    kotak tiga konfigurasi
     'spa'     kotak礼遇 spa (latar hijau tua)
     'flow'    alur tiga langkah
     'gallery' berkategori (tiga tab)
   Semuanya dibungkus if, jadi markup ini tetap aman disalin
   ke villa lain yang tidak punya kunci-kunci itu.
   ========================================================= */

$tpr_active = 'villas';

$villa = [
    'slug'        => 'seraya-b',
    'type'        => '疗愈别墅',
    'name_cn'     => '塞拉雅 B',
    'name_latin'  => 'Seraya B',
    'tagline'     => '森林温柔地将你留住',
    'specs'       => '1 卧室 + 私人水疗室 · 300 m² · 2–4 位宾客 · 1 层',

    'price'       => 'IDR 9,400,000',
    'price_unit'  => '/ 晚',
    'price_note'  => '门市价 · 含每日早餐',

    'hero'        => 'assets/villas/gallery/seraya-b/hero.webp',
    'hero_alt'    => '塞拉雅 B 别墅无边泳池与丛林',

    'desc'        => '有些地方会让你自然而然地慢下来。'
                   . '别墅被丛林环抱，向着河谷敞开，一切都围绕两个房间展开：'
                   . '一间用于安睡，一间用于疗愈。'
                   . '无论那意味着按摩、瑜伽、冥想，还是单纯的静止——'
                   . '我们都会在您抵达之前安排妥当。'
                   . '在别墅之内，完全私密，全依您的节奏。',

    'note'        => '<b>一栋别墅，三种配置</b><br><br>'
                   . '水疗室可应要求改为<b>双床卧室</b>，最多容纳四位宾客。<br><br>'
                   . '塞拉雅 B 亦可与相邻的<b>塞拉雅 A</b> 连通，'
                   . '形成一栋<b>四卧室</b>宅邸，拥有两座泳池与两处起居空间。'
                   . '如需安排，请与我们的团队联系。',

    'spa'         => [
        'eyebrow' => '私人水疗室宾客专属',
        'title'   => '每位宾客均可享受一次免费按摩',
        'items'   => [
            '瑜伽、冥想、颂钵疗愈、呼吸练习——完整的疗愈菜单，任您选择',
            '全部在别墅内进行，完全私密，时间由您决定',
            '将您的偏好告诉管家，其余的一切都会被安排妥当',
        ],
    ],

    'flow'        => [
        [
            'title' => '抵达之前',
            'text'  => '请将您的偏好告诉我们。住宿已包含一次私人按摩，'
                     . '并可另行加入瑜伽、冥想、颂钵疗愈、呼吸练习或其他疗愈课程。',
            'note'  => '一切提前安排，全依您的意愿。',
        ],
        [
            'title' => '抵达当天',
            'text'  => '一切都已就位。首次课程已确认，您的偏好已记录，'
                     . '您的时间也已被妥善保留。',
            'note'  => '您只需抵达，然后开始休息。',
        ],
        [
            'title' => '入住期间',
            'text'  => '一份完全为您定制的疗愈行程，在您抵达之前便已备妥。'
                     . '清晨的静谧、午后的修复，夜晚交给森林的声音。',
            'note'  => '每一天，都按您的节奏展开。',
        ],
    ],

    'features'    => [
        '主卧配特大号床，三面落地玻璃，可全景眺望森林与河谷',
        '别墅内私人水疗室配独立卫浴——专属的疗愈空间，抵达前已布置妥当，入住期间由您独享',
        '悬浮边缘设计的无边泳池，向丛林树冠敞开',
        '单层平面布局——全屋无台阶',
        '宽敞的起居与用餐区，配备备餐区与迷你吧',
    ],

    'inclusions'  => TPR_INCLUSIONS,

    'floors'      => [
        ['name' => '一层', 'rooms' => '起居与用餐区 · 特大号床主卧 · 私人水疗室（可改为双床卧室）· 泳池'],
    ],

    'gallery'     => [
        [
            'label' => '起居空间',
            'items' => [
                ['file' => '05', 'alt' => '泳池与起居区外观', 'size' => 'large'],
                ['file' => '06', 'alt' => '起居与用餐区',     'size' => 'large'],
                ['file' => '07', 'alt' => '无边泳池',         'size' => 'tall'],
                ['file' => '08', 'alt' => '客厅一角',         'size' => 'tall'],
                ['file' => '09', 'alt' => '用餐区',           'size' => 'tall'],
            ],
        ],
        [
            'label' => '主卧套房',
            'items' => [
                ['file' => '01', 'alt' => '主卧套房',     'size' => 'large'],
                ['file' => '02', 'alt' => '主卧落地玻璃', 'size' => 'half'],
                ['file' => '03', 'alt' => '主卧卫浴',     'size' => 'tall'],
                ['file' => '04', 'alt' => '主卧细节',     'size' => 'tall']
            ],
        ],
        [
            'label' => '水疗室 / 双床卧室',
            'items' => [
                ['file' => '11', 'alt' => '私人水疗室',         'size' => 'large'],
                ['file' => '12', 'alt' => '水疗床与布置',       'size' => 'half'],
                ['file' => '13', 'alt' => '改为双床卧室的配置', 'size' => 'tall'],
            ],
        ],
    ],

    'seo_title'   => '塞拉雅 B 别墅 | 帕拉乌布度假村 · 巴厘岛乌布带私人水疗室别墅',
    'seo_desc'    => '塞拉雅 B 疗愈别墅：1 卧室 + 私人水疗室，300 m²，可住 2–4 位宾客。'
                   . '每位宾客含一次免费按摩，水疗室可改为双床卧室，'
                   . '亦可与塞拉雅 A 连通为四卧室宅邸。',
];

/* Tautan pemesanan khusus villa ini */
$villa_book = 'mailto:enquiry@thepalaubudresort.com'
  . '?subject=' . rawurlencode('预订咨询 · ' . $villa['name_cn'] . '别墅')
  . '&body='    . rawurlencode(
        "您好，我想咨询{$villa['name_cn']}别墅的预订：\r\n\r\n"
      . "入住日期：\r\n退房日期：\r\n入住人数：\r\n"
      . "水疗室是否改为双床卧室：\r\n是否需要与塞拉雅 A 连通：\r\n"
      . "感兴趣的疗愈项目：\r\n联系电话：\r\n\r\n"
    );

/* Villa lain untuk slider di bawah — yang sedang dibuka disaring keluar */
$lainnya = array_values(array_filter(
    TPR_VILLAS,
    fn($v) => $v['slug'] !== $villa['slug']
));

/* Galeri: bentuk berkategori atau bentuk lama, keduanya ditangani */
$gal_dir = rtrim($villa['gallery_dir'] ?? 'assets/villas/gallery/seraya-b', '/');
$groups  = isset($villa['gallery'][0]['items'])
    ? $villa['gallery']
    : [['label' => '全部', 'items' => $villa['gallery']]];
$single  = count($groups) < 2;
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


<!-- ==================== 1. HERO ==================== -->
<section class="pala-vd-hero">
  <img src="<?php echo tpr_file($villa['hero']); ?>"
       alt="<?php echo $villa['hero_alt']; ?>"
       width="2000" height="1000"
       fetchpriority="high" decoding="async">
</section>


<!-- ==================== 2. PENGANTAR ==================== -->
<section class="pala-vd-intro" aria-labelledby="pala-vd-name">
  <div class="pala-vd-intro__inner">

    <!-- Kolom kiri: nama, spesifikasi, harga, kotak konfigurasi -->
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

      <?php if (!empty($villa['note'])): ?>
        <p class="pala-vd-note"><?php echo $villa['note']; ?></p>
      <?php endif; ?>
    </div>

    <!-- Kolom kanan: deskripsi, tombol, kotak spa, alur -->
    <div>
      <p class="pala-vd-desc"><?php echo $villa['desc']; ?></p>
      <a class="pala-vd-cta" href="<?php echo $villa_book; ?>">查询空房</a>

      <?php if (!empty($villa['spa'])): ?>
        <div class="pala-ws2-box">
          <div class="pala-ws2-box__inner">
            <p class="pala-ws2-box__eyebrow"><?php echo $villa['spa']['eyebrow']; ?></p>
            <h2 class="pala-ws2-box__title"><?php echo $villa['spa']['title']; ?></h2>
            <ul class="pala-ws2-box__list">
              <?php foreach ($villa['spa']['items'] as $item): ?>
                <li><?php echo $item; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($villa['flow'])): ?>
        <div class="pala-ws2-flow">
          <p class="pala-ws2-flow__head">您的疗愈体验 · 如何进行</p>

          <div class="pala-ws2-flow__steps">
            <?php foreach ($villa['flow'] as $i => $step): ?>
              <div class="pala-ws2-flow__step <?php echo $i === 1 ? 'pala-ws2-flow__step--mid' : ''; ?>">
                <div class="pala-ws2-flow__num"><?php echo str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT); ?></div>
                <p class="pala-ws2-flow__title"><?php echo $step['title']; ?></p>
                <p class="pala-ws2-flow__text">
                  <?php echo $step['text']; ?>
                  <span class="pala-ws2-flow__note"><?php echo $step['note']; ?></span>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>

  </div>
</section>


<!-- ==================== 3. VIDEO ====================
     data-loop-src  : klip 8 detik tanpa suara (target < 2 MB)
     data-embed-url : video lengkap dari Bilibili, isi setelah
                      tim di Tiongkok mengunggahnya
     YouTube TIDAK dipakai — diblokir di Tiongkok. -->
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

  <div class="pala-vv__controls" data-vv-controls hidden>
    <button class="pala-vv__btn" type="button" data-vv-play aria-label="暂停视频">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
        <path data-vv-icon-play d="M8 5v14l11-7z" fill="currentColor" stroke="none" hidden></path>
        <path data-vv-icon-pause d="M8 5v14M16 5v14"></path>
      </svg>
    </button>
  </div>

  <button class="pala-vv__full" type="button" data-vv-full hidden>
    <span class="pala-vv__full-icon" aria-hidden="true">
      <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
    </span>
    观看完整影片
  </button>

  <div class="pala-vv__popup" data-vv-popup role="dialog" aria-modal="true"
       aria-label="别墅影片" aria-hidden="true">
    <div class="pala-vv__popup-inner">
      <button class="pala-vv__close" type="button" data-vv-close aria-label="关闭">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" aria-hidden="true">
          <path d="M6 6l12 12M18 6L6 18"/>
        </svg>
      </button>
      <div data-vv-stage style="width:100%;height:100%;"></div>
    </div>
  </div>

</section>


<!-- ============ 4. 别墅特色 · 房价包含 · 平面布局 ============ -->
<section class="pala-vf" aria-label="别墅特色与房价包含">
  <div class="pala-vf__inner">

    <?php if (!empty($villa['features'])): ?>
      <div class="pala-vf__group">
        <h2 class="pala-vf__title">别墅特色</h2>
        <ul class="pala-vf__list">
          <?php foreach ($villa['features'] as $item): ?>
            <li><?php echo $item; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <?php if (!empty($villa['inclusions'])): ?>
      <div class="pala-vf__group">
        <h2 class="pala-vf__title">房价包含</h2>
        <ul class="pala-vf__list pala-vf__list--two">
          <?php foreach ($villa['inclusions'] as $item): ?>
            <li><?php echo $item; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <?php if (!empty($villa['floors'])): ?>
      <div class="pala-vf__group">
        <h2 class="pala-vf__title">平面布局</h2>
        <ul class="pala-vf__list">
          <?php foreach ($villa['floors'] as $floor): ?>
            <li>
              <b class="pala-vf__floor"><?php echo $floor['name'] ?? ''; ?></b>
              <?php echo $floor['rooms'] ?? ''; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

  </div>
</section>


<!-- ==================== 5. 图片集 (BERTAB + SRCSET) ====================
     GANTI seluruh blok section 图片集 yang lama dengan yang ini.

     Perbedaannya: kartu memakai srcset tiga ukuran, sehingga tiap
     perangkat mengunduh berkas yang sesuai — dan nama berkasnya
     kini berakhiran -600 / -1200 / -1800, bukan lagi 01.webp.
     ==================================================================== -->
<?php if (!empty($villa['gallery'])): ?>
<?php
  /* Kartu "large" dan "wide" membentang dua kolom, jadi lebar
     tampilnya berbeda dari kartu biasa. Nilai ini memberitahu
     browser lebar sebenarnya supaya ia memilih berkas yang tepat. */
  $sizes_map = [
      'large' => '(max-width: 768px) 100vw, (max-width: 1100px) 66vw, 62vw',
      'wide'  => '(max-width: 768px) 100vw, (max-width: 1100px) 66vw, 62vw',
      'half'  => '(max-width: 768px) 50vw, (max-width: 1100px) 33vw, 31vw',
      'tall'  => '(max-width: 768px) 50vw, (max-width: 1100px) 33vw, 31vw',
  ];
?>
<section class="pala-gal" aria-labelledby="pala-gal-title">
  <div class="pala-gal__inner">

    <div class="pala-gal__head">
      <p class="pala-gal__eyebrow-top">Explore the Villa</p>
      <h2 class="pala-gal__title" id="pala-gal-title">图片集</h2>
    </div>

    <div class="pala-gal__tabs <?php echo $single ? 'pala-gal__tabs--single' : ''; ?>"
         role="tablist" data-gal-tablist aria-label="图片分类">
      <?php foreach ($groups as $i => $g): ?>
        <button class="pala-gal__tab <?php echo $i === 0 ? 'is-active' : ''; ?>"
                type="button" role="tab"
                data-gal-tab="g<?php echo $i; ?>"
                aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <?php echo $g['label']; ?>
        </button>
      <?php endforeach; ?>
    </div>

    <?php foreach ($groups as $gi => $g): ?>
      <div class="pala-gal__panel <?php echo $gi === 0 ? 'is-active' : ''; ?>"
           data-gal-panel="g<?php echo $gi; ?>" role="tabpanel">
        <div class="pala-gal__grid">
          <?php foreach ($g['items'] as $ii => $img): ?>
            <?php
              $name = $img['file'] ?? '';
              if ($name === '') { continue; }

              $size = $img['size'] ?? 'tall';
              $alt  = $img['alt']  ?? ($villa['name_cn'] . '别墅');
              $base = $gal_dir . '/' . $name;

              /* Versi lightbox — opsional. Kalau belum ada,
                 lightbox memakai gambar kartunya sendiri. */
              $full     = $base . '-full.webp';
              $has_full = is_file(TPR_ROOT . '/' . $full);

              /* Tiga foto pertama di panel pertama dimuat lebih awal;
                 sisanya menunggu sampai tamu mendekat */
              $eager = ($gi === 0 && $ii < 3);
            ?>
            <button class="pala-gal__item pala-gal__item--<?php echo $size; ?>"
                    type="button"
                    <?php if ($has_full): ?>data-full="<?php echo tpr_file($full); ?>"<?php endif; ?>
                    aria-label="查看大图：<?php echo $alt; ?>">
              <img src="<?php echo tpr_file($base . '-1200.webp'); ?>"
                   srcset="<?php echo tpr_file($base . '-600.webp'); ?>   600w,
                           <?php echo tpr_file($base . '-1200.webp'); ?> 1200w,
                           <?php echo tpr_file($base . '-1800.webp'); ?> 1800w"
                   sizes="<?php echo $sizes_map[$size] ?? $sizes_map['tall']; ?>"
                   alt="<?php echo $alt; ?>"
                   width="1200" height="1200"
                   loading="<?php echo $eager ? 'eager' : 'lazy'; ?>"
                   decoding="async">
            </button>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>

  <!-- ---------- Lightbox ---------- -->
  <div class="pala-gal__box" data-gal-box role="dialog" aria-modal="true"
       aria-label="图片查看" aria-hidden="true">

    <button class="pala-gal__btn pala-gal__btn--close" type="button"
            data-gal-close aria-label="关闭">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" aria-hidden="true">
        <path d="M6 6l12 12M18 6L6 18"/>
      </svg>
    </button>

    <button class="pala-gal__btn pala-gal__btn--prev" type="button"
            data-gal-prev aria-label="上一张">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M15 5l-7 7 7 7"/>
      </svg>
    </button>

    <img data-gal-img alt="">

    <button class="pala-gal__btn pala-gal__btn--next" type="button"
            data-gal-next aria-label="下一张">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M9 5l7 7-7 7"/>
      </svg>
    </button>

    <p class="pala-gal__counter" data-gal-counter aria-live="polite">1 / 1</p>

  </div>
</section>
<?php endif; ?>


<!-- ==================== 6. 其他别墅 ==================== -->
<?php if (!empty($lainnya)): ?>
<section class="pala-ov" aria-labelledby="pala-ov-title">

  <h2 class="pala-ov__title" id="pala-ov-title">其他别墅</h2>

  <div class="pala-ov__slider">

    <button class="pala-ov__nav pala-ov__nav--prev" type="button" aria-label="上一个">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M15 5l-7 7 7 7"/>
      </svg>
    </button>

    <button class="pala-ov__nav pala-ov__nav--next" type="button" aria-label="下一个">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
           stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M9 5l7 7-7 7"/>
      </svg>
    </button>

    <div class="pala-ov__track" tabindex="0" role="group" aria-label="其他别墅">
      <?php foreach ($lainnya as $v): ?>
        <div class="pala-ov__slide">
          <a class="pala-ov__card" href="<?php echo tpr_url($v['url']); ?>">
            <img src="<?php echo tpr_file('assets/villas/other/' . $v['slug'] . '.webp'); ?>"
                 alt="<?php echo $v['name_cn']; ?>别墅"
                 width="800" height="840" loading="lazy" decoding="async">
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