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
					<div class="column">
						<div class="card has-border-radius">
							<div class="card-image">
								<figure class="image is-4by3">
								<img class="has-object-fit-cover has-border-radius" src="https://lacolifata.com.ar/wp-content/uploads/2018/10/IMG_0439-670x300.jpg" alt="Noticia de La Colifata">
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
								<div class="media-content">
									<p class="title is-4">
										¡La Colifata te abre las puertas para que puedas tener tu programa de radio!
									</p>
								</div>
								</div>
								<div class="content">
									Nuestro estudio externado es un lugar abierto a toda la comunidad para que estudiantes, aficionados a la radiofonía y todas aquellas […]
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="card has-border-radius">
							<div class="card-image">
								<figure class="image is-4by3">
								<img class="has-object-fit-cover has-border-radius" src="https://lacolifata.com.ar/wp-content/uploads/2018/12/DSC_0096-e1544558655694-300x300.jpg" alt="Noticia de La Colifata">
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
								<div class="media-content">
									<p class="title is-4">
										Estamos a las puertas de cumplir nuestra soñada frecuencia definitiva
									</p>
								</div>
								</div>
								<div class="content">
									La Colifata, la primer radio del mundo en transmitir desde un psiquiátrico, reconocida por la Organización Panamericana de la Salud […]
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="card has-border-radius">
							<div class="card-image">
								<figure class="image is-4by3">
								<img class="has-object-fit-cover has-border-radius" src="https://lacolifata.com.ar/wp-content/uploads/2018/12/Paradelf1-670x300.jpg" alt="Noticia de La Colifata">
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
								<div class="media-content">
									<p class="title is-4">
										Ganamos un premio en Rusia
									</p>
								</div>
								</div>
								<div class="content">
									Hoy ganamos  el Primer premio en la categoría Audiovisual en los Juegos Paradélficos por nuestro programa «Colifata Filosa», de Canal Encuentro. […]
								</div>
							</div>
						</div>
					</div>
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
					<div class="column is-relative is-size-5">
						<i class="fas fa-award"></i>
						<strong>6 de Junio 2014.</strong><br>
						Distinción de la Honorable Cámara de Diputados de La Nación a Radio La Colifata en el Día del Periodista, por su labor periodística original comunitaria y autogestionada.
					</div>
					<div class="column is-relative is-size-5">
						<i class="fas fa-award"></i>
						<strong>Mayo 1996.</strong><br>
						Reconocimiento de la Organización Panamericana de la Salud.
					</div>
					<div class="column is-relative is-size-5">
						<i class="fas fa-award"></i>
						<strong>Abril 1996.</strong><br>
						Mención de Honor en los premios “Martin Fierro”, APTRA.
					</div>
					<div class="column is-relative is-size-5">
						<i class="fas fa-award"></i>
						<strong>6 de Junio 2014.</strong><br>
						Distinción de la Honorable Cámara de Diputados de La Nación a Radio La Colifata en el Día del Periodista, por su labor periodística original comunitaria y autogestionada.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/home-slider.js', 1.1, true); ?>
<?php get_footer(); ?>