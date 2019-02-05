<?php
    function elMeuTema_setup() {
        // Preparant el tema per a i18n
        load_theme_textdomain( "elMeuTema", bloginfo('template_url')."/languages");
     
        // Suport a thumbnails
        add_theme_support( 'post-thumbnails' );
     
        // Afig enllaços als comentaris i a l'RSS
        add_theme_support( 'automatic-feed-links' );
     
        // Deixa que Wordpress gestione el títol
        add_theme_support( 'title-tag' );
     
        // Activa el suport per a un logotipus personalitzat
        add_theme_support( 'custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
        ) );
     
        // Registrant la ubicació dels menús
        register_nav_menus(array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ));
     
        // Inclou per defecte el marcat HTML5 per a formularis de cerca i comentaris
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    }


    function elMeuTema_cssjs() {
        wp_enqueue_style( 'elMeuTema-style', get_template_directory_uri() . '/css/styles.min.css' );
        wp_enqueue_script( 'elMeuTema-js', get_template_directory_uri() . '/js/scripts.min.js', array( 'jquery' ), '', true );
    }

add_action( 'after_setup_theme', 'elMeuTema_setup' );
add_action( 'wp_enqueue_scripts', 'my-theme_cssjs' );
