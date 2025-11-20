<?php
/**
 * Shortcodes used by Ayn Booking.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Frontend_Shortcodes {
    /**
     * Register plugin shortcodes.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for shortcode registration.
     */
    public function register() {
        // Shortcode registration will be added here.
    }
}
