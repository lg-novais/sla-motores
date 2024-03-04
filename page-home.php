
<?php 
//Template Name: page home;
?>

<?php get_header();?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <ul class="banners">
            <?php if(have_rows("banners")) : while(have_rows("banners")) : the_row(); ?>
            <li><img src="<?php the_sub_field('banner')?>" alt=""></li>
            <?php endwhile; endif; ?>
        </ul>
        <main class="inicio-background">
            <div class="main-container">
                <div class="main-texto">
                    <h1>Bem-vindo à SLA!</h1>
                    <?php the_field("boas_vindas");?>
                    <div class="call-to-action">
                        <a href="empresa/empresa.html">Saiba mais</a>
                    </div>
                </div>
                <div class="engenheiro">
                    <img src="<?php the_field("foto_home");?>" alt="">
                </div>
            </div>
        </main>

        <section class="solucao">
            <div class="solucao-container">
                <ul>
                    <li><a href="servicos/vendas.html">Vendas</a></li>
                    <li><a href="servicos/locacao.html">Locação</a></li>
                    <li><a href="servicos/spda.html">SPDA</a></li>
                </ul>
                <div class="solucao-texto">
                    <h1>Áreas de soluções</h1>
                    <?php the_field('texto_solucao'); ?>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php get_footer();?>
        