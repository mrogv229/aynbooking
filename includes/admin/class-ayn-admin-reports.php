<?php
/**
 * Reports placeholder.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Reports {
    /**
     * Hook into admin menus.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Register reports submenu.
     */
    public function register() {
        add_submenu_page(
            Ayn_Admin_Menu::parent_slug(),
            __( 'Rapports', 'ayn-booking' ),
            __( 'Rapports', 'ayn-booking' ),
            'manage_options',
            'ayn-booking-reports',
            array( $this, 'render' )
        );
    }

    /**
     * Render reports placeholder.
     */
    public function render() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Rapports', 'ayn-booking' ) . '</h1>';
        echo '<p>' . esc_html__( 'Les exports financiers et synthèses propriétaires apparaîtront ici.', 'ayn-booking' ) . '</p>';
        echo '</div>';
    }
}
