<?php
$query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'paged' => $paged
) );
?>
<?php get_header(); ?>
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
<section class="py-6 has-bg-center is-relative">
	<div class="container">
		<div class="columns">
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="column">
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
                                    <?php the_title();?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>