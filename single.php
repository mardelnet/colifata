<?php
$query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'paged' => $paged,
    'post__not_in' => array(get_the_ID())
) );
?>
<?php get_header(); ?>
<section id='featured-image' 
    style='
        <?php while ( have_posts() ) : the_post(); ?>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            background-image: url(<?php echo $image[0]; ?>)
        <?php endif; ?>
        <?php endwhile; ?>	
    '
>
    <div></div>
</section>
<section class="pt-6 is-relative content">
	<div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="columns">
            <div class="column is-full">
                <h1 class='is-size-1 has-text-dark has-secondary-font'>
                    <?php the_title();?>
                </h1>
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <?php endwhile; ?>			
	</div>
</section>
<section class="py-5 has-bg-center is-relative">
	<div class="container has-background-light py-5 px-5">
        <div class='columns'>
            <div class="column is-full">
                <h2 class='is-size-2 has-text-dark has-secondary-font'>
                    Más Noticias
                </h2>
            </div>
        </div>
		<div class="columns">
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="column">
                <a target='_self' href='<?php echo get_permalink(); ?>'>
                    <div class="card has-border-radius">
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img class="has-object-fit-cover has-border-radius" src="<?php echo $image[0]; ?>" alt="Noticia de La Colifata">
                                </figure>
                            </div>
                        <?php endif; ?>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">
                                        <?php echo get_the_title(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
        <div class='columns'>
            <div class="column is-full">
            <a target='_self' href='<?php if(languageSelected() == "fr"){ echo "/fr/nouvelles-colifatas/"; }elseif(languageSelected() == "en"){ echo "/en/colifatas-news/"; }else{ echo "/noticias-colifatas/"; } ?>' class="arrows  has-text-dark has-secondary-font">
					<?php the_field('noticias_boton_' . languageSelected(), 'options') ?>
				</a>
            </div>
        </div>
	</div>
</section>
<?php get_template_part('parts/donar'); ?>
<?php get_footer(); ?>