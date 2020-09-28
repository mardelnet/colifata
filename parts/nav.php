<header class="navbar is-transparent">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a href='<?php echo get_site_url(); ?>' class="navbar-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo de la Colifata">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu is-relative">
            <div class="navbar-end">
                <a target='_self' href='<?php echo get_site_url(); ?>' class="navbar-item has-text-black is-bold">
                    Inicio
                </a>
                <div class="navbar-item has-dropdown is-hoverable has-text-black">
                    <a class="navbar-link has-text-black is-bold">Institucional</a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">Nosotros</a>
                        <a target='_self' class="navbar-item" href='/programas-de-accion' >
                            Programas de Acción
                        </a>
                        <a target='_self' class="navbar-item" href='/historia-reconocimientos' >
                            Historia / Reconocimientos
                        </a>
                        <a target='_self' class="navbar-item" href='/investigacion-replicacion-del-proyecto'>
                            Investigación / Replicación
                        </a>
                        <a target='_self' class="navbar-item" href='/prensa' >
                            Prensa
                        </a>
                        <a target='_self' class="navbar-item" href='/como-colaborar' >
                            Colaboraciones
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable has-text-black">
                    <a class="navbar-link has-text-black is-bold">Multimedio</a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">Radio / Programación</a>
                        <a target='_self' class="navbar-item" href='/audios'>
                            Audios
                        </a>
                        <a class="navbar-item">Fotos</a>
                        <a target='_self' class="navbar-item" href='/colifata-tv'>
                            Colifata TV
                        </a>
                    </div>
                </div>
                <a target='_self' href='/noticias-colifatas' class="navbar-item has-text-black is-bold">
                    Noticias
                </a>
                <div class="navbar-item has-dropdown is-hoverable has-text-black">
                    <a class="navbar-link has-text-black is-bold">Otras Colifatas</a>
                    <div class="navbar-dropdown">
                        <a target='_self' class="navbar-item" href='/colifata-francia'>
                            Colifata Francia
                        </a>
                        <a class="navbar-item">Otras</a>
                    </div>
                </div>
            </div>
            <span class="navbar-item">
                <a class="button is-bold">
                    <span>Donar</span>
                </a>
            </span>
            <div id='languages' class='is-absolute'>
                <?php 
                    $args = array( 'show_flags' => 1, 'show_names' => 0 );
                    pll_the_languages($args);
                ?>
            </div>
        </div>
    </div>
</header>