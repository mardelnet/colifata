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
				Quiénes Somos
			</div>
			<div class="column is-size-5">
				La Colifata es una ONG sin fines de lucro denominada Asociación Civil “La Colifata, Salud Mental y Comunicación”, que desarrolla actividades en el área de investigación y brinda servicios en salud mental utilizando los medios de comunicación para la creación de espacios en salud. Es comúnmente conocida como LT 22 Radio “La Colifata”, la radio de los internos y ex internos del hospital Borda de Buenos Aires y es la primera radio en el mundo en transmitir desde un neuropsiquiátrico.
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
					Últimas noticias
				</p>
				<a class="is-absolute arrows has-text-white">
					Ver todos >>
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
					Reconocimientos
				</p>
				<a class="is-absolute arrows">
					Ver todos >>
				</a>
			</div>
			<div class="column" style="width: 1px;">
				<div class="columns slider">
				<?php $i=0; if( have_rows('reconocimientos',9515) ): while( have_rows('reconocimientos',9515) && $i<=6 ) : the_row(); ?>
					<div class="column is-relative is-size-5">
						<i class="fas fa-award"></i>
						<strong><?php echo get_sub_field('fecha'); ?></strong><br>
						<?php echo substr( get_sub_field('descripcion') , 0 ,150 ); ?>...<br>
						<sub><?php echo get_sub_field('organizacion'); ?></sub>
					</div>
				<?php endwhile; $i++; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/home-slider.js', 1.1, true); ?>
<?php get_footer(); ?>