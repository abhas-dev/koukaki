<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <header id="masthead" class="site-header">
        <div id="site-navigation" class="main-navigation">
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <div id="toggler"  class="burger-toggler" aria-controls="primary-menu" aria-expanded="false"></div>
        </div>

        <div id="overlay-full-screen" class="fullscreen-menu under-header animate__animated animate__fadeInDown">
            <div class="wrapper">
                <nav class="overlay-menu">
                    <ul>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#character-anchor">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio-anchor">Studio Koukaki</a></li>
                    </ul>
                </nav>

                <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/logo-menu.png'; ?> "alt="logo Fleurs d'oranger & chats errants">
                <img class="rdm-flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/random_flower.png'; ?> "alt="">
                <img class="sun-flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/Sunflower.png'; ?> " alt="">
                <img class="orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/orchid.png'; ?> " alt="">
                <img class="flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/flower.png'; ?> " alt="">
                <img class="hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/Hibiscus.png'; ?> " alt="">
                <img class="yellow-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/yellow-cat.png'; ?> " alt="">
                <img class="dark-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/dark-cat.png'; ?> " alt="">
                <img class="cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/cat.png'; ?> "alt="">

                <p>studio koukaki</p>
            </div>

        </div>
    </header>