<?php 
add_filter('rwmb_meta_boxes', 'options_meta_boxes_config_statis');
function options_meta_boxes_config_statis($meta_boxes) 
{
    $meta_boxes[] = array(
        'id' => 'Statis',
        'title' => 'Thống kê ',
        'settings_pages' => 'statis-slide',
        'tab' => 'statis-config',
        'fields' => array(
            array(
                'name' => 'Thống kê',
                'id' => 'statis-item',
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