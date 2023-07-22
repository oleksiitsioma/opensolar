<?php

add_action( 'widgets_init', '___twf_register_sidebars' );

function ___twf_register_sidebars(){

	register_sidebar( array(
		'name'          => 'Header Utility Menu',
		'id'            => "sidebar-header-utility",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => "",
		'after_title'   => "",
		'before_sidebar' => '<div class="headerWidget headerWidget_utility">',
        'after_sidebar'  => '</div>'
	) );

	register_sidebar( array(
		'name'          => 'Above Footer',
		'id'            => "sidebar-above-footer",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => "",
		'after_title'   => "",
		'before_sidebar' => '<section class="aboveFooter">',
        'after_sidebar'  => '</section>'
	) );

}