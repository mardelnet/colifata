
<style>
#wpcf7-f11144-o1 input[type="text"],
#wpcf7-f11144-o1 input[type="email"],
#wpcf7-f11144-o1 textarea,
#wpcf7-f11068-o1 input[type="text"],
#wpcf7-f11068-o1 input[type="email"],
#wpcf7-f11068-o1 textarea,
#wpcf7-f11145-o1 input[type="text"],
#wpcf7-f11145-o1 input[type="email"],
#wpcf7-f11145-o1 textarea {
    width: 100%;
    color: #fff;
    background-color: transparent;
    margin-bottom: 1rem;
    border: none;
    outline: none;
    border-bottom: 2px solid #ffffffad;
    padding: .5rem;
    font-weight: 500;
    line-height: 1.5;
    font-size: 1rem;
    font-family: 'Roboto', sans-serif;
  
}
#wpcf7-f11144-o1 textarea,
#wpcf7-f11145-o1 textarea,
#wpcf7-f11068-o1 textarea {
	height: 6rem;
}
#wpcf7-f11144-o1 input[type="submit"],
#wpcf7-f11145-o1 input[type="submit"],
#wpcf7-f11068-o1 input[type="submit"] {
    background: transparent;
    padding: .5rem 1.25rem;
    font-family: 'Roboto', sans-serif;
    color: #fff;
    border: 1px solid #ffffffba;
    border-radius: 3px;
    font-weight: 500;
    line-height: 1.5;
    font-size: 1rem;
    float: right;

}
</style>

<footer class="footer is-relative has-text-white is-size-6">
    <div class="container">
        <div class="columns">
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    <?php   
                      if(languageSelected() == "fr"){
                          the_field('fr_titulo_nosotros', 'option');
                      }elseif(languageSelected() == "en"){
                          the_field('eng_titulo_nosotros', 'option');
                      }else{
                          the_field('esp_titulo_nosotros', 'option');
                      }
                    ?>
                </p>
                <p>
                    <?php   
                      if(languageSelected() == "fr"){
                          the_field('fr_texto_nosotros', 'option');
                      }elseif(languageSelected() == "en"){
                          the_field('eng_texto_nosotros', 'option');
                      }else{
                          the_field('esp_texto_nosotros', 'option');
                      }
                    ?>
                </p>
            </div>
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    <?php   
                      if(languageSelected() == "fr"){
                          the_field('fr_titulo_contacto', 'option');
                      }elseif(languageSelected() == "en"){
                          the_field('eng_titulo_contacto', 'option');
                      }else{
                          the_field('esp_titulo_contacto', 'option');
                      }
                    ?>
                </p>
                <p>
                    <?php if(languageSelected() == "fr"){ echo "Adresse"; }elseif(languageSelected() == "en"){ echo "Address"; }else{ echo "Dirección"; } ?>: <?php the_field('domicilio', 'option'); ?><br>
                    <?php if(languageSelected() == "fr"){ echo "Téléphone"; }elseif(languageSelected() == "en"){ echo "Phone"; }else{ echo "Teléfono"; } ?>: <?php the_field('telefono', 'option'); ?><br>
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
                    <?php   
                      if(languageSelected() == "fr"){
                          the_field('fr_titulo_consultas', 'option');
                      }elseif(languageSelected() == "en"){
                          the_field('eng_titulo_consultas', 'option');
                      }else{
                          the_field('esp_titulo_consultas', 'option');
                      }
                    ?>
                </p>
                <p>
                    <?php   
                      if(languageSelected() == "fr"){
                        echo do_shortcode( '[contact-form-7 id="11145" title="Form Footer FR"]' );
                      }elseif(languageSelected() == "en"){
                        echo do_shortcode( '[contact-form-7 id="11144" title="Form Footer EN"]' );
                      }else{
                        echo do_shortcode( '[contact-form-7 id="11068" title="Form Footer ES"]' );
                      }
                    ?>
                </p>
            </div>
        </div>
        <div class="columns">
            <div class="column is-full">
                <p class="is-size-7 is-full mt-1 has-text-centered">
                    <?php if(languageSelected() == "fr"){ echo "Design et développement"; }elseif(languageSelected() == "en"){ echo "Design and development"; }else{ echo "Diseño y desarrollo"; } ?>: Diego Bollini + Pedro Figueroa
                </p>
            </div>
        </div>
    </div>
</footer>
<button id='radio' class="button is-medium is-fixed shk">
    <a target="_blank" href="">
        <span class="icon is-small"><i class="far fa-play-circle neon has-text-white"></i></span>
        <span class="is-size-6 has-text-white has-secondary-font neon">Online Radio</span>
    </a>						
</button>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/fontawesome.js"></script>
<?php wp_footer(); ?>														
</body>
</html>