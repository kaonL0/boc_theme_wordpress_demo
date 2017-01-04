<?php
/**
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 */

if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

if ( version_compare( $GLOBALS['wp_version'], '3.6', '<' ) ) {
	//require get_template_directory() . '/inc/back-compat.php';
	die('Compatibility problem, check functions.php file.');
}

function afficherCeQueJeVeux() {
	echo "<br/>Ce Que Je Veux...<br/>";
}