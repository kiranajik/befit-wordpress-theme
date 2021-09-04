<?php

function myTheme_register_styles()
{

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mytheme-styles0',get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),'1.0','all');
    wp_enqueue_style('mytheme-styles1',get_template_directory_uri()."/assets/css/bootstrap-grid.min.css",array(),'1.0','all');
    wp_enqueue_style('mytheme-styles2',get_template_directory_uri()."/assets/css/header-footer.css",array(),'1.0','all');
    wp_enqueue_style('mytheme-styles3',get_template_directory_uri()."/assets/css/animate.css",array(),'1.0','all');
    wp_enqueue_style('mytheme-styles4',get_template_directory_uri()."/style.css",array('mytheme-styles0'),$version,'all');
}

add_action('wp_enqueue_scripts','myTheme_register_styles');

function myTheme_register_scripts()
{

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('mytheme-script0',"https://kit.fontawesome.com/19f68977af.js",array(),'1.0','all',true);
    wp_enqueue_style('mytheme-script1',"https://code.jquery.com/jquery-3.5.1.min.js",array(),'1.0','all',true);
    wp_enqueue_style('mytheme-script2',"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js",array(),'1.0','all',true);
    wp_enqueue_style('mytheme-script3',"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js",array(),'1.0','all',true);
    wp_enqueue_style('mytheme-script4',get_template_directory_uri()."/assets/js/main.js",array('mytheme-styles0'),$version,'all',true);
    wp_enqueue_style('mytheme-script4',get_template_directory_uri()."/assets/js/wow.js",array('mytheme-styles0'),$version,'all',true);
}

add_action('wp_enqueue_scripts','myTheme_register_scripts');


?>