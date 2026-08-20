<?php $tpr_active = 'experiences'; ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>体验 | 帕拉乌布度假村 · 巴厘岛乌布</title>
  <meta name="description" content="从巴厘料理课、稻田体验到古农卡威石窟寺与巴图尔火山日出——帕拉乌布度假村周边的文化与自然体验。">

  <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">
  <link rel="stylesheet" href="css/page-experiences.css">

  <!-- Foto hero adalah elemen terbesar di layar pertama (LCP) -->
  <link rel="preload" as="image" href="assets/experiences/images/hero.webp" fetchpriority="high">
</head>

<body>

  <?php include 'header.php'; ?>


  <!-- ==================== 1. HERO ==================== -->
  <section class="pala-ex-hero" aria-labelledby="pala-ex-hero-title" data-hero-parallax>

    <img class="pala-ex-hero__bg"
         src="assets/experience/hero-experience.png"
         alt=""
         aria-hidden="true"
         fetchpriority="high"
         decoding="async">

    <div class="pala-ex-hero__content">
      <p class="pala-ex-hero__eyebrow">Experiences</p>

      <h1 class="pala-ex-hero__title" id="pala-ex-hero-title">被时光留住的巴厘岛</h1>

      <p class="pala-ex-hero__subtitle">
        每个月，都有值得前来的理由。
      </p>
    </div>

  </section>
  <!-- ================== END 1. HERO ================== -->

  <!-- ============= SECTION 2: 何时来巴厘岛 (CLIMATE CALENDAR) =============
     Perbedaan TERPENTING dari versi Elementor:

     Di versi lama, isi 12 bulan seluruhnya disimpan di dalam array
     JavaScript (`const months = [...]`). Artinya tidak satu kalimat
     pun terbaca Baiduspider — padahal ini konten paling bernilai di
     halaman: panduan bulan demi bulan tentang kapan datang ke Bali,
     lengkap dengan kata kunci seperti 宁静日, 加隆安节, 雨季, 旱季.

     Sekarang isinya ditulis di HTML (disembunyikan lewat CSS), dan
     JavaScript hanya memindahkannya ke panel saat bulan diklik.

     Perbedaan lain:
     - TIDAK ada <link> ke fonts.googleapis.com
     - <div> onclick jadi <button>, bisa dipilih dengan keyboard
     - Emoji dan panah diganti SVG
     - Ukuran label bulan 8,5px dinaikkan ke 12px

     >>> TANGGAL FESTIVAL PERLU DIPERBARUI <<<
     Versi lama menulis tanggal 2026: 宁静日 19 Maret, 加隆安节
     17 Juni, 库宁安节 27 Juni. Ketiganya SUDAH LEWAT. Tanggal
     spesifik sengaja dihapus dari teks di bawah; isikan kembali
     setelah tanggal 2027 dipastikan (kalender Pawukon 210 hari,
     jadi tidak bisa ditebak dari tahun sebelumnya).
     ==================================================================== -->
