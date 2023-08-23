<?php 

add_action( 'init', '___twf_register_partners_post_type' );

function ___twf_register_partners_post_type(){

	register_post_type( 'partners', [
		'label'  => null,
		'labels' => [
			'name'          => 'Partners',
        ],
		'description'       => '',
		'public'            => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'supports'          => [ 'title', 'editor', 'thumbnail', 'revisions' ], 
		'taxonomies'        => [ 'partners-products' , 'partners-regions' ],
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
	] );

}