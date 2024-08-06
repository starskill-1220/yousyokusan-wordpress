<section class="p-recommend">
      <div class="inner">
        <div class="c-section-heading scroll-effect">
          <h2>めだかランキング</h2>
          <span>MEDAKA RANKING</span>
        </div>
        <?php
        $ranks = array('rank1', 'rank2', 'rank3');
        $args = array(
            'post_type' => 'goods',
            'posts_per_page' => 3,
            'tax_query' => array(
                array(
                    'taxonomy' => 'goods_tag',
                    'field'    => 'slug',
                    'terms'    => $ranks,
                ),
            ),
            'orderby' => 'tax_position',
            'order' => 'ASC',
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
        ?>
        <ul class="p-recommend__list">
            <?php while ($the_query->have_posts()): $the_query->the_post(); 
                $current_rank = wp_get_post_terms(get_the_ID(), 'goods_tag')[0]->slug;
            ?>
            <li class="p-recommend__item">
                <a href="<?php the_permalink(); ?>">
                    <div class="p-recommend__item-img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="p-recommend__item-text-box">
                        <div class="top">
                            <h3 class="p-recommend__item-title"><?php the_title(); ?></h3>
                            <p class="p-recommend__item-price"><?php echo number_format(get_field('値段')); ?></p>
                            <p class="p-recommend__item-desc"><?php echo get_field('商品説明文'); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="c-btn">詳しく見る</a>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php 
        wp_reset_postdata();
        endif; 
        ?>
      </div>
    </section>