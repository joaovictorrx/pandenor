<?php get_header();?>
<?php get_template_part('template-part/sub-navbar');?>
<style>
    iframe {
        max-width: 100% !important
    }

</style>
<section class="py-5 mt-n5" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat center / cover; min-height: 720px">
    <div class="top-spacing"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card px-5 rounded-card py-5">
                    <div class="row">
                        <div class="col-12 text-center text-lg-right mb-5 mb-lg-3">
                            <div class="btn btn-video" data-toggle="modal" data-target="#videoModal">Vídeo Institucional</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title mb-3">Desde 2000</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-5 px-3">
                            <div class="text-justify">
                                <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                                    <?php the_content() ?>
                                <?php endwhile; wp_reset_postdata(); endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-spacing"></div>
</section>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Vídeo Institucional</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body text-center">
                <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <?php the_field('video') ?>
                <?php endwhile; wp_reset_postdata(); endif; ?>               
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>