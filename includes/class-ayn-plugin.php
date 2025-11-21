<?php
/**
 * Core bootstrap for Ayn Booking.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Booking_Plugin' ) ) {
    return;
}

class Ayn_Booking_Plugin {
    /**
     * Singleton instance.
     *
     * @var Ayn_Booking_Plugin|null
     */
    private static $instance = null;

    /**
     * Loader instance.
     *
     * @var Ayn_Loader
     */
    private $loader;

    /**
     * Private constructor to enforce singleton use.
     */
    private function __construct() {
        $this->loader = new Ayn_Loader( __DIR__ );
        $this->loader->init();
    }

    /**
     * Retrieve or create the singleton instance.
     *
     * @return self
     */
    public static function instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
