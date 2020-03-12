<?php 
add_action('acf/init', 'gp_acf_init');
function gp_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'gp_plate',
			'title'				=> __('Plate block'),
			'description'		=> __('Refill Diet: Plate block.'),
			'render_callback'	=> 'gp_acf_block_render_plate',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'gp_custom' ),
		));

		acf_register_block(array(
			'name'				=> 'gp_buttonLink',
			'title'				=> __('Button block'),
			'description'		=> __('Refill Diet: Button block.'),
			'render_callback'	=> 'gp_acf_block_render_button',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'gp_custom' ),
		));

		acf_register_block(array(
			'name'				=> 'gp_lightbox',
			'title'				=> __('Lightbox block'),
			'description'		=> __('Refill Diet: Lightbox block.'),
			'render_callback'	=> 'gp_acf_block_render_button',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'gp_custom' ),
		));

		
	}
}

function gp_acf_block_render_plate( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}

function gp_acf_block_render_button( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}