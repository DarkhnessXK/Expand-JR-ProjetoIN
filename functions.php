<?php

//Variáveis
define('ROOT_DIR', get_theme_file_path());
define('STYLES_DIR', get_template_directory_uri() . '/assets/css');
define('IMAGES_DIR', get_template_directory_uri() . '/assets/images');

//Adição dos Widgets para a página de Contato
function contato_widgets()
{

    $args = [
        'name' => 'Mapa e Texto',
        'id' => 'map-text',
        'description' => 'adição de texto e mapa'
    ];

    register_sidebar($args);

}
add_action('widgets_init', 'contato_widgets');

?>