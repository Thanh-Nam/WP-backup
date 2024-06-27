<?php 
add_filter('rwmb_meta_boxes', 'options_meta_boxes_config');
function options_meta_boxes_config($meta_boxes) 
{
    $meta_boxes[] = array(
        'id' => 'Slide',
        'title' => 'Slide Ảnh ',
        'settings_pages' => 'banner-slider',
        'tab' => 'Slide-banner',
        'fields' => array(
            array(
                'name' => 'Slide Ảnh',
                'id' => 'slide-item',
                'type' => 'group',
                'clone' => true,
                'sort_clone' => true,
                'fields' => array(
                    array(
                        'name' => 'Ảnh',
                        'id' => 'img',
                        'type' => 'image_advanced',
                        'max_file_uploads' => 1,
                        'class' => 'hc-normal',
                        'image_size' => ''
                    ),
                    array(
                        'name' => 'Tên',
                        'id' => 'name',
                        'type' => 'text',
                        'size' => 100
                    )
                )
            )
        )
    );
    return $meta_boxes;
}