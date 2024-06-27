<div class="item_new_small d-flex">
    <a href="<?php the_permalink(); ?>" class="c-img image" title="<?php the_title(); ?>">
        <?php the_thumb($post,'medium'); ?>
    </a>
    <div class="info-item">
        <h3 class="mb-2"><a href="<?php the_permalink(); ?>" class="name smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="by-date d-flex align-items-center">
            <?php $author_id= $post->post_author; ?>
            <p><i class="fa fa-user-o me-1" aria-hidden="true"></i> By <strong><?php echo the_author_meta( 'display_name' , $author_id ); ?></strong></p>
            <span class="sc-vertical mx-2"></span>
            <span><i class="fa fa-eye me-1" aria-hidden="true"></i><?php if ( function_exists('pvc_post_views') ) { echo pvc_post_views(get_the_ID()); } ?></span>
        </div>
    </div>
</div>