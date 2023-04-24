<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://farhanali.me
 * @since             1.0.0
 * @package           Display_Cart_Data_In_Wp_Dashboard
 *
 * @wordpress-plugin
 * Plugin Name:       Display Cart Data in WP Dashboard
 * Plugin URI:        https://farhanali.me/plugins/display-cart-data-in-wp-dashboard
 * Description:       Display your customers' cart data right in the WordPress dashboard with our WooCommerce extension! This custom plugin hooks into WooCommerce's functionality to show admins details about the current user's cart, including products added, total cost, and shipping address. Edit the cart directly from the dashboard and access past orders easily. Download our plugin now to streamline your WooCommerce management process!
 * Version:           1.0.0
 * Author:            Farhan Ali
 * Author URI:        https://farhanali.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       display-cart-data-in-wp-dashboard
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
define( 'DISPLAY_CART_DATA_IN_WP_DASHBOARD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-display-cart-data-in-wp-dashboard-activator.php
 */
function activate_display_cart_data_in_wp_dashboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-display-cart-data-in-wp-dashboard-activator.php';
	Display_Cart_Data_In_Wp_Dashboard_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-display-cart-data-in-wp-dashboard-deactivator.php
 */
function deactivate_display_cart_data_in_wp_dashboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-display-cart-data-in-wp-dashboard-deactivator.php';
	Display_Cart_Data_In_Wp_Dashboard_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_display_cart_data_in_wp_dashboard' );
register_deactivation_hook( __FILE__, 'deactivate_display_cart_data_in_wp_dashboard' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-display-cart-data-in-wp-dashboard.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_display_cart_data_in_wp_dashboard() {

	$plugin = new Display_Cart_Data_In_Wp_Dashboard();
	$plugin->run();

}
run_display_cart_data_in_wp_dashboard();
