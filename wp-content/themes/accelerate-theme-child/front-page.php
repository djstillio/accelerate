<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section class="home-page">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="homepage-hero">
				<div class="site-content">
					<?php the_content(); ?>
					<a class="button" href="<?php echo site_url('/case-studies/'); ?>">View Our Work</a>
				</div><!-- .site-content -->
			</div>
		<?php endwhile; // end of the loop. ?>
</section><!-- .home-page -->

<section class="featured-work clearfix">
		<div class="site-content">
				<h4>Featured Work</h4>

				<ul class="homepage-featured-work">
					<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
						<?php while (have_posts() ) : the_post();
							$image_1 = get_field('image_1');
							$size = "medium";
						?>
						<li class="individual-featured-work">
								<figure>
										<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size ); ?></a>
								</figure>

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</ul>

		</div>
</section>
<section class="recent-posts clearfix">
		<div class="site-content">
				<div class="blog-post">
					<h4>From the Blog</h4>
					<?php query_posts('posts_per_page=1'); ?>
						<?php while (have_posts() ) : the_post(); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="blog-post twitter-feed">
					<h4>Recent Tweets</h4>
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
						<div id="secondary" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
							<div class="read-more-link">
								<a href="https://twitter.com/djstillio"><span>Follow Us</span> ›</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
		</div>
</section>

>

<?php get_footer(); ?>
