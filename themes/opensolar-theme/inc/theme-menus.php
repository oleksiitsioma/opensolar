<?php 

add_action( 'after_setup_theme', '___twf_register_menus' );

function ___twf_register_menus() {
    register_nav_menu( 'header-primary' , 'Main Header menu');
}