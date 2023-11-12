<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">

            <video class="" autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/banner.png';?>">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/media/videos/header.mp4'; ?>" type="video/mp4">
            </video>

            <img class="banner-img" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/banner.png'; ?>" alt="Image bannière">

            <img class="banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/media/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>

        <section id="story" class="story">
            <h2><span>L'his</span><span>toire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php
            function get_characters_query() {
	            $args = [
		            'post_type' => 'characters',
		            'posts_per_page' => -1,
		            'meta_key'  => '_main_char_field',
		            'orderby'   => 'meta_value_num',
	            ];

	            return new WP_Query($args);
            }
            ?>

            <?php get_template_part('template-parts/characters-slider'); ?>

            <article id="place" class="parallax-container">
                <div class="clouds little-cloud"></div>
                <div class="clouds big-cloud"></div>
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>

        <span id="studio-anchor"></span>
        <section id="studio" class="studio">
            <h2><span>Studio</span> <span>Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <?php get_template_part("template-parts/nomination"); ?>

    </main>

<?php
get_footer();
