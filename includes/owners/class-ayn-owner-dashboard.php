<?php
/**
 * Owner dashboard access (future frontend/backoffice simplification).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Owner_Dashboard {
    /**
     * Register endpoints or admin adjustments for owners.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for dashboard registration.
     */
    public function register() {
        // Owner dashboard hooks will be added here.
    }
}
