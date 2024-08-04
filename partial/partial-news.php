<ul class="p-fv-news__list">
  <?php
  $args = array(
      'post_type' => 'news',
      'posts_per_page' => 10,
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()):
  ?>
  <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
  <li class="p-fv-news__item">
    <a href="<?php echo home_url("/news"); ?>">
      <span class="p-fv-news__cat">お知らせ</span>
      <span class="p-fv-news__date"><?php echo get_field("日付"); ?></span>
      <p><?php the_title(); ?></p>
    </a>
  </li>
  <?php endwhile; ?>
  <?php endif; ?>
</ul>