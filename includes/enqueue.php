<?php

function enqueue_expandjr_styles() {
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_register_style('final-header', STYLES_DIR . '/header.css', [], '1.0.0', false);
    wp_register_style('final-main', STYLES_DIR . '/main.css', [], '1.0.0', false);
    
   
   
   
    wp_enqueue_style('style');
    wp_enqueue_style('final-header');
    wp_enqueue_style('final-main');
}

?>