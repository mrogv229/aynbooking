<?php
/**
 * Admin controller for global services management.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Services {
    /**
     * Register admin hooks for services.
     */
    public function init() {
        add_action( 'admin_init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for services UI registration.
     */
    public function register() {
        // Service CRUD UI hooks will be added here.
    }
}
