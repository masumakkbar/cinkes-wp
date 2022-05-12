<?php 
if ( !defined('ABSPATH') ) { 
    exit;
}

/*
Plugin Name: TP Toolkit
Plugin URI: https://themephi.net/
Description: TP Toolkit Plugin
Version: 1.0.0
Author: ThemePhi
Author URI: https://themephi.net/
*/

// declare constructors
define( 'TP_TOOLKIT_VER', '1.0.0' );
define( 'TP_TOOLKIT_DIR', plugin_dir_path( __FILE__ ) );
define( 'TP_TOOLKIT_URL', plugin_dir_url( __FILE__ ) );





final class TP_toolkit {
	private static $instance;
	function __construct() {
		require_once TP_TOOLKIT_DIR . '/inc/custom-post.php';
		require_once TP_TOOLKIT_DIR . '/inc/class-tp-kirki.php';
		require_once TP_TOOLKIT_DIR . '/inc/kirki-customizer.php';
		require_once TP_TOOLKIT_DIR . '/widgets/widget-social-list.php';
	}

	public static function instance() {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof TP_toolkit ) ) {
			self::$instance = new TP_toolkit;
		}
		return self::$instance;
	}
}
function TP_toolkit() {

	return TP_toolkit::instance();
}

TP_toolkit();
// Load textdomain
function tp_load_plugin_textdomain() {
    load_plugin_textdomain( 'tp-toolkit', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'init', 'tp_load_plugin_textdomain' );