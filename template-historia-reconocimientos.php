<?php /* Template Name: Historia */ ?>
<?php get_header(); ?>
<section class="py-6 is-relative content">
	<div class="container">
    <div class="columns">
            <div class="column is-full is-bold">
                <h1 class='is-size-1 has-text-dark has-secondary-font'>
                    Historia
                </h1>
            </div>
        </div>
        <div class="columns">
            <div class="column is-full">
                <?php echo get_field('historia'); ?>
            </div>
        </div>
        <div class="columns mt-6 pt-6 has-background-light px-6 pt-5 pb-0">
            <div class="column is-full is-bold">
                <h2 class='is-size-1 has-text-dark has-secondary-font'>
                    Reconocimientos
                </h2>
            </div>
        </div>
        <?php if( have_rows('reconocimientos') ): while( have_rows('reconocimientos') ) : the_row(); ?>
            <div class="columns has-background-light px-6 pb-5 pt-0">
                <div class="column is-full">
                    <a target='_blank' href='<?php echo get_sub_field('enlace'); ?>' class='has-text-dark is-bold'>
                        <?php echo get_sub_field('descripcion'); ?>
                    </a><br>
                    <?php echo get_sub_field('organizacion'); ?> :: <?php echo get_sub_field('fecha'); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>			
	</div>
</section>
<?php get_template_part('parts/donar'); ?>
<?php get_footer(); ?>