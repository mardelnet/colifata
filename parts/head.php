<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	<?php
		if ( is_home() ) {
			echo 'La Colifata, Salud Mental y Comunicación';
		}
		else {
			echo get_the_title() . '/ La Colifata';	
		} ?>
	</title>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bulma.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/slick.css"/>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/responsive.css">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicons/mstile-310x310.png" />
	<?php wp_head();?>
</head>
<body class='
	<?php
	if ( is_single() ) {
		echo get_post_type();
	}
	else if ( is_archive() ) {
		echo 'archive';
	}
	else if ( is_home() ) {
		echo 'homepage';
	}
	else {
		echo 'default-page';		
	} ?>
'>