<?php get_header(); ?>
<section class="pt-6 pb-0">
	<div class="container">
        <?php if( have_rows('programas') ): while( have_rows('programas') ) : the_row(); ?>
            <div class="columns mb-6 pb-6">
                <div class="column is-full">
                    <h1 class='is-size-1 has-text-dark has-secondary-font'>
                        <?php echo get_sub_field('titulo'); ?>
                    </h1>
                    <?php echo get_sub_field('detalle'); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>			
	</div>
</section>
<?php get_template_part('parts/donar'); ?>
<?php get_footer(); ?>