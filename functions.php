<?php
$themename= 'portfolio-theme';
// This theme uses wp_nav_menu() in two location.  
register_nav_menus( array(  
  'primary' => __( 'Main Menu', $themename )
) );

add_theme_support( 'post-thumbnails' );
?>