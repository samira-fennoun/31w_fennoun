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
<h1>category-cour.php</h1>
<main class="site__main">

	<?php
	if (have_posts()) :

		/* Start the Loop */
		while (have_posts()) :
			the_post();
			
			$titre=get_the_title();
			$code_cours=substr($titre,0,7);
			$heure_cours=strpos($titre,"(");
			$heure_cours=substr($titre,$heure_cours);
			$titre=substr($titre,8);
			$titre=substr($titre,0,strpos($titre,"(")-strlen($titre));
			?>

			 

			<h1><?= $titre  ?></h1>

			<?php the_content();
			
			$le_permalien="<a href='".get_the_permalink()."'>Suite</a>";
			
			?>


			<blockquote><?php the_excerpt() ?></blockquote><!--resume-->
			<blockquote><?= wp_trim_words(get_the_excerpt(), 5,$le_permalien);	?></blockquote>
			<pre><?php the_category();	?></pre>
			<pre><?php the_date();	?></pre>
			<pre><?php the_permalink();	?></pre>
			<pre><?php the_author();	?></pre>






	<?php

		endwhile;

	endif;
	?>

</main><!-- #main -->

<?php
wp_footer();
get_footer();
