<?php /* Template Name: Colifata Francia */ ?>
<?php get_header(); ?>
<section class="pt-6 pb-0">
	<div class="container">
        <div class="columns">
            <div class="column is-full">
                <h1 class='is-size-1 has-text-dark has-secondary-font'>
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        </div>
        <div class="columns">
            <div class="column is-two-third">
                <?php echo get_field('descripcion'); ?>
            </div>
            <div class="column is-one-third has-text-right-desktop">
                <audio id="alsolnet_radio" class="video-js" controls preload="auto" width="350" height="120" data-setup='{"techOrder": ["html5", "flash"]}'>
                    <source src="<?php the_field('link') ?>" type='audio/aac'>
                    <source src="<?php the_field('link') ?>" type='rtmp/mp4'>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="//www.alsolnet.com/indexahtmlsite_SoportePg.htm" target="_blank">supports HTML5 video</a>
                    </p>
                </audio>
				<div class="my-5 px-4 py-4 has-text-left has-background-success-light">
				  <h3><span class="icon is-size-5"><i class="fas fa-envelope-open-text"></i></span> Contacto</h3>
				  <a class="is-size-6" href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a>
				</div>
				<div class="my-5 px-4 py-4 has-text-left has-background-success-light">
				  <h3><span class="icon is-size-5"><i class="fab fa-facebook-f"></i></span> Facebook</h3>
				  <a class="is-size-6" target="_blank" href="<?php the_field('link_a_facebook') ?>" style="overflow-wrap:anywhere;"><?php the_field('link_a_facebook') ?></a>
				</div>
				<div class="my-5 px-4 py-4 has-text-left has-background-success-light">
				  <h3><span class="icon is-size-5"><i class="fab fa-soundcloud"></i></span> Soundcloud</h3>
				  <a class="is-size-6" target="_blank" href="<?php the_field('link_a_soundcloud') ?>" style="overflow-wrap:anywhere;"><?php the_field('link_a_soundcloud') ?></a>
				</div>
            </div>
        </div>
	</div>
</section>
<?php get_footer(); ?>