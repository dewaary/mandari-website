<?php $tpr_active = 'wedding'; ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>婚礼与活动 | 帕拉乌布度假村 · 巴厘岛乌布</title>
  <meta name="description" content="帕拉乌布度假村包场婚礼与私人活动：河畔草坪、屋顶露台、活动草坪与 Hura 餐厅场地，可容纳 200 位宾客。">

  <link rel="stylesheet" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>">
  <link rel="stylesheet" href="css/page-wedding.css">

  <!-- Foto hero adalah elemen terbesar di layar pertama (LCP) -->
  <link rel="preload" as="image" href="assets/wedding/images/hero.webp" fetchpriority="high">
</head>

<body>

  <?php include 'header.php'; ?>


  <!-- ==================== 1. HERO ==================== -->
  <section class="pala-we-hero" aria-labelledby="pala-we-hero-title">

    <img class="pala-we-hero__bg"
         src="assets/wedding-events/images/hero-wedding-events.png"
         alt=""
         aria-hidden="true"
         fetchpriority="high"
         decoding="async">

    <div class="pala-we-hero__content">
      <p class="pala-we-hero__eyebrow">Weddings &amp; Events</p>

      <h1 class="pala-we-hero__title" id="pala-we-hero-title">
        您的庆典<br>
        私密举行
      </h1>

      <p class="pala-we-hero__subtitle">
        在静谧之中，承载每一场庆典的喜悦。
      </p>
    </div>

  </section>
  <!-- ================== END 1. HERO ================== -->

<section class="pala-wp" aria-labelledby="pala-wp-title">
  <div class="pala-wp__inner">

    <h2 class="pala-wp__main" id="pala-wp-title">
      最好的庆典<br>
      宛如归家
    </h2>

    <div class="pala-wp__divider" aria-hidden="true"></div>

    <p class="pala-wp__sub">
      一处温柔容纳您的地方：所爱之人齐聚，温暖发自真心，
      每一刻都从容展开，自成节奏。
    </p>

    <div class="pala-wp__body">
      <p>
        别墅以私人宅邸的用心打造；公共空间足够开阔，从不令人感到拥挤；
        四处场地各具气质，如同清晨之于黄昏。
      </p>

      <p>
        当庆典散场、音乐停歇，无需穿过大堂，也不必寻找车辆。
        只有河水的声音，和一张早已等候的床。
      </p>
    </div>

  </div>
</section>
<!-- =========== END SECTION 2: 核心理念 =========== -->
<section class="pala-wvid"
         aria-labelledby="pala-wvid-title"
         data-embed-url=""
         data-video-src="">

  <p class="pala-wvid__eyebrow" id="pala-wvid-title">先睹为快</p>

  <p class="pala-wvid__caption">
    这里的每一场庆典都不相同。<br>
    这是其中之一。
  </p>

  <button class="pala-wvid__frame" type="button" data-wvid-frame aria-label="播放影片">
    <img class="pala-wvid__thumb"
         src="assets/wedding/images/video-thumb.webp"
         alt="帕拉乌布度假村婚礼影片"
         width="1400" height="788" loading="lazy" decoding="async">

    <span class="pala-wvid__play" aria-hidden="true">
      <span class="pala-wvid__circle">
        <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
      </span>
    </span>

    <span class="pala-wvid__hint" data-wvid-hint>时长约 2 分钟 · 建议在 Wi-Fi 环境下观看</span>
  </button>

  <!-- Popup. Kosong sampai tombol play ditekan. -->
  <div class="pala-wvid__popup" data-wvid-popup role="dialog" aria-modal="true"
       aria-label="影片" aria-hidden="true">
    <div class="pala-wvid__popup-inner">

      <button class="pala-wvid__close" type="button" data-wvid-close aria-label="关闭">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" aria-hidden="true">
          <path d="M6 6l12 12M18 6L6 18"/>
        </svg>
      </button>

      <div data-wvid-stage style="width:100%;height:100%;"></div>

    </div>
  </div>

