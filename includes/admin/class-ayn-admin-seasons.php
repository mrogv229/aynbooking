<?php
/**
 * Seasons management placeholder.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'Ayn_Admin_Seasons' ) ) {
    return;
}

class Ayn_Admin_Seasons {
    /**
     * Hook into admin menus.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Register seasons submenu.
     */
    public function register() {
        add_submenu_page(
            Ayn_Admin_Menu::parent_slug(),
            __( 'Saisons', 'ayn-booking' ),
            __( 'Saisons', 'ayn-booking' ),
            'manage_options',
            'ayn-booking-seasons',
            array( $this, 'render' )
        );
    }

    /**
     * Render seasons placeholder.
     */
    public function render() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Saisons', 'ayn-booking' ) . '</h1>';
        echo '<p>' . esc_html__( 'La gestion des saisons sera disponible ici. Vous pourrez créer des plages de dates et des tarifs associés.', 'ayn-booking' ) . '</p>';
        echo '</div>';
    }
}
