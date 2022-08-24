<?php

function zetcher_theme_support(){
    // adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme',"zetcher_theme_support");

function zetcher_customizer_setting($wp_customize) {
// add a setting 
    $wp_customize->add_setting('zetcher_light_logo');
// Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zetcher_light_logo', array(
        'label' => 'Upload light logo',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'zetcher_light_logo',
        'priority' => 8 // show it just below the custom-logo
    )));
    
    // add a setting 
    $wp_customize->add_setting('zetcher_dark_logo');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zetcher_dark_logo', array(
        'label' => 'Upload dark logo',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'zetcher_dark_logo',
        'priority' => 8 // show it just below the custom-logo
    )));
}

add_action('customize_register', 'zetcher_customizer_setting');

function zetcher_menus(){
    $locations = array(
        'primary' => "Header Navigation"   ,
        "footer" => "Footer Navigation"
    );
    
    register_nav_menus($locations);
}

add_action('init',"zetcher_menus");
    
    $uri = get_template_directory_uri() . "/theme-template/style.css";
    $uri_m = get_template_directory_uri() . "/theme-template/magic.js";
    // echo '<script>';
    // echo 'console.log(\'h213i\');';
    // echo 'console.log(\''.$uri.'\');';
    // echo 'console.log(\''.$uri_m.'\');';
    // echo 'console.log(\'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;700&display=swap\');';
    // echo '</script>';
function zetcher_register_styles(){
    global $uri;
    wp_enqueue_style('zetcher-google-api',"https://fonts.googleapis.com",array(),"1.0","all");
    wp_enqueue_style('zetcher-google-static',"https://fonts.gstatic.com",array(),"1.0","all");
    wp_enqueue_style('zetcher-google-font',"https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;700&display=swap",array(),null);
    wp_enqueue_style('zetcher-main',$uri,array("zetcher-google-font"),"1.0","all");

}

add_action( 'wp_enqueue_scripts', 'zetcher_register_styles');

function zetcher_register_scripts(){
    global $uri_m;
    wp_enqueue_script('zetcher-magic',$uri_m,array(),"1.0",true);

}

add_action( 'wp_enqueue_scripts', 'zetcher_register_scripts');
?>