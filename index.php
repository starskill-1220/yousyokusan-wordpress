<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"><!--文字のエンコード-->
  
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes"><!--viewport設定-->
      <!-- サーチコンソールのタグ -->
      <meta name="google-site-verification" content="HzRDtTknp2Q2xlW9KLiT-hlIFGiHWcm_Aym_iXF0Ghc" />
      <title>養殖さんのめだか屋さん</title>
      <meta name="description" content="これはテストです"/>
      <!-- css -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" />
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="養殖さんロゴ">
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
          <li class="l-header-nav__item"><a href="<?php echo get_template_directory_uri(); ?>/">とっぷ</a></li>
          <li class="l-header-nav__item"><a href="<?php echo get_template_directory_uri(); ?>/about.html">養殖さんのこだわり</a></li>
          <li class="l-header-nav__item"><a href="<?php echo get_template_directory_uri(); ?>/goods.html">養殖さんのめだかたち</a></li>
          <!-- <li class="l-header-nav__item"><a href="<?php echo get_template_directory_uri(); ?>/">お買い物ガイド</a></li> -->
          <li class="l-header-nav__item"><a href="/question.html">よくある質問</a></li>
          <li class="l-header-nav__item"><a href="/contact.html">お問い合わせ</a></li>
        </ul>
        <ul class="l-campaign-slider__list--sp sp">
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg"></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <section id="fv">
      <div class="p-fv-slider__wrapper--main swiper pc" id="swiperMain1">
        <ul class="p-fv-slider__list swiper-wrapper">
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg" /></a></li>
          
        </ul>
      </div>
      <div class="p-fv-slider__wrapper--thumb swiper pc" id="swiperThumb1">
        <ul class="p-fv-slider__list swiper-wrapper">
          <li class="p-fv-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg" /></li>
          <li class="p-fv-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg" /></li>
          <li class="p-fv-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg" /></li>
          <li class="p-fv-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg" /></li>
          <li class="p-fv-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg" /></li>
          <li class="p-fv-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg" /></li>
        </ul>
      </div>
      <div class="p-fv-slider__wrapper--sp swiper sp" id="swiperMain2">
        <ul class="p-fv-slider__list swiper-wrapper">
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/fv-img01__sp.png" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img01.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img02.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img03.jpg" /></a></li>
          <li class="p-fv-slider__item swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img04.jpg" /></a></li>

        </ul>
      </div>
      <ul class="p-fv-news__list">
        <li class="p-fv-news__item"><a href="#"><span class="p-fv-news__cat">お知らせ</span><span class="p-fv-news__date">2024.07.08</span>これはテストECサイトを開設しました。</a></li>
        <li class="p-fv-news__item"><a href="#"><span class="p-fv-news__cat">お知らせ</span><span class="p-fv-news__date">2024.07.08</span>ECサイトを開設しました。</a></li>
        <li class="p-fv-news__item"><a href="#"><span class="p-fv-news__cat">お知らせ</span><span class="p-fv-news__date">2024.07.08</span>ECサイトを開設しました。</a></li>
      </ul>

      <div class="inner p-top__sale">
        <div class="c-section-heading pc">
          <h2>キャンペーンとか</h2>
          <span>CAMPAIGN</span>
        </div>
        <ul class="l-campaign-slider__list--pc pc">
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg"></li>
        </ul>
        <ul class="l-campaign-slider__list--sp sp">
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img05.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img06.jpg"></li>
          <li class="l-campaign-slider__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/campaign-img07.jpg"></li>
        </ul>
        <!-- <a href="" class="c-btn">おすすめセットはこちら</a> -->
      </div>
    </section>

    <section class="p-about">
      <div class="p-about__img-box">
        <img class="rellax pc" data-rellax-speed="8" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/section-img01.png" alt="">
        <img class="rellax sp" data-rellax-speed="3" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/section-img01.png" alt="">
      </div>
      <div class="p-about__wrapper">
        <div class="c-section-heading--white">
          <h2>どの家庭にも<br class="sp">お手軽な「和」を</h2>
          <span>JAPANESE SCENERY</span>
        </div>
        <p class="p-about__text">
          初めまして、「養殖さん」と申します。<br>
          福岡を拠点にYoutubeで動画を投稿している、一応、メダカ系？YouTuberです(笑)<br>
          大分県にある養魚場では、主に【三色】や【紅白】のメダカに力を入れております。<br><br>

          もちろん、宝石が敷き詰められたような美しいラメ系のメダカも魅力的ですが、<br>
          私は小さい頃から錦鯉が好きでしたので、初めて三色、紅白のメダカを見た時は<br>
          本当に衝撃でした。まるで「ミニチュアの錦鯉だ！」と思ったからです。<br>
          しかもブクブク酸素が必要ないという衝撃(笑)<br><br>

          池を作るような庭の広さやお金がなくとも<br>
          「これなら、どこの家庭でもお手軽に「和」を楽しむ事が出来る！」<br>
          そう思った私は、より多くのお客様に、この「ミニチュア錦鯉」をご提供出来るよう<br>
          三色と紅白のメダカに絞り、今も養殖に励んでおります。<br>
        </p>
        <a class="c-btn--white" href="/about.html">養殖さんのこだわりへ</a>
      </div>
    </section>
    <section class="p-recommend">
      <div class="inner">
        <div class="c-section-heading scroll-effect">
          <h2>めだかランキング</h2>
          <span>MEDAKA RANKING</span>
        </div>
        <ul class="p-recommend__list">
          <li class="p-recommend__item">
            <a href="/goods-detail.html">
              <div class="p-recommend__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
              </div>
              <div class="p-recommend__item-text-box">
                <div class="top">
                  <h3 class="p-recommend__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="p-recommend__item-price">1,980</p>
                  <p class="p-recommend__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="p-recommend__item">
            <a href="/goods-detail.html">
              <div class="p-recommend__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img02.png" alt="">
              </div>
              <div class="p-recommend__item-text-box">
                <div class="top">
                  <h3 class="p-recommend__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="p-recommend__item-price">1,980</p>
                  <p class="p-recommend__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="p-recommend__item">
            <a href="/goods-detail.html">
              <div class="p-recommend__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img03.png" alt="">
              </div>
              <div class="p-recommend__item-text-box">
                <div class="top">
                  <h3 class="p-recommend__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="p-recommend__item-price">1,980</p>
                  <p class="p-recommend__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="l-goods">
      <div class="inner">
        <div class="c-section-heading scroll-effect">
          <h2>オススメのめだかたち</h2>
          <span>MEDAKATACHI</span>
        </div>
        <ul class="l-goods__list">
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img02.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img03.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img04.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img02.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img03.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img04.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <li class="l-goods__item">
            <a href="/goods-detail.html">
              <div class="l-goods__item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/medaka-img01.png" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title">赤ブチラメキッシングワイドフィン</h3>
                  <p class="l-goods__item-price">1,980</p>
                  <p class="l-goods__item-desc">4匹のセットですので、繁殖にオススメのセット販売になります。</p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
        </ul>
        <a href="/goods.html" class="c-btn">養殖さんのめだかたちを見る</a>
      </div>
    </section>
    <section class="l-question scroll-effect">
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
        <a href="<?php echo get_template_directory_uri(); ?>/question.html" class="c-btn">よくある質問へ</a>
      </div>
    </section>
  </main>
  <footer>
    <div class="l-footer__wrapper top">
      <div class="l-footer__inner">
        <a href="">
          <div class="l-footer__logo">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.png" alt="養殖さんロゴ">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-white.png" alt="養殖さんロゴ">
          </div>
        </a>
        <nav class="l-footer__gnav">
          <li><a href="<?php echo get_template_directory_uri(); ?>/">トップ</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/">養殖さんのこだわり</a></li>
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