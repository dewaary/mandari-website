<?php /* ============================================================
   THE PALA UBUD — FOOTER COMPONENT (versi Mandarin)
   Dipanggil dari halaman:  <?php require TPR_ROOT . '/footer.php'; ?>

   Blok QR dan ikon media sosial DIHAPUS — WeChat, Weibo,
   Xiaohongshu, dan Douyin belum ada akunnya. Ikon yang mengarah
   ke "#" lebih merusak kesan daripada tidak ada ikon sama sekali.
   ============================================================ */
if (!defined('TPR_BASE')) { require $_SERVER['DOCUMENT_ROOT'] . '/cn/config.php'; }
?>
<style>
/* ===== TPR FOOTER (scoped .tpr-ftr) ===== */
.tpr-ftr, .tpr-ftr * { box-sizing: border-box; margin: 0; padding: 0; }

.tpr-ftr {
  background: #f1eee4;
  color: #043323;
  font-family: var(--tpr-sans);
  padding: 88px 0 44px;
}

.tpr-ftr-inner { max-width: 1320px; margin: 0 auto; padding: 0 32px; }

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
.tpr-ftr-logo img { height: 64px; width: auto; display: block; }

.tpr-ftr-col { text-align: center; }

.tpr-ftr-col h4 {
  font-family: var(--tpr-serif);
  font-size: 26px; font-weight: 400; color: #043323;
  letter-spacing: .5px; line-height: 1.2;
  margin-bottom: 18px;
}

.tpr-ftr-col ul { list-style: none; }
.tpr-ftr-col ul li { margin-bottom: 12px; }

.tpr-ftr-col ul a {
  font-family: var(--tpr-serif);
  font-size: 17px; line-height: 1.4;
  color: #043323; text-decoration: none; opacity: .88;
  transition: color .2s, opacity .2s;
}
.tpr-ftr-col ul a:hover { color: #b08d4f; opacity: 1; }

.tpr-ftr-contact p {
  font-family: var(--tpr-serif);
  font-size: 16px; line-height: 1.55; color: #043323;
  opacity: .88; margin-bottom: 16px;
}
.tpr-ftr-contact a { color: #043323; text-decoration: none; transition: color .2s; }
.tpr-ftr-contact a:hover { color: #b08d4f; }

.tpr-ftr-divider { height: 1px; background: rgba(4,51,35,.14); margin-bottom: 40px; }

.tpr-ftr-legal {
  display: flex; justify-content: center; gap: 36px;
  margin-bottom: 20px; flex-wrap: wrap;
}
.tpr-ftr-legal a {
  font-size: 14px; color: rgba(4,51,35,.6);
  text-decoration: none; transition: color .2s;
}
.tpr-ftr-legal a:hover { color: #b08d4f; }

.tpr-ftr-copy { text-align: center; font-size: 14px; color: rgba(4,51,35,.5); }

@media (max-width: 1100px) { .tpr-ftr-top { --top-width: 100%; gap: 0 24px; } }

@media (max-width: 900px) {
  .tpr-ftr { padding-top: 64px; }
  .tpr-ftr-top { grid-template-columns: 1fr 1fr; gap: 40px 24px; padding-bottom: 44px; }
  .tpr-ftr-logo { grid-column: 1 / -1; margin-bottom: 8px; }
  .tpr-ftr-divider { margin-bottom: 30px; }
}

@media (max-width: 560px) {
  .tpr-ftr { padding-top: 56px; }
  .tpr-ftr-top { grid-template-columns: 1fr; gap: 34px; }
  .tpr-ftr-legal { gap: 24px; }
}
</style>

<footer class="tpr-ftr">
  <div class="tpr-ftr-inner">

    <div class="tpr-ftr-top">

      <div class="tpr-ftr-logo">
        <a href="<?php echo tpr_url(); ?>">
          <img src="<?php echo tpr_file('assets/website-logo.png'); ?>" alt="The Pala Ubud 帕拉乌布">
        </a>
      </div>

      <div class="tpr-ftr-col">
        <h4>别墅</h4>
        <ul>
          <li><a href="<?php echo tpr_url('villas/catur'); ?>">Catur 别墅</a></li>
          <li><a href="<?php echo tpr_url('villas/batur'); ?>">Batur 别墅</a></li>
          <li><a href="<?php echo tpr_url('villas/seraya-a'); ?>">Seraya A 别墅</a></li>
          <li><a href="<?php echo tpr_url('villas/seraya-b'); ?>">Seraya B 别墅</a></li>
          <li><a href="<?php echo tpr_url('villas/sanghyang'); ?>">Sanghyang 别墅</a></li>
          <li><a href="<?php echo tpr_url('villas/agung'); ?>">Agung 别墅</a></li>
        </ul>
      </div>

      <div class="tpr-ftr-col">
        <h4>快速链接</h4>
        <ul>
          <li><a href="<?php echo tpr_url('villas'); ?>">别墅</a></li>
          <li><a href="<?php echo tpr_url('resort'); ?>">度假村</a></li>
          <li><a href="<?php echo tpr_url('weddings'); ?>">婚礼与活动</a></li>
          <li><a href="<?php echo tpr_url('dining'); ?>">Hura 餐厅</a></li>
          <li><a href="<?php echo tpr_url('experiences'); ?>">体验</a></li>
          <li><a href="<?php echo tpr_url('contact'); ?>">联系我们</a></li>
        </ul>
      </div>

      <div class="tpr-ftr-col tpr-ftr-contact">
        <h4>联系方式</h4>
        <p>印度尼西亚 巴厘岛 吉安雅县 塔曼西林<br>Jl. Kelusu, Pejeng Kelod, Bali 80552</p>
        <p><a href="tel:+628113888565">+62 811-3888-565</a></p>
        <p><a href="mailto:enquiry@thepalaubudresort.com">enquiry@thepalaubudresort.com</a></p>
      </div>

    </div>

    <div class="tpr-ftr-divider"></div>

    <div class="tpr-ftr-legal">
      <a href="<?php echo tpr_url('terms'); ?>">条款与条件</a>
      <a href="<?php echo tpr_url('privacy'); ?>">隐私政策</a>
    </div>

    <div class="tpr-ftr-copy">
      版权所有 © <?php echo date('Y'); ?> The Pala Ubud Resort 保留所有权利
    </div>

  </div>
</footer>