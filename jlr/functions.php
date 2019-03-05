<?php
/**
 * JLR functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JLR
 */

if ( ! function_exists( 'jlr_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jlr_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JLR, use a find and replace
		 * to change 'jlr' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jlr', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'jlr' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jlr_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'jlr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jlr_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'jlr_content_width', 640 );
}
add_action( 'after_setup_theme', 'jlr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jlr_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jlr' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jlr' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jlr_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function jlr_scripts() {
	wp_enqueue_style( 'jlr-style', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'jquery-ui-accordion' );
	
	wp_enqueue_script('greensock-tweenMax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', array(), '20151215', true);
		
	wp_enqueue_script('scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', array(), '20151215', true);
	
	wp_enqueue_script('scroll-magic-gsap', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), '20151215', true);
			
	wp_enqueue_script( 'jlr-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );
	
	wp_enqueue_script( 'jlr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'jlr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
		

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jlr_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Custom Image Sizes
add_image_size( 'member-photo-1x', 150, 150, true );
add_image_size( 'member-photo', 300, 300, true );
add_image_size( 'hero', 1600, 900, true );
add_image_size( 'hero-2x', 3200, 1800, true );
add_image_size( 'home-preview-images', 1200, 675, true );
add_image_size( 'home-preview-image-2x', 1600, 900, true );


// Remove Top Admin Bar
add_filter('show_admin_bar', '__return_false');

/**
 * Enqueue fonts.
 */
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Fjalla+One', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// ACF Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// YouTube Embed Customizing
function wp_enqueue_scripts__youtube_api() {
    wp_enqueue_script( 'yt-player-api', '//www.youtube.com/player_api', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts__youtube_api' );
function Oembed_youtube_no_title($html,$url,$args){
$url_string = parse_url($url, PHP_URL_QUERY);
parse_str($url_string, $id);
if (isset($id['v'])) {
return '<iframe width="'.$args['width'].'" height="'.$args['height'].'" src="https://www.youtube.com/embed/'.$id['v'].'?rel=0&amp;&showinfo=0;&autohide=0;&modestbranding=1&amp;&nologo=1&amp" frameborder="0" allowfullscreen></iframe>';
}
return $html;
}
add_filter('oembed_result','Oembed_youtube_no_title',10,3);

// Protected By Password Form
function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<div class="wrap-750" id="protected-form"><h3 id="protected-title">Please Enter The Password To Access This Content</h3><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p id="protected-copy">Only members of The Junior League of Reading, PA, Inc. are authorized to access this page.<br>If you are a member and need the password, please email <a href="mailto:info@jlreading.org">info@jlreading.org</a>.</p><input name="post_password" placeholder="Password" id="' . $label . '" type="password" size="20" maxlength="20" /><div><input type="submit" class="button-black" name="Submit" value="' . esc_attr__( "Submit" ) . '" /></div></form></div>';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

// Remove Protected from Titles
function the_title_trim($title) {

	$title = attribute_escape($title);

	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);

	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);

	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

