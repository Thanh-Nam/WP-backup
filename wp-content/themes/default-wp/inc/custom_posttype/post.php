<?php
add_filter('rwmb_meta_boxes', 'tech5s_category_meta_boxes');
function tech5s_category_meta_boxes($meta_boxes)
{
    $meta_boxes[] = array(
        'title'      => 'Cấu hình danh mục tin',
        'taxonomies' => 'category',
        'fields'         => array(
            array(
                'name' => 'Hiển thị trang chủ',
                'id' => 'home',
                'type' => 'checkbox',
                'std' => 0
            )
        )
    );
    return $meta_boxes;
}