<ul class="l-campaign-slider__list--sp sp">
<?php
$args = array(
    'post_type' => 'campaign',
    'posts_per_page' => 6  // 最大6つまで表示
);
$the_query = new WP_Query($args);
if($the_query->have_posts()):
    while($the_query->have_posts()): $the_query->the_post();
?>
  <li class="l-campaign-slider__item">
    <a href="<?php echo get_field("飛ばしたいページ"); ?>">
      <img src="<?php echo get_field("PC版キャンペーンバナー"); ?>">
    </a>
  </li>
<?php
endwhile;
endif;
wp_reset_postdata();
?>
</ul>