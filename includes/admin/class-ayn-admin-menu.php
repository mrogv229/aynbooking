<?php
/**
 * Registers Ayn Booking admin menus.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Admin_Menu {
    /**
     * Main menu slug.
     */
    const MENU_SLUG = 'ayn-booking';

    /**
     * Bootstrap admin menu hooks.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register' ) );
    }

    /**
     * Expose the parent slug for submenu registration.
     *
     * @return string
     */
    public static function parent_slug() {
        return self::MENU_SLUG;
    }

    /**
     * Register top-level menu and dashboard page.
     */
    public function register() {
        add_menu_page(
            __( 'Ayn Booking', 'ayn-booking' ),
            __( 'Ayn Booking', 'ayn-booking' ),
            'manage_options',
            self::MENU_SLUG,
            array( $this, 'render_dashboard' ),
            'dashicons-admin-home',
            56
        );
    }

    /**
     * Render a simple dashboard placeholder so the menu shows visible content.
     */
    public function render_dashboard() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__( 'Ayn Booking', 'ayn-booking' ) . '</h1>';
        echo '<p>' . esc_html__( 'Le plugin est installé. Utilisez les sous-menus pour configurer les saisons, services, propriétaires et rapports.', 'ayn-booking' ) . '</p>';
        echo '<p>' . esc_html__( 'Cette page servira de tableau de bord d\'aperçu dans les prochaines versions.', 'ayn-booking' ) . '</p>';
        echo '</div>';
    }
}
