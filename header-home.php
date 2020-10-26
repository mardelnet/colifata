<?php get_template_part( 'parts/head' ); ?>
<section class="hero is-relative is-fullheight">
	<video width="100%" height="100%" autoplay muted loop class="has-blur">
		<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/colifata.mp4" type="video/mp4">
		</video>
	<div class="overlay"></div>
	<div class="hero-head">
		<?php get_template_part('parts/nav'); ?>
	</div>
	<div class="hero-body">
		<div class="card has-secondary-font is-size-3 has-text-centered">
			<a class="has-text-black" href="#" onClick="window.open('radio','pagename','resizable,height=260,width=370'); return false;">
				<i class="far fa-play-circle neon has-text-white mb-6"></i>
				<span>FM 100.3</span><br>
				<?php the_field('subtitulo_' . languageSelected(), 'options') ?>
			</a>
			<noscript>
				<a class="has-text-black" href="radio.html" target="_blank">
					<i class="far fa-play-circle neon has-text-white mb-6"></i>
					<span>FM 100.3</span><br>
					<?php the_field('subtitulo_' . languageSelected(), 'options') ?>
				</a>
			</noscript>
		</div>
	</div>
</section>