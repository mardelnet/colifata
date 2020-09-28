<?php
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Datos Generales',
		'menu_title'	=> 'Datos Generales',
		'menu_slug' 	=> 'datos-generales',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

include 'custom_fields.php';
?>