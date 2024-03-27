<?php 
    //Template Name: page-produto
?>

<?php get_header(); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <main class="principal-produto">
            <h1><?php the_title();?></h1>
            <div class="principal-container">
                <div class="produtos">
                    <ul>
                        <?php if(have_rows('produtos')) : while(have_rows('produtos')) : the_row();?>
                            <li class="produto">
                                <div class="produto-container">
                                    <img src="<?php the_sub_field('img_produto'); ?>" width="300" alt="">
                                    <div>
                                        <h2><?php the_sub_field('titulo_produto'); ?></h2>
                                        <div class="descricao">
                                            <ul>
                                                <li><?php the_sub_field('desc_produto'); ?></li>
                                            </ul>
                                        </div>
                                        <div class="links">
                                            <div class="call-to-action">
                                                <a href="whatsapp://send?phone=5511934641807&text=Olá, tudo bem? Tenho interesse em comprar o motor <?php the_sub_field('titulo_produto'); ?>">Comprar</a>
                                                <a href="whatsapp://send?phone=5511934641807&text=Olá, tudo bem? Tenho interesse em alugar o motor <?php the_sub_field('titulo_produto'); ?>">Alugar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>

                </div>
            </div>
        </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>