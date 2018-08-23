<?php
/*
 * Plugin Name: WP Symlinker
 * Version: 1.0
 * Plugin URI: https://carlalberto.code.blog
 * Description: Easy Symlinker in WP
 * Author: Carl Alberto
 * Author URI: https://carlalberto.code.blog
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: wp-symlinker
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Carl Alberto
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-wp-symlinker.php' );
require_once( 'includes/class-wp-symlinker-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-wp-symlinker-admin-api.php' );

/**
 * Returns the main instance of WP_Symlinker to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object WP_Symlinker
 */
function WP_Symlinker () {
	$instance = WP_Symlinker::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = WP_Symlinker_Settings::instance( $instance );
	}

	return $instance;
}

WP_Symlinker();
