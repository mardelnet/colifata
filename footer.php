<footer class="footer is-relative has-text-white is-size-6">
    <div class="container">
        <div class="columns">
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    <?php the_field('esp_titulo_nosotros', 'option'); ?>
                </p>
                <p>
                    <?php the_field('esp_texto_nosotros', 'option'); ?>
                </p>
            </div>
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    <?php the_field('esp_titulo_contacto', 'option'); ?>
                </p>
                <p>
                    Dirección: <?php the_field('domicilio', 'option'); ?><br>
                    Teléfono: <?php the_field('telefono', 'option'); ?><br>
                    Email: <?php the_field('email', 'option'); ?>
                </p>
                <ul class="mt-5">
                    <li>
                        <a target="_blank" href="<?php the_field('facebook_link', 'option'); ?>">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-facebook-f"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php the_field('instagram_link', 'option'); ?>">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php the_field('youtube_link', 'option'); ?>">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-youtube"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php the_field('twitter_link', 'option'); ?>">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-twitter"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="<?php the_field('soundcloud_link', 'option'); ?>">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-soundcloud"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    <?php the_field('esp_titulo_consultas', 'option'); ?>
                </p>
                <p>
                    <?php echo do_shortcode( '[contact-form-7 id="10867" title="Footer contact form"]' ) ?>
                </p>
            </div>
        </div>
        <div class="columns">
            <div class="column is-full">
                <p class="is-size-7 is-full mt-1 has-text-centered">
                    Diseño y desarrollo: Diego Bollini + Pedro Figueroa
                </p>
            </div>
        </div>
    </div>
</footer>
<button id='radio' class="button is-medium is-fixed shk">
    <a target="_blank" href="">
        <span class="icon is-small"><i class="far fa-play-circle neon has-text-white"></i></span>
        <span class="is-size-6 has-text-white has-secondary-font neon">Radio Online</span>
    </a>						
</button>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/fontawesome.js"></script>
<?php wp_footer(); ?>														
</body>
</html>