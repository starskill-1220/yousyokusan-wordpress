<?php get_header(); ?>

  <main>
    <section class="p-page-goods-detail page-section" id="page-goods-detail">
      <div class="inner">
        <div class="p-page-goods-detail__wrapper">

          <div class="p-page-goods-detail__img-wrapper">

            <div class="p-page-goods-detail__img-box swiper" id="swiperMain3">
              <ul class="p-page-goods-detail__img-main-list swiper-wrapper">
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img04.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img04.png" alt="">
                </li>
              </ul>
            </div>

            <div class="p-page-goods-detail__img-box swiper" id="swiperThumb3">
              <ul class="p-page-goods-detail__img-thumb-list swiper-wrapper">
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img04.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img04.png" alt="">
                </li>
              </ul>
            </div>

          </div>

          <div class="p-page-goods-detail__detail-wrapper">

            <div class="p-page-goods-detail__detail-box">
              <p class="p-page-goods-detail__detail-shop-name">誠流庵 | 養殖さんのめだか屋さん</p>
              <h1 class="p-page-goods-detail__detail-title">赤ブチラメキッシングワイドフィン</h1>
              <p class="p-page-goods-detail__detail-price">1,980</p>
              <p class="p-page-goods-detail__detail-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
              <a href="<?php echo home_url('/contact'); ?>" class="c-btn--cv">注文のためにメッセージを送る</a>
            </div>
            <p class="p-page-goods-detail__detail-caution">
              <span class="p-page-goods-detail__detail-caution-title">生体を購入時の注意点</span>
              ・お届けする個体は画像と色合いや柄が異なる場合がございます。こちらについては返品、交換の対象外となります。<br>
              <br>
              ・対象地域への生体（水草を除く）の、お届けまで3日以上要する陸送は、生体死着防止のため、承り致しかねます。<br>
              <br>
              ・生体の発送日のご指定はご注文日から4日後から14日後まで承ります。
            </p>
            <p class="p-page-goods-detail__detail-caution">
              <span class="p-page-goods-detail__detail-caution-title">生体の発送ご指定について</span>
              ・お届けする個体は画像と色合いや柄が異なる場合がございます。こちらについては返品、交換の対象外となります。<br>
              <br>
              ・対象地域への生体（水草を除く）の、お届けまで3日以上要する陸送は、生体死着防止のため、承り致しかねます。<br>
              <br>
              ・生体の発送日のご指定はご注文日から4日後から14日後まで承ります。
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php get_template_part('partial/partial-question'); ?>
  </main>
<?php get_footer(); ?>