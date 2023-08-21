<?php

add_action( 'widgets_init', '___twf_register_sidebars' );

function ___twf_register_sidebars(){

	register_sidebar( array(
		'name'          => 'Header',
		'id'            => "sidebar-header",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => "",
		'after_title'   => "",
		'before_sidebar' => '',
        'after_sidebar'  => ''
	) );

	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => "sidebar-footer",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => "",
		'after_title'   => "",
		'before_sidebar' => '<footer class="footer">',
        'after_sidebar'  => '</section>'
	) );

}