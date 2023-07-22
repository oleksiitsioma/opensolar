<?php 

add_action( 'init', '___twf_register_partners_post_type' );

function ___twf_register_partners_post_type(){

	register_post_type( 'partners', [
		'label'  => null,
		'labels' => [
			'name'          => 'Partners',
            'singular_name' => 'Partner',
            'add_new'       => 'Add Partner',
            'add_new_item'  => 'Add New Partner',
            'edit_item'     => 'Edit Partner',
            'new_item'      => 'New Partner',
            'view_item'     => 'View Partner',
            'search_items'  => 'Search Partners',
			'menu_name'     => 'Partners',
        ],
		'description'       => '',
		'public'            => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'supports'          => [ 'title', 'editor', 'thumbnail', 'revisions' ], 
		'taxonomies'        => [ 'partners-products' , 'partners-regions' ],
		'has_archive'       => false,
		'rewrite'           => true,
		'query_var'         => true,
	] );

}