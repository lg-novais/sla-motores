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
                <a href="/"><img src="<?php echo get_stylesheet_directory_uri();?>/imgs/logo/Imagem_do_WhatsApp_de_2023-12-07_à_s__15.39.45_8b8d64cd-removebg-preview.png" alt="Engenheiro" width="150px"></a>
                <div class="menu-mobile">
                    <ul data-menu="lista">
                        <li><a href="">Início</a></li>
                        <li><a href="">Empresa</a></li>
                        <li><a href="">Produtos</a></li>
                        <li><a href="servicos/vendas.html">Vendas</a></li>
                        <li><a href="servicos/locacao.html">Locação</a></li>
                        <li><a href="servicos/spda.html">SPDA</a></li>
                        <li><a href="../contato/contato.html">Contato</a></li>
                    </ul>
                </div>
                <button data-menu="botao" >Menu</button>
            </nav>
        </header>