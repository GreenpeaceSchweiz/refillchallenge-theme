<?php
/*
 * documentation here: https://www.advancedcustomfields.com/resources/register-multiple-options-pages/
 */
if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
            'page_title' 	=> 'General Settings',
            'menu_title'	=> 'Site Settings',
            'menu_slug' 	=> 'ecotech-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
    ));	
}