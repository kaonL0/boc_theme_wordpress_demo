Installation
------------

# Aller dans le repertoire de thème avec l'invite de commande
$ cd c:/wamp/www/boc_wp/wp-content/themes

# Cloner le repertoire
$ git clone https://github.com/kaonL0/theme_boc_ldr.git

Aller dans l'interface d'administration et activer le thème


Documentation
-------------

1) Définir la page d'accueil par défaut

Wordpress>Reglages>lecture
cocher Une page static
selectionner une page
enregistrer

Ainsi toutes les entrées du menu appeleront page.php

2) Gestion du menu

Créer un menu dans l'administration et lui donner le nom menu1
Ou changer le nom du menu dans header.php


A faire
-------

1) Lire les différents fichiers pour comprendre le fonctionnement

2) Ajouter les éléments de structure (div, header, section, etc...) et de style (classes css)

Vous pouvez agencer et ajouter ce que vous voulez
Par contre garder en tête que les éléments de contenu (images, texte, etc..) doivent venir de wordpress
Si ce n'est pas le cas l'entrepreneur ne pourra pas modifier le contenu !!!


Champs personnalisés
--------------------
Pour ceux qui voudraient ajouter des données dans le theme que les utilisateurs (entrepreneurs) pourront modifier via le backoffice (espace d'administration), il existe une solution simple.

I) Créer un champ personnalisé
	1) aller sur une page
	2) activer les champs personnalisé, en haut à droite, options de l'écran, puis cocher champs personnalisés
	3) En bas de la page dans la section champs personnalisé qui est apparu, mettre un nom (clé d'identification, par exemple : email_contact), saisir une valeur (par exemple : boc@gmail.com) et ajouter

Voilà le champs existe et peut être modifié facilement, attention de ne pas changer la clé par contre. Et biensûr ne pas supprimer la page !

II) Récupérer le champs dans le thème
Cela se fait avec la méthode get_post_meta

	1) Dans une boucle :

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php echo get_post_meta(get_the_ID(), 'email_contact', true); ?>
<?php endwhile; ?>

	2) Ailleurs (connaitre l'id de la page) :

<?php
$id_page = 10;
// si le dernier paramètre est false, retourne un tableau
echo get_post_meta($id_page, 'email_contact', true);
?>

Tags
----
Il est possible de filtrer les pages en fonction de leurs tags associés !
Cela offre un grand nombre de possibilités.