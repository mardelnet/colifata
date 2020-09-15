<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La Colifata</title>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bulma.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/slick.css"/>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/style.css">
	<?php wp_head();?>
</head>
<body>
	<section class="hero is-relative">
		<div class="overlay"></div>
		<div class="hero-head pb-6">
			<?php get_template_part('parts/nav'); ?>
		</div>
	</section>