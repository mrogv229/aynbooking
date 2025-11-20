<?php
/**
 * Stripe Connect payment gateway wrapper.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Stripe_Connect_Gateway {
    /**
     * Register the gateway with WooCommerce.
     */
    public function init() {
        add_filter( 'woocommerce_payment_gateways', array( $this, 'register' ) );
    }

    /**
     * Placeholder for gateway registration.
     */
    public function register( $gateways ) {
        // Gateway registration will be added here.
        return $gateways;
    }
}