</section>
<!-- =========== END SECTION 3: 影片 =========== -->
<section class="pala-vn" aria-labelledby="pala-vn-title">
  <div class="pala-vn__inner">

    <p class="pala-vn__eyebrow">The Venues</p>

    <h2 class="pala-vn__title" id="pala-vn-title">
      一座庄园
      <span class="pala-vn__indent">四处场地</span>
    </h2>

    <div class="pala-vn__grid">

      <!-- ---------- Daftar ---------- -->
      <div class="pala-vn__list">

        <!-- 01 -->
        <div class="pala-vn__item" id="agung">
          <button class="pala-vn__head" type="button" aria-expanded="true">
            <span class="pala-vn__number">01</span>
            <span class="pala-vn__head-text">
              <span class="pala-vn__tag">阿贡别墅</span>
              <span class="pala-vn__name">主草坪</span>
            </span>
          </button>

          <div class="pala-vn__content">
            <div class="pala-vn__content-inner">
              <div class="pala-vn__stats">
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">容纳人数</span>
                  <span class="pala-vn__stat-value">最多 200 位宾客</span>
                </span>
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">面积</span>
                  <span class="pala-vn__stat-value">360 m²</span>
                </span>
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">尺寸</span>
                  <span class="pala-vn__stat-value">20 × 18 m</span>
                </span>
              </div>

              <div class="pala-vn__divider" aria-hidden="true"></div>

              <p class="pala-vn__desc">
                庄园中最开阔的场地。面朝森林的草坪，配备一体式宴会篷、
                专业厨房与独立服务通道。
              </p>

              <a class="pala-vn__cta" href="contact.php">查看场地详情</a>
            </div>
          </div>
        </div>

        <!-- 02 -->
        <div class="pala-vn__item" id="sanghyang">
          <button class="pala-vn__head" type="button" aria-expanded="false">
            <span class="pala-vn__number">02</span>
            <span class="pala-vn__head-text">
              <span class="pala-vn__tag">桑香别墅</span>
              <span class="pala-vn__name">屋顶露台</span>
            </span>
          </button>

          <div class="pala-vn__content">
            <div class="pala-vn__content-inner">
              <div class="pala-vn__stats">
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">容纳人数</span>
                  <span class="pala-vn__stat-value">最多 45 位宾客</span>
                </span>
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">面积</span>
                  <span class="pala-vn__stat-value">220 m²</span>
                </span>
              </div>

              <div class="pala-vn__divider" aria-hidden="true"></div>

              <p class="pala-vn__desc">
                高于树梢，向天空敞开。从清晨瑜伽到日落鸡尾酒，
                屋顶露台自然承接一天的节奏。
              </p>

              <a class="pala-vn__cta" href="contact.php">查看场地详情</a>
            </div>
          </div>
        </div>

        <!-- 03 -->
        <div class="pala-vn__item" id="hura">
          <button class="pala-vn__head" type="button" aria-expanded="false">
            <span class="pala-vn__number">03</span>
            <span class="pala-vn__head-text">
              <span class="pala-vn__tag">Hura 餐厅</span>
              <span class="pala-vn__name">餐厅与草坪</span>
            </span>
          </button>

          <div class="pala-vn__content">
            <div class="pala-vn__content-inner">
              <div class="pala-vn__stats">
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">容纳人数</span>
                  <span class="pala-vn__stat-value">最多 60 位宾客</span>
                </span>
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">面积</span>
                  <span class="pala-vn__stat-value">240 m²</span>
                </span>
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">尺寸</span>
                  <span class="pala-vn__stat-value">24 × 10 m</span>
                </span>
              </div>

              <div class="pala-vn__divider" aria-hidden="true"></div>

              <p class="pala-vn__desc">
                半开放式，从容而温暖。两侧草坪环抱，
                适合小型婚礼与晚宴。
              </p>

              <a class="pala-vn__cta" href="contact.php">查看场地详情</a>
            </div>
          </div>
        </div>

        <!-- 04 -->
        <div class="pala-vn__item" id="riverside">
          <button class="pala-vn__head" type="button" aria-expanded="false">
            <span class="pala-vn__number">04</span>
            <span class="pala-vn__head-text">
              <span class="pala-vn__tag">森林河畔</span>
              <span class="pala-vn__name">河畔场地</span>
            </span>
          </button>

          <div class="pala-vn__content">
            <div class="pala-vn__content-inner">
              <div class="pala-vn__stats">
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">容纳人数</span>
                  <span class="pala-vn__stat-value">最多 60 位宾客</span>
                </span>
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">面积</span>
                  <span class="pala-vn__stat-value">270 m²</span>
                </span>
                <span class="pala-vn__stat">
                  <span class="pala-vn__stat-label">尺寸</span>
                  <span class="pala-vn__stat-value">21 × 13 m</span>
                </span>
              </div>

              <div class="pala-vn__divider" aria-hidden="true"></div>

              <p class="pala-vn__desc">
                沿圣河帕克里桑而设，四面森林环绕，
                适合仪式与河畔晚宴。
              </p>

              <a class="pala-vn__cta" href="contact.php">查看场地详情</a>
            </div>
          </div>
        </div>

      </div>

      <!-- ---------- Panel foto ---------- -->
      <div class="pala-vn__panel">

        <span class="pala-vn__counter" data-vn-counter aria-live="polite">01 / 04</span>

        <div class="pala-vn__image is-active">
          <img src="assets/wedding-events/images/main-lawn-agung.png" alt="阿贡别墅主草坪"
               width="1200" height="900" decoding="async">
          <div class="pala-vn__label">
            <span class="pala-vn__label-venue">阿贡别墅</span>
            <span class="pala-vn__label-name">主草坪</span>
          </div>
        </div>

        <div class="pala-vn__image">
          <img src="assets/wedding-events/images/rooftop-deck.jpg" alt="桑香别墅屋顶露台"
               width="1200" height="900" loading="lazy" decoding="async">
          <div class="pala-vn__label">
            <span class="pala-vn__label-venue">桑香别墅</span>
            <span class="pala-vn__label-name">屋顶露台</span>
          </div>
        </div>

        <div class="pala-vn__image">
          <img src="assets/wedding-events/images/hura.png" alt="Hura 餐厅与草坪"
               width="1200" height="900" loading="lazy" decoding="async">
          <div class="pala-vn__label">
            <span class="pala-vn__label-venue">Hura 餐厅</span>
            <span class="pala-vn__label-name">餐厅与草坪</span>
          </div>
        </div>

        <div class="pala-vn__image">
          <img src="assets/wedding-events/images/riverside.jpg" alt="森林河畔场地"
               width="1200" height="900" loading="lazy" decoding="async">
          <div class="pala-vn__label">
            <span class="pala-vn__label-venue">森林河畔</span>
            <span class="pala-vn__label-name">河畔场地</span>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- =========== END SECTION 4: 场地 =========== -->

