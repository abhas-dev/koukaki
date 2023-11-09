<?php
$characters_query = get_characters_query();

if ($characters_query->have_posts()):
echo '<article id="characters">';
    echo '<div class="characters">';
        echo '<h3>Les personnages</h3>';
        echo '<div class="swiper swiper-characters">';
            echo '<div class="swiper-wrapper">';

                while ($characters_query->have_posts()) :
                $characters_query->the_post();
                echo '<div class="swiper-slide">';
                    echo '<figure>';
                        echo get_the_post_thumbnail(get_the_ID(), 'full');
                        echo '<figcaption>';
                            the_title();
                            echo '</figcaption>';
                        echo '</figure>';
                    echo '</div>';
                endwhile;

                echo '</div></div></div></article>';

wp_reset_postdata();
endif;