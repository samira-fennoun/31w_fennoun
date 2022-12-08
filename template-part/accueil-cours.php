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
<article class="grille__article">


    <?php the_post_thumbnail('medium'); ?>
    <h6><?= $titre; ?></h6>

    <p><?= wp_trim_words(get_the_excerpt(), 20, $le_permalien); ?></p>
    <p>Type de cours: <?php the_field("type_de_cours") ?></p>
    <p>TIM-college de Maisonneuve</p>



</article>