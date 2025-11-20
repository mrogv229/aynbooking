<?php
/**
 * Shortcodes used by Ayn Booking.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Frontend_Shortcodes {
    /**
     * Register plugin shortcodes.
     */
    public function init() {
        add_action( 'init', array( $this, 'register' ) );
    }

    /**
     * Register a placeholder shortcode to confirm the plugin is active.
     */
    public function register() {
        add_shortcode( 'ayn_booking_placeholder', array( $this, 'render_placeholder' ) );
    }

    /**
     * Simple render callback for the placeholder shortcode.
     *
     * @return string
     */
    public function render_placeholder() {
        $message  = '<div class="ayn-booking-placeholder">';
        $message .= '<strong>' . esc_html__( 'Ayn Booking est actif.', 'ayn-booking' ) . '</strong> ';
        $message .= esc_html__( 'Ajoutez le shortcode [ayn_booking_placeholder] dans une page pour vérifier l\'installation.', 'ayn-booking' );
        $message .= '</div>';

        return $message;
    }
}
