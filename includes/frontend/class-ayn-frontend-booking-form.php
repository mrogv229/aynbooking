<?php
/**
 * Front-end booking form rendering and AJAX endpoints.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Frontend_Booking_Form' ) ) {
    return;
}

class Ayn_Frontend_Booking_Form {
    /**
     * Register booking form assets and hooks.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for booking form hook registration.
     */
    public function register() {
        // Booking form scripts, styles, and AJAX hooks will be added here.
    }
}
