<?php
/**
 * Settings page registration.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Admin_Settings' ) ) {
    return;
}

class Ayn_Admin_Settings {
    /**
     * Hook into admin menus.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Register settings submenu.
     */
    public function register() {
        add_submenu_page(
            Ayn_Admin_Menu::parent_slug(),
            __( 'Réglages Ayn Booking', 'ayn-booking' ),
            __( 'Réglages', 'ayn-booking' ),
            'manage_options',
            'ayn-booking-settings',
            array( $this, 'render' )
        );
    }

    /**
     * Render settings placeholder.
     */
    public function render() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Réglages Ayn Booking', 'ayn-booking' ) . '</h1>';
        echo '<p>' . esc_html__( 'Configurez ici les paramètres globaux, saisons et services. Les formulaires seront ajoutés ultérieurement.', 'ayn-booking' ) . '</p>';
        echo '</div>';
    }
}
