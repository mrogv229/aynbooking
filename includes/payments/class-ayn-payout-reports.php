<?php
/**
 * Payout reporting for owners and conciergeries.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Payout_Reports {
    /**
     * Register payout reporting hooks.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Placeholder for payout reports UI registration.
     */
    public function register() {
        // Payout reporting hooks will be added here.
    }
}
