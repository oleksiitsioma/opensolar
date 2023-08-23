<?php 

add_action( 'init', '___twf_register_partners_products_taxonomy' );

function ___twf_register_partners_products_taxonomy(){

    register_taxonomy( 'partners-products', [ 'partners' ], [
		'label'                 => '',
        'labels'                => [
			'name'              => 'Products',
			'singular_name'     => 'Product',
			'search_items'      => 'Search Products',
			'all_items'         => 'All Products',
			'view_item '        => 'View Product',
			'edit_item'         => 'Edit Product',
			'update_item'       => 'Update Product',
			'add_new_item'      => 'Add New Product',
			'new_item_name'     => 'New Product Name',
			'menu_name'         => 'Products',
			'back_to_items'     => '← Back to Product',
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