<?php

/**
 * Template Name: evenement
 *
 * @package WordPress
 * @subpackage cidw-4w4
 */
?>
<main class="site__main">
    <h1>---- templete-evenement.php ------</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_title() ?>
    <?php the_content() ?>
    <?php the_field('adresse') ?>
    <?php the_field('date_et_heure_devenement') ?>
    <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer() ?>