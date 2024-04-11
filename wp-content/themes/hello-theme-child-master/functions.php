<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );
add_filter("wp_nav_menu_items", "edit_menu",10,2);

function edit_menu($items,$args){
	if (is_user_logged_in() && $args->menu !== "footer") {
		
		$array = explode("</li>", $items);
 		$longueurTableau = count($array);
 		array_splice($array, $longueurTableau -2, 0, '<li id="admin"><a href="' . get_admin_url() . '">Admin</a>');

  		$items = implode("</li>", $array);

	}
	return $items;
}
	

