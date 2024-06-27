<?php get_header(); ?>
<?php 
	$categories = get_the_category(get_the_ID());
	$categories = isset($categories)?$categories:[];
?>
<section class="section main-breadcrumb">
	<div class="container">
		<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
	</div>
</section>
<section class="section pt-0 page-new-detail">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 order-2">
				<div class="page_qa ct">
					<h1 class="title mb-2 mb-lg-3 mt-0"><?php the_title(); ?></h1>
					<div class="cate  mb-2 mb-lg-3">
					
					<?php if(count($categories)>0) : ?>
						<?php foreach($categories as $itemCate): ?>
							<a href="<?php echo get_category_link($itemCate); ?>" class="cate" title="<?php echo $itemCate->name; ?>"><?php echo $itemCate->name; ?></a>
						<?php endforeach ?>
					<?php endif ?>
					</div>
					<div class="d-bloc d-md-flex justify-content-between">
						<div class="info  mb-2 mb-lg-3">
							<i class="fa fa-calendar" aria-hidden="true"></i> 
							<?php echo get_the_date('d/m/Y',$post); ?> - 
							<i class="fa fa-eye"></i>
							<?php 
								if ( function_exists('pvc_post_views') ) {
								    echo pvc_post_views(get_the_ID());
								}
							?>
							lượt xem
						</div>
						<div class="s-social box-social d-flex align-items-center  mb-2 mb-lg-3">
							<span>Chia sẻ </span>
							<div class="fb-like" data-href="<?php echo sb_get_current_url(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
							<div class="fb-share-button" data-href="<?php echo sb_get_current_url(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"></div>
							<div class="g-plusone" data-size="medium"></div>&nbsp;
							<a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php echo sb_get_current_url(); ?>" class="twitter-share-button" data-url="<?php echo sb_get_current_url(); ?>"></a>
						</div>
					</div>
					<?php if(get_custom_excerpt(10000) != ''): ?>
					<div class="short_page py-3">
						<i class="fa fa-quote-left me-1" aria-hidden="true"></i>
						<?php echo wpautop(get_custom_excerpt(10000)); ?>
					</div>
					<?php endif; ?>
	                <div class="s-content">
	                	<?php 
	                		the_content( sprintf(
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ezy' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) ); 
						?>
	               	</div>
	               	<div class="d-none stop_fixed_sidebar"></div>
				</div>
			</div>
			<div class="col-lg-2 order-1 position-relative">
				<div class="main-content-toc">
					<div class="sharebar">
				        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo sb_get_current_url(); ?>" target="_blank" rel="noopener noreferrer" class="sharebar-link">
				          <img src="<?php echo get_stylesheet_directory_uri(); ?>/theme/frontend/images/sharebar-facebook.svg" alt="facebook">
				        </a>
				        <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php echo sb_get_current_url(); ?>" target="_blank" rel="noopener noreferrer" class="sharebar-link">
				          <img src="<?php echo get_stylesheet_directory_uri(); ?>/theme/frontend/images/sharebar-twitter.svg" alt="twitter">
				        </a>
				        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo sb_get_current_url(); ?>&title=<?php the_title(); ?>&source=<?php echo sb_get_current_url(); ?>" title="Linkedin" target="__blank" target="_blank" rel="noopener noreferrer" class="sharebar-link"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				       	<img src="<?php echo get_stylesheet_directory_uri(); ?>/theme/frontend/images/sharebar-link.svg" alt="link" class="sharebar-copy">
				    </div>
					<?php 
						echo do_shortcode('[ez-toc]'); 
					?>
				</div>
			</div>
			<div class="col-lg-2 order-3 d-lg-block d-none position-relative">
				<div class="widget-sidebar-right">
					<?php foreach($categories as $k => $itemCate): ?>
						<?php if($k != 0) continue; ?>
						<div class="item mb-3">
							<p class="content">Xem thêm nhiều bài tin mới nhất về <?php echo $itemCate->name; ?> </p>
							<p><a href="<?php echo get_category_link($itemCate); ?>" class="btn-seemor smooth btn btn-info" target="_blank" rel="noopener" title="Xem thêm nhiều bài tin mới nhất về <?php echo $itemCate->name; ?>">Xem thêm</a></p>
						</div>
					<?php endforeach; ?>
					<div class="item">
						<?php echo do_shortcode('[contact-form-7 id="556" title="Form liên hệ sidebar"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 order-2">
				<?php $author_id=$post->post_author; ?>
               	<div class="post-user d-sm-flex d-block">
               		<a href="<?php echo get_author_posts_url($author_id); ?>" title="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" class="img" title="linh">
               			<img src="<?php get_the_author_meta('avatar', $author_id ); ?> " width="140" height="140" class="avatar" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" />
               		</a>
               		<div class="ct mt-sm-0 mt-3">
               			<h3 class="name mb-2"><strong><a href="<?php echo get_author_posts_url($author_id); ?>" class="cate smooth" title="<?php echo the_author_meta( 'display_name' , $author_id ); ?>"><?php echo the_author_meta( 'display_name' , $author_id ); ?> </a></strong></h3>
               			<div class="shot-content">
               			</div>
               		</div>
               	</div>
				<?php $tags = get_the_tags(get_the_ID()); ?>
				<?php if ($tags) : ?>
				<div class="tag-share__news mt-4 d-flex align-items-start flex-wrap justify-content-between">
					<div class="s-tag mb-3">
						<span>Tags</span>
						<?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag); ?>" title="<?php echo $tag->name ?>" class="item_tag"><?php echo $tag->name ?></a>
						<?php endforeach; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-2 order-1 position-relative"></div>
			<div class="col-lg-2 order-3 position-relative"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>