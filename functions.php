<?php
if ( ! function_exists( 'dark_urban_setup' ) ) :

function dark_urban_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'dark_urban', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'dark_urban' ),
        'social'  => __( 'Social Links Menu', 'dark_urban' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // dark_urban_setup

add_action( 'after_setup_theme', 'dark_urban_setup' );


if ( ! function_exists( 'dark_urban_init' ) ) :

function dark_urban_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // dark_urban_setup

add_action( 'init', 'dark_urban_init' );


if ( ! function_exists( 'dark_urban_custom_image_sizes_names' ) ) :

function dark_urban_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'dark_urban_custom_image_sizes_names' );
endif;// dark_urban_custom_image_sizes_names



if ( ! function_exists( 'dark_urban_widgets_init' ) ) :

function dark_urban_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Right top', 'dark_urban' ),
        'id' => 'right_top',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Right middle', 'dark_urban' ),
        'id' => 'right_middle',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Right bottom', 'dark_urban' ),
        'id' => 'right_bottom',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer left', 'dark_urban' ),
        'id' => 'footer_left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer middle', 'dark_urban' ),
        'id' => 'footer_middle',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Footer right', 'dark_urban' ),
        'id' => 'footer_right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Right', 'dark_urban' ),
        'id' => 'right_top',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'dark_urban_widgets_init' );
endif;// dark_urban_widgets_init



if ( ! function_exists( 'dark_urban_customize_register' ) ) :

function dark_urban_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'blog_content', array(
        'title' => __( 'Blog Content', 'dark_urban' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'header_title', array(
        'type' => 'theme_mod',
        'default' => __( 'It\'s my life...', 'dark_urban' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'header_title', array(
        'label' => __( 'Header Title', 'dark_urban' ),
        'type' => 'text',
        'section' => 'blog_content'
    ));

    $wp_customize->add_setting( 'header_title_color', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_title_color', array(
        'label' => __( 'Header Title Color', 'dark_urban' ),
        'type' => 'color',
        'section' => 'blog_content'
    ) ) );

    $wp_customize->add_setting( 'header_subtitle', array(
        'type' => 'theme_mod',
        'default' => __( 'It\'s my territory...', 'dark_urban' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'header_subtitle', array(
        'label' => __( 'Header subtitle', 'dark_urban' ),
        'type' => 'text',
        'section' => 'blog_content'
    ));

    $wp_customize->add_setting( 'link1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link1', array(
        'label' => __( 'Link1', 'dark_urban' ),
        'type' => 'url',
        'section' => 'blog_content'
    ));

    $wp_customize->add_setting( 'link2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link2', array(
        'label' => __( 'Link2', 'dark_urban' ),
        'type' => 'url',
        'section' => 'blog_content'
    ));

    $wp_customize->add_setting( 'link3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link3', array(
        'label' => __( 'Link3', 'dark_urban' ),
        'type' => 'url',
        'section' => 'blog_content'
    ));

    $wp_customize->add_setting( 'link4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'link4', array(
        'label' => __( 'Link4', 'dark_urban' ),
        'type' => 'url',
        'section' => 'blog_content'
    ));

    $wp_customize->add_setting( 'link4', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'link4', array(
        'label' => __( 'Link4', 'dark_urban' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blog_content'
    ) ) );

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'dark_urban_customize_register' );
endif;// dark_urban_customize_register


if ( ! function_exists( 'dark_urban_enqueue_scripts' ) ) :
    function dark_urban_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Permanent+Marker', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'dark_urban_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>