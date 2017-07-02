<?php
function add_new_posts_admin_column($columns) {
	$num = 2; // после какой по счету колонки вставлять новые

	$new_columns = array(
		'my-custom-acf-field' => 'Ментор',
	);

	return array_slice( $columns, 0, $num ) + $new_columns + array_slice( $columns, $num );
}

function add_new_posts_admin_column_show_value($column_name) {
    if ($column_name == 'my-custom-acf-field') {
    	$mentors = get_field('junits_mentor');
    	echo get_the_title( $mentors[0] );
    }

}

add_filter('manage_junits_posts_columns', 'add_new_posts_admin_column');
add_action('manage_junits_posts_custom_column', 'add_new_posts_admin_column_show_value', 10, 2);
