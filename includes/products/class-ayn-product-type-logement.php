<?php
/**
 * Custom WooCommerce product type for lodgings.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Product_Type_Logement' ) ) {
    return;
}

class Ayn_Product_Type_Logement {
    /**
     * Register product type hooks.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Placeholder for product type registration.
     */
    public function register() {
        // Product type registration hooks will be added here.
    }
}
