<!DOCTsYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<!-- Titre de la page qui vient des paramètres de wordpress -->
	<title><?php bloginfo('name'); ?></title>

	<!-- inclusion du fichier principal de style -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<!-- inclusion d'un autre fichier de style -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/w3.css">
</head>
<body>

HEADER

<?php 
// inclusion du menu nommé menu1 dans l'administration
wp_nav_menu(array('menu'=>'menu1')); 
?>