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
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?v=<?php echo date('YmdHis'); ?>" type="text/css" />
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
      <a href="<?php echo home_url('/'); ?>">
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
          <li class="l-header-nav__item"><a href="<?php echo home_url('/'); ?>">とっぷ</a></li>
          <li class="l-header-nav__item"><a href="<?php echo home_url('/about'); ?>">養殖さんのこだわり</a></li>
          <li class="l-header-nav__item"><a href="<?php echo home_url('/goods'); ?>">養殖さんのめだかたち</a></li>
          <li class="l-header-nav__item"><a href="<?php echo home_url('/question'); ?>">よくある質問</a></li>
          <li class="l-header-nav__item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
        </ul>
        <?php get_template_part('partial/partial-campaign-sp'); ?>
      </nav>
    </div>
    <?php wp_head(); ?>
  </header>