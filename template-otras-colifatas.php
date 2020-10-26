<?php /* Template Name: Otras Colifatas */ ?>
<?php get_header(); ?>
<style>
.radio-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.radio-container .has-background-light {
    border: 1px solid #ddd;
    border-radius: 3px;
}
.radio-image-container {
  display: block;
  width: 200px;
  height: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.radio-image-container img {
  max-width: 100%;
  max-height: 100%;
}
</style>
<section class="py-6 content">
	<div class="container px-3">
    <h1 class='is-size-1 has-text-dark has-secondary-font mb-6'>
        <?php echo get_the_title(); ?>
    </h1>

    <div class="mb-5"><?php the_field('descripcion'); ?></div>

    <?php if( have_rows('otras_colifatas') ): ?>
    <div class="columns is-multiline">
      <?php while( have_rows('otras_colifatas') ): the_row(); ?>
      <div class="radio-container column is-one-quarter-desktop is-half-mobile has-text-centered">
        <div class='has-background-light'>
          <a href="<?php the_sub_field('url_colifata') ?>" class="radio-image-container mb-3" target='_blank'>
            <img src="<?php the_sub_field('imagen_colifata') ?>" alt="radio logo">
          </a>
          <p class="has-text-centered mb-5"><?php the_sub_field('nombre_colifata'); ?></p>
        </div>
        </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>