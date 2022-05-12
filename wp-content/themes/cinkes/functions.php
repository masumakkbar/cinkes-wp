<?php
/**
 * cinkes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cinkes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function cinkes_setup() {
	load_theme_textdomain( 'cinkes', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	remove_theme_support( 'widgets-block-editor' );
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Main Menu', 'cinkes' ),
		),
	);
	register_nav_menus(
		array(
			'footer-menu' => esc_html__( 'Footer Menu', 'cinkes' ),
		),
	);

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
	add_theme_support(
		'custom-background',
		apply_filters(
			'cinkes_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support( 'post-formats', [
        'image',
        'audio',
        'video',
        'gallery',
        'quote',
    ] );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 30,
			'width'       => 130,
			'flex-width'  => true,
			'flex-height' => true,
			'unlink-homepage-logo' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cinkes_setup' );

function cinkes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cinkes_content_width', 640 );
}
add_action( 'after_setup_theme', 'cinkes_content_width', 0 );

/*
 * Register widget area.
 */
function cinkes_widgets_init() {
    $footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', true );
    $footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', false );

	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'cinkes' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add Blog Sidebar.', 'cinkes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Classes Sidebar', 'cinkes' ),
			'id'            => 'classes-sidebar',
			'description'   => esc_html__( 'Add Classes Sidebar.', 'cinkes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//Footer widgets
	$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'cinkes' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer %1$s', 'cinkes' ), $num ),
            'before_widget' => '<div id="%1$s" class="cinkes_footer_widget footer-col-'.$num.' mb-40 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="cinkes_footer_title">',
            'after_title'   => '</h4>',
        ] );
    }
}
add_action( 'widgets_init', 'cinkes_widgets_init' );



define( 'CINKES_THEME_DIR', get_template_directory() );
define( 'CINKES_THEME_URI', get_template_directory_uri() );
define( 'CINKES_THEME_CSS_DIR', CINKES_THEME_URI . '/assets/css/' );
define( 'CINKES_THEME_JS_DIR', CINKES_THEME_URI . '/assets/js/' );
define( 'CINKES_THEME_INC', CINKES_THEME_DIR . '/inc/' );

/*
 * Enqueue Admin scripts and styles.
 */
function cinkes_admin_custom_scripts() {
	wp_enqueue_media();
    wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/inc/style/css/customizer-style.css',array());
    wp_register_script( 'cinkes-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'cinkes-admin-custom' );
}
add_action( 'admin_enqueue_scripts', 'cinkes_admin_custom_scripts' );


/*
 * Enqueue Theme scripts and styles.
 */
function cinkes_scripts() {
	// all CSS
	wp_enqueue_style('bootstrap',CINKES_THEME_CSS_DIR.'bootstrap.min.css' );
	wp_enqueue_style('font-awesome',CINKES_THEME_CSS_DIR.'fontawesome-all.min.css' );
	wp_enqueue_style('animate',CINKES_THEME_CSS_DIR.'animate.min.css' );
	wp_enqueue_style('magnific-popup',CINKES_THEME_CSS_DIR.'magnific-popup.css' );
	wp_enqueue_style('odometer',CINKES_THEME_CSS_DIR.'odometer.min.css' );
	wp_enqueue_style('nice-select',CINKES_THEME_CSS_DIR.'nice-select.css' );
	wp_enqueue_style('meanmenu',CINKES_THEME_CSS_DIR.'meanmenu.css' );
	wp_enqueue_style('swipper',CINKES_THEME_CSS_DIR.'swipper.css' );
	wp_enqueue_style('cinkes-core',CINKES_THEME_CSS_DIR.'cinkes-core.css' );
	wp_enqueue_style('cinkes-custom',CINKES_THEME_CSS_DIR.'cinkes-custom.css' );
	wp_enqueue_style( 'cinkes-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cinkes-style', 'rtl', 'replace' );

    // all js
    wp_enqueue_script( 'bootstrap-bundle', CINKES_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', CINKES_THEME_JS_DIR . 'swipper-bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-meanmenu', CINKES_THEME_JS_DIR . 'jquery.meanmenu.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', CINKES_THEME_JS_DIR . 'wow.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-nice-select', CINKES_THEME_JS_DIR . 'jquery.nice-select.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-scrollUp', CINKES_THEME_JS_DIR . 'jquery.scrollUp.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-magnific-popup', CINKES_THEME_JS_DIR . 'jquery.magnific-popup.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'odometer', CINKES_THEME_JS_DIR . 'odometer.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'appear', CINKES_THEME_JS_DIR . 'appear.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'back-to-top', CINKES_THEME_JS_DIR . 'back-to-top.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'cinkes-main', CINKES_THEME_JS_DIR . 'main.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'cinkes-navigation', CINKES_THEME_JS_DIR . 'navigation.js', [], '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cinkes_scripts' );





require CINKES_THEME_INC . 'template-helper.php';
require CINKES_THEME_INC . 'custom-header.php';
require CINKES_THEME_INC . 'template-tags.php';
require CINKES_THEME_INC . 'template-functions.php';
include_once CINKES_THEME_INC . '/style/php/customizer-style.php';
include_once CINKES_THEME_INC . 'class-wp-bootstrap-navwalker.php';
include_once CINKES_THEME_INC . 'class-ocdi-importer.php';
require_once CINKES_THEME_INC . 'class-tgm-plugin-activation.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require CINKES_THEME_INC . 'jetpack.php';
}