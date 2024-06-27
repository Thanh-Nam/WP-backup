<?php
function tech5s_register_post_type_product()
{
    $args = array(
        'label' => esc_html__('Sản phẩm', 'product'),
        'labels' => array(
            'menu_name' => esc_html__('Sản phẩm', 'product'),
            'name_admin_bar' => esc_html__('Sản phẩm', 'product'),
            'add_new' => esc_html__('Thêm sản phẩm', 'product'),
            'add_new_item' => esc_html__('Thêm sản phẩm', 'product'),
            'new_item' => esc_html__('New Sản phẩm', 'product'),
            'edit_item' => esc_html__('Sửa sản phẩm', 'product'),
            'view_item' => esc_html__('Xem Sản phẩm', 'product'),
            'update_item' => esc_html__('Cập nhật sản phẩm', 'product'),
            'all_items' => esc_html__('Tất cả sản phẩm', 'product'),
            'search_items' => esc_html__('Tìm kiếm Sản phẩm', 'product'),
            'parent_item_colon' => esc_html__('Danh mục sản phẩm', 'product'),
            'not_found' => esc_html__('Không có dữ liệu phù hợp', 'product'),
            'not_found_in_trash' => esc_html__('Không có sản phẩm trong thùng rác', 'product'),
            'name' => esc_html__('Sản phẩm', 'product'),
            'singular_name' => esc_html__('Sản phẩm', 'product'),
        ),
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => false,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite_no_front' => false,
        'menu_icon' => 'dashicons-buddicons-community',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'comments',
        ),
        'rewrite' => ['slug' => 'xe'],
    );
    register_post_type('product', $args);
}
add_action('init', 'tech5s_register_post_type_product');
function tech5s_register_taxonomy_product_category()
{
    $args = array(
        'label' => esc_html__('Danh mục sản phẩm', 'tech5s-product-category'),
        'labels' => array(
            'menu_name' => esc_html__('Danh mục sản phẩm', 'tech5s-product-category'),
            'all_items' => esc_html__('Tất cả danh mục sản phẩm', 'tech5s-product-category'),
            'edit_item' => esc_html__('Sửa danh mục sản phẩm', 'tech5s-product-category'),
            'view_item' => esc_html__('Xem danh mục sản phẩm', 'tech5s-product-category'),
            'update_item' => esc_html__('Cập nhật danh mục sản phẩm', 'tech5s-product-category'),
            'add_new_item' => esc_html__('Thêm mới danh mục sản phẩm', 'tech5s-product-category'),
            'new_item_name' => esc_html__('Danh mục sản phẩm mới', 'tech5s-product-category'),
            'parent_item' => esc_html__('Danh mục cha', 'tech5s-product-category'),
            'parent_item_colon' => esc_html__('Danh mục cha:', 'tech5s-product-category'),
            'search_items' => esc_html__('Tìm kiếm danh mục sản phẩm', 'tech5s-product-category'),
            'popular_items' => esc_html__('Popular Danh mục sản phẩm', 'tech5s-product-category'),
            'separate_items_with_commas' => esc_html__('Separate Danh mục sản phẩm with commas', 'tech5s-product-category'),
            'add_or_remove_items' => esc_html__('Add or remove Danh mục sản phẩm', 'tech5s-product-category'),
            'choose_from_most_used' => esc_html__('Choose most used Danh mục sản phẩm', 'tech5s-product-category'),
            'not_found' => esc_html__('Chưa có dữ liệu phù hơp', 'tech5s-product-category'),
            'name' => esc_html__('Danh mục sản phẩm', 'tech5s-product-category'),
            'singular_name' => esc_html__('product_category', 'tech5s-product-category'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'show_in_rest' => false,
        'hierarchical' => true,
        'query_var' => true,
        'sort' => false,
        'rewrite_no_front' => false,
        'rewrite_hierarchical' => false,
        'supports' => array(
            'title',
        ),
        'rewrite' => ['slug' => 'danh-muc-xe'],
    );
    register_taxonomy('product-category', array('product'), $args);
}
add_action('init', 'tech5s_register_taxonomy_product_category', 0);

add_filter('rwmb_meta_boxes', 'tech5s_post_type_product_meta_boxes');
function tech5s_post_type_product_meta_boxes($meta_boxes)
{
    $meta_boxes[] = array(
        'title' => 'Cấu hình hiển thị',
        'post_types' => 'product',
        'fields' => array(
            array(
                'name' => 'Sản phẩm nổi bật',
                'id' => 'hot',
                'type' => 'checkbox',
                'std' => 0
            ),
            array(
                'name' => 'Sắp xếp',
                'id' => 'ord',
                'type' => 'text',
                'std' => 0
            ),
        )
    );
    $meta_boxes[] = array(
        'title' => 'Cấu hình thông tin sản phẩm',
        'post_types' => 'product',
        'fields' => array(
            array(
                'name' => 'Mã SKU',
                'id' => 'product_sku',
                'type' => 'text',
                'size' => 50
            ),
            array(
                'name' => 'Giá gốc',
                'id' => 'product_price',
                'type' => 'text',
                'size' => 50,
                'std' => 0
            ),
            array(
                'name' => 'Giá khuyến mãi',
                'id' => 'product_price_sale',
                'type' => 'text',
                'size' => 50,
                'std' => 0
            ),
        )
    );
    $meta_boxes[] = array(
        'title' => 'Cấu hình nội dung sản phẩm',
        'post_types' => 'product',
        'fields' => array(
            array(
                'name' => 'Mô tả ngắn',
                'id' => 'short',
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 4,
                    'teeny'         => true,
                ),
            ),
            array(
                'name' => 'Thông số kỹ thuật',
                'id' => 'specs',
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 4,
                    'teeny'         => true,
                ),
            ),
        )
    );
    $meta_boxes[] = array(
        'title' => 'Cấu hình thư viện ảnh',
        'post_types' => 'product',
        'fields' => array(
            array(
                'name' => "Danh sách hình ảnh",
                'id' => 'product_libimg',
                'type' => "image_advanced",
                'max_file_uploads' => 10,
                'max_status' => 'true',
                'class' => 'hc-normal',
                'image_size' => '',
            )
        )
    );
    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'tech5s_taxonomy_product_category_meta_boxes');
