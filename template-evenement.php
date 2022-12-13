<?php

/**
 * Template Name: evenement
 *
 * @package WordPress
 * @subpackage cidw-4w4
 */
get_header();
?>


<main class="site__main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <br> adresse: <?php the_field('adresse'); ?> <br>date et heure:<?php the_field('date_et_heure_devenement'); ?>
    <?php endwhile ?> <?php endif ?>
</main>
<?php get_footer() ?>