<section class="pala-ws" aria-labelledby="pala-ws-title">

  <div class="pala-ws__head">
    <p class="pala-ws__eyebrow">Ready When You Are</p>
    <h2 class="pala-ws__title" id="pala-ws-title">我们已准备就绪</h2>
  </div>

  <!-- 01 -->
  <div class="pala-ws__row">
    <h3 class="pala-ws__row-title">活动级基础设施</h3>
    <p class="pala-ws__row-desc">
      专门配置的电力与音响系统，可支持各种规模的婚礼、宴会与现场演出。
      设备齐全的专业厨房——包括中式炒炉——随时可供内部餐饮团队或外部承办方使用。
      大型活动所需的一切，这里都已就位。
    </p>
  </div>

  <!-- 02 -->
  <div class="pala-ws__row">
    <h3 class="pala-ws__row-title">便利的供应商通道</h3>
    <p class="pala-ws__row-desc">
      独立的服务入口与后勤区域，让婚礼策划、花艺与制作团队的车辆可直达门口。
      作业区与宾客区完全分离，布置过程始终不入视线——
      供应商全力施工，宾客只看见完成后的呈现。
    </p>
  </div>

  <!-- 03 -->
  <div class="pala-ws__row">
    <h3 class="pala-ws__row-title">餐饮方式由您决定</h3>
    <p class="pala-ws__row-desc">
      Hura 餐厅可整体包场，菜单依场合定制，并提供精选酒水与葡萄酒。
      若您希望自带餐饮团队，我们同样欢迎，
      并可全程提供庄园厨房设施的支持。
    </p>
  </div>

  <!-- 04 -->
  <div class="pala-ws__row">
    <h3 class="pala-ws__row-title">尽兴之后，也能好好休息</h3>
    <p class="pala-ws__row-desc">
      每栋别墅都完全独立——独立入口、私人泳池、专属空间。
      当夜色渐深，宾客可以回到属于自己的一隅：安静、从容，
      与刚刚结束的庆典彻底分开。热闹落幕，休息开始，两者都被妥善安排。
    </p>
  </div>

