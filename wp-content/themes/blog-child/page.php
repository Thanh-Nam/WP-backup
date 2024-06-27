<?php get_header(); ?>
<section class="section main-breadcrumb">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</section>
<section class="section-all__pages section-new__detail">
    <div class="container s-content">
    	<?php the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>