<?php /* Template Name: Prensa */ ?>
<?php get_header(); ?>
<section class="py-6 content">
	<div class="container">
        <div class="columns">
            <div class="column is-full is-bold">
                <h1 class='is-size-1 has-text-dark has-secondary-font'>
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        </div>
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
<?php get_template_part('parts/donar'); ?>
<?php get_footer(); ?>