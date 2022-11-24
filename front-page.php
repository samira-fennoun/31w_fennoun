<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */

get_header();

?>
<main class="site__main">
    <code>--front-page--</code>
    <?php
    wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav",
        "container_class" => "evenement"
    ));

    ?>

    <section class="grille">
        <?php
        if (have_posts()) :
            /* Start the Loop */
            while (have_posts()) :
                the_post(); ?>
        <article class="grille__article">

            <?php

                    $titre = get_the_title();
                    $code_cours = substr($titre, 0, 7);
                    $heure_cours = strpos($titre, "(");
                    $heure_cours = substr($titre, $heure_cours);
                    $titre = substr($titre, 8);
                    $longueur = strlen($titre);
                    $titre = substr($titre, 0, strpos($titre, "(") - strlen($titre));
                    ?>
            <?php

                    $le_permalien = "<a href='" . get_the_permalink() . "'>Suite</a>";
                    ?>

        </article>
        <?php if (in_category('galerie')) : ?>

        <article class="grille__galerie">

            <?php the_content(); ?>
        </article>
        <?php else : ?>

        <article class="grille__article">


            <h6><?= $titre; ?></h6>

            <p><?= wp_trim_words(get_the_excerpt(), 20, $le_permalien); ?></p>
            <p>Type de cours: <?php the_field("type_de_cours") ?></p>
            <p>TIM-college de Maisonneuve</p>

            <?php
                    endif;
                endwhile;
            endif;
                ?>

    </section>
</main><!-- #main -->
<?php
get_footer();