<?php get_header();?>
<?php get_template_part('template-part/sub-navbar');?>
<style>
input, textarea{
    border: 2px solid #2d3580 !important;
    border-radius: 15px !important
}

.forminator-button{
    border-radius: 15px !important
}

label{
    margin-left: 10px !important;
    margin-bottom: 10px !important
}
</style>
<section class="py-5 mt-n5" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat center / cover; min-height: 720px">
    <div class="top-spacing"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="card px-5 rounded-card py-5">
                    <div class="row">
                       <div class="col-12">
                            <?= do_shortcode('[forminator_form id="114"]') ?>
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