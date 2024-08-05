

<div class="p-fv-slider__wrapper--main swiper pc" id="swiperMain1">
        <ul class="p-fv-slider__list swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'campaign',
            'posts_per_page' => 6  // 最大6つまで表示
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
            while($the_query->have_posts()): $the_query->the_post();
        ?>

            <li class="p-fv-slider__item swiper-slide">
                <a href="<?php echo get_field("飛ばしたいページ"); ?>">
                    <img src="<?php echo get_field("PC版キャンペーンバナー"); ?>" />
                </a>
            </li>

        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </ul>
      </div>
      <div class="p-fv-slider__wrapper--thumb swiper pc" id="swiperThumb1">
        <ul class="p-fv-slider__list swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'campaign',
            'posts_per_page' => 6  // 最大6つまで表示
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
            while($the_query->have_posts()): $the_query->the_post();
        ?>

            <li class="p-fv-slider__item swiper-slide">
              <img src="<?php echo get_field("PC版キャンペーンバナー"); ?>" />
            </li>

        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        </ul>
      </div>
      <div class="p-fv-slider__wrapper--sp swiper sp" id="swiperMain2">
        <ul class="p-fv-slider__list swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'campaign',
            'posts_per_page' => 6  // 最大6つまで表示
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
            while($the_query->have_posts()): $the_query->the_post();
        ?>

            <li class="p-fv-slider__item swiper-slide">
                <a href="<?php echo get_field("飛ばしたいページ"); ?>">
                    <img src="<?php echo get_field("SP版キャンペーンバナー"); ?>" />
                </a>
            </li>

        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

        </ul>
      </div>