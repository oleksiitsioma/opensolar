<?php 

add_action( 'init', '___twf_register_webinars_regions_taxonomy' );

function ___twf_register_webinars_regions_taxonomy(){

    register_taxonomy( 'webinars-regions', [ 'webinars' ], [
		'label'                 => '',
        'labels'                => [
			'name'              => 'Webinars Regions',
		],
		'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => false,
        'capabilities'          => array(),
        'show_admin_column'     => true,
        'show_in_rest'          => true,
    ] );
}