<?php
add_filter('rwmb_meta_boxes', 'options_meta_boxes_config_main');
function options_meta_boxes_config_main($meta_boxes)
{
    $meta_boxes[] = array(
        'id' => 'general',
        'title' => 'Cấu hình chung',
        'settings_pages' => 'my-options',
        'tab' => 'base-setting',
        'fields' => array(
            array(
                'name' => 'Logo',
                'id' => 'logo',
                'type' => "image_advanced",
                'max_file_uploads' => 1,
                'class' => 'hc-normal',
                'image_size' => ''
            ),
            array(
                'name' => 'logo_footer',
                'id' => 'logo_footer',
                'type' => "image_advanced",
                'max_file_uploads' => 1,
                'class' => 'hc-normal',
                'image_size' => ''
            ),
            array(
                'name' => 'Favicon',
                'id' => 'favicon',
                'type' => "image_advanced",
                'max_file_uploads' => 1,
                'class' => 'hc-normal',
                'image_size' => ''
            ),
            array(
                'name' => 'Tên công ty',
                'id' => 'company_name',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Slogan',
                'id' => 'slogan',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Hotline',
                'id' => 'hotline',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Địa chỉ',
                'id' => 'address',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Email',
                'id' => 'email',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Copyright',
                'id' => 'copy_right',
                'type' => 'textarea',
                'size' => 500
            )
        )
    );
    $meta_boxes[] = array(
        'id' => 'social',
        'title' => 'Mạng xã hội',
        'settings_pages' => 'my-options',
        'tab' => 'social-setting',
        'fields' => array(
            array(
                'name' => 'Facebook',
                'id' => 'social_facebook',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Youtube',
                'id' => 'social_youtube',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Instagram',
                'id' => 'social_instagram',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Messenger',
                'id' => 'social_mess',
                'type' => 'text',
                'size' => 100
            ),
            array(
                'name' => 'Zalo',
                'id' => 'social_zalo',
                'type' => 'text',
                'size' => 100
            ),
        )
    );
    $meta_boxes[] = array(
        'id' => 'banner',
        'title' => 'Hình ảnh',
        'settings_pages' => 'my-options',
        'tab' => 'banner-setting',
        'fields' => array(
            
        )
    );

    // $meta_boxes[] = array(
    //     'id' => 'content_page',
    //     'title' => 'Nội dung dài',
    //     'settings_pages' => 'my-options',
    //     'tab' => 'content-setting',
    //     'fields' => array(
    //         array(
    //             'name' => 'Mô tả phần cuối trang',
    //             'id' => 'content_footer',
    //             'type' => 'wysiwyg',
    //             'options' => array(
    //                 'media_buttons' => true,
    //                 'textarea_rows' => 5,
    //                 'teeny' => false,
    //             )
    //         ),
    //     )
    // );
    return $meta_boxes;
}
