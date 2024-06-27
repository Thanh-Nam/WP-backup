<?php
class Wg_About_Home extends WP_Widget
{
    /**
     * Thiết lập widget: đặt tên, base ID
     */
    function __construct()
    {
        parent::__construct(
            'Wg_About_Home',
            'Trang chủ - Giới thiệu',
            array(
                'description' => 'Giới thiệu'
            )
        );
    }
    function form($instance)
    {
        $default = array(
            'name' => '',
            'logo' => '',
            'content' => '',
            'image' => '',
            'link' => ''
        );
        $instance = wp_parse_args((array) $instance, $default);
        $name = $instance['name'];
        $randName    = rand(0, 99999999999);
        $ed_id_name   = $this->get_field_id('wp_editor_' . $randName);
        $ed_name_1 = $this->get_field_name('name');
        $name   = $name;
        $editor_id_1 = $ed_id_name;
        $settingNames = array('media_buttons' => true, 'textarea_rows' => 4, 'textarea_name' => $ed_name_1, 'teeny' => true);
        $logo = esc_attr($instance['logo']);
        $logourl = "";
        if (((int)$logo) > 0) {
            $arrLogo = wp_get_attachment_image_src($logo, 'full');
            if (count($arrLogo) > 0) {
                $logourl = $arrLogo[0];
            }
        }
        $image = esc_attr($instance['image']);
        $link = esc_attr($instance['link']);
        $imageurl = "";
        if (((int)$image) > 0) {
            $arr = wp_get_attachment_image_src($image, 'full');
            if (count($arr) > 0) {
                $imageurl = $arr[0];
            }
        }
        $content = $instance['content'];
        $rand    = rand(0, 99999999999);
        $ed_id   = $this->get_field_id('wp_editor_' . $rand);
        $ed_name = $this->get_field_name('content');
        $content   = $content;
        $editor_id = $ed_id;
        $settings = array('media_buttons' => true, 'textarea_rows' => 4, 'textarea_name' => $ed_name, 'teeny' => true);
        echo "<p>Logo:</p>";
        echo "<div class='h_cover_image'><img src='" . $logourl . "'/>";
        echo "<input type='hidden' name = '" . $this->get_field_name('logo') . "' value='" . $logo . "'/>";
        echo "<button type='button' class='h_upload_image_button button'>Chọn ảnh</button>";
        echo "<button type='button' class='h_remove_image_button button'>Xóa ảnh</button>";
        echo "</div>";
        echo "<p>Tên:</p>";
        echo wp_editor($name, $editor_id_1, $settingNames);
        echo "<p>Mô tả:</p>";
        echo wp_editor($content, $editor_id, $settings);
        echo "<p>Link bài viết:</p>";
        echo "<input style='width:100%' name = '" . $this->get_field_name('link') . "' value = '" . $link . "'/>";
        echo "<p>Hình Ảnh:</p>";
        echo "<div class='h_cover_image'><img src='" . $imageurl . "'/>";
        echo "<input type='hidden' name = '" . $this->get_field_name('image') . "' value='" . $image . "'/>";
        echo "<button type='button' class='h_upload_image_button button'>Chọn ảnh</button>";
        echo "<button type='button' class='h_remove_image_button button'>Xóa ảnh</button>";
        echo "</div>";
    }
    function update($new_instance, $old_instance)
    {
        parent::update($new_instance, $old_instance);
        $instance = $old_instance;
        $instance['logo'] = $new_instance['logo'];
        $instance['name'] = $new_instance['name'];
        $instance['content'] = $new_instance['content'];
        $instance['link'] = $new_instance['link'];
        $instance['image'] = $new_instance['image'];
        return $instance;
    }
    function widget($args, $instance)
    {
        extract($args);
        $logo = $instance['logo'];
        $name = $instance['name'];
        $content = $instance['content'];
        $image = $instance['image'];
        $link = $instance['link'];
        $logourl = get_template_directory_uri() . "/admin/no-image.svg";
        if (((int)$logo) > 0) {
            $arrLogo = wp_get_attachment_image_src($logo, 'full');
            if (count($arrLogo) > 0) {
                $logourl = $arrLogo[0];
            }
        }
        $imageurl = get_template_directory_uri() . "/admin/no-image.svg";
        if (((int)$image) > 0) {
            $arr = wp_get_attachment_image_src($image, 'full');
            if (count($arr) > 0) {
                $imageurl = $arr[0];
            }
        }
?>
        <section class="about">
            <div
                class="container px-[8px] md:px-[16px] 2xl:px-0 2xl:py-[80px] lg:py-[60px] md:py-[40px] py-[30px] lg:flex items-center gap-[32px] text-center lg:text-left">
                <div class="about-text lg:w-[40%] mb-[26px] md:mb-[40px] lg:mb-0">
                    <div class="mb-[12px]"><img src="<?php echo $logourl ?? '' ?>" alt="" class="w-[50%] mx-auto"></div>
                    <h3 class="about-title mb-[12px] text-[24px] md:text-[28px] lg:text-[36px] font-semibold text-center">
                        <?php echo $name ?? '' ?>
                    </h3>
                    <p class="about-content text-justify leading-[137.5%] text-[#4D5F7A] f-normal">
                        <?php echo $content ?? '' ?>
                    </p>
                    <a href="<?php echo $link ?? '' ?>" class="lg:mt-[40px] md:mt-[24px] mt-[8px]">Về chúng tôi</a>
                </div>
                <div
                    class="about-img lg:w-[50%] ml-[12px] md:ml-[23px] inline-block">
                    <img src="<?php echo $imageurl ?? '' ?>" alt=""/>
                </div>
            </div>
        </section>
<?php
        echo $after_widget;
    }
}
