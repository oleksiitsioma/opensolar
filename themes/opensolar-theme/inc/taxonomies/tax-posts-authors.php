<?php 

add_action( 'init', '___twf_register_posts_authors_taxonomy' );

function ___twf_register_posts_authors_taxonomy(){

    register_taxonomy( 'authors', [ 'post' ], [
		'label'                 => '',
        'labels'                => [
			'name'              => 'Authors',
		],
		'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'capabilities'          => array(),
        'show_admin_column'     => true,
        'show_in_rest'          => true,
    ] );
}