<?php get_header(); ?>

  <main>
    <section class="l-goods page-section" id="page-goods">
      <div class="inner">
        <div class="c-section-heading">
          <h2>養殖さんのめだかたち</h2>
          <span>MEDAKATACHI</span>
        </div>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'goods',
            'posts_per_page' => 24,
            'paged' => $paged
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()):
        ?>
        <div class="p-page-goods__pagination">
          <?php
          // ページネーションの表示
          echo paginate_links(array(
              'total' => $the_query->max_num_pages,
              'current' => max(1, get_query_var('paged')),
              'prev_text' => __('&laquo; 前へ'),
              'next_text' => __('次へ &raquo;'),
          ));
          ?>
        </div>
        <ul class="l-goods__list">
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
      <?php if ($the_query->max_num_pages > 1): ?>
        <div class="p-page-goods__pagination">
          <?php
          // ページネーションの表示
          echo paginate_links(array(
              'total' => $the_query->max_num_pages,
              'current' => max(1, get_query_var('paged')),
              'prev_text' => __('&laquo; 前へ'),
              'next_text' => __('次へ &raquo;'),
          ));
          ?>
        </div>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
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
<?php get_footer(); ?>