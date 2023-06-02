<?php

function categories_taxonomy() {

    $labels = array(
        'name'                       => 'Categories',
        'singular_name'              => 'Category',
        'menu_name'                  => 'Categories'
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'publicly_queryable'         => false,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'category', array( 'report' ), $args );

}
add_action( 'init', 'categories_taxonomy', 0 );

function categories_b_taxonomy() {

    $labels = array(
        'name'                       => 'Categories',
        'singular_name'              => 'Category',
        'menu_name'                  => 'Categories'
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => false,
        'publicly_queryable'         => false,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'category_press', array( 'press_releases' ), $args );

}
add_action( 'init', 'categories_b_taxonomy', 0 );


function categories_team_taxonomy() {

	$labels = array(
		'name'                       => 'Team Categories',
		'singular_name'              => 'Team Category',
		'menu_name'                  => 'Team Categories'
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'publicly_queryable'         => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'category_team', array( 'team' ), $args );

}
add_action( 'init', 'categories_team_taxonomy', 0 );


function categories_rd_reports_taxonomy() {

	$labels = array(
		'name'                       => 'Years',
		'singular_name'              => 'Year',
		'menu_name'                  => 'Years'
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'publicly_queryable'         => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'categories_rd_reports', array( 'rd_reports' ), $args );

}
add_action( 'init', 'categories_rd_reports_taxonomy', 0 );

