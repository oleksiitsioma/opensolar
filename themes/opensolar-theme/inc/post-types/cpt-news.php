<?php 

add_action( 'init', '___twf_register_news_post_type' );

function ___twf_register_news_post_type(){

	register_post_type( 'news', [
		'label'  => null,
		'labels' => [
			'name'          => 'News'
        ],
		'description'       => '',
		'public'            => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'supports'          => [ 'title', 'editor', 'revisions' , 'excerpt' ], 
		'taxonomies'        => [ 'news-tags' ],
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
	] );

}