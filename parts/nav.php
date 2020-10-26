<header class="navbar is-transparent">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a target='_self' href='<?php if(languageSelected() == "fr"){ echo get_site_url()."/fr/"; }elseif(languageSelected() == "en"){ echo get_site_url()."/en/"; }else{ echo get_site_url(); } ?>' class="navbar-item">
                <img class='is-hidden-mobile' src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo de la Colifata">
                <img class='is-hidden-tablet' src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="Logo de la Colifata">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div id="navbarMenuHeroC" class="navbar-menu is-relative">
            <div class="navbar-end">
                 <a target='_self' href='<?php if(languageSelected() == "fr"){ echo get_site_url()."/fr/"; }elseif(languageSelected() == "en"){ echo get_site_url()."/en/"; }else{ echo get_site_url(); } ?>' class="navbar-item has-text-black is-bold">
                    <?php if(languageSelected() == "fr"){ echo "Home"; }elseif(languageSelected() == "en"){ echo "Home"; }else{ echo "Inicio"; } ?>
                </a>
                <div class="navbar-item has-dropdown is-hoverable has-text-black">
                    <a class="navbar-link has-text-black is-bold"> <?php if(languageSelected() == "fr"){ echo "Institutionnel"; }elseif(languageSelected() == "en"){ echo "Institutional"; }else{ echo "Institucional"; } ?></a>
                    <div class="navbar-dropdown">
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/qui-sommes-nous-mission-staff/"; }elseif(languageSelected() == "en"){ echo "/en/who-are-we-mission-staff/"; }else{ echo "/quienes-somos-mision-staff/"; } ?>'>
                            <?php if(languageSelected() == "fr"){ echo "Nous"; }elseif(languageSelected() == "en"){ echo "Us"; }else{ echo "Nosotros"; } ?>
                        </a>
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/programmes-daction/"; }elseif(languageSelected() == "en"){ echo "/en/action-programs/"; }else{ echo "/programas-de-accion/"; } ?>' >
                            <?php if(languageSelected() == "fr"){ echo "Programmes d'action"; }elseif(languageSelected() == "en"){ echo "Action Programs"; }else{ echo "Programas de Acción"; } ?>
                        </a>
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/histoire-prix-et-reconnaissances/"; }elseif(languageSelected() == "en"){ echo "/en/history-awards/"; }else{ echo "/historia-reconocimientos/"; } ?>' >
                            <?php if(languageSelected() == "fr"){ echo "Histoire / Remerciements"; }elseif(languageSelected() == "en"){ echo "History / Awards"; }else{ echo "Historia / Reconocimientos"; } ?>
                        </a>
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/recherche-developpement-et-replication-du-projet/"; }elseif(languageSelected() == "en"){ echo "/en/investigation-replicate-the-project/"; }else{ echo "/investigacion-replicacion-del-proyecto/"; } ?>'>
                            <?php if(languageSelected() == "fr"){ echo "Recherche / réplication"; }elseif(languageSelected() == "en"){ echo "Investigation / Replicate the project"; }else{ echo "Investigación / Replicación"; } ?>
                        </a>
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/presse/"; }elseif(languageSelected() == "en"){ echo "/en/press/"; }else{ echo "/prensa/"; } ?>' >
                            <?php if(languageSelected() == "fr"){ echo "Presse"; }elseif(languageSelected() == "en"){ echo "Press"; }else{ echo "Prensa"; } ?>
                        </a>
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/comment-collaborer/"; }elseif(languageSelected() == "en"){ echo "/en/how-to-collaborate/"; }else{ echo "/como-colaborar/"; } ?>' >
                            <?php if(languageSelected() == "fr"){ echo "Collaborations"; }elseif(languageSelected() == "en"){ echo "Collaborations"; }else{ echo "Colaboraciones"; } ?>
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable has-text-black">
                    <a class="navbar-link has-text-black is-bold">Multimedia</a>
                    <div class="navbar-dropdown">
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/audios-3/"; }elseif(languageSelected() == "en"){ echo "/en/audios-2/"; }else{ echo "/audios/"; } ?>'>
                            Audios
                        </a>
                        <a target='_blank' href='<?php the_field('instagram_link', 'option'); ?>' class="navbar-item">
                            <?php if(languageSelected() == "fr"){ echo "Photos"; }elseif(languageSelected() == "en"){ echo "Photos"; }else{ echo "Fotos"; } ?>
                        </a>
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/colifata-tv-3/"; }elseif(languageSelected() == "en"){ echo "/en/colifata-tv-2/"; }else{ echo "/colifata-tv/"; } ?>'>
                            Colifata TV
                        </a>
                    </div>
                </div>
                <a target='_self' href='<?php if(languageSelected() == "fr"){ echo "/fr/nouvelles-colifatas/"; }elseif(languageSelected() == "en"){ echo "/en/colifatas-news/"; }else{ echo "/noticias-colifatas/"; } ?>' class="navbar-item has-text-black is-bold">
                <?php if(languageSelected() == "fr"){ echo "Informations"; }elseif(languageSelected() == "en"){ echo "News"; }else{ echo "Noticias"; } ?>
                </a>
                <div class="navbar-item has-dropdown is-hoverable has-text-black">
                    <a class="navbar-link has-text-black is-bold"><?php if(languageSelected() == "fr"){ echo "Autres Colifatas"; }elseif(languageSelected() == "en"){ echo "Others Colifatas"; }else{ echo "Otras Colifatas"; } ?></a>
                    <div class="navbar-dropdown">
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/colifata-france-2/"; }elseif(languageSelected() == "en"){ echo "/en/colifata-france/"; }else{ echo "/colifata-francia/"; } ?>'>
                            <?php if(languageSelected() == "fr"){ echo "France Colifata"; }elseif(languageSelected() == "en"){ echo "France Colifata"; }else{ echo "Colifata Francia"; } ?>
                        </a>
                        <a target='_self' class="navbar-item" href='<?php if(languageSelected() == "fr"){ echo "/fr/autres-colifatas/"; }elseif(languageSelected() == "en"){ echo "/en/others-colifatas/"; }else{ echo "/otras-colifatas"; } ?>'><?php if(languageSelected() == "fr"){ echo "Autre"; }elseif(languageSelected() == "en"){ echo "Others"; }else{ echo "Otras"; } ?></a>
                    </div>
                </div>
            </div>
            <span class="navbar-item">
                <a class="button is-bold" href="<?php the_field('link_donaciones', 'option'); ?>" target='_blank'>
                    <span><?php if(languageSelected() == "fr"){ echo "Faire un don"; }elseif(languageSelected() == "en"){ echo "Donate"; }else{ echo "Donar"; } ?></span>
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