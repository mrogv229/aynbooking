<?php
/**
 * Owners management placeholder.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Owners {
    /**
     * Hook into admin menus.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Register owners submenu.
     */
    public function register() {
        add_submenu_page(
            Ayn_Admin_Menu::parent_slug(),
            __( 'Propriétaires', 'ayn-booking' ),
            __( 'Propriétaires', 'ayn-booking' ),
            'manage_options',
            'ayn-booking-owners',
            array( $this, 'render' )
        );
    }

    /**
     * Render owners placeholder.
     */
    public function render() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Propriétaires', 'ayn-booking' ) . '</h1>';
        echo '<p>' . esc_html__( 'Cette page listera les propriétaires et l\'état de leur compte Stripe Connect.', 'ayn-booking' ) . '</p>';
        echo '</div>';
    }
}
