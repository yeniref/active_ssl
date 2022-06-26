<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.r10.net/profil/32747-harew1.html
 * @since             1.0.0
 * @package           Active_ssl
 *
 * @wordpress-plugin
 * Plugin Name:       Http TO Https SSl Active
 * Plugin URI:        https://daltonyazilim.com
 * Description:       Wordpres Http To Https Plugin ..
 * Version:           1.0.0
 * Author:            harew1
 * Author URI:        https://www.r10.net/profil/32747-harew1.html
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       active_ssl
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ACTIVE_SSL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-active_ssl-activator.php
 */
function activate_active_ssl() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-active_ssl-activator.php';
	Active_ssl_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-active_ssl-deactivator.php
 */
function deactivate_active_ssl() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-active_ssl-deactivator.php';
	Active_ssl_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_active_ssl' );
register_deactivation_hook( __FILE__, 'deactivate_active_ssl' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-active_ssl.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_active_ssl() {

	$plugin = new Active_ssl();
	$plugin->run();

}
run_active_ssl();

$plugin = new Active_ssl();

function ssl(){
	return $plugin->http_to_http();
}
add_action( 'init', 'ssl' );
