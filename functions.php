<?php



//アイキャッチ対応
add_theme_support('post-thumbnails');


// Enterで改行、Shift+Enterで段落に変更
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_forced_root_block' );
function custom_tiny_mce_forced_root_block( $settings ) {
$settings[ 'forced_root_block' ] = false;
return $settings;
}

//親子関係を作る
add_action('registered_post_type', 'kaiza_posts_hierarchical', 10, 2);
function kaiza_posts_hierarchical($post_type, $pto){
    global $wp_post_types;
    if ($post_type != 'post') return;
    $wp_post_types['post']->hierarchical = 1;
    add_post_type_support('post', 'page-attributes');
}

// ページネート不具合解消のために追加したAI提案のコード
function custom_goods_rewrite_rules() {
    add_rewrite_rule(
        'goods/page/([0-9]+)/?$',
        'index.php?pagename=goods&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_goods_rewrite_rules');

function custom_goods_query_vars($query_vars) {
    $query_vars[] = 'paged';
    return $query_vars;
}
add_filter('query_vars', 'custom_goods_query_vars');