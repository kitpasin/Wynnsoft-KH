<?php
/**
 * aisutheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aisutheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aisutheme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on aisutheme, use a find and replace
		* to change 'aisutheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'aisutheme', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'aisutheme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'aisutheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'aisutheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aisutheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aisutheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'aisutheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aisutheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aisutheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aisutheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'aisutheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aisutheme_style_scripts() {
	wp_enqueue_style('aisutheme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('style-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), _S_VERSION);
	wp_enqueue_style('style-header', get_template_directory_uri() . '/css/header.css');
	wp_enqueue_style('style-index', get_template_directory_uri() . '/css/index.css');
	wp_enqueue_style('style-serve', get_template_directory_uri() . '/css/serve.css');
	wp_enqueue_style('style-serve-agency', get_template_directory_uri() . '/css/serve-agency.css');
	wp_enqueue_style('style-service-website', get_template_directory_uri() . '/css/service-website.css');
	wp_enqueue_style('style-service-vending&cafe', get_template_directory_uri() . '/css/service-vending&cafe.css');
	wp_enqueue_style('style-service-vending&cafe-product', get_template_directory_uri() . '/css/service-vending&cafe-product.css');
	wp_enqueue_style('style-service-franchise', get_template_directory_uri() . '/css/service-franchise.css');
	wp_enqueue_style('style-service-franchise-franchise', get_template_directory_uri() . '/css/service-franchise-franchise.css');
	wp_enqueue_style('style-service-payment', get_template_directory_uri() . '/css/service-payment.css');
	wp_enqueue_style('style-brand-website', get_template_directory_uri() . '/css/brand-website.css');
	wp_enqueue_style('style-brand-seo', get_template_directory_uri() . '/css/brand-seo.css');
	wp_enqueue_style('style-brand-studio', get_template_directory_uri() . '/css/brand-studio.css');
	wp_enqueue_style('style-brand-vending&cafe', get_template_directory_uri() . '/css/brand-vending&cafe.css');
	wp_enqueue_style('style-news&promotion', get_template_directory_uri() . '/css/news&promotion.css');
	wp_enqueue_style('style-news&promotion-news', get_template_directory_uri() . '/css/news&promotion-news.css');
	wp_enqueue_style('style-franchise', get_template_directory_uri() . '/css/franchise.css');
	wp_enqueue_style('style-works', get_template_directory_uri() . '/css/works.css');
	wp_enqueue_style('style-works-work', get_template_directory_uri() . '/css/works-work.css');
	wp_enqueue_style('style-contact', get_template_directory_uri() . '/css/contact.css');
	wp_enqueue_style('style-footer', get_template_directory_uri() . '/css/footer.css');
	wp_style_add_data( 'aisutheme-style', 'rtl', 'replace' );

	wp_enqueue_script('aisutheme-script', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('script-swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_header', get_template_directory_uri() . '/js/header.js', array(), '1.2.0', true);
	wp_enqueue_script('script_index', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_serve', get_template_directory_uri() . '/js/serve.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_service-website', get_template_directory_uri() . '/js/service-website.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_service-vending&cafe', get_template_directory_uri() . '/js/service-vending&cafe.js', array(), '1.0.3', true);
	wp_enqueue_script('script_service-vending&cafe-product', get_template_directory_uri() . '/js/service-vending&cafe-product.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_service-franchise', get_template_directory_uri() . '/js/service-franchise.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_service-franchise-small', get_template_directory_uri() . '/js/service-franchise-small.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_service-franchise-medium', get_template_directory_uri() . '/js/service-franchise-medium.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_service-franchise-large', get_template_directory_uri() . '/js/service-franchise-large.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_service-franchise-location', get_template_directory_uri() . '/js/service-franchise-location.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_news&promotion', get_template_directory_uri() . '/js/news&promotion.js', array(), _S_VERSION, true);
	wp_enqueue_script('script_works', get_template_directory_uri() . '/js/works.js', array(), '1.0.2', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aisutheme_style_scripts' );

/**
 * Custom Fonts
 * font-family: 'Kanit', sans-serif;
 */
function enqueue_custom_fonts() {
	if(!is_admin()) {
		wp_register_style('kanit', 'https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap');
		wp_enqueue_style('kanit');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');
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

