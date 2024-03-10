<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/imgs/logo/Imagem_do_WhatsApp_de_2023-12-07_à_s__15.39.45_8b8d64cd-removebg-preview.png" type="image/x-icon">
        <script>
            document.documentElement.className += " js"
        </script>
        <title><?php bloginfo('name');?></title>
        <?php wp_head();?>
    </head>
    <body>
        <header>
            <nav class="cabecalho-container">
                <a href="/"><img src="<?php echo get_stylesheet_directory_uri();?>/imgs/logo/Imagem_do_WhatsApp_de_2023-12-07_à_s__15.39.45_8b8d64cd-removebg-preview.png" alt="" width="150px"></a>
                    <?php
                        // Exibe o menu principal
                        wp_nav_menu(array(
                            'theme_location' => 'menu-principal', // O nome da localização do menu definido no functions.php
                            'container' => 'div', // O elemento HTML que envolve o menu, neste caso, <nav>
                            'container_class' => 'menu-mobile', // A classe do contêiner
                            'menu_class' => 'menu', // A classe do menu
                        ));
                    ?>
                <button data-menu="botao">Menu</button>
            </nav>
            
            
        </header>