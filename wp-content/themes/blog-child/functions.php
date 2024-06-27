<?php
define('CPATHCHILD', get_stylesheet_directory() . '/inc');
require_once(CPATHCHILD . '/settings/config.php');
require_once(CPATHCHILD . '/widgets/config.php');
require_once(CPATHCHILD . '/custom_posttype/config.php');
require_once(CPATHCHILD . '/custom_collum_admin/config.php');


if (!function_exists('theme_setup')) :
    function theme_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'primary-menu' => __('Menu đầu trang'),
            'footer-menu' => __('Menu cuối trang'),
        ));
        add_theme_support('post-thumbnails');
        add_image_size('small', 150, 0, array('center', 'center'));
        add_image_size('medium', 400, 0, array('center', 'center'));
        add_image_size('large', 600, 0, array('center', 'center'));
        add_image_size('full', 0, 0, true);
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    }
endif;
add_action('after_setup_theme', 'theme_setup');
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function gt_get_post_view(){
    $count = get_post_meta(get_the_ID(), 'post_views_count', true);
    return $count > 0?$count:0;
}
function gt_set_post_view(){
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta($post_id, $key, true);
    $count++;
    update_post_meta($post_id, $key, $count);
}
function gt_posts_column_views($columns){
    $columns['post_views'] = 'Views';
    return $columns;
}   
function gt_posts_custom_column_views($column){
    if ($column === 'post_views') {
        echo gt_get_post_view();
    }
}