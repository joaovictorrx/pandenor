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
    <div class="top-spacing d-none d-lg-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <div class="card px-5 rounded-card py-5">
                    <div class="row mb-3">
                        <div class="col-12 col-lg-12 text-center d-flex justify-content-center">
                            <button style="width: 254px" id="btn-contato" data-target="contato" class="btn btn-outline active mr-5">Fale Conosco</button>
                            <button style="width: 254px" id="btn-trabalho" data-target="trabalho" class="btn btn-outline">Trabalhe na Pandenor</button>
                        </div>
                    </div>
                    <div class="row">
                       <div id="contato" class="col-12">
                            <?= do_shortcode('[forminator_form id="114"]') ?>
                       </div>
                       <div id="trabalho" class="col-12">
                            <?= do_shortcode('[forminator_form id="116"]') ?>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-spacing"></div>
</section>

<?php get_footer();?>

<script>
$(document).ready(function () {
    $('#trabalho').hide()
    $('#btn-contato').click(function(){
        $('#btn-contato').addClass('active')
        $('#btn-trabalho').removeClass('active')

        $('#contato').show()
        $('#trabalho').hide()
    })
    
    $('#btn-trabalho').click(function(){
        $('#btn-trabalho').addClass('active')
        $('#btn-contato').removeClass('active')

        $('#trabalho').show()
        $('#contato').hide()
    })


    function checkContainer () {
        if(!$('#forminator-module-116').is(':visible')){
            setTimeout(checkContainer, 50);
        } else {
            $('.forminator-upload-button').html('Escolher Arquivo');
            $('label[id=upload-1-field]').html('Nenhum arquivo selecionado');
        }
    }
    checkContainer();
})
</script>