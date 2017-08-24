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

<div class="error-page-content">
  <h1> 404 Error! </h1>
  <img src="http://images.roadtrafficsigns.com/img/lg/X/Left-Arrow-Detour-Sign-X-M4-9L.gif">
  <h2> Whoa there Turbo! </h2>
  <h4> You've missed your exit (or it doesn't exist anymore)! Why don't you take a detour through our <a href="<?php echo site_url('/about/'); ?>">about</a> page!</h4>
</div>

<?php get_footer(); ?>
