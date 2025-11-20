<?php
/**
 * Admin controller for owner records and onboarding status.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Owners {
    /**
     * Register admin hooks for owners list and details.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Placeholder for owners screen registration.
     */
    public function register() {
        // Owner management hooks will be added here.
    }
}
