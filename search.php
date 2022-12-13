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


<h1>Résultat de la recherche</h1>
<?php _e( 'Element de recherche', 'locale' ); ?>: "<?php the_search_query(); ?>"
<?php
    if (have_posts()) :

        /* Start the Loop */
        while (have_posts()) :
            the_post();?>


            
       

<div class="carte">

    <header>
        <?php the_post_thumbnail('thumbnail');   ?>
    
       
    </header>
    <div class="main">
    <?php     $titre = get_the_title();
           
           ?>
        <h3><?= $titre  ?></h3>
    <?php

            $le_permalien = "<a href='" . get_the_permalink() . "'>&#10132;</a>";

            ?>


    <p><?= wp_trim_words(get_the_excerpt(), 50, $le_permalien); ?></p>

</div>

    </div>


    <?php

        endwhile;

    endif;
    ?>
   <p>Nombre de Résultat:<?php echo $wp_query->found_posts; ?></p> 
</main><!-- #main -->

<?php

get_footer();