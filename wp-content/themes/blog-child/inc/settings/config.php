<?php
require_once('config_main.php');
require_once('config_slide.php');
require_once('config_statis.php');
add_filter('mb_settings_pages', 'settings_pages');
function settings_pages($settings_pages) 
{
    $settings_pages[] = array(
        'id' => 'my-options',
        'menu_title' => 'Cấu hình chung',
        'option_name' => 'my_options',
        'icon_url' => 'dashicons-images-alt',
        'tabs' => array(
            'base-setting' => 'Cấu hình chung',
            'social-setting' => 'Mạng xã hội',
        ),
        'submenu_title' => 'Cấu hình'
    );
    
    $settings_pages[] = array(
        'id' => 'banner-slider',
        'option_name' => 'my_options',
        'menu_title' => 'Slider',
        'parent' => 'my-options',
        'tabs' => array(
            'Slide-banner' => 'Silder trang chủ',
        ),
        'submenu_title' => 'Slider'
    );

    $settings_pages[] = array(
        'id' => 'statis-slide',
        'option_name' => 'my_options',
        'menu_title' => 'Thống kê',
        'parent' => 'my-options',
        'tabs' => array(
            'statis-config' => 'Thống kê',
        ),
        'submenu_title' => 'Statis'
    );
    
    return $settings_pages;
}
