<?php  if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?>

<?php
    $type = isset($_GET['post_type']) ? $_GET['post_type'] : (isset($_GET['type']) ? $_GET['type'] : '');
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>
<section class="section main-breadcrumb">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</section>
<section class="page-search page-new-category">
    <div class="container">
        <h1 class="title-ss-all text-left mb-4">Kết quả tìm kiếm</h1>
        <?php
            $post_old2 = $post;
            global $post;
            $args1 = array(
                'post_type' => 'post',
                's' => get_search_query(),
                'paged' => $paged,
                'posts_per_page' => 24,
                'exact' => false,
                'sentence' => true
            );
            $the_post = new WP_Query($args1);
            if ($the_post->have_posts()) :
        ?>
        <div class="row">
            <?php
                $i = 0;
                while ($the_post->have_posts()) : $the_post->the_post();
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
            <?php cpagination($the_post->max_num_pages); ?>
        </div>
        <?php else: ?>
        <p class="notifi py-4 text-center">Không tìm thấy kết quả nào phù hợp</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>