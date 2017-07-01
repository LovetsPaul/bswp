<?php 

function bangshow_register_my_cpts_mentors() {

	/**
	 * Post Type: Менторы.
	 */

	$labels = array(
		'name'                => __( 'Менторы', 'bangshow' ),
		'singular_name'       => __( 'Ментор', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить ментора', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Менторы', 'bangshow' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "mentors", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "mentors", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_mentors' );



function bangshow_register_my_cpts_junits() {

	/**
	 * Post Type: Менторы.
	 */

	$labels = array(
		'name'                => __( 'Юниты', 'bangshow' ),
		'singular_name'       => __( 'Юнит', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить юнита', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Юниты', 'bangshow' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "junits", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "junits", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_junits' );


function bangshow_register_my_cpts_blogers() {

	/**
	 * Post Type: Менторы.
	 */

	$labels = array(
		'name'                => __( 'Блогеры', 'bangshow' ),
		'singular_name'       => __( 'Блогер', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить блогера', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Юниты', 'bangshow' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "blogers", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "blogers", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_blogers' );
