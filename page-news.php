<?php get_header(); ?>
<main>
<section class="l-news page-section" id="pageNews">
  <div class="inner">
    <div class="c-section-heading">
      <h2>お知らせ一覧</h2>
      <span>NEWS</span>
    </div>
    <div class="p-page-news">
      <ul class="p-page-news__list">
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
          'post_type' => 'news',
          'posts_per_page' => 4,
        );
        $the_query = new WP_Query($args);
        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="p-page-news__item">
            <span class="p-page-news__cat">お知らせ</span>
            <span class="p-page-news__date"><?php echo get_field("日付"); ?></span>
            <p class="p-page-news__title"><?php the_title(); ?></p>
            <div class="p-page-news__content"><?php echo custom_content_filter(get_the_content()); ?></div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>