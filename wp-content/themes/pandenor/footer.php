<?php 
    $args = array('post_type' => 'footer', 'post_id'=> '73');
    $wp_query = new WP_Query($args);
?>
<footer class="pt-5 position-relative">
    <div class="footer-logo-wrapper position-absolute">
        <img class="gph-logo-footer position-absolute" src="<?php bloginfo('template_url');?>/img/gph-logo-footer.svg" alt="">
        <img class="footer-logo position-absolute" src="<?php bloginfo('template_url');?>/img/lg-pandenor-p-white.svg" alt="">
    </div>
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-lg-5 px-5 px-lg-3 mb-4">
                <h4 class="mb-4">Contatos</h4>
                <div class="d-flex">
                    <div class="mr-4">
                        <img width="35px" class="img-fluid" src="<?php bloginfo('template_url');?>/img/ic-map.svg" alt="">
                    </div>
                    <p class="">
                        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                            <?php the_field('endereco') ?>
                        <?php endwhile; endif; ?>
                    </p>
                </div>
                <div class="d-flex">
                     <div class="mr-4">
                        <img width="18px" class="img-fluid" src="<?php bloginfo('template_url');?>/img/ic-phone.svg" alt="">
                    </div>
                    <p class="">
                        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                            <?php if( have_rows('telefones') ): ?>
                                <?php while( have_rows('telefones') ): the_row();?>
                                    <?php the_sub_field('tipo') ?>: <?php the_sub_field('numero') ?><br>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; endif; ?>
                    </p>
                </div>
                <div class="d-flex">
                    <div class="mr-4">
                        <img width="24px" class="img-fluid" src="<?php bloginfo('template_url');?>/img/ic-email.svg" alt="">
                    </div>
                    <p class="">
                        <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                            <?php if( have_rows('emails') ): ?>
                                <?php while( have_rows('emails') ): the_row();?>
                                    Email: <?php the_sub_field('email') ?><br>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; endif; ?>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 px-5 px-lg-3 mb-4">
                <h4 class="mb-4">Área do Cliente</h4>
                <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <?php if( have_rows('links_area_do_cliente') ): ?>
                        <?php while( have_rows('links_area_do_cliente') ): the_row();?>
                            <a href="<?php the_sub_field('link') ?>" class="btn btn-footer btn-block mb-3"><?php the_sub_field('nome_do_botao') ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <section class="copyright d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-lg-left">
                    <p class="mb-0 mt-1">DESENVOLVIDO PELA <span>AGÊNCIA PONTES</span></p>
                </div>
            </div>
        </div>
    </section>
</footer>

<!-- JQuery -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vendor/bootstrap.min.js"></script>

<!-- owl.carousel -->
<script src="<?php bloginfo('template_url');?>/js/vendor/owl.carousel.min.js"></script>
<!-- app js -->
<script src="<?php bloginfo('template_url');?>/js/app.min.js"></script>

<?php wp_footer();?>
</body>
</html>