<section class="pala-cal" aria-labelledby="pala-cal-title">

  <div class="pala-cal__intro">
    <p class="pala-cal__eyebrow">When to Visit Bali</p>
    <h2 class="pala-cal__title" id="pala-cal-title">何时来巴厘岛</h2>
    <p class="pala-cal__sub">
      巴厘岛只有两个季节。但在这两季之中，每个月都有各自的样子。
    </p>
  </div>

  <div class="pala-cal__wrap">

    <div class="pala-cal__bar-head">
      <p class="pala-cal__year">巴厘岛 · 逐月指南</p>
      <p class="pala-cal__hint">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M12 5v14M5 12l7 7 7-7"/>
        </svg>
        点击月份查看详情
      </p>
    </div>

    <!-- ---------- Bar 12 bulan ---------- -->
    <div class="pala-cal__grid" role="group" aria-label="月份选择">

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m1" data-cal-type="wet"
                aria-label="一月">
          <span class="pala-cal__month-bar pala-cal__bg--wet">
            <span class="pala-cal__month-label">1月</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--wet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m2" data-cal-type="wet"
                aria-label="二月">
          <span class="pala-cal__month-bar pala-cal__bg--wet">
            <span class="pala-cal__month-label">2月</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--wet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m3" data-cal-type="festival"
                aria-label="三月">
          <span class="pala-cal__month-bar pala-cal__bg--festival">
            <span class="pala-cal__month-label">3月 ★</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--festival"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m4" data-cal-type="sweet"
                aria-label="四月">
          <span class="pala-cal__month-bar pala-cal__bg--sweet">
            <span class="pala-cal__month-label">4月 ✦</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--sweet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m5" data-cal-type="sweet"
                aria-label="五月">
          <span class="pala-cal__month-bar pala-cal__bg--sweet">
            <span class="pala-cal__month-label">5月 ✦</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--sweet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m6" data-cal-type="festival"
                aria-label="六月">
          <span class="pala-cal__month-bar pala-cal__bg--festival">
            <span class="pala-cal__month-label">6月 ★</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--festival"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m7" data-cal-type="peak"
                aria-label="七月">
          <span class="pala-cal__month-bar pala-cal__bg--peak">
            <span class="pala-cal__month-label">7月</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--peak"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m8" data-cal-type="sweet"
                aria-label="八月">
          <span class="pala-cal__month-bar pala-cal__bg--sweet">
            <span class="pala-cal__month-label">8月 ✦</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--sweet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m9" data-cal-type="sweet"
                aria-label="九月">
          <span class="pala-cal__month-bar pala-cal__bg--sweet">
            <span class="pala-cal__month-label">9月 ✦</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--sweet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m10" data-cal-type="sweet"
                aria-label="十月">
          <span class="pala-cal__month-bar pala-cal__bg--sweet">
            <span class="pala-cal__month-label">10月 ✦</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--sweet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m11" data-cal-type="wet"
                aria-label="十一月">
          <span class="pala-cal__month-bar pala-cal__bg--wet">
            <span class="pala-cal__month-label">11月</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--wet"></span>
        </button>

        <button class="pala-cal__month" type="button"
                data-cal-source="cal-m12" data-cal-type="wet"
                aria-label="十二月">
          <span class="pala-cal__month-bar pala-cal__bg--wet">
            <span class="pala-cal__month-label">12月</span>
          </span>
          <span class="pala-cal__dot pala-cal__dot--wet"></span>
        </button>

    </div>

    <!-- ---------- Keterangan warna ---------- -->
    <div class="pala-cal__legend">
      <span class="pala-cal__legend-item">
        <span class="pala-cal__legend-dot pala-cal__bg--wet"></span>雨季
      </span>
      <span class="pala-cal__legend-item">
        <span class="pala-cal__legend-dot pala-cal__bg--sweet"></span>✦ 最佳时节
      </span>
      <span class="pala-cal__legend-item">
        <span class="pala-cal__legend-dot pala-cal__bg--peak"></span>旺季
      </span>
      <span class="pala-cal__legend-item">
        <span class="pala-cal__legend-dot pala-cal__bg--festival-legend"></span>★ 节庆月份
      </span>
    </div>

    <!-- ---------- Panel isi ---------- -->
    <div class="pala-cal__panel" data-cal-panel>
      <div class="pala-cal__panel-inner">

        <div class="pala-cal__panel-top">
          <h3 class="pala-cal__panel-name" data-cal-name></h3>
          <span class="pala-cal__tag" data-cal-tag></span>
        </div>

        <div class="pala-cal__panel-grid">
          <div>
            <p class="pala-cal__label">气候与出行</p>
            <p class="pala-cal__text" data-cal-climate></p>

            <span class="pala-cal__festival" data-cal-festival hidden>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                   stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 2v3M12 19v3M4 12H2M22 12h-2M6 6 4.5 4.5M18 6l1.5-1.5M6 18l-1.5 1.5M18 18l1.5 1.5"/>
                <circle cx="12" cy="12" r="4"/>
              </svg>
              <span data-cal-festival-text></span>
            </span>
          </div>

          <div>
            <p class="pala-cal__label">在帕拉乌布</p>
            <p class="pala-cal__text pala-cal__text--pala" data-cal-pala></p>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- ---------- Isi 12 bulan ----------
       display:none lewat CSS, tapi TETAP ADA di HTML supaya
       seluruh teksnya bisa diindeks Baiduspider. -->
  <div class="pala-cal__data" aria-hidden="true">

    <div id="cal-m1" data-name="一月" data-tag="雨季">
      <p data-climate>巴厘岛最安静的月份。清晨天空常常晴朗，午后的阵雨来得快也去得快，通常一小时内便停。气温维持在 27–29°C。游客人数全年最少——道路不拥堵，餐厅有位，整座岛按自己的节奏缓缓移动。稻田是饱满而鲜亮的绿。</p>
      <p data-pala>此时的庄园最为私密。无需刻意安排——泳池是您的，别墅是您的，日子没有议程。适合只想慢下来、好好睡一觉的人。</p>
    </div>

    <div id="cal-m2" data-name="二月" data-tag="雨季">
      <p data-climate>与一月相似——温暖、葱郁、安静，是一年中最绿的月份之一。午后常有短暂降雨，但清晨往往很美。适合想避开人潮、也想避开高价的旅客。</p>
      <p data-pala>在稻田升起的薄雾中醒来。雨来之前，先在泳池边度过一个上午。回到一栋完全像家的别墅。您不必赶去任何地方。</p>
    </div>

    <div id="cal-m3" data-name="三月" data-tag="★ 节庆月份">
      <p data-climate>三月是巴厘历法中最不寻常的月份之一。宁静日前夜，Ogoh-Ogoh 巡游填满街道——巨大的纸扎恶灵像在火把与鼓声中穿过黑夜。随后的宁静日当天，整座岛屿陷入 24 小时的静默：不点灯、无车行、无声响，连机场也关闭。</p>
      <p data-pala>我们的别墅本就是乌布最安静的地方之一。而在宁静日，整座岛屿与我们一同安静。建议连住两天——先看巡游的热烈，再体会随之而来的深沉寂静。</p>
      <p data-festival>★ 宁静日与 Ogoh-Ogoh 巡游</p>
    </div>

    <div id="cal-m4" data-name="四月" data-tag="✦ 最佳时节">
      <p data-climate>旱季开始，岛屿随之转变。天空晴朗，湿度降低，气温约 26–28°C。游客人数仍延续雨季的低位——完美的天气配上空旷的道路，是最被低估的到访月份之一。</p>
      <p data-pala>四月的清晨适合什么都不做。推开别墅的门，让干爽的空气进来，在泳池边吃早餐。庄园安静，白昼漫长，是真正能恢复元气的地方。</p>
    </div>

    <div id="cal-m5" data-name="五月" data-tag="✦ 最佳时节">
      <p data-climate>天气持续极佳——干爽、晴朗，傍晚凉意宜人。旺季人潮尚未到来，价格仍然合理。在熟悉这座岛的人眼中，五月被公认为造访巴厘岛的最佳月份。</p>
      <p data-pala>订下别墅住上一周，然后什么都少做。泳池、河边散步、上午的料理课、傍晚在 Hura 餐厅用餐。这样的假期，会让某些东西重新归位。</p>
    </div>

    <div id="cal-m6" data-name="六月" data-tag="★ 节庆月份">
      <p data-climate>旱季进入盛期，加隆安节到来——这是巴厘岛视觉上最壮观的节庆之一。高高的竹制 penjor 装饰沿路而立。十天之后是库宁安节。岛上节庆气氛浓厚、热闹而充满生气。住宿请务必提前预订。</p>
      <p data-pala>没有比乌布北部的私人别墅更适合体验加隆安节的落脚点。清晨看着 penjor 一根根竖起，然后回到庄园的宁静之中。</p>
      <p data-festival>★ 加隆安节与库宁安节</p>
    </div>

    <div id="cal-m7" data-name="七月" data-tag="旺季">
      <p data-climate>一年中最繁忙的月份。气温处于全年最低（约 24–26°C），天空稳定晴朗。乌布人满为患，道路繁忙，热门餐厅需要预订。请提前规划——此时的岛屿最有活力。</p>
      <p data-pala>庄园是七月人潮之外真正的退隐之所。每天结束时回到这里，喧嚣便完全消失。别墅、泳池与河谷，一如既往地私密。</p>
    </div>

    <div id="cal-m8" data-name="八月" data-tag="✦ 最佳时节">
      <p data-climate>旺季开始缓和，而天气依旧完美。温暖、干爽，空间逐渐宽松——经过七月之后，岛屿重新开始呼吸。这是最被低估的月份之一，兼具极佳的天候与更从容的氛围。</p>
      <p data-pala>别墅完全属于您，天气处于最佳状态，而巴厘岛正在安静下来。漫长的清晨、慵懒的午后，以及会让人考虑延长行程的夜晚。</p>
    </div>

    <div id="cal-m9" data-name="九月" data-tag="✦ 最佳时节">
      <p data-climate>七月所拥有的一切，却没有人潮。天空晴朗，气温舒适，整座岛屿都透着一种明显的松弛。餐厅有位，道路通畅，巴厘人似乎在旺季之后长舒了一口气。</p>
      <p data-pala>在泳池边度过安静的清晨。午后沿帕克里桑河散步。夜晚一直延续到它自己结束。九月的帕拉乌布，正是一个好假期该有的样子。</p>
    </div>

    <div id="cal-m10" data-name="十月" data-tag="✦ 最佳时节">
      <p data-climate>旱季的最后一个完整月份。金色的午后光线、温暖的气温，游客极少。一种过渡中的美——岛屿仍然干爽清朗，但已能感觉到绿意正在回来。这大概是巴厘岛最上镜的月份。</p>
      <p data-pala>十月的光线会在稻田上做出某种特别的事。请至少住上五晚，让它慢慢发生。这里没有行程表——只有日子、别墅，和那条河。</p>
    </div>

    <div id="cal-m11" data-name="十一月" data-tag="雨季">
      <p data-climate>雨季回来了。清晨仍可能晴朗温暖，但午后的阵雨相当规律。地貌重新转为翠绿。价格下降，游客变少，岛屿回到它自己。适合看重真实感更甚于天气保证的旅客。</p>
      <p data-pala>雨落在私人泳池上，本身就是一种享受。别墅保有它的暖意，而当水声到来，庄园的声音会完全改变。那是另一种美。</p>
    </div>

    <div id="cal-m12" data-name="十二月" data-tag="雨季">
      <p data-climate>节庆季节把游客带向巴厘岛南部——水明漾、canggu 与库塔热闹而喧嚷。但在乌布以北，节奏截然不同：温暖、葱郁、不慌不忙。适合想要一个有意义的年末小憩的人。</p>
      <p data-pala>帕拉乌布的十二月是一场安静的庆祝。别墅、您选择带来的人，以及一个不知道也不在意此刻是几月的地方。最好的那一种假期。</p>
    </div>

  </div>

