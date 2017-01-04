<?php 
// on inclus le fichier header.php
get_header(); 
?>

<!-- Exemple d'utilisation des CSS
div est défini dans style.css
w3-blue est une classe de w3.css (inclus dans le header)
-->
<div>
	<div class="w3-blue">
		PAGE.PHP
	</div>
</div>


<!-- Affichage du titre -->
<header>
	<h1>
		<?php 
		// récupérer le titre de la page
		single_post_title(); 
		?>
	</h1>
</header>

<!-- Affichage de la page -->
<?php while ( have_posts() ) : the_post(); ?>
	<?php //the_ID(); ?>
	<?php //the_title(); ?>
	<?php the_post_thumbnail(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php 
// exemple d'utilisation du fichier functions.php
afficherCeQueJeVeux(); 
?>

<?php 
// on inclus le fichier sidebar.php (widget)
//get_sidebar(); 
?>

<?php 
// on inclus le fichier footer.php
get_footer(); 
?>