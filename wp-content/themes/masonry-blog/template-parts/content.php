<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Masonry_Blog
 */
?>
<div <?php masonry_blog_content_wrapper_class('masonry-article-one'); ?>>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if( has_post_thumbnail() && masonry_blog_get_option( 'masonry_blog_blog_display_feat_img' ) == true ) {
			?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php masonry_blog_full_image(); ?>
				</a>
				<?php 
				if( masonry_blog_get_option( 'masonry_blog_blog_display_cats' ) == true ) {

					masonry_blog_categories_meta(); 
				}
				?>
			</div><!-- .post-thumbnail -->
			<?php
		}
		?>
		<div class="article-content">
			<?php
			if( ( masonry_blog_get_option( 'masonry_blog_blog_display_feat_img' ) == false || ! has_post_thumbnail() ) && masonry_blog_get_option( 'masonry_blog_blog_display_cats' ) == true ) {

				masonry_blog_categories_meta();
			}
			?>
			<div class="post-title">
				<h3>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h3>
			</div><!-- .post-title -->
			<?php
			if( masonry_blog_get_option( 'masonry_blog_blog_display_date' ) == true || masonry_blog_get_option( 'masonry_blog_blog_display_author' ) == true ) {
				?>
				<div class="post-author-date-meta">
					<ul>
						<?php
						if( masonry_blog_get_option( 'masonry_blog_blog_display_author' ) == true ) {
							?>
							<li class="post-author-meta">
								<?php masonry_blog_posted_by(); ?>					
							</li><!-- .post-author-meta --> 
							<?php
						}

						if( masonry_blog_get_option( 'masonry_blog_blog_display_date' ) == true ) {
							?>
							<li class="post-date-meta">
								<?php masonry_blog_posted_on(); ?>
							</li><!-- .post-date-meta -->
							<?php
						}
						?>
					</ul>
				</div><!-- .entry-metas -->
				<?php
			}
			?>
			<div class="post-excerpt ">
				<?php
				if( masonry_blog_ajax_posts_loading() == true ) { 

					masonry_blog_excerpt();
				} else {

					the_excerpt(); 
				}
				?>
			</div><!-- .post-excerpt -->
		</div><!-- .article-content -->
	</article>
</div>