</section>
<!-- =========== END SECTION 2: 何时来巴厘岛 =========== -->
<section class="pala-fest" aria-labelledby="pala-fest-title">

  <div class="pala-fest__intro">
    <p class="pala-fest__eyebrow">Bali Festival Calendar</p>
    <h2 class="pala-fest__title" id="pala-fest-title">巴厘岛节庆日历</h2>
    <p class="pala-fest__sub">
      三个值得为之安排行程的理由。
    </p>
  </div>

  <!-- ---------- 01 · 宁静日 ---------- -->
  <div class="pala-fest__block">
    <button class="pala-fest__head" type="button">
      <img class="pala-fest__img" src="assets/experience/festival/1.png"
           alt="Ogoh-Ogoh 巡游" width="1600" height="900" loading="lazy" decoding="async">
      <span class="pala-fest__overlay"></span>
      <span class="pala-fest__num" aria-hidden="true">01</span>

      <span class="pala-fest__content">
        <span class="pala-fest__left">
          <span class="pala-fest__date">每年三月 · 巴厘历新年</span>
          <span class="pala-fest__name">
            宁静日与 Ogoh-Ogoh 巡游
            <span class="pala-fest__name-latin">Nyepi</span>
          </span>
          <span class="pala-fest__tagline">
            两天，两种极端。世上最不寻常的体验之一。
          </span>
        </span>

        <span class="pala-fest__toggle">
          <span class="pala-fest__toggle-btn">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M6 9l6 6 6-6"/>
            </svg>
          </span>
          <span class="pala-fest__toggle-label">展开</span>
        </span>
      </span>
    </button>

    <div class="pala-fest__text">
      <div class="pala-fest__text-inner">
        <div>
          <p>宁静日的前夜属于 Ogoh-Ogoh。夜色降临时，巨大的纸扎恶灵像——
             由各社区花费数周制作，尺度与细节都令人惊叹——在火把的光照下穿过街道。
             甘美兰的鼓声层层推高，火光四处跃动。整场巡游喧腾、直接，充满生命力。
             然后，在午夜，一切停止。</p>
          <p>翌日，宁静日开始。巴厘历新年不以庆祝标记，而以静默标记。
             全岛遵守「四禁」：不生火与点灯、不劳作、不出行、不娱乐。</p>
        </div>
        <div>
          <p>前一夜还满是喧嚣的街道，此刻空无一人。机场关闭。
             即便是游客也须留在室内。二十四小时之内，巴厘岛从世界上消失。</p>
          <p>无论以什么标准衡量，这都是巴厘印度教历法中最不寻常的一天——
             也是任何旅人在任何地方都难以获得的、最有力量的体验之一。</p>
          <a class="pala-fest__link" href="https://nyepi.com/" target="_blank" rel="noopener">
            了解更多 · nyepi.com →
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ---------- 02 · 加隆安节与库宁安节 ---------- -->
  <div class="pala-fest__block">
    <button class="pala-fest__head" type="button">
      <img class="pala-fest__img" src="assets/experience/festival/2.png"
           alt="加隆安节的 penjor 竹饰" width="1600" height="900" loading="lazy" decoding="async">
      <span class="pala-fest__overlay"></span>
      <span class="pala-fest__num" aria-hidden="true">02</span>

      <span class="pala-fest__content">
        <span class="pala-fest__left">
          <span class="pala-fest__date">每 210 天一次 · 两节相隔十日</span>
          <span class="pala-fest__name">
            加隆安节与库宁安节
            <span class="pala-fest__name-latin">Galungan &amp; Kuningan</span>
          </span>
          <span class="pala-fest__tagline">
            当祖先归来——整座岛屿一同庆祝。
          </span>
        </span>

        <span class="pala-fest__toggle">
          <span class="pala-fest__toggle-btn">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M6 9l6 6 6-6"/>
            </svg>
          </span>
          <span class="pala-fest__toggle-label">展开</span>
        </span>
      </span>
    </button>

    <div class="pala-fest__text">
      <div class="pala-fest__text-inner">
        <div>
          <p>加隆安节是巴厘印度教历法中最重要的节日之一。
             它依循 Pawukon 循环，每 210 天到来一次，标志着祖先的灵魂
             回到人间探望家人的时刻。加隆安当天清晨，巴厘岛的每一条路都会改变模样：
             高高的竹制 penjor 优雅弯垂，以椰叶、编织供品与鲜花装饰，
             竖立在每户人家与每座庙宇门前。</p>
          <p>家人团聚，祈祷举行，整座岛屿浮现出一种难以描述、也难以忘记的
             专注虔敬。</p>
        </div>
        <div>
          <p>十天之后，库宁安节标志着节庆期的结束——祖先返回灵界，
             一种更安静的感恩笼罩全岛。黄姜饭、黑白格纹的 poleng 布，
             以及最后的供品，构成这一天的样貌。</p>
          <a class="pala-fest__link" href="https://bali.com/bali/travel-guide/culture/galungan/"
             target="_blank" rel="noopener">
            了解更多 · bali.com →
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ---------- 03 · 巴厘艺术节 ---------- -->
  <div class="pala-fest__block">
    <button class="pala-fest__head" type="button">
      <img class="pala-fest__img" src="assets/experience/festival/3.png"
           alt="巴厘艺术节表演" width="1600" height="900" loading="lazy" decoding="async">
      <span class="pala-fest__overlay"></span>
      <span class="pala-fest__num" aria-hidden="true">03</span>

      <span class="pala-fest__content">
        <span class="pala-fest__left">
          <span class="pala-fest__date">每年六月中至七月中</span>
          <span class="pala-fest__name">
            巴厘艺术节
            <span class="pala-fest__name-latin">Pesta Kesenian Bali</span>
          </span>
          <span class="pala-fest__tagline">
            整整一个月的活态文化——巴厘岛规模最大的年度艺术庆典。
          </span>
        </span>

        <span class="pala-fest__toggle">
          <span class="pala-fest__toggle-btn">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M6 9l6 6 6-6"/>
            </svg>
          </span>
          <span class="pala-fest__toggle-label">展开</span>
        </span>
      </span>
    </button>

    <div class="pala-fest__text">
      <div class="pala-fest__text-inner">
        <div>
          <p>自 1979 年起，巴厘艺术节每年将全岛各地的艺术家、表演者与文化团体
             聚集在一起，以长达一个月的时间庆祝巴厘的艺术传承。
             艺术节以登巴萨的盛大服饰巡游揭开序幕——数千名身着传统服装的表演者，
             代表巴厘岛的每一个县，这场活动通常有印尼总统出席。</p>
          <p>整个月里，登巴萨的巴厘艺术中心每日上演传统舞蹈与甘美兰乐团演出，
             并举办手工艺展览、饮食展示与各类竞赛。</p>
        </div>
        <div>
          <p>雷贡舞、巴龙舞、凯恰克舞，以及数十种地方舞蹈形式轮番登台。
             乐器匠人、织者、画家与木雕师展出的作品，
             承载着数百年积累的工艺传统。</p>
          <p>对于想真正理解巴厘文化——而非只停留在面向游客的表层——的人来说，
             艺术节不可错过。那是这座岛屿把最好的作品，呈现给自己看。</p>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- =========== END SECTION 3: 巴厘岛节庆日历 =========== -->

