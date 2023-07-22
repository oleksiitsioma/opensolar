<?php 

add_action( 'after_setup_theme' , '___twf_theme_supports');

function ___twf_theme_supports(){

	add_theme_support( 'menus' );
	add_theme_support( 'custom-logo', [
		'height'                => 120,
		'width'                 => 520,
		'flex-width'            => false,
		'flex-height'           => false,
        'unlink-homepage-logo'  => true
	] );

}

