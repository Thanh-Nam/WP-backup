<?php get_header(); ?>

<?php if ( is_active_sidebar( 'wg_home_center_area' ) ) : ?>
    <?php dynamic_sidebar( 'wg_home_center_area' ); ?>
<?php endif; ?>

<?php get_footer(); ?>