<?php 

add_action( 'init', '___twf_register_webinars_post_type' );

function ___twf_register_webinars_post_type(){

	register_post_type( 'webinars', [
		'label'  => null,
		'labels' => [
			'name'          => 'Webinars'
        ],
		'description'       => '',
		'public'            => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'supports'          => [ 'title', 'editor', 'thumbnail' ], 
		'taxonomies'        => [ 'webinars-regions' ],
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
	] );

}