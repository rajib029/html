<?php
// functions
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

if (function_exists('register_nav_menus')) {
register_nav_menus( array(
		
		'main_menu' => 'Main Menu',
		'service_menu_1' => 'Service Menu',
		'service_menu_2' => 'Service Menu 2nd'
	) );
}

if (function_exists('register_sidebar'))
{
	
	register_sidebar( array(
		'name' => __( 'Home Featured Panel' ),
		'id' => 'home-featured-widget-area',
		'description' => __( 'Add Text Widget Here and Insert Content' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	) );
}



//Post Type Slider
function my_post_type_sliders() {
	$labels = array(
		'name'               => 'Sliders',
		'singular_name'      => 'Slider',
		'add_new'            => 'Add New Slider',
		'add_new_item'       => 'Add New Slider',
		'edit_item'          => 'Edit Slider',
		'new_item'           => 'New Slider',
		'all_items'          => 'All Sliders',
		'view_item'          => 'View Slider',
		'search_items'       => 'Search Sliders',
		'not_found'          => 'No sliders found',
		'not_found_in_trash' => 'No sliders found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Sliders'
	);
	
	register_post_type(
		'sliders', array( 
			'labels' => $labels, 
			'public' => true, 
			'show_ui' => true,
			'show_in_nav_menus' => false,
			'menu_position' => 5,
			'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail')
		) 
	);
}
add_action('init', 'my_post_type_sliders');


/*============= woo ==============*/
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'init', 'mvs_remove_wc_breadcrumbs' );
function mvs_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

function woocommerce_template_product_description() {
  //woocommerce_get_template( 'single-product/tabs/description.php' );
}
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );

//add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
//add_theme_support( 'wc-product-gallery-slider' );

define('WOOCOMMERCE_USE_CSS', true);
