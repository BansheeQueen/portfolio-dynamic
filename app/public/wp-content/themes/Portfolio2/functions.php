<?php
/**
 * MyPortfolio's functions and definitions
 *
 * @package MyPortfolio
 * @since MyPortfolio 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */

if ( ! function_exists( 'myportfolio_theme_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features
    *
    *  It is important to set up these functions before the init hook so that none of these
    *  features are lost.
    *
    *  @since MyPortfolio 1.0
    */

    // Theme setup
    function myportfolio_theme_setup() {
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'myportfolio' ),
        ) );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support('customize-selective-refresh-widgets');

    }
    endif;
    add_action('after_setup_theme', 'myportfolio_theme_setup');

    function myportfolio_assets() {	

    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swa', array(), '1.0', false );

    wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'assets/css/bootstrap.min.css' ), array(), 'v5.1.1', false );

    
    // JS Files 
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array(), '$v5.1.1.', true );
    wp_enqueue_script( 'myportfolio-jquery', get_theme_file_uri( 'assets/js/jquery-3.6.0.min.js' ), array(), '$v3.6.0', true );
    wp_enqueue_script( 'parallax', get_theme_file_uri( '/node_modules/parallax-js/dist/parallax.min.js' ), array(), '$v3.6.0', true );
    wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/4fbf507877.js', array(), '$v3.6.0', true );
    
    wp_enqueue_script( 'myportfolio-js', get_theme_file_uri( 'assets/js/script.js' ), array( 'myportfolio-jquery' ), '1.0.0', true );
    
    // Main css file
    wp_enqueue_style( 'myportfolio', get_stylesheet_uri( ), array( 'bootstrap'), '1.0', false );
}

    add_action('wp_enqueue_scripts', 'myportfolio_assets');

// Define img path
    if( !defined('THEME_IMG_PATH')){
        define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
       }