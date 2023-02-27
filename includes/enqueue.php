<?php

function enqueue_expandjr_styles() {
    wp_register_style('style', get_stylesheet_uri(), [], '1.0.0', false);

    wp_enqueue_style('style');
}

?>