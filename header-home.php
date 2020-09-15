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
	<section class="hero is-relative is-fullheight">
		<video width="100%" height="100%" autoplay muted loop class="has-blur">
			<source src="assets/videos/colifata.mp4" type="video/mp4">
			</video>
		<div class="overlay"></div>
		<div class="hero-head">
			<?php get_template_part('parts/nav'); ?>
		</div>
		<div class="hero-body">
			<div class="card has-secondary-font is-size-3 has-text-centered">
				<a class="has-text-black" href="#" onClick="window.open('radio.html','pagename','resizable,height=260,width=370'); return false;">
					<i class="far fa-play-circle neon has-text-white mb-6"></i>
					<span>FM 100.3</span><br>
					Radio Colifata • Escuchanos Online
				</a>
				<noscript>
					<a class="has-text-black" href="radio.html" target="_blank">
						<i class="far fa-play-circle neon has-text-white mb-6"></i>
						<span>FM 100.3</span><br>
						Radio Colifata / Escuchanos Online
					</a>
				</noscript>
			</div>
		</div>
	</section>