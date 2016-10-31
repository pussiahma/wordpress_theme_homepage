<?php


//styles

function kotisivu_theme_styles() {
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
 wp_enqueue_style('kotisivu_css', get_template_directory_uri() . '/css/kotisivu.css');


    wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Raleway:400,700,900');
            wp_enqueue_style( 'et-googleFonts');

 wp_enqueue_style('font-awesome_css','http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');
}

 add_action('wp_enqueue_scripts', 'kotisivu_theme_styles');

//javascript

function kotisivu_theme_js() {


    wp_enqueue_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
wp_enqueue_script("jquery");
wp_enqueue_script('kotisivu_js', get_template_directory_uri() . '/js/kotisivu.js', array('jquery'),'',  true);
}


add_action('wp_enqueue_scripts', 'kotisivu_theme_js');

//menus

function  kotisivu_theme_setup() {

	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}




 add_action('init', 'kotisivu_theme_setup');





/*
	==========================================
	 Theme support function
	==========================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_theme_support('html5',array('search-form'));
set_post_thumbnail_size( 150, 150, array( 'center', 'center')  ); // 50 pixels wide by 50 pixels tall, crop from the center

//sidebar

function kotisivu_widget_setup() {
	
register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

}
add_action('widgets_init','kotisivu_widget_setup');


/*
	==========================================
	 Include Walker file
	==========================================
*/
require get_template_directory() . '/inc/walker.php';
/*
	==========================================
	 Head function
	==========================================
*/
function kotisivu_remove_version() {
	return '';
}

add_filter('the_generator', 'kotisivu_remove_version');


/*
	==========================================
	 Custom Post Type
	==========================================
*/

	/*
function kotisivu_custom_post_type (){
	
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		//'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('portfolio',$args);
}
add_action('init','awesome_custom_post_type');

*/
function kotisivu_custom_taxonomies() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Fields',
		'singular_name' => 'Field',
		'search_items' => 'Search Fields',
		'all_items' => 'All Fields',
		'parent_item' => 'Parent Field',
		'parent_item_colon' => 'Parent Field:',
		'edit_item' => 'Edit Field',
		'update_item' => 'Update Field',
		'add_new_item' => 'Add New Work Field',
		'new_item_name' => 'New Field Name',
		'menu_name' => 'Fields'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'field' )
	);
	
	register_taxonomy('field', array('portfolio'), $args);
	
	//add new taxonomy NOT hierarchical
	
	register_taxonomy('tagit', 'portfolio', array(
		'label' => 'tagit',
		'rewrite' => array( 'slug' => 'tags' ),
		'hierarchical' => false
	) );
	
}
add_action( 'init' , 'kotisivu_custom_taxonomies' );