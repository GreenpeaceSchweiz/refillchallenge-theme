<?php
/**
 * refillchallenge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package refillchallenge
 */

require get_template_directory() . '/inc/acf-gutt-blocks.php';
require get_template_directory() . '/inc/acf-settings.php';

if ( ! function_exists( 'refillchallenge_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function refillchallenge_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on refillchallenge, use a find and replace
		 * to change 'refillchallenge' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'refillchallenge', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'refillchallenge' ),
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
		add_theme_support( 'custom-background', apply_filters( 'refillchallenge_custom_background_args', array(
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
add_action( 'after_setup_theme', 'refillchallenge_setup' );


add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'refillchallenge-block-editor', get_stylesheet_directory_uri() . "/block-editor.css", false, '1.0', 'all' );
} );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function refillchallenge_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'refillchallenge_content_width', 640 );
}
add_action( 'after_setup_theme', 'refillchallenge_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function refillchallenge_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'refillchallenge' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'refillchallenge' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'refillchallenge' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'refillchallenge' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'refillchallenge_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function refillchallenge_scripts() {

	wp_enqueue_style( 'refillchallenge-lightbox', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'refillchallenge-main-style', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_style( 'refillchallenge-style', get_stylesheet_uri() );

	// logo Animation
	wp_enqueue_script( 'refillchallenge-tween', get_template_directory_uri() . '/js/tweenMax.js', array(), '20151215', true );
	
	wp_enqueue_script( 'refillchallenge-velocity', get_template_directory_uri() . '/js/velocity.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'refillchallenge-velocity-ui', get_template_directory_uri() . '/js/velocity.ui.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'refillchallenge-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'refillchallenge-boxlight', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'refillchallenge-background', get_template_directory_uri() . '/js/background-check.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'refillchallenge-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'refillchallenge-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	// logo Animation
	wp_enqueue_script( 'refillchallenge-logo', get_template_directory_uri() . '/js/logoAnimation.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'refillchallenge-custom', get_template_directory_uri() . '/js/site.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'refillchallenge_scripts' );

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


