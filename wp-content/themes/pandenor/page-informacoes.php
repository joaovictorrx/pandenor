<?php get_header();?>
<?php get_template_part('template-part/sub-navbar');?>
<style>
    .title{
        font-size: 30px
    }
</style>

<section class="py-5 mt-n5" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat right bottom / cover; min-height: 720px">
    <div class="top-spacing"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 py-5">
                <div class="card px-5 rounded-card py-5">
                    <div class="row">
                        <div class="col-12">
                            <p> Informações em atendimento a Resolução ANTAQ n 3274/2014 e Portaria ANP 251/2000.  </p>
                            <h2 class="title mb-3">Disponibilidades</h2>
                        </div>
                        <div class="col-12 col-lg-12 px-3 mb-3">
                            <table class="table">
                                <tbody>
                                    <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                                        <?php if( have_rows('disponibilidades') ): ?>
                                            <?php while( have_rows('disponibilidades') ): the_row(); ?>
                                                <tr>
                                                    <td class="border-0 p-0">
                                                        <?php the_sub_field('item') ?>
                                                    </td>
                                                    <td class="border-0 p-0">
                                                        <?php the_sub_field('medida') ?>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    <?php endwhile; wp_reset_postdata(); endif; ?>
                                </tbody>
                            </table>
                        </div>
                 
                        <div class="col-12">
                            <h2 class="title">Valores Máximos de Referência de Preços e Tarifas de Serviço</h2>
                        </div>
                        <div class="col-12 col-lg-6 px-3 mb-3">
                            <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                                <a target="_blank" href="<?php the_field('tarifas') ?>">Consulte clicando aqui.</a> 
                            <?php endwhile; wp_reset_postdata(); endif; ?>
                        </div>

                        <div class="col-12">
                            <h2 class="title">Condições Gerais de Serviço do Terminal</h2>
                        </div>
                        <div class="col-12 col-lg-6 px-3 mb-3">
                            <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                                <a target="_blank" href="<?php the_field('condicoes_comerciais') ?>">Consulte clicando aqui.</a> 
                            <?php endwhile; wp_reset_postdata(); endif; ?>
                        </div>

                        <div class="col-12">
                            <h2 class="title mb-3">Histórico de Movimentação</h2>
                        </div>
                        <div class="col-12 col-lg-6 px-3">
                            <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                                <a target="_blank" href="<?php the_field('historico_de_movimentacoes') ?>">Consulte clicando aqui.</a> 
                            <?php endwhile; wp_reset_postdata(); endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-spacing"></div>
</section>

<?php get_footer();?>