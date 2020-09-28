<?php /* Template Name: Programas de Acción */ ?>
<?php get_header(); ?>
<section class="pt-6 is-relative content">
	<div class="container">
        <div class="columns">
            <div class="column is-full">
                <?php echo get_field('historia'); ?>
            </div>
        </div>
        <?php if( have_rows('programa') ): while( have_rows('programa') ) : the_row(); ?>
            <div class="columns is-vcentered mb-6">
                <div class="column is-two-thirds">
                    <h3>
                        <?php echo get_sub_field('nombre_del_programa'); ?> 
                    </h3>
                    <p>
                        <?php echo get_sub_field('descripcion_del_programa'); ?>
                    </p>
                </div>
                <div class="column is-one-thirds">
                    <img src='<?php echo get_sub_field('imagen')['sizes']['large']; ?>' class='has-img-border' />
                </div>
            </div>
        <?php endwhile; endif; ?>			
	</div>
</section>
<?php get_template_part('parts/donar'); ?>
<?php get_footer(); ?>