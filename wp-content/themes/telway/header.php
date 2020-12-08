<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__left">
                    <a  href="<?php echo get_home_url()?>"><img class="header__logo"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                        alt="Logo TelWay">
                    </a>
                </div>
            
            <div class="header__right">
            <div class="burger">
                <div class="burger__container">
                    <span></span>
                </div>
            </div>

            

                <div class="header__ls">
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    <ul class="header__lang"><?php pll_the_languages();?></ul>
                    
                </div>


                
                <div id="menu" class="menu">
                    <nav id="main-menu" class="menu__main">
                        <?php
                        wp_nav_menu(array(
                        'theme_location'    => 'main',
                        'container'         => '',
                        'menu_class'        => 'menu__items',
                        ));
                        ?>
                    </nav>
                </div>
            </div>
            </div>
        </div>
    </header>