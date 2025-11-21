<?php
/**
 * Front-end display helpers for lodging products.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Product_Display' ) ) {
    return;
}

class Ayn_Product_Display {
    /**
     * Register template and display hooks.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for display hook registration.
     */
    public function register() {
        // Front-end template hooks will be added here.
    }
}
