<footer>
    <div class="l-footer__wrapper top">
      <div class="l-footer__inner">
        
          <div class="l-footer__logo">
            <a href="<?php echo home_url('/'); ?>">
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="養殖さんロゴ">
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-white.png" alt="養殖さんロゴ">
            </a>
        </div>
        <nav class="l-footer__gnav">
          <li><a href="<?php echo home_url('/'); ?>">トップ</a></li>
          <li><a href="<?php echo home_url('/about'); ?>">養殖さんのこだわり</a></li>
          <li><a href="<?php echo home_url('/goods'); ?>">養殖さんのめだかたち</a></li>
          <li><a href="<?php echo home_url('/question'); ?>">よくある質問</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
        </nav>
      </div>
    </div>
    <div class="l-footer__wrapper bottom">
      <div class="l-footer__inner">
        <p class="copy-right">Copyright © YOSYOKUSAN All Rights Reserved.</p>
        <ul class="l-footer-bottom__list">
          <li><a href="<?php echo home_url('/news'); ?>">お知らせ一覧</a></li>
          <li><a href="<?php echo home_url('/guide'); ?>">お買い物ガイド</a></li>
          <li><a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシーについて</a></li>
          <li><a href="<?php echo home_url('/scta'); ?>">特定商取引法に基づく表記</a></li>
          <li><a href="<?php echo home_url('/company'); ?>">運営会社</a></li>
        </ul>
      </div>
    </div>
    <?php wp_footer(); ?>
  </footer>

  <!-- jQuery (既に読み込まれているので削除) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

  <!-- bxSlider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>

  <!-- パララックス -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/rellax.min.js"></script>
  <!-- スクロールアニメーション -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Slick Carousel (既に読み込まれているので削除) -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Particles.js -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/particles.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>

  <!-- カスタムスクリプト -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
</body>
</html>