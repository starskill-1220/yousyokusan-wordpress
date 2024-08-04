<section class="l-goods">
      <div class="inner">
        <div class="c-section-heading scroll-effect">
          <h2>オススメのめだかたち</h2>
          <span>MEDAKATACHI</span>
        </div>
        <ul class="l-goods__list">
        <?php
        $args = array(
            'post_type' => 'medaka',
            'posts_per_page' => 6  // 最大6つまで表示
        ); // カスタム投稿タイプ works
        $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <li class="l-goods__item">
            <a href="<?php the_permalink(); ?>">
              <div class="l-goods__item-img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>
              <div class="l-goods__item-text-box">
                <div class="top">
                  <h3 class="l-goods__item-title"><?php echo get_the_title(); ?></h3>
                  <p class="l-goods__item-price"><?php echo number_format( get_field("値段")); ?></p>
                  <p class="l-goods__item-desc"><?php echo get_field("商品説明文") ?></p>
                </div>
                <a href="" class="c-btn">詳しく見る</a>
              </div>
            </a>
          </li>
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
        
        </ul>
        <a href="<?php echo home_url('/goods'); ?>" class="c-btn">養殖さんのめだかたちを見る</a>
      </div>
    </section>