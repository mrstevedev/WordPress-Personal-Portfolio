<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

 /**
  * Store the theme's directory path and uri in constants
  */
 define('THEME_DIR_PATH', get_template_directory());
 define('THEME_DIR_URI', get_template_directory_uri());

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// Add html5 behavior for some theme elements
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    // This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', THEME_DIR_PATH . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_tk' ),
		) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_tk-bootstrap-wp', THEME_DIR_URI . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', THEME_DIR_URI . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', THEME_DIR_URI . '/includes/css/font-awesome.min.css', false, '4.1.0' );

  // load Main constants
	wp_enqueue_style( 'main-css', THEME_DIR_URI . '/includes/css/main.min.css', false );

  // load Animate.css framework
	wp_enqueue_style( 'animate-css', THEME_DIR_URI . '/bower_components/animate.css/animate.min.css', false );

  // load Hover.css effects
	wp_enqueue_style( 'hover-css', THEME_DIR_URI . '/includes/css/Hover/css/hover.css', false );

	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', THEME_DIR_URI . '/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', THEME_DIR_URI . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_tk-skip-link-focus-fix', THEME_DIR_URI . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

  // load custom file js
  wp_enqueue_script( 'custom-js', THEME_DIR_URI . '/includes/js/custom.js', array('jquery'), '20130116', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', THEME_DIR_URI . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require THEME_DIR_PATH . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require THEME_DIR_PATH . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require THEME_DIR_PATH . '/includes/extras.php';

/**
 * Customizer additions.
 */
require THEME_DIR_PATH . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require THEME_DIR_PATH . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require THEME_DIR_PATH . '/includes/bootstrap-wp-navwalker.php';

/**
 * Adds WooCommerce support
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svg'] = 'image/svg';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/* Create Custom Post Type */
add_action( 'init', 'setup_post_type' );
function setup_post_type(){
	register_post_type( 'todo', array(
		'labels' => array(
			'name' => __( 'Todo', 'todo' ),
			'singular_name' => __( 'Todo', 'todo'),
		),
		'show_ui' => true,
		'has_archive' => false,
		'supports' => array( 'title' ),
		'show_in_rest' => true,
		'rest_base' => 'todo',
		'rest_controller_class' => 'WP_REST_Posts_Controller'
	));
}


/* Custom API Functionlity */
add_action( 'rest_api_init', function(){
	register_rest_route( 'myplugin/v1', '/author/(?P<id>\d+)', array(
		'methods' => 'GET',
		'callback' => 'latest_post_by_author',
		'args' => array(
			'id' => array(
				'validate_callback' => function($param, $request, $key){
					return is_numeric( $param );
				}
				)
			)
	));
});


function latest_post_by_author( $data ){
		$posts = get_posts( array(
			'author' => $data['id'],
			));
		if( empty($posts) ){
			return new WP_Error(
				'no_author',
				'Invalid author',
				array(
					'status' => 404
					)
				);
		}
		return $posts[0]->post_title;
}

// add_action( 'current_screen', 'hide_plugins_screen' );

// function hide_plugins_screen() {

//     $current_screen = get_current_screen();

//     // var_dump($current_screen);

//     if( $current_screen ->id == "plugins" && !is_admin() ) {

//     	exit('sorry you are not authorized to view this page. <a href="/wp-admin">Go back</a>');

//     }    
// }

//Create Testimonials Custom Post Type
function sp_portfolio_register_post_type(){

	$args = array(
		'labels' 				=> array(
			'name' 				=> __('Testimonials'),
			'singular_name' 	=> __('Testimonial'),
			'all_items' 		=> __('All Testimonials'),
			'add_new_item'		=> __('Add New Testimonial'),
			'edit_item'			=> __('Edit Testimonial'),
			'view_item'			=> __('View Testimonial')
		),
			'public' 			=> 'true',
			'has_archive' 		=> 'true',
			'rewrite'			=> array('slug' => 'testimonials'),
			'show_ui'			=> true,
			'show_in_menu'		=> true,
			'show_in_nav_menus' => true,
			'capability_type'	=> 'page',
			'supports'			=> array('title','editor','thumbnail'),
			'exclude_from_search' => 'true',
			'menu_position'		=> 80,
			'has_archive'		=> true,
			'menu_icon'			=> 'dashicons-format-status'
	);
	register_post_type('Testimonials', $args);
}	

add_action( 'init', 'sp_portfolio_register_post_type' );

// Add Meta Boxes to Testimonials Custom Post Type
function my_add_meta_box(){
	add_meta_box( 'testimonial-details', 'Testimonial Details', 'my_meta_box_cb', 'testimonials', 'normal', 'default' );
}

function my_meta_box_cb($post){
	$values = get_post_custom( $post->ID );
	$client_name = isset( $values['client_name'] ) ? esc_attr( $values['client_name'][0] ) : "";
	$company = isset( $values['company'] ) ? esc_attr( $values['company'][0] ) : "";
	wp_nonce_field( 'testimonials_details_nonce_action', 'testimonial_details_nonce' );
	$html  = '';
	$html .= '<label>Client Name</label>';
	$html .= '<input type="text" name="client_name" id="client_name" style="margin-top:15px;margin-left:9px; margin-bottom:10px;" value="' . $client_name . '"><br/>';
	$html .= '<label>Company</label>';
	$html .= '<input type="text" name="" id="" style="margin-left:26px; margin-bottom:15px;" value="' . $company . '">';
	echo $html;
}

function my_save_meta_box(){

	// Bail if we are doing an autosave
	if( defined( 'DOING AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	
	// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['testimonials_details_nonce'] ) || !wp_verify_nonce( $_POST['testimonial_details_nonce'], 'testimonial_details_nonce_action') ) return;

	// 
	if( !current_user_can( 'edit_post' ) ) return;

	//
	if( isset($_POST['client_name'] ) )
		update_post_meta( $post_id, 'client_name', $_POST['client_name']);

	//
	if( isset($_POST['company'] ) )
		update_post_meta( $post_id, 'company', $_POST['company'] );
}
add_action( 'add_meta_boxes', 'my_add_meta_box' );
add_action( 'save_post', 'my_save_meta_box' );



