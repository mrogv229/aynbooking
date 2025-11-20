<?php
/**
 * Plugin Name: Ayn Booking
 * Description: Vacation rental booking plugin for conciergeries built on WooCommerce.
 * Version: 0.1.0
 * Author: Ayn Booking Team
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-ayn-loader.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-ayn-plugin.php';

if ( ! function_exists( 'ayn_booking' ) ) {
    /**
     * Retrieve the singleton instance of the plugin.
     *
     * @return Ayn_Booking_Plugin
     */
    function ayn_booking() {
        return Ayn_Booking_Plugin::instance();
    }
}

add_action( 'plugins_loaded', 'ayn_booking' );
