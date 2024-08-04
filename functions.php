<?php



//アイキャッチ対応
add_theme_support('post-thumbnails');


// Enterで改行、Shift+Enterで段落に変更
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_forced_root_block' );
function custom_tiny_mce_forced_root_block( $settings ) {
$settings[ 'forced_root_block' ] = false;
return $settings;
}