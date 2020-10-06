<?php /* Template Name: Quienes Somos */ ?>
<?php get_header(); ?>
<section class="py-6 content">
	<div class="container px-3">
    <h1 class='is-size-1 has-text-dark has-secondary-font mb-6'>
        <?php echo get_the_title(); ?>
    </h1>
    <h3 class="is-fullwidth has-background-light has-text-centered py-3 is-bold mb-5">Quiénes somos</h3>
    <div class="mb-6">
      <?php the_field('quienes_somos'); ?>
    </div>
    <h3 class="is-fullwidth has-background-light has-text-centered py-3 is-bold mb-5">Misión</h3>
    <div class="mb-6">
      <?php the_field('mision'); ?>
    </div>
    <h3 class="is-fullwidth has-background-light has-text-centered py-3 is-bold mb-5">Staff</h3>
    <div class="columns">
      <div class="column is-one-quarter">
        <h4 class="is-fullwidth has-background-light has-text-centered py-2 is-bold mb-5 is-size-5">Área Dirección</h4>
        <p><?php the_field('area_direccion'); ?></p>
      </div>
      <div class="column is-one-quarter">
        <h4 class="is-fullwidth has-background-light has-text-centered py-2 is-bold mb-5 is-size-5">Área Clínica</h4>
        <p><?php the_field('area_clinica'); ?></p>
      </div>
      <div class="column is-one-quarter">
        <h4 class="is-fullwidth has-background-light has-text-centered py-2 is-bold mb-5 is-size-5">Área Comunicación</h4>
        <p><?php the_field('area_comunicacion'); ?></p>
      </div>
      <div class="column is-one-quarter">
        <h4 class="is-fullwidth has-background-light has-text-centered py-2 is-bold mb-5 is-size-5">Área Investigación</h4>
        <p><?php the_field('area_investigacion'); ?></p>
      </div>
    </div>
    <hr class="my-6">

    <h4 class="mb-5 is-size-4">Autoridades</h4>
    <p><?php the_field('autoridades'); ?></p>

    <hr class="my-6">

    <h4 class="mb-5 is-size-4">La Colifata, Salud Mental y Comunicación Asociación Civil</h4>
    <p><?php the_field('asociacion_civil'); ?></p>

    <hr class="my-6">

    <h4 class="mb-5 is-size-4">Informes Anuales</h4>
    <p class="mb-4"><?php the_field('informes_anuales_descripcion'); ?></p>
    <?php if( have_rows('informes_anuales') ): ?>
      <?php while( have_rows('informes_anuales') ): the_row(); ?>
      <a class="button is-light mr-4 is-uppercase" target="_blank" href="<?php the_sub_field('informe_archivo') ?>">
      <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path d="M444.9 109.8L338.2 3.1c-2-2-4.7-3.1-7.5-3.1h-224C83.1 0 64 19.1 64 42.7v426.7C64 492.9 83.1 512 106.7 512h298.7C428.9 512 448 492.9 448 469.3v-352C448 114.5 446.9 111.8 444.9 109.8zM341.3 36.4l70.3 70.3h-48.9c-11.8 0-21.3-9.6-21.3-21.3V36.4zM426.7 469.3c0 11.8-9.6 21.3-21.3 21.3H106.7c-11.8 0-21.3-9.6-21.3-21.3V42.7c0-11.8 9.6-21.3 21.3-21.3H320v64C320 108.9 339.1 128 362.7 128h64V469.3z"/><path d="M310.4 313.1c-9.9-7.8-19.3-15.8-25.5-22 -8.1-8.1-15.4-16-21.7-23.5 9.8-30.3 14.1-46 14.1-54.3 0-35.4-12.8-42.7-32-42.7 -14.6 0-32 7.6-32 43.7 0 15.9 8.7 35.2 26 57.7 -4.2 12.9-9.2 27.8-14.8 44.6 -2.7 8.1-5.6 15.5-8.7 22.4 -2.5 1.1-4.9 2.3-7.3 3.4 -8.5 4.2-16.5 8.1-24 11.6C150.5 370.2 128 380.8 128 401.9c0 15.3 16.6 24.8 32 24.8 19.8 0 49.8-26.5 71.7-71.1 22.7-9 50.9-15.6 73.2-19.7 17.9 13.7 37.6 26.9 47.1 26.9 26.4 0 32-15.3 32-28.1 0-25.2-28.8-25.2-42.7-25.2C337 309.3 325.5 310.6 310.4 313.1zM160 405.3c-6.1 0-10.2-2.9-10.7-3.4 0-7.6 22.6-18.2 44.4-28.6 1.4-0.7 2.8-1.3 4.2-2C181.9 394.6 166.1 405.3 160 405.3zM234.7 214.4c0-22.4 6.9-22.4 10.7-22.4 7.5 0 10.7 0 10.7 21.3 0 4.5-3 15.8-8.5 33.3C239.1 233.8 234.7 222.7 234.7 214.4zM242.8 329c0.7-1.9 1.3-3.7 1.9-5.6 4-11.9 7.5-22.5 10.7-32.1 4.4 4.9 9.2 9.9 14.3 15 2 2 7 6.5 13.6 12.1C270.2 321.2 256.2 324.8 242.8 329zM362.7 334.6c0 4.8 0 6.8-9.9 6.8 -2.9-0.6-9.6-4.6-17.9-10.2 3-0.3 5.2-0.5 6.5-0.5C357.1 330.7 361.6 332.2 362.7 334.6z"/></svg>


      <?php the_sub_field('informe_titulo'); ?>
      </a>
      <?php endwhile; ?>
    <?php endif; ?>

    <hr class="my-6">

    <h4 class="mb-5 is-size-4">LT22 Radio La Colifata</h4>
    <div><?php the_field('la_radio'); ?></div>

    <hr class="my-6">

    <h4 class="mb-5 is-size-4">Fotografías:</h4>
    
    <?php if( have_rows('fotografos') ): ?>
      <?php while( have_rows('fotografos') ): the_row(); ?>
      <a class="button is-light mr-4 is-uppercase" target="_blank" href="<?php the_sub_field('url_fotografo') ?>">
      <svg class="mr-2" enable-background="new 0 0 512 512" height="20" viewBox="0 0 512 512" width="20" xmlns="http://www.w3.org/2000/svg"><g><path d="m467 121h-86.703l-11.177-55.883c-2.794-13.974-15.166-24.117-29.417-24.117h-167.406c-14.25 0-26.623 10.143-29.417 24.117l-11.177 55.883h-86.703c-24.813 0-45 20.187-45 45v260c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45v-260c0-24.813-20.187-45-45-45zm-294.703-50h167.406l10 50h-187.406zm309.703 355c0 8.271-6.729 15-15 15h-422c-8.271 0-15-6.729-15-15v-260c0-8.271 6.729-15 15-15h422c8.271 0 15 6.729 15 15z"/><path d="m256 185c-61.206 0-111 49.794-111 111s49.794 111 111 111 111-49.794 111-111-49.794-111-111-111zm0 192c-44.664 0-81-36.337-81-81s36.336-81 81-81 81 36.337 81 81-36.336 81-81 81z"/><path d="m128 185h-48c-8.284 0-15 6.716-15 15s6.716 15 15 15h48c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/></g></svg>
      <?php the_sub_field('nombre_fotografo'); ?>
      </a>
      <?php endwhile; ?>
    <?php endif; ?>

    <hr class="mt-6">
	</div>
</section>
<?php get_footer(); ?>
