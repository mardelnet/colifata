<?php /* Template Name: Audios */ ?>
<?php get_header(); ?>
<section class="pt-6 pb-3">
	<div class="container">
        <div class="columns">
            <div class="column is-full">
                <iframe 
                  allowtransparency="true" 
                  scrolling="no" 
                  frameborder="no" 
                  src="https://w.soundcloud.com/icon/?url=http%3A%2F%2Fsoundcloud.com%2Fradio-la-colifata&color=orange_white&size=32" 
                  style="width: 32px; height: 32px;">
                </iframe>
                <iframe 
                    width="100%" 
                    height="600" 
                    scrolling="yes" 
                    frameborder="no" 
                    src="
                        https://w.soundcloud.com/player/?url=https%3A//soundcloud.com/radio-la-colifata&amp;
                        auto_play=false&amp;
                        hide_related=false&amp;
                        show_comments=true&amp;
                        show_user=true&amp;
                        show_reposts=false&amp;
                        visual=false">
                </iframe>
            </div>
        </div>
	</div>
</section>
<?php get_template_part('parts/donar'); ?>
<?php get_footer(); ?>