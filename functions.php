<?php
function pwf_files(){
    wp_enqueue_script('pwf-main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/css/main.css', false, '', 'all');
    wp_localize_script('pwf-main-js', 'pwfData', array(
        'root_url' => get_site_url(),        
        'nonce' => wp_create_nonce('wp_rest')
    ));
}

add_action('wp_enqueue_scripts','pwf_files');
/* Disable WordPress Admin Bar for all users-------------------------------------------------------------------------- */
add_filter( 'show_admin_bar', '__return_false' );