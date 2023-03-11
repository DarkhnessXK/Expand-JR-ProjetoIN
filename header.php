<!DOCTYPE html>
<html lang="pt-br" id='html'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <title> <?php bloginfo('name') ?> - <?php the_title(); ?> </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">  <!-- fonte Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- fonte Inter -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- fonte Barlow -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class='hidden home_url'><?php echo get_permalink( get_page_by_path('home') ); ?></div> <!-- PARA FAZER O SCROLL FUNCIONAR -->
        <nav class='header_nav'>
            <?php the_custom_logo(); ?>
            <div class='nav_div'>
                <ul>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('quem-somos') ) ); ?>">Quem Somos</a></li>
                    <li id='li_services' onclick='irAteServicos()' onmouseover='mostrarServicos()' onmouseout='tirarServicos()'>Serviços</li>
                    <script>criarServicos()</script>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('blog') ) ); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('contato') ) ); ?>">Contato</a></li>
                </ul>
                <div class='lang_div'>
                    <button class='alt_lang' onclick='mostrarLinguas()'>PT</button>
                    <div class='lang_options' onclick='mostrarLinguas()'>
                        <?php echo do_shortcode('[gtranslate]'); ?>
                    </div>
                </div>
            </div>



            <div class='hamburger_div'>
                <div class='lang_div lang_hamburger'>
                    <div class='lang_db'></div>
                    <button class='alt_lang' onclick='mostrarLinguas()'>PT</button>
                    <div class='lang_options' onclick='mostrarLinguas()'>
                        <?php echo do_shortcode('[gtranslate]'); ?>
                    </div>
                </div>
                <img class='hamburger_menu' onclick='mostrarMenu()' src="<?php echo IMAGES_DIR . '/icon-menu-hamburger.png' ?>" alt="Ícone do menu hamburguer">
                <img class='x_menu' onclick='mostrarMenu()' src="<?php echo IMAGES_DIR . '/icon-x.png' ?>" alt="Ícone do X">
                <ul class='menu_list' onclick='mostrarMenu()'>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('quem-somos') ) ); ?>">Quem Somos</a></li>
                    <li id='li_services' onclick='irAteServicos()'>Serviços</li>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('blog') ) ); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path('contato') ) ); ?>">Contato</a></li>
                </ul>
            </div>
            
        </nav>
    </header>
    