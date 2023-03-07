<?php

function enqueue_expandjr_styles() {
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);

    wp_enqueue_style('style');
    
    if(is_page('home')){
        wp_register_script('page-home-popup', SCRIPTS_DIR . '/page-home-popup.js', [], '1.0.0', true);
        wp_enqueue_script('page-home-popup');

        wp_register_script('page-home-service-modal', SCRIPTS_DIR . '/page-home-service-modal.js', [], '1.0.0', true);
        wp_enqueue_script('page-home-service-modal');

        wp_register_script('services-counter', SCRIPTS_DIR . '/services-counter.js', [], '1.0.0', true);
        wp_enqueue_script('services-counter');

        wp_register_style('page-home', STYLES_DIR . '/page-home.css', [], '1.0.0', false);
        wp_enqueue_style('page-home');
    }
}

?>