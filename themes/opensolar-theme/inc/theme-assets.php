<?php

// FRONTEND

add_action( 'init', '___twf_enqueue_frontend_styles' );

function ___twf_enqueue_frontend_styles() {

    wp_enqueue_style(
        $handle = 'main',
        $src    = get_template_directory_uri(  ) . '/build/bundle-style.css',
        $deps   = null,
        $ver    = null,
        $media  = null
    );

}

add_action( 'init', '___twf_enqueue_frontend_scripts' );

function ___twf_enqueue_frontend_scripts() {

    wp_enqueue_script('jquery');

    wp_enqueue_script(
        $handle     = 'main',
        $src        = get_template_directory_uri(  ) . '/build/bundle-script.js',
        $deps       = null,
        $ver        = null,
        $in_footer  = true
    );

}

// ADMIN DASHBOARD

add_action( 'admin_enqueue_scripts', '___twf_enqueue_admin_styles' );

function ___twf_enqueue_admin_styles() {

    wp_enqueue_style(
        $handle = 'admin-main',
        $src    = get_template_directory_uri(  ) . '/build/admin-style.css',
        $deps   = null,
        $ver    = null,
        $media  = null
    );

}