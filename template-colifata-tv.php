<?php /* Template Name: Colifata TV */ ?>
<?php get_header(); ?>
<section class="pt-6 pb-0">
	<div class="container">
        <div class="columns">
            <div class="column is-full">
                <nav class="tabs is-boxed">
                    <div class="container">
                    <ul>
                        <?php $i=0; if( have_rows('youtube_playlists') ): while( have_rows('youtube_playlists') ) : the_row(); ?>
                            <?php $playlist = 'playlist' . $i; ?>
                            <li class="tab <?php if ( $i==0 ) : ?>is-active<?php endif; ?>" onclick="openTab(event,'<?php echo $playlist; ?>')">
                                <a>Playlist #<?php echo $i; ?></a>
                            </li>
                        <?php $i++; endwhile; endif; ?>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
	</div>
    <div class="container section tab-border">
        <?php $i=0; if( have_rows('youtube_playlists') ): while( have_rows('youtube_playlists') ) : the_row(); ?>
            <?php $playlist = 'playlist' . $i; ?>
            <div id="<?php echo $playlist; ?>" class="content-tab" style="<?php if ( $i!=0 ) : ?>display:none<?php endif; ?>">
                <?php
                $parts = parse_url( get_sub_field('link_a_la_playlist_en_youtube') );
                parse_str($parts['query'], $query);
                $list = $query['list'];
                $v = $query['v'];
                $embed = 'https://www.youtube.com/embed?listType=playlist&list=' . $list . '&v=' . $v . '&layout=gallery';
                echo do_shortcode('[embedyt]' . $embed . '[/embedyt]'); 
                ?>
            </div>
        <?php $i++; endwhile; endif; ?>	
    </div>
</section>
<?php wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/tabs.js', 1.1, true); ?>
<?php get_footer(); ?>
