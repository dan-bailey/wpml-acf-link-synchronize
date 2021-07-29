<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.danbailey.net
 * @since      1.0.0
 *
 * @package    Wpml_Acf_Link_Synchronize
 * @subpackage Wpml_Acf_Link_Synchronize/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wpml_Acf_Link_Synchronize
 * @subpackage Wpml_Acf_Link_Synchronize/includes
 * @author     Dan Bailey <dbailey@danbailey.net>
 */
class Wpml_Acf_Link_Synchronize_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wpml-acf-link-synchronize',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
