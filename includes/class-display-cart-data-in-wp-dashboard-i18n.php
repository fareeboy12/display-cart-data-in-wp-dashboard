<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://farhanali.me
 * @since      1.0.0
 *
 * @package    Display_Cart_Data_In_Wp_Dashboard
 * @subpackage Display_Cart_Data_In_Wp_Dashboard/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Display_Cart_Data_In_Wp_Dashboard
 * @subpackage Display_Cart_Data_In_Wp_Dashboard/includes
 * @author     Farhan Ali <fareeboy12@gmail.com>
 */
class Display_Cart_Data_In_Wp_Dashboard_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'display-cart-data-in-wp-dashboard',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
