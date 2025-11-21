<?php
/**
 * (Optional) Custom post type for owners.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Owner_CPT' ) ) {
    return;
}

class Ayn_Owner_CPT {
    /**
     * Register the owner custom post type when needed.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for CPT registration.
     */
    public function register() {
        // CPT registration will be added here if used.
    }
}
