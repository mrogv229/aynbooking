<?php
/**
 * Availability lookups and blocking logic.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Availability' ) ) {
    return;
}

class Ayn_Availability {
    /**
     * Register availability-related hooks.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for availability queries.
     */
    public function register() {
        // Availability data access will be implemented here.
    }
}
