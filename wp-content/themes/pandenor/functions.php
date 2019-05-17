<?php
add_theme_support('post-thumbnails');

/* POST TYPES */
function register_my_post_types()
{
    /* register_post_type('about',
    array(
        'labels' => array(
            'name'          => __('Quem Somos'),
            'singular_name' => __('Quem Somos'),
            'edit_item'     => __('Editar Quem Somos'),
        ),
        'public'            => true,
        'show_in_menu'      => 'false',
        'supports'          => array(''),
    )); */

    register_post_type('banners',
    array(
        'labels' => array(
            'name'          => __('Banners'),
            'singular_name' => __('Banner'),
            'add_new_item'  => __('Adicionar Novo Banner'),
            'edit_item'     => __('Editar Banner'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-images-alt',
        'supports'          => array('title'),
    ));

    register_post_type('footer',
    array(
        'labels' => array(
            'name'          => __('Footer'),
            'singular_name' => __('Footer'),
            'edit_item'     => __('Editar Footer'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-align-center',
        'show_in_menu'         => false,
        'supports'          => array('title'),
    ));
    
    /*
    
    register_post_type('services',
    array(
        'labels' => array(
            'name'          => __('Serviços'),
            'singular_name' => __('Serviço'),
            'add_new_item'  => __('Adicionar Novo Serviço'),
            'edit_item'     => __('Editar Serviço'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-clipboard',
        'supports'          => array('title'),
    ));
    
    register_post_type('clients',
    array(
        'labels' => array(
            'name'          => __('Clientes'),
            'singular_name' => __('Cliente'),
            'add_new_item'  => __('Adicionar Novo Cliente'),
            'edit_item'     => __('Editar Cliente'),
        ),
        'public'            => true,
        'menu_icon'         => 'dashicons-groups',
        'supports'          => array('title'),
    ));*/
} 
add_action('init', 'register_my_post_types'); 

/* CUSTOM FUNCTIONS */
/* 
function pagination()
{
    global $wp_query;
    $big = 999999999; // need an unlikely integer
  
    return paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __("<i class='fas fa-caret-left' style='color:#aaaaaa;'></i>"),
        'next_text' => __("<i class='fas fa-caret-right' style='color:#aaaaaa;'></i>")
    ));
    
} */

function add_custom_menu_position() {
    
    add_menu_page('footer', 'Footer', 'edit_posts', admin_url('post.php?post=73&action=edit'), null ,'dashicons-align-center', 25); 
}
add_action('admin_menu', 'add_custom_menu_position');

function remove_menu () 
{
    //remove_menu_page( 'edit.php?post_type=page' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page('edit.php');
} 
add_action('admin_menu', 'remove_menu');