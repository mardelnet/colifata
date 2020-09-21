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
            <div class="column is-one-third has-text-right">
                <audio id="alsolnet_radio" class="video-js" controls preload="auto" width="350" height="120" data-setup='{"techOrder": ["html5", "flash"]}'>
                    <source src="http://streamall.alsolnet.com/lacolifata" type='audio/aac'>
                    <source src="http://streamall.alsolnet.com/lacolifata/lacolifata.stream" type='rtmp/mp4'>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="//www.alsolnet.com/indexahtmlsite_SoportePg.htm" target="_blank">supports HTML5 video</a>
                    </p>
                </audio>
            </div>
        </div>
	</div>
</section>
<?php get_footer(); ?>