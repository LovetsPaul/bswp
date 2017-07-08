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
		"supports" => array( "title", "editor" ),
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
		"supports" => array( "title", "editor" ),
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
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "blogers", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_blogers' );

function bangshow_register_my_cpts_bang_girls() {

	/**
	 * Post Type: Bang Girl.
	 */

	$labels = array(
		'name'                => __( 'Bang Girls', 'bangshow' ),
		'singular_name'       => __( 'Bang Girl', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить девушку', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Bang Girls', 'bangshow' ),
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
		"rewrite" => array( "slug" => "bang-girls", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "bang-girls", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_bang_girls' );


function bangshow_register_my_cpts_veduschie() {

	/**
	 * Post Type: Veduschie.
	 */

	$labels = array(
		'name'                => __( 'Ведущие', 'bangshow' ),
		'singular_name'       => __( 'Ведущий(ая)', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить ведущего(ую)', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Ведущие', 'bangshow' ),
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
		"rewrite" => array( "slug" => "veduschie", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "veduschie", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_veduschie' );


function bangshow_register_my_cpts_quests() {

	/**
	 * Post Type: Veduschie.
	 */

	$labels = array(
		'name'                => __( 'Почётные гости', 'bangshow' ),
		'singular_name'       => __( 'Почётный гость', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить гостя', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Почётные гости', 'bangshow' ),
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
		"rewrite" => array( "slug" => "quests", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "quests", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_quests' );


function bangshow_register_my_cpts_bangmusic() {

	/**
	 * Post Type: bangmusic.
	 */

	$labels = array(
		'name'                => __( 'Bang Musics', 'bangshow' ),
		'singular_name'       => __( 'Bang Music', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить группу', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Bang Musics', 'bangshow' ),
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
		"rewrite" => array( "slug" => "quests", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "bangmusics", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_bangmusic' );

function bangshow_register_my_cpts_competition_prank() {

	/**
	 * Post Type: competition_pranks.
	 */

	$labels = array(
		'name'                => __( 'Конкурс шуток', 'bangshow' ),
		'singular_name'       => __( 'Конкурс шуток', 'bangshow' ),
		'add_new'             => _x( 'Добавить', 'bangshow', 'bangshow' ),
		'add_new_item'        => __( 'Добавить участника', 'bangshow' ),
	);

	$args = array(
		"label" => __( 'Конкурс шуток', 'bangshow' ),
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
		"rewrite" => array( "slug" => "quests", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "competition_prank", $args );
}

add_action( 'init', 'bangshow_register_my_cpts_competition_prank' );