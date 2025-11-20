<?php
/**
 * Security helper functions for Ayn Booking.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function ayn_sanitize_text_field_deep( $value ) {
    // Placeholder for recursive sanitization helper.
    if ( is_array( $value ) ) {
        return array_map( 'ayn_sanitize_text_field_deep', $value );
    }

    return sanitize_text_field( $value );
}
