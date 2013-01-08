<?php
/**
 * This makes the child theme work. If you need any
 * additional features or let's say menus, do it here.
 *
 * @return void
 */
function required_starter_themesetup() {

	load_child_theme_textdomain( 'requiredstarter', get_template_directory() . '/languages' );

	// Register an additional Menu Location
	register_nav_menus( array(
		'meta' => __( 'Meta Menu', 'requiredstarter' )
	) );

	// Add support for custom backgrounds and overwrite the parent backgorund color
	add_theme_support( 'custom-background', array( 'default-color' => 'f7f7f7' ) );

}
add_action( 'after_setup_theme', 'required_starter_themesetup' );

/**
 * With the following function you can disable theme features
 * used by the parent theme without breaking anything. Read the
 * comments on each and follow the link, if you happen to not
 * know what the function is for. Remove the // in front of the
 * remove_theme_support('...'); calls to make them execute.
 *
 * @return void
 */
function required_starter_after_parent_theme_setup() {

	/**
	 * Hack added: 2012-10-04, Silvan Hagen
	 *
	 * This is a hack, to calm down PHP Notice, since
	 * I'm not sure if it's a bug in WordPress or my
	 * bad I'll leave it here: http://wordpress.org/support/topic/undefined-index-custom_image_header-in-after_setup_theme-of-child-theme
	 */
	if ( ! isset( $GLOBALS['custom_image_header'] ) )
		$GLOBALS['custom_image_header'] = array();

	if ( ! isset( $GLOBALS['custom_background'] ) )
		$GLOBALS['custom_background'] = array();

	// Remove custom header support: http://codex.wordpress.org/Custom_Headers
	//remove_theme_support( 'custom-header' );

	// Remove support for post formats: http://codex.wordpress.org/Post_Formats
	//remove_theme_support( 'post-formats' );

	// Remove featured images support: http://codex.wordpress.org/Post_Thumbnails
	//remove_theme_support( 'post-thumbnails' );

	// Remove custom background support: http://codex.wordpress.org/Custom_Backgrounds
	//remove_theme_support( 'custom-background' );

	// Remove automatic feed links support: http://codex.wordpress.org/Automatic_Feed_Links
	//remove_theme_support( 'automatic-feed-links' );

	// Remove editor styles: http://codex.wordpress.org/Editor_Style
	//remove_editor_styles();

	// Remove a menu from the theme: http://codex.wordpress.org/Navigation_Menus
	//unregister_nav_menu( 'secondary' );

}
add_action( 'after_setup_theme', 'required_starter_after_parent_theme_setup', 11 );

/**
 * Add our theme specific js file and some Google Fonts
 * @return void
 */
function required_starter_scripts() {

	/**
	 * Registers the child-theme.js
	 *
	 * Remove if you don't need this file,
	 * it's empty by default.
	 */
	wp_enqueue_script(
		'child-theme-js',
		get_stylesheet_directory_uri() . '/javascripts/child-theme.js',
		array( 'theme-js' ),
		required_get_theme_version( false ),
		true
	);

	/**
	 * Registers the app.css
	 *
	 * If you don't need it, remove it.
	 * The file is empty by default.
	 */
	wp_register_style(
        'app-css', //handle
        get_stylesheet_directory_uri() . '/stylesheets/app.css',
        array( 'foundation-css' ),	// needs foundation
        required_get_theme_version( false ) //version
  	);
  	wp_enqueue_style( 'app-css' );

  	/**
	 * Registers the accessibilty_foundicons.css
	 *
	 * If you don't need it, remove it.
	 * 
	 */
	wp_register_style(
        'accessibilty_foundicons-css', //handle
        get_stylesheet_directory_uri() . '/stylesheets/accessibilty_foundicons.css',
        array( 'foundation-css' ),	// needs foundation
        required_get_theme_version( false ) //version
  	);
  	wp_enqueue_style( 'accessibilty_foundicons-css' );

  	/**
	 * Registers the general_enclosed_foundicons.css
	 *
	 * If you don't need it, remove it.
	 * 
	 */
	wp_register_style(
        'general_enclosed_foundicons-css', //handle
        get_stylesheet_directory_uri() . '/stylesheets/general_enclosed_foundicons.css',
        array( 'foundation-css' ),	// needs foundation
        required_get_theme_version( false ) //version
  	);
  	wp_enqueue_style( 'general_enclosed_foundicons-css' );

  	/**
	 * Registers the general_foundicons.css
	 *
	 * If you don't need it, remove it.
	 * 
	 */
	wp_register_style(
        'general_foundicons-css', //handle
        get_stylesheet_directory_uri() . '/stylesheets/general_foundicons.css',
        array( 'foundation-css' ),	// needs foundation
        required_get_theme_version( false ) //version
  	);
  	wp_enqueue_style( 'general_foundicons-css' );


  	/**
	 * Registers the general_enclosed_foundicons.css
	 *
	 * If you don't need it, remove it.
	 * 
	 */
	wp_register_style(
        'social_foundicons-css', //handle
        get_stylesheet_directory_uri() . '/stylesheets/social_foundicons.css',
        array( 'foundation-css' ),	// needs foundation
        required_get_theme_version( false ) //version
  	);
  	wp_enqueue_style( 'social_foundicons-css' );

     wp_register_style( 'porfolio',get_template_directory_uri() . '/porfolio.css', false );
     wp_enqueue_style( 'porfolio' );


	/**
	 * Adding google fonts
	 *
	 * This is the proper code to add google fonts
	 * as seen in TwentyTwelve
	 */
	$protocol = is_ssl() ? 'https' : 'http';
	$query_args = array( 'family' => 'Open+Sans:300,600' );
	wp_enqueue_style(
		'open-sans',
		add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" ),
		array(),
		null
	);
}
add_action('wp_enqueue_scripts', 'required_starter_scripts');


