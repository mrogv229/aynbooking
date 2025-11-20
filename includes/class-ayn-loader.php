<?php
/**
 * Basic loader for registering Ayn Booking hooks and services.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Ayn_Loader {
    /**
     * Path to the includes directory.
     *
     * @var string
     */
    private $base_path;

    /**
     * Classes to bootstrap automatically.
     *
     * @var array<int, string>
     */
    private $component_classes = array(
        'Ayn_Admin_Menu',
        'Ayn_Admin_Settings',
        'Ayn_Admin_Seasons',
        'Ayn_Admin_Services',
        'Ayn_Admin_Owners',
        'Ayn_Admin_Reports',
        'Ayn_DB_Installer',
        'Ayn_DB_Migrations',
        'Ayn_Product_Type_Logement',
        'Ayn_Product_Metaboxes',
        'Ayn_Product_Display',
        'Ayn_Availability',
        'Ayn_Booking_Manager',
        'Ayn_Pricing_Engine',
        'Ayn_Ical_Sync',
        'Ayn_Owner_Roles',
        'Ayn_Owner_CPT',
        'Ayn_Owner_Dashboard',
        'Ayn_Stripe_Connect_Gateway',
        'Ayn_Commission_Engine',
        'Ayn_Payout_Reports',
        'Ayn_Frontend_Booking_Form',
        'Ayn_Frontend_Shortcodes',
        'Ayn_Elementor_Widgets',
        'Ayn_Email_Templates',
    );

    /**
     * @param string $base_path Absolute path to the plugin includes directory.
     */
    public function __construct( $base_path ) {
        $this->base_path = trailingslashit( $base_path );
    }

    /**
     * Load dependencies and bootstrap component classes.
     */
    public function init() {
        $this->load_dependencies();
        $this->bootstrap_components();
    }

    /**
     * Require all PHP files under the includes directory (helpers, classes).
     */
    private function load_dependencies() {
        $directory = new RecursiveDirectoryIterator(
            $this->base_path,
            FilesystemIterator::SKIP_DOTS | FilesystemIterator::FOLLOW_SYMLINKS
        );

        $iterator = new RecursiveIteratorIterator( $directory );

        /** @var SplFileInfo $file */
        foreach ( $iterator as $file ) {
            if ( $file->isFile() && 'php' === $file->getExtension() ) {
                // Avoid requiring this loader twice.
                if ( $file->getPathname() === __FILE__ ) {
                    continue;
                }

                require_once $file->getPathname();
            }
        }
    }

    /**
     * Instantiate each component class and call its init() when available.
     */
    private function bootstrap_components() {
        foreach ( $this->component_classes as $class ) {
            if ( class_exists( $class ) ) {
                $instance = new $class();

                if ( method_exists( $instance, 'init' ) ) {
                    $instance->init();
                }
            }
        }
    }
}
