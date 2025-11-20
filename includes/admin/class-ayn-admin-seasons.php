<?php
/**
 * Admin controller for global seasons management.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Seasons {
    /**
     * Register admin hooks for seasons.
     */
    public function init() {
        add_action( 'admin_init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for season screen registration.
     */
    public function register() {
        // Season CRUD UI hooks will be added here.
    }
}
