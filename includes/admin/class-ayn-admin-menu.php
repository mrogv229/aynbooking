<?php
/**
 * Registers Ayn Booking admin menus.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Menu {
    /**
     * Bootstrap admin menu hooks.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Placeholder for menu registration.
     */
    public function register() {
        // Future admin menus will be registered here.
    }
}
