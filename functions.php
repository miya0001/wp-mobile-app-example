<?php


add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_style(
        'ui-kit-css',
        get_template_directory_uri().'/uikit-2.8.0/css/uikit.min.css',
        array(),
        '2.8.0'
    );

    wp_enqueue_script(
        'ui-kit-script',
        get_template_directory_uri().'/uikit-2.8.0/js/uikit.min.js',
        array( 'jquery' ),
        '2.8.0',
        false
    );

    wp_enqueue_script(
        'mobile-app-example',
        get_template_directory_uri().'/main.js',
        array( 'ui-kit-script' ),
        '2.8.0',
        true
    );

}, 9 );