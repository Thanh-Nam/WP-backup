<div class="item-new h-100">
    <div class="image position-relative">
        <a href="<?php the_permalink(); ?>" class="c-img smooth" title="<?php the_title(); ?>">
            <?php the_thumb($post,'medium'); ?>
        </a>
        <?php if(get_custom_excerpt(30) != ''): ?>
        <div class="short_ct">
            <?php echo get_custom_excerpt(30); ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="info-new">
        <h3 class="mb-3 text_all_news_h3"><a href="<?php the_permalink(); ?>" class="name smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <div class="d-flex align-items-center justify-content-between">
            <?php $author_id= $post->post_author; ?>
            <p><i class="fa fa-user-o me-1" aria-hidden="true"></i> By <strong><?php echo the_author_meta( 'display_name' , $author_id ); ?> </strong></p>
            <span class="date d-none"><i class="fa fa-calendar me-1" aria-hidden="true"></i> <?php echo get_the_date('d/m/Y',$post); ?></span>
            <span class="date"><i class="fa fa-eye me-1" aria-hidden="true"></i> <?php if ( function_exists('pvc_post_views') ) { echo pvc_post_views(get_the_ID()); } ?></span>
        </div>
    </div>
</div>