<!-- ============= SECTION 4: 规划您的行程 (CTA) =============
     Perbedaan dari versi Elementor:
     - TIDAK ada <link> ke fonts.googleapis.com
     - Foto memakai <img> (bukan CSS background-image) supaya
       loading="lazy" bekerja
     - filter: blur(18px) pada gradien kartu dibuang — mahal untuk
       GPU dan tidak menambah apa pun secara visual, apalagi
       kartunya ada empat
     - TOMBOL DITAMBAHKAN: CSS untuk .cta-btn-ghost dan
       .cta-btn-solid sudah ada di versi lama, tapi tombolnya tidak
       pernah ditulis di HTML — jadi section ajakan ini tidak punya
       ajakan apa pun
     - Kartu tidak lagi <a href="#">. Tautan yang tidak menuju
       ke mana-mana lebih merugikan daripada kartu biasa; tindakan
       dialihkan ke tombol di bawah

     CATATAN: keempat tempat ini sama persis dengan section 6 di
     homepage (乌布之外). Kalau nanti dibuat halaman detail per
     tempat, kartu di sini bisa diubah jadi tautan.
     ==================================================================== -->
<section class="pala-cta" aria-labelledby="pala-cta-title">

  <div class="pala-cta__cards">

    <figure class="pala-cta__card">
      <img src="assets/experience/cta/1.jpg" alt="佩内格利普兰传统村落"
           width="600" height="800" loading="lazy" decoding="async">
      <figcaption class="pala-cta__card-info">
        <span class="pala-cta__card-region">巴厘岛北部</span>
        <span class="pala-cta__card-name">佩内格利普兰村</span>
        <span class="pala-cta__card-desc">
          巴厘岛最整洁、最古老的村落之一——竹径深深，传统仍活在日常之中。
        </span>
      </figcaption>
    </figure>

    <figure class="pala-cta__card">
      <img src="assets/experience/cta/2.jpg" alt="古农卡威石窟寺"
           width="600" height="800" loading="lazy" decoding="async">
      <figcaption class="pala-cta__card-info">
        <span class="pala-cta__card-region">文化古迹</span>
        <span class="pala-cta__card-name">古农卡威 · 塔曼西林</span>
        <span class="pala-cta__card-desc">
          稻田旁的河谷崖壁上，凿刻着千年之前的石窟神龛。
        </span>
      </figcaption>
    </figure>

    <figure class="pala-cta__card">
      <img src="assets/experience/cta/3.jpg" alt="巴图尔火山日出"
           width="600" height="800" loading="lazy" decoding="async">
      <figcaption class="pala-cta__card-info">
        <span class="pala-cta__card-region">日出</span>
        <span class="pala-cta__card-name">巴图尔火山日出</span>
        <span class="pala-cta__card-desc">
          破晓前启程攀登，换来云海与火山口之上的日出。
        </span>
      </figcaption>
    </figure>

    <figure class="pala-cta__card">
      <img src="assets/experience/cta/4.jpg" alt="蒂尔塔冈加水宫"
           width="600" height="800" loading="lazy" decoding="async">
      <figcaption class="pala-cta__card-info">
        <span class="pala-cta__card-region">巴厘岛东部</span>
        <span class="pala-cta__card-name">蒂尔塔冈加水宫</span>
        <span class="pala-cta__card-desc">
          王家水宫：池水、喷泉，与踏石而过的莲池。
        </span>
      </figcaption>
    </figure>

  </div>

  <p class="pala-cta__eyebrow">Plan Your Journey</p>

  <h2 class="pala-cta__title" id="pala-cta-title">
    每个季节<br>
    都有前来的理由
  </h2>

  <div class="pala-cta__divider" aria-hidden="true"></div>

  <p class="pala-cta__sub">
    您的专属管家会安排好一切——用车、时间、当地向导，
    以及其间的每一个片刻。
  </p>
