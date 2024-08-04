<?php get_header(); ?>

  <main>
    <section id="fv">
      <?php get_template_part('partial/partial-fv-slider'); ?>
      <?php get_template_part('partial/partial-news'); ?>

      <div class="inner p-top__sale">
        <div class="c-section-heading pc">
          <h2>キャンペーンとか</h2>
          <span>CAMPAIGN</span>
        </div>
        <?php get_template_part('partial/partial-campaign-pc'); ?>
        <?php get_template_part('partial/partial-campaign-sp'); ?>
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
        <a class="c-btn--white" href="<?php echo home_url('/about'); ?>">養殖さんのこだわりへ</a>
      </div>
    </section>
    <?php get_template_part('partial/partial-medaka-ranking'); ?>
    <?php get_template_part('partial/partial-medaka-recommend'); ?>
    <?php get_template_part('partial/partial-question'); ?>
  </main>
<?php get_footer(); ?>
