<?php
/**
 * Admin controller for financial and reservation reports.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Reports {
    /**
     * Register admin hooks for reports and exports.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Placeholder for reports screen registration.
     */
    public function register() {
        // Reporting and export hooks will be added here.
    }
}
