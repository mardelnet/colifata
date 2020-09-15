<?php /* Template Name: Prensa */ ?>
<?php get_header(); ?>
<section class="py-6 is-relative content">
    <h1 class='is-size-1 has-secondary-font is-absolute'>
        <?php echo get_the_title(); ?>
    </h1>
	<div class="container">
        <?php if( have_rows('nota_de_prensa') ): while( have_rows('nota_de_prensa') ) : the_row(); ?>
            <div class="columns">
                <div class="column is-half is-bold">
                    <a target='_blank' href='<?php echo get_sub_field('enlace'); ?>' class='has-text-dark'>
                        <?php echo get_sub_field('titulo'); ?>
                    </a>
                </div>
                <div class="column is-half has-text-right-desktop">
                    <?php echo get_sub_field('medio'); ?> :: <?php echo get_sub_field('fecha'); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>			
	</div>
</section>
<?php get_template_parts('parts/donar'); ?>
<?php get_footer(); ?>