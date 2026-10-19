<?php

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'the-beauty-plug',
        get_stylesheet_uri(),
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

} ); 