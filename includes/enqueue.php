<?php

function enqueue_expandjr_styles() {
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);
    wp_register_script("home-js", SCRIPTS_DIR.'/home.js',[], '1.0.0', true);
    wp_enqueue_style('style');
    wp_enqueue_script('home-js');
}

?>