<?php 

function cptui_register_my_cpts_mentors() {

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

add_action( 'init', 'cptui_register_my_cpts_mentors' );

