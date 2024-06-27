<?php
class Wg_Slide_Home extends WP_Widget
{
	function __construct()
	{
		parent::__construct(
			'Wg_Slide_Home',
			'Trang chủ - Slide trang chủ',
			array(
				'description' => 'Slide trang chủ'
			)
		);
	}
	public function form($instance)
	{
		if (isset($instance['title']))
			$title = $instance['title'];
		else
			$title = __('Default Title', 'new_widget_domain');
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Đường dẫn chỉnh sửa:</label>
			<a href="<?php echo admin_url('admin.php?page=banner-slider#tab-Slide-banner'); ?>">Bấm vào đây</a>
		</p>
	<?php
	}
	function widget($args, $instance)
	{
		extract($args);
	?>
		<?php $slides = rwmb_meta('slide-item', array('object_type' => 'setting'), 'my_options'); ?>
		<?php if (!empty($slides) && count($slides) > 0) : ?>
			<section class="banner">
				<div class="swiper slide-banner">
					<div class="swiper-wrapper">
						<?php foreach ($slides as $slide) : ?>
							<div class="swiper-slide">
								<?php
								$imgs = _cget('img', $slide, []);
								foreach ($imgs as $img) :
								?>
									<picture>
										<source media="(min-width:767px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>">
										<source media="(min-width:375px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'large') ?>">
										<source media="(min-width:575px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium_large') ?>">
										<source media="(min-width:0px)" data-srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>" srcset="<?php echo wp_get_attachment_image_url($img, 'medium') ?>">
										<img srcset="<?php echo wp_get_attachment_image_url($img, 'full') ?>" alt="<?php echo _cget('name', $slide); ?>" class="w-full h-[60vh] object-cover">
									</picture>
								<?php endforeach ?>
							</div>
						<?php endforeach ?>
					</div>
					<div class="banner-next"></div>
					<div class="banner-prev"></div>
					<div class="swiper-pagination"></div>
					<div class="autoplay-progress">
						<svg viewBox="0 0 48 48">
							<circle cx="24" cy="24" r="20"></circle>
						</svg>
						<span></span>
					</div>
				</div>
			</section>
		<?php endif; ?>
<?php
		echo $after_widget;
	}
}
