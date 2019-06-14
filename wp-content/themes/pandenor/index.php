<?php get_header();?>

<section id="slider">
    <div class="owl-carousel owl-theme">
        <?php 
            $args = array('post_type' => 'banners');
            $wp_query = new WP_Query($args);
        ?>
        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            
            <div class="item" style="background:url(<?= get_field('imagem')['url'] ?>) no-repeat center / cover;">
                <div class="container h-100">
                    <div class="row" style="position: relative; top: 75%;transform: translateY(-50%);">
                        <div class="col-12 col-lg-6">
                        <?php if(get_the_title() != ''): ?>
                            <div class="card header-title text-center p-4">
                                <h2><?php the_title() ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('link') != ''): ?>
                            <div class="card header-link pull-right p-4">
                                <a class="text-white" style="font-size:20px" href="<?php the_field('link') ?>">Saiba mais</a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
</section>

<?php 
    $args = array('post_type' => 'page', 'page_id'=> '54');
    $wp_query = new WP_Query($args);
?>

<section class="position-relative text-white bg-primary py-5">
    <img class="half-bg-left d-none d-lg-block" src="
    <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <?= get_field('background_estrutura')['url'] ?>
        <?php endwhile; endif; ?>
    " alt="">
    <div class="container h-100 d-flex align-items-center py-5">
        <div class="row">
            <div class="col-12 col-lg-5 offset-lg-8 px-4 px-lg-2">
                <h2 class="title text-white mb-5">Estrutura Robusta</h2>
                <div class="text-justify">
                    <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <?php the_field('estrutura') ?>
                    <?php endwhile; endif; ?>
                </div>

                <a href="<?php bloginfo('url');?>/estrutura" class="btn btn-red mt-5">Saber mais</a>
            </div>
        </div>
    </div>
</section>

<section class="position-relative">
    <img class="half-bg-right d-none d-lg-block grey-scale" src="
        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <?= get_field('bg_nossas_solucoes')['url'] ?>
        <?php endwhile; endif; ?>
        " alt="">
    
    <div class="container py-5 h-100 d-flex align-items-center">
        <div class="row">
            <div class="col-12 col-lg-6 px-4 px-lg-2">
                <h2 class="title mb-5">Nossas Soluções</h2>
                <div class="text-justify">
                    <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <?php the_field('nossas_solucoes') ?>
                    <?php endwhile; endif; ?>
                </div>

                <a href="<?php bloginfo('url');?>/solucoes" class="btn btn-red mt-5">Ver Soluções</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style=" background:url(<?php bloginfo('template_url');?>/img/home-section-3-bg.png); min-height: 650px">
    <div class="container py-5">
        <div class="row justify-content-center mb-5 px-4 px-lg-2">
            <div class="col-12 col-lg-8 text-center">
                <h2 class="title text-red mb-3">Certificados de Gestão</h2>
                <p class="text-light-grey mb-3">
                    <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <?php the_field('descricao_certificados_de_gestao') ?>
                    <?php endwhile; endif; ?>
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <ul class="list-unstyled text-left grey-list">
                    <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <?php if( have_rows('certificados') ): ?>
                            <?php while( have_rows('certificados') ): the_row();?>
                                <li class="d-flex align-items-center mb-3">
                                    <i class="fa fa-circle fa-2x text-red mr-3" aria-hidden="true"></i>
                                    <p class="mb-0">
                                        <span><?php the_sub_field('certificado') ?></span> - <?php the_sub_field('descricao') ?></span>
                                    </p> 
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>