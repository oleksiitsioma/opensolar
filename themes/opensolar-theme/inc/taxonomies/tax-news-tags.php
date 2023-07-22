<?php 

add_action( 'init', '___twf_register_news_tags_taxonomy' );

function ___twf_register_news_tags_taxonomy(){

    register_taxonomy( 'news-tags', [ 'news' ], [
		'label'                 => '',
        'labels'                => [
			'name'              => 'News Tags',
		],
		'description'           => '',
        'public'                => true,
        'hierarchical'          => false,
        'rewrite'               => true,
        'capabilities'          => array(),
        'show_admin_column'     => true,
        'show_in_rest'          => true,
    ] );
}