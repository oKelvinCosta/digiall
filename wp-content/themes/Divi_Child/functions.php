<?php

// Kelvin
add_action('wp_footer', function(){
    wp_enqueue_script('js-mask', get_stylesheet_directory_uri().'/certificados-template/js/jquery.mask.min.js');
    wp_enqueue_script('js-certificado', get_stylesheet_directory_uri().'/certificados-template/js/certificado.js');
});


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
?>