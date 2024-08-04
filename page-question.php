<?php get_header(); ?>

  <main>
    <section class="l-question page-section" id="page-question">
      <div class="inner question-inner">
        <div class="c-section-heading">
          <h2>よくある質問</h2>
          <span>Q&A</span>
        </div>
        <div class="l-question__wrapper">
  <?php
  $args = array(
    'post_type' => 'question',
    'posts_per_page' => -1, // すべての投稿を取得
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()):
    $total_posts = $the_query->post_count;
    $half_posts = ceil($total_posts / 2);
  ?>
    <ul class="l-question__left-list">
      <?php
      $counter = 0;
      while ($the_query->have_posts()): $the_query->the_post();
        $counter++;
      ?>
        <li class="l-question__item">
          <p class="l-question__item-head"><?php the_title(); ?></p>
          <p class="l-question__item-body"><?php echo get_field('質問の答え'); ?></p>
        </li>
      <?php
        if ($counter == $half_posts) {
          echo '</ul><ul class="l-question__right-list">';
        }
      endwhile;
      ?>
    </ul>
    <?php wp_reset_postdata(); ?>
  <?php else: ?>
    <p>質問がありません。</p>
  <?php endif; ?>
</div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>