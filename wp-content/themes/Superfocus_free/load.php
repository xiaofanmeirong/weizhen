<?php
// 加载主题的各种外置文件 css  js
function themepark_init_css() {
$theme_color= get_option('mytheme_theme_color'); 
if($theme_color ==""){ $theme_color ='/style.css';};
if ( !is_admin()) {

	   wp_deregister_script('jquery');
	   wp_register_script( 'jquery', get_template_directory_uri() ."/js/jquery-1.11.0.js");
	   wp_enqueue_script('jquery');
	    wp_deregister_script('easing');
	   wp_register_script( 'easing',get_template_directory_uri() ."/js/jquery.easing.1.3.js");
	   wp_enqueue_script('easing');
		 wp_deregister_script('index');
	   wp_register_script( 'index', get_template_directory_uri() ."/js/index_nomo.js",false, '', true );
	   wp_enqueue_script('index');   
	   wp_deregister_script('lrscroll');
	   wp_register_script( 'lrscroll', get_template_directory_uri() ."/js/lrscroll.js",false, '', true );
	   wp_enqueue_script('lrscroll');
	   
	   wp_deregister_script('png');
	   wp_register_script( 'png', get_template_directory_uri() ."/png/pngtm.js");
	   wp_enqueue_script('png');
	   


	   wp_deregister_script('script');
	   wp_register_script( 'script', get_template_directory_uri() ."/js/script.js",false, '', true );
	   wp_enqueue_script('script');
	   
	  
	
	
	    wp_deregister_style('stylesheet');
	   wp_register_style( 'stylesheet', get_template_directory_uri() .$theme_color);
	   wp_enqueue_style('stylesheet');
	   
	   

	}}

add_action('wp_print_styles', 'themepark_init_css');

	?>