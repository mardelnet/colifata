<footer class="footer is-relative has-text-white is-size-6">
    <div class="container">
        <div class="columns">
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    Nosotros
                </p>
                <p>
                    La Colifata es una ONG sin fines de lucro denominada Asociación Civil “La Colifata, Salud Mental y Comunicación”, que desarrolla actividades en el área de investigación y brinda servicios en salud mental utilizando los medios de comunicación para la creación de espacios en salud.
                </p>
            </div>
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    Contacto
                </p>
                <p>
                    Dirección: Virrey Avilés 3740 dto D, Ciudad Autónoma de Buenos Aires, Argentina.<br>
                    Teléfono: 4554-4356<br>
                    Email: lacolifataorg@gmail.com
                </p>
                <ul class="mt-5">
                    <li>
                        <a target="_blank" href="https://es-la.facebook.com/radiolacolifata">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-facebook-f"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.youtube.com/channel/UCo7vEh98l5AZpAAvbO7TBQA">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-youtube"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/radiolacolifata">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-twitter"></i></span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://soundcloud.com/la-colifata">
                        <span class="icon has-text-white is-size-4"><i class="fab fa-soundcloud"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <p class="is-size-4 mb-3 has-secondary-font">
                    Consultas Online
                </p>
                <p>
                    <div class="field">
                        <div class="control has-icons-left">
                            <input class="input" type="text" placeholder="Nombre Completo">
                            <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                            </span>
                        </div>
                        </div>
                        <div class="field">
                        <div class="control has-icons-left">
                            <input class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        </div>
                        <div class="field">
                        <div class="control">
                            <textarea class="textarea" placeholder="Mensaje..."></textarea>
                        </div>
                        </div>
                        <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link has-text-black">Enviar</button>
                        </div>
                    </div>
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
<?php get_template_part('parts/scripts'); ?>		
<?php wp_footer(); ?>														
</body>
</html>