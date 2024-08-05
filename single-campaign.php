<?php get_header(); ?>
<main>
<section class="p-page-campaign page-section" id="pageCampaign">
  <div class="inner">
    <div class="c-section-heading">
      <h2>キャンペーン情報</h2>
      <span>CAMPAIGN INFO</span>
    </div>
        <!-- クラシックエディタでの改行を反映 -->
        <?php
        function custom_content_filter($content) {
            // 画像タグを一時的に置き換え
            $content = preg_replace_callback('/<img[^>]+>/', function($matches) {
                return '{{IMG_PLACEHOLDER}}' . base64_encode($matches[0]) . '{{/IMG_PLACEHOLDER}}';
            }, $content);

            // HTMLタグを除去（画像プレースホルダーを除く）
            $content = strip_tags($content, '<br>');

            // 改行を処理
            $content = preg_replace('/\R{2,}/', "\n\n", $content);
            $content = preg_replace('/\R/', '<br>', $content);

            // 画像タグを元に戻す
            $content = preg_replace_callback('/{{IMG_PLACEHOLDER}}(.*?){{\/IMG_PLACEHOLDER}}/s', function($matches) {
                return base64_decode($matches[1]);
            }, $content);

            return $content;
        }
        ?>
        <?php
        $args = array(
          'post_type' => 'campaign',
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <div class="p-campaign__banner-box">
          <img class="pc" src="<?php echo get_field("PC版キャンペーンバナー"); ?>" alt="">
          <img class="sp" src="<?php echo get_field("SP版キャンペーンバナー"); ?>" alt="">
        </div>
        <div class="p-page-campaign__wrapper">
            <p class="p-page-campaign__title"><?php the_title(); ?></p>
            <div class="p-page-campaign__content">
              <?php echo custom_content_filter(get_the_content()); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <a href="<?php echo home_url("/"); ?>" class="c-btn">とっぷへ戻る</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>