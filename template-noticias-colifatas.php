<?php /* Template Name: Noticias */ ?>
<?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => $paged
    ) );
?>
<?php get_header(); ?>
<section class="py-6 has-bg-center">
	<div class="container">
        <?php $i=0; $j=1; ?>
        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php if ( $i%3 == 0 ) : ?><div class="columns"><?php endif; ?>
            <div class="column is-one-third">
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
                            <div class="content">
                                <?php echo substr( strip_tags( get_the_content() ) , 0 , 200 ); ?>...
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php if ( $j != 0 && $j%3 == 0 ) : ?></div><?php endif; ?>
        <?php $i++; $j++; endwhile; ?>
            <div class="pagination mt-6">
            <?php 
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $query->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( 'Anteriores', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Posteriores', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
            ?>
            </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>