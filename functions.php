<?php

/*==========================
| = FUNCTION TO ADD STYLES =
==========================*/

function theme_styles() {

/*=========================================
| = Bootstrap CSS located in node_modules =
==========================================*/

wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );

/*=========================================
| = Theme styles.css located in theme/css =
=========================================*/

wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/css/styles.css' );

/*==========================================================
 | = ie10-viewport-bug-workaround.css located in theme/css =
 =========================================================*/

wp_enqueue_style( 'ie10-viewport-bug-workaround_css', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css' );

/*================================
| = custom.css located in theme/ =
================================*/

wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

/*=============================================================================================
===============================================================================================
===============================================================================================
===============================================================================================
=============================================================================================*/

/*===========================
| = FUNCTION TO ADD SCRIPTS =
===========================*/

function theme_js() {

global $wp_scripts;

/*====================
| = Register shiv.js =
====================*/

wp_register_script( 'html5_shiv', 'http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);

/*=======================
| = Register respond.js =
=======================*/

wp_register_script( 'respond_js', 'http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);

$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

/*=========================
| = Register bootstrap.js =
=========================*/

wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true );

/*====================
| = Register ie10.js =
====================*/ 

wp_enqueue_script( 'ie10_js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '', true );

/*====================
| = Register theme.js =
====================*/

wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );

}

/*============================================================
| = Register ie-emulation-modes-warning_js CRASHES THE THEME =
============================================================*/ 
/*==========================================
wp_enqueue_script( 'ie-emulation-modes-warning_js', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', array('jquery'), '', true );}
==========================================*/ 
/*==================================================
| = Register jquery-2.2.3.min.js CRASHES THE THEME =
==================================================*/

/*=========================================
wp_enqueue_script( 'jquery-2.2.3.min_js', get_template_directory_uri() . '/js/jquery-2.2.3.min.js', array('jquery'), '', true );}
==========================================*/

add_action( 'wp_enqueue_scripts', 'theme_js' );


add_theme_support( 'menus' );

/*====================================
| = FUNCTION TO REGISTER THEME MENUS =
====================================*/

function register_theme_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
      )
    );
}
add_action( 'init', 'register_theme_menus' );

/*=========================================
| = FUNCTION TO REGISTER FEATURED IMAGE =
=========================================*/

add_theme_support( 'post-thumbnails' ); 

/*==================================
| = FUNCTION TO REGISTER WIDGETS =
==================================*/

function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
}

/*================================
| = FUNCTION TO REGISTER WIDGETS =
================================*/

/*===================================
| = Register Front page left widget =
===================================*/

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');

/*===================================
| = Register Front page center widget =
===================================*/

create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');

/*===================================
| = Register Front page right widget =
===================================*/

create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');

/*===================================
| = Register sidebar widget =
===================================*/

create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');

/*===================================
| = Register sidebar widget =
===================================*/

create_widget( 'Blog Sidebar', 'blog', 'Displays on side of pages in blog section');

?>