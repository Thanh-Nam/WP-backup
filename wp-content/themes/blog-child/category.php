<?php get_header(); ?>
<?php
    $category = get_queried_object();
    $termId = $category->term_id;
?>
<section class="section main-breadcrumb">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</section>
<section class="page-search page-new-category">
    <div class="container">
        <h1 class="title-ss-all text-left mb-4"><?php echo $category->name; ?></h1>
        <?php 
            global $post;
            $i = 1;
            if (have_posts()) :
        ?>
        <div class="row">
            <?php
               
                $i = 0;
                while (have_posts()) : the_post();
            ?>
            <div class="col-6 col-md-4 col_100">
                <?php get_template_part('templates/post/item'); ?>
            </div>  
            <?php 
                $i++;
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
        <div class="te-pagination">
            <?php cpagination(); ?>
        </div>
        <?php else: ?>
            <p class="notifi py-4 text-center">Chuyên mục đang trong quá trình cập nhật bài viết !</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>