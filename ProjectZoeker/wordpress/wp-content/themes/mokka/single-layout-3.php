<?php 
/**
 * Single Layout 2
 *
 * @package mokka
 * @since 	mokka 1.0
**/
global $fave_option;
?>

<div class="container">
<!-- NOTE: content needs the class "col-md-push-3" to stay between both sidebar but first of sithebar in the mobile view. Left sidebar needs the class "col-md-pull-6" for the same reason -->

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post();?>
	<?php
    // Set post view
	fave_setPostViews(get_the_ID());
    ?>
	<div class="row mokka-fadin animated">
		<!-- content -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php
				if( 'video' == get_post_format() ){ 
					get_template_part('content', 'video');?>
					<div class="icon-wrapper text-center">
						<i class="icon icon-multimedia-23 icon-x3"></i>
					</div><!-- .icon-wrapper -->
				<?php
				}elseif('audio' == get_post_format()){
					get_template_part('content', 'audio');?>
					<div class="icon-wrapper text-center">
						<i class="icon icon-multimedia-11 icon-x3"></i>
					</div><!-- .icon-wrapper -->
				<?php
				}elseif('gallery' == get_post_format()){
					
					get_template_part('content', 'gallery');
					?>
					<div class="icon-wrapper text-center">
						<i class="icon icon-office-31 icon-x3"></i>
					</div><!-- .icon-wrapper -->
				<?php
				}elseif('link' == get_post_format()){
					get_template_part('content', 'link');?>
					<div class="icon-wrapper text-center">
						<i class="icon icon-office-09 icon-x3"></i>
					</div><!-- .icon-wrapper -->
				<?php
				}elseif('quote' == get_post_format()){
					get_template_part('content', 'quote'); ?>
					<div class="icon-wrapper text-center">
						<i class="icon icon-office-41 icon-x3"></i>
					</div><!-- .icon-wrapper -->
				<?php
				}else{
				?>
				<?php if(has_post_thumbnail( get_the_id() )):?>
					<div class="featured-image">
						<a class="mokka-ilightbox" href="<?php echo fave_featured_url( get_the_ID(), 'full' ); ?>">
							<?php the_post_thumbnail('standard-large'); ?>
                        </a>
					</div>
					<div class="icon-wrapper text-center">
						<i class="icon icon-office-56 icon-x3"></i>
					</div><!-- .icon-wrapper -->
				
				<?php endif; ?>
			<?php } ?>
		</div>
		<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 col-sm-12 col-xs-12">
			<section class="content">
				<h1 class="post-title text-center"><?php the_title(); ?></h1>
                            
                
                <?php if($fave_option['single_post_meta'] != 0 ): ?>
                    <div class="post-meta text-center">
                        <ul class="list-inline">
                            <?php fave_single_post_meta(); ?>
                        </ul>
                    </div><!-- .post-meta -->
                <?php endif; ?>
                
                <div class="entry">
                    <?php the_content(); ?>
                    <?php
					$args = array(
						'before' => '<div class="link-pages">' . __( "Pages:", 'favethemes' ),
						'after' => '</div>',
						'link_before' => '<span>',
						'link_after' => '</span>'
					);
					wp_link_pages( $args );
					?>
                </div><!-- .entry -->
                
                <?php if(get_field('featured_image_credit_line')): ?>
                <div class="photo_credit"><strong><?php _e( 'Photo By:', 'favethemes' ); ?> </strong> <?php the_field('featured_image_credit_line'); ?> </div>
                <?php endif; ?>
                
                <?php if($fave_option['single_tags'] != 0 ): ?>
				<?php if( has_tag() ): ?>
                    <div class="post-tags text-center">
                        <p><?php _e( 'Tags: ', 'favethemes' ); ?> <?php the_tags( '', ', ', '' ); ?> </p>
                    </div>
                <?php endif; ?>
                <?php endif; ?>
               
               <?php if($fave_option['single_social'] != 0 ):?>
               <!-- .share-wrapper Start-->
                <div class="share-wrapper">
                    <?php fave_share(); ?>
                </div><!-- .share-wrapper -->
                <?php endif; ?>
                
                <!-- BEGIN .post-author-wrapper -->
                <?php if($fave_option['single_author'] != 0 ):?>
                <div class="post-author-wrapper">
                    <?php fave_post_author(); ?>
                </div><!-- .post-author -->
                 <?php endif; ?>
                 
                 <?php if($fave_option['single_related'] != 0 ):?>
                <div class="related-posts-wrapper">
                	<?php get_template_part('includes/related', 'posts');?>
                </div><!-- .related-posts-wrapper -->
                <?php endif; ?>
                
				<?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
				?>
				
                <?php if($fave_option['single_nav_arrows'] != 0 ):?>
				<?php fave_post_nav(); ?>
                <?php endif; ?>
            
		</section>
		</div>
	</div>
	
<?php endwhile; ?>
<?php endif; ?>	
</div>