</section>
<!-- =========== END SECTION 4: 规划您的行程 =========== -->
<div class="pala-sb" role="complementary" aria-label="预订" aria-hidden="true">

  <!-- Kiri -->
  <div class="pala-sb__left">
    <p class="pala-sb__title">入住帕拉乌布</p>
    <p class="pala-sb__sub">
      寻找属于您的静谧之乐。
      <a href="villas.php">查看别墅 →</a>
    </p>
  </div>

  <!-- Tombol -->
  <div class="pala-sb__actions">
    <a class="pala-sb__btn pala-sb__btn--ghost" href="contact.php">联系我们</a>

    <a class="pala-sb__btn pala-sb__btn--solid"
       href="mailto:enquiry@thepalaubudresort.com?subject=%E9%A2%84%E8%AE%A2%E5%92%A8%E8%AF%A2%20%C2%B7%20%E5%B8%95%E6%8B%89%E4%B9%8C%E5%B8%83%E5%BA%A6%E5%81%87%E6%9D%91&body=%E6%82%A8%E5%A5%BD%EF%BC%8C%E6%88%91%E6%83%B3%E5%92%A8%E8%AF%A2%E4%BB%A5%E4%B8%8B%E9%A2%84%E8%AE%A2%EF%BC%9A%0D%0A%0D%0A%E5%85%A5%E4%BD%8F%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E9%80%80%E6%88%BF%E6%97%A5%E6%9C%9F%EF%BC%9A%0D%0A%E5%85%A5%E4%BD%8F%E4%BA%BA%E6%95%B0%EF%BC%9A%0D%0A%E6%84%8F%E5%90%91%E5%88%AB%E5%A2%85%EF%BC%9A%0D%0A%E6%84%9F%E5%85%B4%E8%B6%A3%E7%9A%84%E4%BD%93%E9%AA%8C%EF%BC%9A%0D%0A%E8%81%94%E7%B3%BB%E7%94%B5%E8%AF%9D%EF%BC%9A%0D%0A%0D%0A">
      立即预订
    </a>
  </div>

</div>
<!-- =============== END STICKY BAR =============== -->

  <?php  ?>

  <script src="js/script.js?v=<?php echo filemtime('js/script.js'); ?>"></script>
</body>
</html>