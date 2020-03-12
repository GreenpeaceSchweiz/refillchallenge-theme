<?php
/**
 * Template Name: Page Builder
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package refillchallenge
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main gp-builder">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'builder' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
