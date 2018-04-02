<?php

/* Basic setup */

function basic_setup() {
    // JQuery CDN
    wp_enqueue_script( 'jquery-3.3.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' , array(), null);
    wp_enqueue_script( 'tether-1.4.3', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js' , array(), null);

    // Bootstrap CDN
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css' , array(), null );
    wp_enqueue_style( 'bootstrap-grid-css', get_template_directory_uri().'/css/bootstrap-grid.css' , array(), null );

    wp_enqueue_style( 'bootstrap-reboot-css', get_template_directory_uri().'/css/bootstrap-reboot.min.css' , array(), null );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/fontawesome-all.min.css' , array(), null );
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/styles.css' , array(), null );
    wp_enqueue_style( 'media-queries', get_template_directory_uri().'/css/media-queries.css' , array(), null );
    wp_enqueue_style( 'font', get_template_directory_uri().'/css/fonts.css' , array(), null );

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js' , array(), null);
    wp_enqueue_script( 'main-script', get_template_directory_uri().'/js/index.js' , array(), null);

}
add_action( 'wp_enqueue_scripts', 'basic_setup' );


/* Wordpress supporting */

add_theme_support( 'post-thumbnails' );