</section>
<!-- =========== END SECTION 5: 我们已准备就绪 =========== -->

<section class="pala-cp-wrap" aria-labelledby="pala-cp-title">

<div class="pala-cp" role="region" aria-labelledby="pala-cp-title">

   <div class="pala-cp__head">
     <p class="pala-cp__eyebrow">Capacity &amp; Dimensions</p>
     <h2 class="pala-cp__title" id="pala-cp-title">容纳人数与尺寸</h2>
   </div>
   
   <div class="pala-cp__wrap" tabindex="0" role="region" aria-labelledby="pala-cp-title">
     <table class="pala-cp__table">
       <caption class="pala-vp-sprite">各场地的尺寸、面积与可容纳人数</caption>
   
       <thead>
         <tr>
           <th scope="col">场地</th>
           <th scope="col">尺寸</th>
           <th scope="col">面积</th>
           <th scope="col">容纳人数</th>
         </tr>
       </thead>
   
       <tbody>
   
         <!-- 阿贡别墅 -->
         <tr class="pala-cp__group">
           <td colspan="4"><span class="pala-cp__group-label">阿贡别墅</span></td>
         </tr>
         <tr>
           <td>主草坪</td>
           <td>20 × 18 m</td>
           <td>360 m²</td>
           <td><span class="pala-cp__num">200</span></td>
         </tr>
         <tr>
           <td>迎宾休息区</td>
           <td>19 × 11 m</td>
           <td>209 m²</td>
           <td><span class="pala-cp__num">40</span></td>
         </tr>
   
         <!-- Hura 餐厅 -->
         <tr class="pala-cp__group">
           <td colspan="4"><span class="pala-cp__group-label">Hura 餐厅</span></td>
         </tr>
         <tr>
           <td>主草坪与餐厅</td>
           <td>24 × 10 m</td>
           <td>240 m²</td>
           <td><span class="pala-cp__num">60</span></td>
         </tr>
   
         <!-- 河畔草坪 -->
         <tr class="pala-cp__group">
           <td colspan="4"><span class="pala-cp__group-label">河畔草坪</span></td>
         </tr>
         <tr>
           <td>主草坪</td>
           <td>21 × 13 m</td>
           <td>270 m²</td>
           <td><span class="pala-cp__num">60</span></td>
         </tr>
   
         <!-- 桑香别墅 -->
         <tr class="pala-cp__group">
           <td colspan="4"><span class="pala-cp__group-label">桑香别墅</span></td>
         </tr>
         <tr>
           <td>屋顶露台（左）</td>
           <td>12 × 7 m</td>
           <td>84 m²</td>
           <td><span class="pala-cp__num">20</span></td>
         </tr>
         <tr>
           <td>屋顶露台（右）</td>
           <td>17 × 8 m</td>
           <td>136 m²</td>
           <td><span class="pala-cp__num">25</span></td>
         </tr>
         <tr>
           <!-- ANGKA PERLU DIPERIKSA: 12 × 4.5 m = 54 m², bukan 20 m² -->
           <td>凉亭</td>
           <td>12 × 4.5 m</td>
           <td>20 m²</td>
           <td><span class="pala-cp__num">20</span></td>
         </tr>
   
       </tbody>
     </table>
   </div>
   
   <p class="pala-cp__hint">← 左右滑动查看完整表格 →</p>
</div>


</section>
<!-- =========== END SECTION 6: 容纳人数与尺寸 =========== -->
<div class="pala-sb" role="complementary" aria-label="预订" aria-hidden="true">

  <!-- Kiri -->
  <div class="pala-sb__left">
    <p class="pala-sb__title">您的庆典由此开始</p>
    <p class="pala-sb__sub">
      计划入住？
      <a href="the-resort.php">探索度假村 →</a>
    </p>
  </div>

  <!-- Tombol -->
  <div class="pala-sb__actions">
    <a class="pala-sb__btn pala-sb__btn--ghost"
       href="assets/docs/pala-ubud-factsheet-cn.pdf" target="_blank" rel="noopener">
      下载资料手册
    </a>

    <a class="pala-sb__btn pala-sb__btn--solid" href="contact.php" data-mo-open>
  活动咨询
