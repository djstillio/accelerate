<?php
/**
 * The template for displaying The About Page
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

<section class="about-page">
	<div class="about-page-hero">
		<h2> Accelerate is a strategy and marketing agency <br>
			located in the heart of NYC. Our goal is to build <br>
			businesses by making our clients visible and <br>
			making their customers smile.
		</h2>
	</div>
	<div class = "about-header">
		<?php while ( have_posts() ) : the_post(); ?>
				<div class="about-content">
					<?php the_content(); ?>
				</div><!-- .site-content -->
		<?php endwhile; // end of the loop. ?>
	</div>
</section><!-- .home-page -->

<div id="primary" class="site-content">
	<div class="main-content" role="main">
		<?php query_posts('posts_per_page=10&post_type=our_services'); ?>
			<?php while ( have_posts() ) : the_post();
				$image = get_field('image');
				$size = "large"; ?>

			<div class="service clearfix">
					<div class="our-services<?php if ($counter % 2 == 1) {echo '-odd';}else if ($counter % 2 == 0){echo '';} ?>">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
					</div>

					<div class="our-services-image<?php if ($counter % 2 == 1){echo '-odd';}else if ($counter % 2 == 0){echo '';} ?>">
							<?php if($image) {
									 echo wp_get_attachment_image( $image, $size );
							} ?>
					</div>
			</div>
			<?php $counter++ ;
		endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->

<div class="button-section clearfix site-content">
	<div class="button-section-header">
		<h2> Interested in working with us?</h2>
	</div>
	<div class= "button-content">
		<a class="button" href="<?php echo site_url('/contact-us/'); ?>">Contact Us</a>
	</div>
</div><!-- #contact-button -->



<?php get_footer(); ?>
