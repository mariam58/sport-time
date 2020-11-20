<?php
//load css
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('carousel');
    wp_register_style('caro', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('caro');
}
add_action('wp_enqueue_scripts', 'load_css');

//load js
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');


    wp_register_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false, true);
    wp_enqueue_script('script');


    wp_register_script('caru', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', false, true);
    wp_enqueue_script('caru');
}
add_action('wp_enqueue_scripts', 'load_js');



//Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//menus

register_nav_menus(
    array(
        'top-menu'=>'Top Menu Location',
        'mobile-menu'=>'Mobile Menu Location',
    )
 );

 //custom image size


//  add_image_size('blog-large', 800, 400, false);
//  add_image_size('blog-small', 300, 200, true);


 //register sidebar
 function my_sidebars(){
     register_sidebar(
         array(
             'name'=>'Page Sidebar',
             'id'=>'page-sidebar',
             'before_title'=>'<h4 class="widget-title">',
             'after_title'=>'</h4>'
         )
      );



      register_sidebar(
        array(
            'name'=>'Blog Sidebar',
            'id'=>'blog-sidebar',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
        )
     );
 }
 add_action('widgets_init', 'my_sidebars');





// bootstrap nav
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




