<?php

//Variáveis
define('ROOT_DIR', get_theme_file_path());
define('STYLES_DIR', get_template_directory_uri() . '/assets/css');
define('IMAGES_DIR', get_template_directory_uri() . '/assets/images');
define('SCRIPTS_DIR', get_template_directory_uri() . '/assets/js');
define('INCLUDES_DIR', ROOT_DIR . '/includes');


//Includes
include_once(INCLUDES_DIR . '/enqueue.php');
include_once(INCLUDES_DIR . '/theme-setup.php');

//Ganchos
add_action( 'wp_enqueue_scripts', 'enqueue_expandjr_styles');
add_action( 'after_setup_theme', 'setup_expandjr_theme');
?>