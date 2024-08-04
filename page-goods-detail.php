<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"><!--文字のエンコード-->
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes"><!--viewport設定-->
      <!-- サーチコンソールのタグ -->
      <meta name="google-site-verification" content="HzRDtTknp2Q2xlW9KLiT-hlIFGiHWcm_Aym_iXF0Ghc" />
      <title>〇〇|養殖さんのめだか屋さん</title>
      <meta name="description" content="これはテストです"/>
      <!-- css -->
      <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
      <!-- slickのCSSを追加 -->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
      <!-- swiperのCSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
      <!-- Zen kaku Gothic New フォント-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">

      <script src="https://kit.fontawesome.com/03f4bb96ca.js" crossorigin="anonymous"></script>
      <!--OGPタグ/twitterカード-->
      <meta property="og:url" content="<?php echo home_url('/'); ?>" />
      <meta property="og:title" content="STARSKILL" />
      <meta property="og:type" content="website">
      <meta property="og:description" content="こんなサイト作ります。ホームページ制作は「STARSKILL」へ" />
      <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/twitter-card.png" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:site" content="" />
      <meta property="og:site_name" content="STARSKILL" />
      <meta property="og:locale" content="ja_JP" />
      <meta property="fb:app_id" content="appIDを入力" />
      <!--サイトアイコンの指定-->
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png" sizes="16x16" type="image/png" />
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png" sizes="32x32" type="image/png" />
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png" sizes="48x48" type="image/png" />
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png" sizes="62x62" type="image/png" />
      <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/icon.png" /><!--スマホ用のホーム画面アイコン画像-->
      <script>
        (function(d) {
          var config = {
            kitId: 'azf1vsl',
            scriptTimeout: 3000,
            async: true
          },
          h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
      </script>
</head>
<body>
  <div id="particles-js"></div>
  <header>
    <div class="l-header__inner">
      <a href="/">
        <h1 class="l-header__logo">
          <img src="./assets/img/common/logo.png" alt="養殖さんロゴ">
        </h1>
      </a>
      <div class="menu-trigger-box">
        <p class="menu-trigger sp" href="#">
          <span></span>
          <span></span>
          <span></span>
        </p>
      </div>
      <nav class="l-header-nav">
        <ul class="l-header-nav__list">
          <li class="l-header-nav__item"><a href="/">とっぷ</a></li>
          <li class="l-header-nav__item"><a href="/about.html">養殖さんのこだわり</a></li>
          <li class="l-header-nav__item"><a href="/goods.html">養殖さんのめだかたち</a></li>
          <!-- <li class="l-header-nav__item"><a href="<?php echo get_template_directory_uri(); ?>/">お買い物ガイド</a></li> -->
          <li class="l-header-nav__item"><a href="/question.html">よくある質問</a></li>
          <li class="l-header-nav__item"><a href="/contact.html">お問い合わせ</a></li>
        </ul>
        <ul class="l-campaign-slider__list--sp sp">
          <li class="l-campaign-slider__item"><img src="./assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="./assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="./assets/img/top/campaign-img07.jpg"></li>
          <li class="l-campaign-slider__item"><img src="./assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="./assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="./assets/img/top/campaign-img07.jpg"></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <section class="p-page-goods-detail page-section" id="page-goods-detail">
      <div class="inner">
        <div class="p-page-goods-detail__wrapper">

          <div class="p-page-goods-detail__img-wrapper">

            <div class="p-page-goods-detail__img-box swiper" id="swiperMain3">
              <ul class="p-page-goods-detail__img-main-list swiper-wrapper">
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img04.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img04.png" alt="">
                </li>
              </ul>
            </div>

            <div class="p-page-goods-detail__img-box swiper" id="swiperThumb3">
              <ul class="p-page-goods-detail__img-thumb-list swiper-wrapper">
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img04.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img01.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img02.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img03.png" alt="">
                </li>
                <li class="p-page-goods-detail__img-item swiper-slide">
                  <img src="./assets/img/top/medaka-img04.png" alt="">
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
              <a href="/contact.html" class="c-btn--cv">注文のためにメッセージを送る</a>
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
    <section class="l-question">
      <div class="inner question-inner">
        <div class="c-section-heading">
          <h2>よくある質問</h2>
          <span>Q&A</span>
        </div>
        <div class="l-question__wrapper">
          <ul class="l-question__left-list">
            <li class="l-question__item">
                <p class="l-question__item-head">地方ですが発注は可能でしょうか</p>
                  <p class="l-question__item-body">可能です。お気軽にご相談ください。可能です。お気軽にご相談ください。可能です。お気軽にご相談ください。可能です。お気軽にご相談ください。可能です。お気軽にご相談ください。可能です。お気軽にご相談ください。可能です。お気軽にご相談ください。</p>
            </li>
            <li class="l-question__item">
                <p class="l-question__item-head">地方ですが発注は可能でしょうか</p>
                  <p class="l-question__item-body">可能です。お気軽にご相談ください。</p>
            </li>
          </ul>
          <ul class="l-question__right-list">
            <li class="l-question__item">
                <p class="l-question__item-head">地方ですが発注は可能でしょうか</p>
                  <p class="l-question__item-body">可能です。お気軽にご相談ください。</p>
            </li>
            <li class="l-question__item">
                <p class="l-question__item-head">地方ですが発注は可能でしょうか地方ですが発注は可能でしょうか地方ですが発注は可能でしょうか</p>
                  <p class="l-question__item-body">可能です。お気軽にご相談ください。</p>
            </li>
          </ul>
        </div>
        <a href="" class="c-btn">よくある質問へ</a>
      </div>
    </section>
  </main>
  <footer>
    <div class="l-footer__wrapper top">
      <div class="l-footer__inner">
        <a href="">
          <div class="l-footer__logo">
            <img class="pc" src="./assets/img/common/logo.png" alt="養殖さんロゴ">
            <img class="sp" src="./assets/img/common/logo-white.png" alt="養殖さんロゴ">
          </div>
        </a>
        <nav class="l-footer__gnav">
          <li><a href="/">トップ</a></li>
          <li><a href="/goods.html">養殖さんのこだわり</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/">養殖さんのめだかたち</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/">お買い物ガイド</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/">よくある質問</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/">お問い合わせ</a></li>
        </nav>
      </div>
    </div>
    <div class="l-footer__wrapper bottom">
      <div class="l-footer__inner">
        <p class="copy-right">Copyright © YOSYOKUSAN All Rights Reserved.</p>
        <ul class="l-footer-bottom__list">
          <li><a href="">プライバシーポリシー</a></li>
          <li><a href="">特定商取引法に基づく表記</a></li>
          <li><a href="">運営会社</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- jQuery (既に読み込まれているので削除) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

  <!-- bxSlider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>

  <!-- スクロールアニメーション -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- Swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Slick Carousel (既に読み込まれているので削除) -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Particles.js -->
  <script src="./assets/js/particles.js"></script>
  <script src="./assets/js/app.js"></script>

  <!-- カスタムスクリプト -->
  <script src="./assets/js/index.js"></script>
</body>
</html>