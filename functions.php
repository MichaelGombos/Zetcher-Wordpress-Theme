<?php
    $uri = get_template_directory_uri() . "/theme-template/style.css";
    $uri_m = get_template_directory_uri() . "/theme-template/magic.js";
    echo '<script>';
    echo 'console.log(\'h20i\');';
    echo 'console.log(\''.$uri.'\');';
    echo 'console.log(\''.$uri_m.'\');';
    echo 'console.log(\'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;700&display=swap\');';
    echo '</script>';
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