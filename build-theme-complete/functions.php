<?php
	/* The theme functions file */

/****************************************************************************
Theme setup
****************************************************************************/
function wpbeirut_theme_setup() {
	
	// title tags
	// method reference https://developer.wordpress.org/reference/functions/add_theme_support/
	/*
	To enable the specific formats (see supported formats at Post Formats), https://developer.wordpress.org/reference/functions/add_theme_support/
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	*/
	add_theme_support( 'title-tag' );
	
	// translation
	// method reference https://developer.wordpress.org/reference/functions/load_theme_textdomain/
	// method reference https://developer.wordpress.org/reference/functions/get_stylesheet_directory/
	// Load the theme’s translated strings.
	load_theme_textdomain( 'wpbeirut', get_stylesheet_directory() . '/languages' );

	// post formats
	add_theme_support( 'post_formats' );

	// Post thumbnails or featured images
	add_theme_support( 'post-thumbnails', array( 'post', 'page', 'wpbeirut_book' ) );

	// RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// navigation menu
	// method reference https://developer.wordpress.org/reference/functions/register_nav_menus/
	// Registers navigation menu locations for a theme.
	// (array) (Optional) Associative array of menu location identifiers (like a slug) and descriptive text. Default value: array()
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'wpbeirut' )
	) );

}
// method reference https://developer.wordpress.org/reference/functions/add_action/
/*
Hooks a function on to a specific action.
Actions are the hooks that the WordPress core launches at specific points during execution, 
or when specific events occur. 
Plugins can specify that one or more of its PHP functions are executed at these points, using the Action API.
*/
add_action( 'after_setup_theme', 'wpbeirut_theme_setup' );

/****************************************************************************
Register widgets
****************************************************************************/
function wpbeirut_register_widgets() {
		
	// Sidebar widget area, located in the sidebar. Empty by default.
	// method reference https://developer.wordpress.org/reference/functions/register_sidebar/
	// Builds the definition for a single sidebar and returns the ID.
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'wpbeirut' ),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area', 'wpbeirut' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// First footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'wpbeirut' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'wpbeirut' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Second Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'wpbeirut' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'wpbeirut' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Third Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'wpbeirut' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'wpbeirut' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'wpbeirut_register_widgets' );

/****************************************************************************
Register custom post type
****************************************************************************/
function wpbeirut_register_post_type() {
	
	// books
	$labels = array( 
		'name' => __( 'Books' ),
		'singular_name' => __( 'Books' ),
		'add_new' => __( 'New Book' ),
		'add_new_item' => __( 'Add New Book' ),
		'edit_item' => __( 'Edit Book' ),
		'new_item' => __( 'New Book' ),
		'view_item' => __( 'View Book' ),
		'search_items' => __( 'Search Books' ),
		'not_found' =>  __( 'No Books Found' ),
		'not_found_in_trash' => __( 'No Books found in Trash' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'supports' => array(
			'title', 
			'editor', 
			'thumbnail',
			'excerpt', 
			'custom-fields', 
			'page-attributes'
		),
		'taxonomies' => array( 'category' ), 
		'rewrite'   => array( 'slug' => 'book' ),

	);
	// method reference https://developer.wordpress.org/reference/functions/register_post_type/
	/*
	Registers a post type.
	Note: Post type registrations should not be hooked before the ‘init’ action. 
	Also, any taxonomy connections should be registered via the $taxonomies argument to ensure consistency when hooks such as ‘parse_query’ or ‘pre_get_posts’ are used.
	Post types can support any number of built-in core features such as meta boxes, custom fields, post thumbnails, post statuses, comments, and more. 
	See the $supports argument for a complete list of supported features.
	*/
	register_post_type( 'wpbeirut_book', $args );
		
}
add_action( 'init', 'wpbeirut_register_post_type' );


/****************************************************************************
Register custom taxonomy
****************************************************************************/
function wpbeirut_register_taxonomy() {	
	
	// genres
	$labels = array(
		'name'              => __( 'Genres' ),
		'singular_name'     => __( 'Genre' ),
		'search_items'      => __( 'Search Genres' ),
		'all_items'         => __( 'All Genres' ),
		'edit_item'         => __( 'Edit Genres' ),
		'update_item'       => __( 'Update Genres' ),
		'add_new_item'      => __( 'Add New Genres' ),
		'new_item_name'     => __( 'New Genre Name' ),
		'menu_name'         => __( 'Genres' ),
	);
	
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'sort' => true,
		'args' => array( 'orderby' => 'term_order' ),
		'rewrite' => array( 'slug' => 'genre' ),
		'show_admin_column' => true
	);
	// method reference https://developer.wordpress.org/reference/functions/register_taxonomy/
	/*
	Creates or modifies a taxonomy object.
	Note: Do not use before the ‘init’ hook.
	A simple function for creating or modifying a taxonomy object based on the parameters given. 
	If modifying an existing taxonomy object, note that the $object_type value from the original registration will be overwritten.
	*/
	register_taxonomy( 'wpbeirut_genre', array( 'wpbeirut_book' ), $args);
		
}
add_action( 'init', 'wpbeirut_register_taxonomy' );