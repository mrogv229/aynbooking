<?php
/**
 * Database installer for Ayn Booking custom tables.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_DB_Installer {
    /**
     * Prepare installation hooks.
     */
    public function init() {
        // register_activation_hook will be wired from plugin bootstrap if needed.
    }

    /**
     * Install custom tables.
     */
    public function install() {
        // Table creation logic will be added here.
    }
}
