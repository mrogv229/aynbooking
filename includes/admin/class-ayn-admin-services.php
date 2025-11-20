<?php
/**
 * Services management placeholder.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Services {
    /**
     * Hook into admin menus.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Register services submenu.
     */
    public function register() {
        add_submenu_page(
            Ayn_Admin_Menu::parent_slug(),
            __( 'Services supplémentaires', 'ayn-booking' ),
            __( 'Services', 'ayn-booking' ),
            'manage_options',
            'ayn-booking-services',
            array( $this, 'render' )
        );
    }

    /**
     * Render services placeholder.
     */
    public function render() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Services supplémentaires', 'ayn-booking' ) . '</h1>';
        echo '<p>' . esc_html__( 'Définissez les services globaux (ménage, kit bébé, etc.). L\'interface de création sera ajoutée ici.', 'ayn-booking' ) . '</p>';
        echo '</div>';
    }
}
