<?php /* Template Name: Inicio */ ?>
<?php
$query = new WP_Query( array(
	'post_type' => 'post',
	'posts_per_page' => 6,
) );
?>
<?php get_header('home'); ?>
<section class="py-6">
	<div class="container">
		<div class="columns">
			<div class="column is-one-quarter has-secondary-font is-size-1 has-text-right-desktop">
				<?php the_field('quienes_somos_titulo_' . languageSelected(), 'options') ?>
			</div>
			<div class="column is-size-5">
				<?php the_field('quienes_somos_' . languageSelected(), 'options') ?>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('parts/donar'); ?>
<section id='noticias' class="py-6 has-bg-center is-relative">
	<div class="overlay"></div>
	<div class="container">
		<div class="columns">
			<div class="column has-secondary-font is-one-quarter has-text-right-desktop is-relative">
				<p class="is-size-1 has-text-white">
					<?php the_field('noticias_titulo_' . languageSelected(), 'options') ?>
				</p>
				<a target='_self' href='<?php if(languageSelected() == "fr"){ echo "/fr/nouvelles-colifatas/"; }elseif(languageSelected() == "en"){ echo "/en/colifatas-news/"; }else{ echo "/noticias-colifatas/"; } ?>' class="is-absolute arrows has-text-white">
					<?php the_field('noticias_boton_' . languageSelected(), 'options') ?>
				</a>
			</div>
			<div class="column" style="width: 1px">
				<div class="columns slider">
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="column">
						<a target='_self' href='<?php echo get_permalink(); ?>'>
							<div class="card has-border-radius">
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<div class="card-image">
										<figure class="image is-4by3">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img class="has-object-fit-cover has-border-radius" src="<?php echo $image[0]; ?>" alt="Noticia de La Colifata">
										</figure>
									</div>
								<?php endif; ?>
								<div class="card-content">
									<div class="media">
										<div class="media-content">
											<p class="title is-4">
												<?php echo get_the_title(); ?>
											</p>
										</div>
									</div>
									<div class="content">
										<?php echo substr( strip_tags( get_the_content() ) , 0 , 200 ); ?>...
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="premios" class="py-6 is-relative">
	<div class="container">
		<div class="columns">
			<div class="column is-relative has-secondary-font is-one-quarter has-text-right-desktop">
				<p class="is-break is-size-1">
					<?php the_field('reconocimientos_titulo_' . languageSelected(), 'options') ?>
				</p>
				<a target='_self' class="is-absolute arrows has-text-dark" href='<?php if(languageSelected() == "fr"){ echo "/fr/histoire-prix-et-reconnaissances#p"; }elseif(languageSelected() == "en"){ echo "/en/history-awards#p"; }else{ echo "/historia-reconocimientos#p"; } ?>' >
					<?php the_field('reconocimientos_boton_' . languageSelected(), 'options') ?>
				</a>
			</div>
			<div class="column" style="width: 1px;">
				<div class="columns slider">
				<?php $i=0; if( have_rows('reconocimientos',9515) ): while( have_rows('reconocimientos',9515 )) : the_row(); ?>
					<?php if ( $i<=6 ) : ?>
					<div class="column is-relative is-size-5">
						<i class="fas fa-award"></i>
						<strong><?php echo get_sub_field('fecha'); ?></strong><br>
						<?php echo substr( get_sub_field('descripcion') , 0 ,150 ); ?>...<br>
						<sub><?php echo get_sub_field('organizacion'); ?></sub>
					</div>
					<?php endif; $i++; ?>
				<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/home-slider.js', 1.1, true); ?>
<?php get_footer(); ?>