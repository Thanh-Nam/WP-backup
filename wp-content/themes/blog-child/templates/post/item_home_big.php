<div class="item-new-big">
	<a href="<?php the_permalink(); ?>" class="c-img image smooth" title="<?php the_title(); ?>">
		<?php the_thumb($post,'large'); ?>
	</a>
	<div class="info-item">
		<h3 class="mb-1 mb-sm-2"><a href="<?php the_permalink(); ?>" class="name smooth" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<div class="by-date d-flex align-items-center">
			<?php $author_id= $post->post_author; ?>
			<p><i class="fa fa-user-o me-1" aria-hidden="true"></i> By <strong><?php echo the_author_meta( 'display_name' , $author_id ); ?></strong></p>
			<span class="sc-vertical mx-2"></span>
			<span><i class="fa fa-calendar me-1" aria-hidden="true"></i> <?php echo get_the_date('d/m/Y',$post); ?> </span>
		</div>
	</div>
</div>