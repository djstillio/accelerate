<?php
/**
 * The template for displaying all pages
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
        $link = get_field('site_link');
        $image_1 = get_field('image_1');
        $size = "large"; ?>

      <article class="case-study">

          <aside class="case-study-sidebar">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h4><?php echo $services; ?></h4>
                <p class= "case-study-description"><?php echo custom_field_excerpt(); ?></p>
                <h3><a href="<?php the_permalink(); ?>">Veiw project &rsaquo;</a></h3>
          </aside>

          <div class="case-study-images">

              <?php if($image_1) {
                   echo wp_get_attachment_image( $image_1, $size );
              } ?>

          </div>

      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
