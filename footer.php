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
			<?php 
			$desk_image = get_field('gp_footer_image_desktop', 'option');
			if( !empty( $desk_image ) ): ?>
				<img src="<?php echo esc_url($desk_image['url']); ?>" alt="<?php echo esc_attr($desk_image['alt']); ?>" class="hide-mobile" />
			<?php endif; ?>
			<?php 
			$mob_image = get_field('gp_footer_image_mobile', 'option');
			if( !empty( $mob_image ) ): ?>
				<img src="<?php echo esc_url($mob_image['url']); ?>" alt="<?php echo esc_attr($mob_image['alt']); ?>" class="hide-desktop" />
			<?php endif; ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Second Footer Datenschutzt -->
<div class="wpml-ls-statics-footer wpml-ls wpml-ls-legacy-list-horizontal gp-anime-footer">
	<ul>
		<li class="wpml-ls-slot-footer wpml-ls-item wpml-ls-item-de wpml-ls-current-language wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
			<a href="<?php __( 'PrivacyLink', 'refillchallenge' ) ?>" class="wpml-ls-link">
				<span class='wpml-ls-native'><?php __( 'PrivacyLinkText', 'refillchallenge' ) ?></span>
			</a>
		</li>
	</ul>
</div>

</body>
</html>
