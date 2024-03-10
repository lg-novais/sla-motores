<?php 
    //Template Name: Page contato
?>
<?php get_header(); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <main class="principal-contato">
            <div class="contato-container">
                <h1>Contato</h1>
                <div class="contato-localizacao">
                        <img class="mapa" src="<?php echo get_stylesheet_directory_uri();?>/imgs/mapa/localizacao.PNG" alt="localização SLA">
                    <div class="localizacao-info">
                        <h2>São Paulo</h2>
                        <ul class="endereco">
                            <?php if(have_rows('informacoes_contato')) : while(have_rows('informacoes_contato')) : the_row(); ?>
                                <li><?php the_sub_field('info_contato'); ?></li>
                            <?php endwhile; endif; ?>
                        </ul>
                        <div class="h-funcionamento">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/mapa/horario.svg" alt="">
                            <p>Segunda a Quinta das 08h às 18h | sexta das 08h às 17h</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php endwhile; endif; ?>
<?php get_footer();?>
