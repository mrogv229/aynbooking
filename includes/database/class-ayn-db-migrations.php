<?php
/**
 * Database migrations for Ayn Booking schema updates.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_DB_Migrations' ) ) {
    return;
}

class Ayn_DB_Migrations {
    /**
     * Prepare migration checks.
     */
    public function init() {
        // Version compare hooks will be registered here.
    }

    /**
     * Run necessary migrations on version change.
     */
    public function migrate() {
        // Migration logic will be added here.
    }
}
