<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <?php $url_local = "http://localhost/infitech/"; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="<?php $url_local ?>wp-content/themes/twentytwentyone-child/assets/js/custom.js"></script>
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header-content">
            <div class="header-content__logo">
                <div>
                    <img src="<?php echo $url_local ?>wp-content/themes/twentytwentyone-child/assets/img/logo-tech.png" alt="logo infitech">
                </div>
            </div>
            <!-- Menú escritorio -->
            <div class="header-content__menu--escritorio">
                <nav>
                    <ul>
                        <li><a href="#">Quienes somos</a></li>
                        <li><a href="#">Donde estamos</a></li>
                        <li><a href="#">Proyectos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Menú movil -->
            <!-- <div class="header-content__btn--menu">
                <span id="btn_menu" class="fa fa-bars" aria-hidden="true"></span>
            </div>
            <div id="modal_menu" class="header-content__modal--menu">
                <nav>
                    <ul>
                        <li><a href="#">Quienes somos</a></li>
                        <li><a href="#">Donde estamos</a></li>
                        <li><a href="#">Proyectos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
            </div> --> 
            <!-- <div class="item-1 item"><a href="#">Quienes somos</a></div>
            <div class="item-2 item"><a href="#">Donde estamos</a></div>
            <div class="item-3 item"><a href="#">Proyectos</a></div>
            <div class="item-4 item"><a href="#">Contacto</a></div> -->

            <div class="header-content__btn--menu">
                <span id="btn_menu" class="fa fa-bars" aria-hidden="true"></span>
            </div>
            <div id="modal_menu" class="content-item hidden">
                <div class="items-1 items"><a href="#">Quienes somos</a></div>
                <div class="items-2 items"><a href="#">Donde estamos</a></div>
                <div class="items-3 items"><a href="#">Proyectos</a></div>
                <div class="items-4 items"><a href="#">Contacto</a></div>
            </div>
        </div>
    </header>