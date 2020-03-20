<?php
/**
 * Template part for displaying page content in page-builder.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package refillchallenge
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
	<div class="entry-content refill-animated" data-hijacking="off" data-animation="parallax">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
