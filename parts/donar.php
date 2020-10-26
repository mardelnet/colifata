<section id='donar' class="is-relative">
	<div class="container px-5 py-5 has-border-radius">
		<div class="columns is-vcentered">
			<div class="column is-four-fifths">
                <?php the_field( 'donacion_texto_' . languageSelected(), 'options' ) ?>
			</div>
			<div class="column has-text-right-desktop">
				<a target='_blank' href="<?php the_Field('link_donaciones', 'options') ?>" class="button is-large has-secondary-font">
                    <?php the_field( 'donacion_boton_' . languageSelected(), 'options' ) ?>
				</a>
			</div>
		</div>
	</div>
</section>