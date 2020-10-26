<?php /* Template Name: Quienes Somos */ ?>
<?php get_header(); ?>
<section id='quienes-somos' class="py-6 has-bg-center is-relative">
	<div class="container">
		
    <div class="columns py-5">
			<div class="column has-secondary-font is-one-third has-text-right-desktop is-relative">
				<p class="is-size-1">
          <?php the_field('quienes_somos_titulo') ?>
				</p>
			</div>
			<div class="column">
        <?php the_field('quienes_somos'); ?>
        <h4 class="mb-0 mt-5 is-size-5 has-secondary-font">
          <?php the_field('asociacion_civil_titulo') ?>
        </h4>
        <p><?php the_field('asociacion_civil'); ?></p>
			</div>
    </div>

    <div class="columns py-5 has-background-light">
			<div class="column has-secondary-font is-one-third has-text-right-desktop is-relative">
				<p class="is-size-1">
          <?php the_field('mision_titulo') ?>
				</p>
			</div>
			<div class="column">
        <p><?php echo get_field('mision'); ?></p>
			</div>
    </div>

    <div class="columns py-5">
			<div class="column has-secondary-font is-one-third has-text-right-desktop is-relative">
				<p class="is-size-1">
          <?php the_field('autoridades_titulo') ?>
				</p>
			</div>
			<div class="column">
        <?php echo get_field('autoridades'); ?>
			</div>
    </div>

    <div class="columns py-5 has-background-light">
			<div class="column has-secondary-font is-one-third has-text-right-desktop is-relative">
				<p class="is-size-1">
          <?php the_field('staff_titulo') ?>
				</p>
			</div>
			<div class="column">
        <strong><?php the_field('area_direccion_titulo') ?></strong>
        <p class='mb-3'><?php the_field('area_direccion'); ?></p>
        <strong><?php the_field('area_clinica_titulo') ?></strong>
        <p class='mb-3'><?php the_field('area_clinica'); ?></p>
        <strong><?php the_field('area_comunicacion_titulo') ?></strong>
        <p class='mb-3'><?php the_field('area_comunicacion'); ?></p>
        <strong><?php the_field('area_investigacion_titulo') ?></strong>
        <p><?php the_field('area_investigacion'); ?></p>
			</div>
		</div>

    <div class="columns py-5">
			<div class="column has-secondary-font is-one-third has-text-right-desktop is-relative">
				<p class="is-size-1">
          <?php the_field('la_radio_titulo') ?>
				</p>
			</div>
			<div class="column">
        <?php echo get_field('la_radio'); ?>
			</div>
    </div>

    <div class="columns py-5 has-background-light">
			<div class="column has-secondary-font is-one-third has-text-right-desktop is-relative">
				<p class="is-size-1">
          <?php the_field('informes_anuales_titulo') ?>
				</p>
			</div>
			<div class="column">
          <p class='mb-3'><?php the_field('informes_anuales_descripcion'); ?></p>
          <?php if( have_rows('informes_anuales') ): ?>
            <?php while( have_rows('informes_anuales') ): the_row(); ?>
            <a class="button is-light has-background-white mr-4 is-uppercase" target="_blank" href="<?php the_sub_field('informe_archivo') ?>">
              <?php the_sub_field('informe_titulo'); ?>
            </a>
            <?php endwhile; ?>
          <?php endif; ?>
      </div>
    </div>

  </div>
</section>
<?php get_footer(); ?>