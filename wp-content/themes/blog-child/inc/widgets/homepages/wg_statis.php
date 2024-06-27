<?php
class Wg_Statis extends WP_Widget
{
	function __construct()
	{
		parent::__construct(
			'Wg_Statis',
			'Trang chủ - Thống kê',
			array(
				'description' => 'Thống kê'
			)
		);
	}
	public function form($instance)
	{
		$default = array(
			'image' => '',
		);
		$image = esc_attr($instance['image']);
		$imageurl = "";
		if (((int)$image) > 0) {
			$arr = wp_get_attachment_image_src($image, 'full');
			if (count($arr) > 0) {
				$imageurl = $arr[0];
			}
		}
		echo "<p>Hình Ảnh:</p>";
		echo "<div class='h_cover_image'><img src='" . $imageurl . "'/>";
		echo "<input type='hidden' name = '" . $this->get_field_name('image') . "' value='" . $image . "'/>";
		echo "<button type='button' class='h_upload_image_button button'>Chọn ảnh</button>";
		echo "<button type='button' class='h_remove_image_button button'>Xóa ảnh</button>";
		echo "</div>";
		echo "<p>Đường dẫn chỉnh sửa:</p>";
		echo "<a href=" . admin_url('admin.php?page=statis-slide') . ">Bấm vào đây</a>";
	}
	function update($new_instance, $old_instance)
	{
		parent::update($new_instance, $old_instance);
		$instance = $old_instance;
		$instance['image'] = $new_instance['image'];
		return $instance;
	}
	function widget($args, $instance)
	{
		extract($args);
		$image = $instance['image'];
		$imageurl = get_template_directory_uri() . "/admin/no-image.svg";
		if (((int)$image) > 0) {
			$arr = wp_get_attachment_image_src($image, 'full');
			if (count($arr) > 0) {
				$imageurl = $arr[0];
			}
		}
?>
		<?php $statis = rwmb_meta('statis-item', array('object_type' => 'setting'), 'my_options'); ?>
		<?php if (!empty($statis) && count($statis) > 0) : ?>
			<section class="statis">
				<div class="bg-statis absolute w-full h-full z-0">
					<img src="<?php echo $imageurl ?? '' ?>" alt="" class="w-full h-full object-cover">
				</div>
				<div class="container relative z-[1] px-[8px] md:px-[16px] 2xl:px-0 md:py-[40px] py-[20px]">
					<div class="swiper statis-slide">
						<div class="swiper-wrapper">
							<?php foreach ($statis as $static) : ?>
								<div class="swiper-slide">
									<div class="">
										<?php
										$imgs = _cget('img', $static, []);
										foreach ($imgs as $img) :
										?>
											<picture>
												<source media="(min-width:767px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>">
												<source media="(min-width:375px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>">
												<source media="(min-width:575px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>">
												<source media="(min-width:0px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>">
												<img srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>" alt="<?php echo _cget('name', $static); ?>" class="w-[80px] mx-auto">
											</picture>
										<?php endforeach ?>
									</div>
									<p class="text-[16px] md:text-[20px] uppercase font-semibold text-center text-white mt-[12px] md:mt-[16px]"><?php echo _cget('name', $static); ?></p>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
<?php
		echo $after_widget;
	}
}
