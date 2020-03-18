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
			<?php 
				$twitter_url = get_field('twitter_url', 'option');
				$facebook_url = get_field('facebook_url', 'option');
				$messenger = get_field('messenger', 'option');
				$whatsapp = get_field('whatsapp', 'option');
				$mail = get_field('mail', 'option');
			?>
			<ul class="social">
				<?php if($facebook_url){ ?>
				<li><a href="<?php echo $facebook_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" /></a></li>
				<?php } ?>
				<?php if($twitter_url){ ?>
				<li><a href="<?php echo $twitter_url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" /></a></li>
				<?php } ?>
				<?php if($messenger){ ?>
				<li><a href="<?php echo $messenger; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/messenger.svg" /></a></li>
				<?php } ?>
				<?php if($whatsapp){ ?>
				<li><a href="<?php echo $whatsapp; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/whatsapp.svg" /></a></li>
				<?php } ?>
				<?php if($mail){ ?>
				<li><a href="mailto:<?php echo $mail; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" /></a></li>
				<?php } ?>
			</ul>
			<?php echo do_shortcode('[social_warfare default_colors="light_grey" hover_colors="light_grey"]'); ?>
			</div>
		</div>
		<div class="footer-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/Footer_Desktop_full_2.png" />
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
