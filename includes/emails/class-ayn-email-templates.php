<?php
/**
 * Email templates and notifications for Ayn Booking.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Email_Templates {
    /**
     * Register email templates with WooCommerce.
     */
    public function init() {
        add_filter( 'woocommerce_email_classes', array( $this, 'register' ) );
    }

    /**
     * Placeholder for email class registration.
     */
    public function register( $emails ) {
        // Email template registration will be added here.
        return $emails;
    }
}