</a>
  </div>

</div>
<!-- =============== END STICKY BAR =============== -->

<div class="pala-mo" aria-hidden="true">
  <div class="pala-mo__overlay" data-mo-overlay>
    <div class="pala-mo__box" data-mo-box role="dialog" aria-modal="true"
         aria-labelledby="pala-mo-title">

      <button class="pala-mo__close" type="button" data-mo-close aria-label="关闭">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" aria-hidden="true">
          <path d="M6 6l12 12M18 6L6 18"/>
        </svg>
      </button>

      <!-- ---------- Formulir ---------- -->
      <div data-mo-formwrap>

        <div class="pala-mo__top">
          <p class="pala-mo__eyebrow">Event Inquiry</p>
          <h2 class="pala-mo__title" id="pala-mo-title">筹划您的专属活动</h2>
          <p class="pala-mo__desc">
            请填写以下表单，我们的团队将尽快与您联系。
          </p>
        </div>

        <form class="pala-mo__form" data-mo-form novalidate>

          <p class="pala-mo__notice" data-mo-notice hidden></p>

          <!-- Perangkap spam: manusia tidak akan pernah mengisinya -->
          <div class="pala-mo__trap" aria-hidden="true">
            <label for="pala-mo-website">Website</label>
            <input type="text" id="pala-mo-website" name="website" tabindex="-1" autocomplete="off">
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-event">活动类型</label>
            <select id="pala-mo-event" name="event" required>
              <option value="" selected hidden>请选择</option>
              <option value="婚礼">婚礼</option>
              <option value="静修与疗愈">静修与疗愈</option>
              <option value="企业活动">企业活动</option>
              <option value="家庭聚会">家庭聚会</option>
              <option value="其他活动">其他活动</option>
            </select>
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-name">姓名</label>
            <input type="text" id="pala-mo-name" name="name"
                   placeholder="您的姓名" maxlength="60" autocomplete="name" required>
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-phone">联系电话</label>
            <input type="tel" id="pala-mo-phone" name="phone"
                   placeholder="+86" inputmode="tel" autocomplete="tel" required>
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-email">邮箱地址</label>
            <input type="email" id="pala-mo-email" name="email"
                   placeholder="your@email.com" autocomplete="email" required>
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-wechat">微信号 <span class="pala-mo__optional">（选填）</span></label>
            <input type="text" id="pala-mo-wechat" name="wechat"
                   placeholder="方便我们更快与您联系" maxlength="60">
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-date">意向日期</label>
            <input type="date" id="pala-mo-date" name="date" required>
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-guests">预计宾客人数</label>
            <input type="number" id="pala-mo-guests" name="guests"
                   placeholder="60" min="10" max="500" inputmode="numeric" required>
          </div>

          <div class="pala-mo__group">
            <label for="pala-mo-notes">补充说明</label>
            <textarea id="pala-mo-notes" name="notes"
                      placeholder="请简单描述您的活动设想…" maxlength="1000" required></textarea>
          </div>

          <button class="pala-mo__submit" type="submit" data-mo-submit>
            <span class="pala-mo__text">提交咨询</span>
            <span class="pala-mo__loading">发送中…</span>
          </button>

        </form>
      </div>

      <!-- ---------- Layar berhasil ---------- -->
      <div class="pala-mo__success" data-mo-success>
        <div class="pala-mo__success-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
               stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 6 9 17l-5-5"/>
          </svg>
        </div>

        <p class="pala-mo__eyebrow">Inquiry Received</p>
        <h3 class="pala-mo__success-title">感谢您的咨询</h3>
        <p class="pala-mo__success-desc">
          我们已收到您的信息，团队将在 24 小时内与您联系。<br>
          如需即时沟通，欢迎致电 +62 811-3888-565。
        </p>

        <button class="pala-mo__success-btn" type="button" data-mo-successbtn>好的</button>
      </div>

    </div>
  </div>
</div>
<!-- =============== END MODAL =============== -->

  <?php  ?>

<script src="js/script.js?v=<?php echo filemtime('js/script.js'); ?>"></script>
</body>
</html>