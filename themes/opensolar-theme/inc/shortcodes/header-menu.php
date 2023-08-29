<?php

add_shortcode( 'header-menu', '___twf_shortcode_header_menu' );

function ___twf_shortcode_header_menu() {
    $headerMenu = wp_nav_menu([
        'theme_location'    => 'header-primary',
        'menu_class'        => 'headerWidget__menu',
        'menu_id'           => 'header-main-menu',
        'container'         => false,
        'container_class'   => '',
        'echo'              => false,
    ]);

    return $headerMenu;
}