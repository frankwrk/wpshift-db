<?php
/*
Plugin Name: WP Shift DB
Description: Push, pull and export to migrate your WordPress DB.
Author: Mohammad Fahim
Version: 1.6
Author URI: http://fahim.xyz
GitHub Plugin URI: fahim-spurbee/wp-shift-db
*/

$GLOBALS['wpsdb_meta']['wp-shift-db']['version'] = '1.6';
$GLOBALS['wpsdb_meta']['wp-shift-db']['folder'] = basename( plugin_dir_path( __FILE__ ) );

// Define the directory seperator if it isn't already
if( !defined( 'DS' ) ) {
	if (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
		define('DS', '\\');
	}
	else {
		define('DS', '/');
	}
}

function wp_shift_db_loaded() {
	// if neither WordPress admin nor running from wp-cli, exit quickly to prevent performance impact
	if ( !is_admin() && ! ( defined( 'WP_CLI' ) && WP_CLI ) ) return;

	require_once 'class/wpsdb-base.php';
	require_once 'class/wpsdb-addon.php';
	require_once 'class/wpsdb.php';

	global $wpsdb;
	$wpsdb = new WPSDB( __FILE__ );
}

add_action( 'plugins_loaded', 'wp_shift_db_loaded' );

function wp_shift_db_init() {
	// if neither WordPress admin nor running from wp-cli, exit quickly to prevent performance impact
	if ( !is_admin() && ! ( defined( 'WP_CLI' ) && WP_CLI ) ) return;

	load_plugin_textdomain( 'wp-shift-db', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'init', 'wp_shift_db_init' );
