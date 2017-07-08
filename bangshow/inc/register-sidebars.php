<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bangshow_widgets_init() {
	$args = array(
		'name'          => __( 'Футер 1', 'bangshow' ),
		'id'            => 'footer-1',
		'description'   => 'Меню - Футер колонка 1',
		'class'         => 'f-menu',
	);

	register_sidebar( $args );

	$args2 = array(
		'name'          => __( 'Футер 2', 'bangshow' ),
		'id'            => 'footer-2',
		'description'   => 'Меню - Футер колонка 2',
		'class'         => 'f-menu',

	);

	register_sidebar( $args2 );

	$args3 = array(
		'name'          => __( 'Футер 3', 'bangshow' ),
		'id'            => 'footer-3',
		'description'   => 'Меню - Футер колонка 3',
		'class'         => 'f-menu',

	);

	register_sidebar( $args3 );
}
add_action( 'widgets_init', 'bangshow_widgets_init' );
