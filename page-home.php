
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
                        <a href="/">Saiba mais</a>
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
                    <li><a href="<?php echo home_url('produtos');?>">Vendas</a></li>
                    <li><a href="<?php echo home_url('produtos');?>">Locação</a></li>
                    <li><a href="whatsapp://send?phone=5511934641807&text=Olá, tudo bem? Encontrei o site de você e quero saber como funciona o serviço de SPDA.">SPDA</a></li>
                </ul>
                <div class="solucao-texto">
                    <h1>Áreas de soluções</h1>
                    <?php the_field('texto_solucao'); ?>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
<?php get_footer();?>
        