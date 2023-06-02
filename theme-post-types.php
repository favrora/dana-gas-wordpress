<?php

function report_post_type() {

	$labels = array(
		'name'                  => 'Reports',
		'singular_name'         => 'Report',
		'menu_name'             => 'Report'
	);
	$args = array(
		'label'                 => 'Report',
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'year' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'report', $args );

}
add_action( 'init', 'report_post_type', 0 );


function press_releases_post_type() {

	$labels = array(
		'name'                  => 'Press Releases',
		'singular_name'         => 'Press Release',
		'menu_name'             => 'Press Releases'
	);
	$args = array(
		'label'                 => 'Press Releases',
		'labels'                => $labels,
		'supports'              => array( 'title','editor' ),
		'taxonomies'            => array( 'year' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest' => true
	);
	register_post_type( 'press_releases', $args );

}
add_action( 'init', 'press_releases_post_type', 0 );

function team_post_type() {

	$labels = array(
		'name'                  => 'Team',
		'singular_name'         => 'Team',
		'menu_name'             => 'Team'
	);
	$args = array(
		'label'                 => 'Team',
		'labels'                => $labels,
		'supports'              => array( 'title','editor','thumbnail' ),
		'taxonomies'            => array( 'categories_team' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'team_post_type', 0 );


function rd_reports_post_type() {

	$labels = array(
		'name'                  => 'Regulatory disclosures',
		'singular_name'         => 'Regulatory disclosures',
		'menu_name'             => 'Regulatory disclosures'
	);
	$args = array(
		'label'                 => 'Regulatory disclosures',
		'labels'                => $labels,
		'supports'              => array('editor','title','thumbnail'),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'rd_reports', $args );

}
add_action( 'init', 'rd_reports_post_type', 0 );
