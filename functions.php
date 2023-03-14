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

//Para contar os views dos blogs
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


?>