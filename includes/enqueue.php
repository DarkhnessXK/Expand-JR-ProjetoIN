<?php

function enqueue_expandjr_styles() {
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_register_style('final-header', STYLES_DIR . '/header.css', [], '1.0.0', false);
    wp_register_style('final-main', STYLES_DIR . '/main.css', [], '1.0.0', false);
    wp_register_style('roboto-font', "https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap");
    wp_register_style('inter-font', "https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap");
    wp_register_style('barlow-font', "https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap");
    wp_register_style('header', STYLES_DIR . '/header.css', [], '1.0.0', false);
    wp_register_script('header-script', SCRIPTS_DIR . '/header.js', [], '1.0.0', false);
    wp_register_style('footer', STYLES_DIR . '/footer.css', [], '1.0.0', false);
    wp_register_style('quem-somos', STYLES_DIR . '/quem-somos.css', [], '1.0.0', false);
    wp_register_style('whatsapp', STYLES_DIR . '/whatsapp.css', [], '1.0.0', false);
    wp_register_style('contatos', STYLES_DIR . '/page-contatos.css', [], '1.0.0', false);


    wp_enqueue_style('style');
    wp_enqueue_style('final-header');
    wp_enqueue_style('final-main');
    wp_enqueue_style('roboto-font');
    wp_enqueue_style('inter-font');
    wp_enqueue_style('barlow-font');
    wp_enqueue_style('header');
    wp_enqueue_script('header-script');
    wp_enqueue_style('footer');
    wp_enqueue_style('quem-somos');
    wp_enqueue_style('whatsapp');
    wp_enqueue_style('contatos');
    
    if(is_page('home')){
        wp_register_script("home-js", SCRIPTS_DIR.'/home.js',[], '1.0.0', true);
        wp_enqueue_script('home-js');

        wp_register_script('page-home-popup', SCRIPTS_DIR . '/page-home-popup.js', [], '1.0.0', true);
        wp_enqueue_script('page-home-popup');

        wp_register_script('services-counter', SCRIPTS_DIR . '/services-counter.js', [], '1.0.0', true);
        wp_enqueue_script('services-counter');

        wp_register_style('page-home', STYLES_DIR . '/page-home.css', [], '1.0.0', false);
        wp_enqueue_style('page-home');
    }
}

?>