<?php
add_filter('login_headerurl', 'change_wp_login_url');
//add_filter('login_headertitle', 'change_wp_login_title');
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
add_action('login_head', 'custom_login_logo');
add_action( 'languageSelected', 'languageSelected' );
add_theme_support( 'post-thumbnails' );

function custom_login_logo() {
	echo '
	<style type="text/css">
		h1 a { 
			background-image: url('.get_bloginfo('template_directory').'/assets/images/logo.png) !important;
			background-size: cover !important;
			width: 175px !important;
			height: 135px !important;
			margin-bottom: 0 !important; 
		}
		body {
			background-image: linear-gradient(#008700, #FBF303) !important;
		}
	</style>';
}
function change_wp_login_url() {
	return bloginfo('url');
}
function change_wp_login_title() {
	return get_option('blogname');
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Datos Generales',
		'menu_title'	=> 'Datos Generales',
		'menu_slug' 	=> 'datos-generales',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Datos Generales Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'datos-generales',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Datos Generales Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'datos-generales',
	));
  
  	acf_add_options_sub_page(array(
		'page_title' 	=> 'Datos Generales Home',
		'menu_title'	=> 'Home',
		'parent_slug'	=> 'datos-generales',
	));
	
}
function languageSelected(){
  $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  if (strpos($url,'/en/') !== false) {
    return "en";
  }elseif (strpos($url,'/fr/') !== false) {
    return "fr";
  } else {
    return "es";
  }
}
include 'custom_fields.php';
?>