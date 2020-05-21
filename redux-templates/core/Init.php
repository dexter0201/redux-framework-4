<?php

namespace ReduxTemplates;

use ReduxTemplates;


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class Init {

    /**
     * Constructor
     */
    public function __construct() {
        add_action( 'init', array( $this, 'load' ) );
//        register_activation_hook( __FILE__, array( $this, 'option_data' ) );
        // Editor Load
        add_action( 'enqueue_block_editor_assets', array( $this, 'editor_assets' ) );
        // Admin Load
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_assets' ) );
    }

    // Init Options Data Init
    public function option_data() {
        $option_data = array( 'css_save_as' => 'wp_head' );
        if ( ! get_option( 'redux-templates_options' ) ) {
            update_option( 'redux-templates_options', $option_data );
        }
    }

    public static function load() {
        new ReduxTemplates\API();
        new ReduxTemplates\Templates();
    }

    /**
     * Load Editor Styles and Scripts
     *
     * @since 1.0.0
     */
    public function editor_assets() {

        wp_enqueue_script(
            'redux-templates-js',
            plugins_url( 'assets/js/redux-templates.dev.js', REDUXTEMPLATES_FILE ),
            array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
            REDUXTEMPLATES_VERSION,
            true
        );

        wp_set_script_translations( 'redux-templates-js', 'redux-templates' );

        // Backend editor scripts: common vendor files.
        wp_enqueue_script(
            'redux-templates-js-vendor',
            plugins_url( 'assets/js/vendor.dev.js', REDUXTEMPLATES_FILE ),
            array(),
            REDUXTEMPLATES_VERSION
        );

        $global_vars = array(
            'i18n'              => 'redux-framework',
            'plugin'            => REDUXTEMPLATES_DIR_URL,
            'mokama'            => \Redux_Core::$pro_loaded,
            'icon'              => file_get_contents( REDUXTEMPLATES_DIR_URL . 'assets/img/logo.svg' ),
            'version'           => \Redux_Core::$version,
            'supported_plugins' => [], // Load the supported plugins,
        );

        if ( ! $global_vars['mokama'] ) {
            $global_vars['u'] = 'https://redux.io/pricing/&utm_source=plugin&utm_medium=modal&utm_campaign=template';
        }

        wp_localize_script(
            'redux-templates-js',
            'redux_templates',
            $global_vars
        );

    }

    /**
     * Admin Style & Script
     *
     * @since 1.0.0
     */
    public function admin_assets() {
        wp_enqueue_style(
            'redux-templates-bundle', REDUXTEMPLATES_DIR_URL . 'assets/css/admin.min.css', false, REDUXTEMPLATES_VERSION
        );
    }
}
