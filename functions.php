<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', false,'1.1','all');
   wp_enqueue_style( 'first');

   wp_register_style('second', get_template_directory_uri() . '/assets/css/creative-design.css', false,'1.1','all');
   wp_enqueue_style( 'second');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script ( )
{
   wp_register_script ( 'js-script' , get_template_directory_uri ( ) . '/assets/vendors/jquery/jquery-3.4.1.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'js-script' ) ; 
   wp_register_script ( 'bundle' , get_template_directory_uri ( ) . '/assets/vendors/bootstrap/bootstrap.bundle.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'bundle' ) ; 
   wp_register_script ( 'affix' , get_template_directory_uri ( ) . '/assets/vendors/bootstrap/bootstrap.affix.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'affix' ) ; 
   wp_register_script ( 'design' , get_template_directory_uri ( ) . '/assets/js/creative-design.js' , array ( 'jquery' ) , 1.1 , true ) ;   
   wp_enqueue_script ( 'design' ) ; 
  
}
add_action ( 'wp_enqueue_scripts' , 'add_script' ) ;