/**
 * Overwrite the default continue reading link
 *
 * This function is an example on how to overwrite
 * the parent theme function to create continue reading
 * links.
 *
 * @return string HTML link with text and permalink to the post/page/cpt
 */

function required_continue_reading_link() {
	return '
	<div class="hide-for-small top25"
	<a class=" button" href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading &rarr;', 'requiredfoundation' ) . '</a>
	</div>	
	<div class="show-for-small top25"
	<a class=" button full-width" href="'. esc_url( get_permalink() ) . '">' . __( 'Continue reading &rarr;', 'requiredfoundation' ) . '</a>
	</div>';
}


/**
 * Overwrite the defaults of the Orbit shortcode script
 *
 * Accepts all the parameters from http://foundation.zurb.com/docs/orbit.php#optCode
 * to customize the options for the orbit shortcode plugin.
 *
 * @param  array $args default args
 * @return array       your args
 */
function required_obrit_script_args( $defaults ) {
	$args = array(
		'animation' => 'horizontal-push',    // fade, horizontal-slide, vertical-slide, horizontal-push
        'animationSpeed' => 1000,         // how fast animtions are
        'timer'  => true,        // true or false to have the timer
        'advanceSpeed'  => 4000,     // if timer is enabled, time between transitions 
        'pauseOnHover'  => true,      // if you hover pauses the slider
        'startClockOnMouseOut'  => true,    // if clock should start on MouseOut
        'startClockOnMouseOutAfter'  => 700,    // how long after MouseOut should the timer start again
        
	);
	return wp_parse_args( $args, $defaults );
}
add_filter( 'req_obrit_script_args', 'required_obrit_script_args' );

/*
 *
 * HIDES THE ADMIN BAR ON THE FRONT END OF THE SITE
 *
 */
add_filter( 'show_admin_bar', '__return_false' );

/*
*  Overwrite the defaults of post thumbnails. 
*/
add_theme_support('post-thumbnails');
if ( function_exists( 'add_theme_support' ) )
  add_theme_support( 'post-thumbnails' );


function theme_styles(){ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  // registering Arvo font
  wp_register_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Arvo:400,400italic,700', array(), '1', 'all' );
  // enqueing: Arvo font
  wp_enqueue_style( 'googlefont' );
  // registering TextMeOne font
  wp_register_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Varela+Round:400', array(), '1', 'all' );
  // enqueing: TextMeOne font
  wp_enqueue_style( 'googlefont' );
}
add_action('wp_print_styles', 'theme_styles');


if (function_exists('register_sidebar')) {

		register_sidebar(array(
			'name' => 'Left Column',
			'id'   => 'left_column',
			'description'   => 'Widget area for home page left column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
		register_sidebar(array(
			'name' => 'Center Column',
			'id'   => 'center_column',
			'description'   => 'Widget area for home page center column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
		register_sidebar(array(
			'name' => 'Right Column',
			'id'   => 'right_column',
			'description'   => 'Widget area for home page right column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
		register_sidebar(array(
			'name' => 'Left Feature Column',
			'id'   => 'left_feature',
			'description'   => 'Widget area for home page left column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
		register_sidebar(array(
			'name' => 'Right Feature Column',
			'id'   => 'right_feature',
			'description'   => 'Widget area for home page right column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));

		register_sidebar(array(
			'name' => 'Left Landing Page Column',
			'id'   => 'landing_left',
			'description'   => 'Widget area for landing page left column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));
		register_sidebar(array(
			'name' => 'Right Landing Page Column',
			'id'   => 'landing_right',
			'description'   => 'Widget area for landing page right column',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		));

		register_sidebar( array(
			'name' => __( 'About Sidebar', 'requiredfoundation' ),
			'id' => 'sidebar-about',
			'description'   => 'This widget area is for the about page',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => "</aside>",
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
	) );

	}

/* This is fuction to setup the Excerpt Read More Feature 
************************************************************
function excerpt_read_more_link($output) {
 global $post;
 return $output . '<a href="'. get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
*/


/* Porfolio Custom Post Type -----------------
***********************************************/
require_once('portfolio-type.php');


add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length) {

	return 25; 

}

add_filter('excerpt_more', 'new_excerpt_more');  

function new_excerpt_more($text){  

	return ' ';  

}  

function portfolio_thumbnail_url($pid){
	$image_id = get_post_thumbnail_id($pid);  
	$image_url = wp_get_attachment_image_src($image_id,'screen-shot');  
	return  $image_url[0];  
}


add_action('wp_head', 'add_google_rel_author');
function add_google_rel_author() {
echo '<link rel="author" href="https://plus.google.com/117383983759489221379/posts" />';
}