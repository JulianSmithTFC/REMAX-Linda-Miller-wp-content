<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'generate-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION



//Bootstrap CDN
wp_register_style( 'Bootstrap_CSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
wp_enqueue_style('Bootstrap_CSS');

if ( is_admin() == false){
    wp_register_script( 'bootstrapJQUERY', 'https://code.jquery.com/jquery-3.3.1.slim.min.js',
        null, null, true );
    wp_enqueue_script('bootstrapJQUERY');
}

wp_register_script( 'Bootstrap_jsOne', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
    null, null, true );
wp_enqueue_script('Bootstrap_jsOne');

wp_register_script( 'Bootstrap_jsTwo', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null,
    null, true );
wp_enqueue_script('Bootstrap_jsTwo');

//Font Awesome CDN
wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );
wp_enqueue_style('Font_Awesome');

//Google Fonts CDN
wp_register_style( 'Google_Fonts', 'https://fonts.googleapis.com/css?family=Raleway|Srisakdi' );
wp_enqueue_style('Google_Fonts');

//MD Bootstrap CDN
wp_register_style( 'MD_Bootstrap_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css' );
wp_enqueue_style('MD_Bootstrap_CSS');

wp_register_script( 'MD_Bootstrap_js', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js', null,
    null, true );
wp_enqueue_script('MD_Bootstrap_js');


//Custom JS
wp_register_script( 'servicesJS', get_stylesheet_directory_uri() . '/js/js-services.js', null,
    null, true );
wp_enqueue_script('servicesJS');




function register_acf_options_pages() {

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Header Settings',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Theme Footer Settings',
            'menu_title'	=> 'Footer',
            'menu_slug' => 'footer-options',
            'parent_slug'	=> 'theme-general-settings',
        ));

    }
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

function register_my_menus() {
    register_nav_menus(
        array(
            'footer-menu' => __( 'Footer Menu' ),
            'topheader-menu' => __( 'Top Header Menu' ),
            'propertie-listing-menu' => __( 'Properties Listing Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