function tech5s_taxonomy_product_category_meta_boxes($meta_boxes)
{
    $meta_boxes[] = array(
        'title' => 'Cấu hình hiển thị',
        'taxonomies' => 'product-category',
        'fields' => array(
            array(
                'name' => 'Hiển thị trang chủ',
                'id' => 'home',
                'type' => 'checkbox',
                'std' => 0
            ),
            array(
                'name' => 'Sắp xếp',
                'id' => 'ord',
                'type' => 'text',
                'size' => 50,
                'std' => 0
            )
        )
    );
    $meta_boxes[] = array(
        'title' => 'Cấu hình hình ảnh',
        'taxonomies' => 'product-category',
        'fields' => array(
            array(
                'name' => "Ảnh banner (Desktop)",
                'id' => 'bg_product_category_img',
                'type' => "image_advanced",
                'max_file_uploads' => 1,
                'class' => 'hc-normal',
                'image_size' => '',
            ),
            array(
                'name' => "Ảnh banner (Mobile)",
                'id' => 'bg_product_category_img_mobile',
                'type' => "image_advanced",
                'max_file_uploads' => 1,
                'class' => 'hc-normal',
                'image_size' => '',
            ),
            array(
                'name' => "Ảnh",
                'id' => 'product_category_img',
                'type' => "image_advanced",
                'max_file_uploads' => 1,
                'class' => 'hc-normal',
                'image_size' => '',
            )
        )
    );
    return $meta_boxes;
}
