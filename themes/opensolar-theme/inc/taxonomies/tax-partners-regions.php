<?php 

add_action( 'init', '___twf_register_partners_regions_taxonomy' );

function ___twf_register_partners_regions_taxonomy(){

    register_taxonomy( 'partners-regions', [ 'partners' ], [
		'label'                 => '',
        'labels'                => [
			'name'              => 'Regions',
			'singular_name'     => 'Region',
			'search_items'      => 'Search Regions',
			'all_items'         => 'All Regions',
			'view_item '        => 'View Region',
			'edit_item'         => 'Edit Region',
			'update_item'       => 'Update Region',
			'add_new_item'      => 'Add New Region',
			'new_item_name'     => 'New Region Name',
			'menu_name'         => 'Regions',
			'back_to_items'     => '← Back to Region',
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