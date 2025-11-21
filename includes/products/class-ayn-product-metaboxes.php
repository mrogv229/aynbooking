<?php
/**
 * Product metabox definitions for lodging data.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Product_Metaboxes' ) ) {
    return;
}

class Ayn_Product_Metaboxes {
    /**
     * Register lodging metaboxes.
     */
    public function init() {
        add_action( 'add_meta_boxes', array( $this, 'register' ) );
    }

    /**
     * Placeholder for metabox setup.
     */
    public function register() {
        // Metabox definitions will be added here.
    }
}
