<?php 
    //Template Name: page-produto
?>

<?php get_header(); ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <main class="principal-produto">
            <h2><?php bloginfo('title'); ?></h2>
            <div class="principal-container">
                <div class="produtos">
                    <ul>
                        <?php if(have_rows('produtos')) : while(have_rows('produtos')) : the_row();?>
                            <li>
                                <img src="<?php the_sub_field('img_produto'); ?>" width="220" alt="">
                                <div>
                                    <div class="descricao">
                                        <?php the_sub_field('desc_produto'); ?>
                                    </div>
                                    <div class="links">
                                        <a href="">Venda</a>
                                        <a href="">Locação</a>
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