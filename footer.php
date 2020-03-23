<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package refillchallenge
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="wp-block-group__inner-container">
			<div id="footer_content" class="widget-area clearfix">
			<?php 
				if ( is_active_sidebar( 'sidebar-2' ) ) {
					dynamic_sidebar( 'sidebar-2' ); 
				}
			?>
			<?php echo do_shortcode('[social_warfare default_colors="light_grey" hover_colors="light_grey"]'); ?>
			</div>
		</div>
		<div class="footer-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/Footer_Desktop_full.png" class="hide-mobile"/>
			<img src="<?php echo get_template_directory_uri(); ?>/images/Footer_Mobile.png" class="hide-desktop"/>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
