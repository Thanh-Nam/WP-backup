<?php /*Template Name: Trang liên hệ*/ ?>
<?php get_header(); ?>
<section class="section main-breadcrumb">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</section>
<section class="form__contact form-contact__pages">
    <div class="container">
    	<?php echo do_shortcode('[contact-form-7 id="1781" title="Form Trang liên hệ" class="box_frm"]') ?>
    </div>
</section>
<?php get_footer(); ?>