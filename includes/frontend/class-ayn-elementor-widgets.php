<?php
/**
 * Elementor widgets for front-end lodging displays.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Elementor_Widgets {
    /**
     * Register Elementor widgets and controls.
     */
    public function init() {
        add_action( 'elementor/widgets/register', array( $this, 'register' ) );
    }

    /**
     * Placeholder for Elementor registration.
     */
    public function register( $widgets_manager ) {
        // Elementor integration hooks will be added here.
        return $widgets_manager;
    }
}
