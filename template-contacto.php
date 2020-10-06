<?php /* Template Name: Contacto */ ?>
<?php get_header(); ?>
<style> 
    form label input{
        height: 40px;
    }
    form label input,
    form label textarea{
        width: 100%;
        border: 7px solid black;
        border-style: double;
        padding: 10px;
    }
    form input[type=submit]{
        font-family: 'Barrio', sans-serif;
        font-size: 1.5rem;
        background-color: #fff;
        border-color: #dbdbdb;
        border-width: 1px;
        color: #363636;
        cursor: pointer;
        justify-content: center;
        padding-bottom: calc(.5em - 1px);
        padding-left: 1em;
        padding-right: 1em;
        padding-top: calc(.5em - 1px);
        text-align: center;
        white-space: nowrap;
        border: 1px solid #dbdbdb;
    }
</style>
<section class="py-6 content">
    <div class="container px-3">
        <h1 class='is-size-1 has-text-dark has-secondary-font mb-6'>
            <?php echo get_the_title(); ?>
        </h1>
        <div class="columns">
            <div class="column">
                <?php echo do_shortcode(get_field('formulario_contacto')); ?>
            </div>
            <div class="column">
                <div class="column is-full has-text-centered">
                    <h2 class="is-fullwidth has-background-light py-3 is-bold mb-5">
                        <?php echo get_field('direccion_titulo'); ?>
                    </h2>
                    <p>
                        <?php echo get_field('direccion_valor'); ?>
                    </p>
                </div>
                <div class="column is-full has-text-centered">
                    <h2 class="is-fullwidth has-background-light py-3 is-bold mb-5">
                        <?php echo get_field('telefono_titulo'); ?>
                    </h2>
                    <p>
                        <?php echo get_field('telefono_valor'); ?>
                    </p>
                </div>
                <div class="column is-full has-text-centered">
                    <h2 class="is-fullwidth has-background-light py-3 is-bold mb-5">
                        <?php echo get_field('email_titulo'); ?>
                    </h2>
                    <p>
                        <?php echo get_field('email_valor'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/donar'); ?>
<?php get_footer(); ?>