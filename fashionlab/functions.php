<?php
/*
 Enqueue stylesheet
*/
function fashionlab_enqueue(){
    wp_enqueue_style( 'customstyle', get_template_directory_uri().'/css/style.css', array(), '1.1', 'all' );
    wp_enqueue_script( 'custom-js', get_template_directory_uri().'/js/script.js' , array('jquery'), '1.1', true );
    // wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/inc/bootstrap.min.css', array(), '5.0', 'all' );
    // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/inc/bootstrap.min.js', array('jquery'), '5.0', true );
    
}
add_action( 'wp_enqueue_scripts','fashionlab_enqueue');