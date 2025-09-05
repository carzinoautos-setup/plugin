<?php
function carzino_enqueue_assets() {
    $plugin_url = plugin_dir_url( __FILE__ ) . '../build/';

    // CSS
    if ( file_exists( plugin_dir_path( __FILE__ ) . '../build/index.css' ) ) {
        wp_enqueue_style(
            'carzino-style',
            $plugin_url . 'index.css',
            array(),
            filemtime( plugin_dir_path( __FILE__ ) . '../build/index.css' )
        );
    }

    // JS
    if ( file_exists( plugin_dir_path( __FILE__ ) . '../build/index.js' ) ) {
        wp_enqueue_script(
            'carzino-script',
            $plugin_url . 'index.js',
            array(),
            filemtime( plugin_dir_path( __FILE__ ) . '../build/index.js' ),
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'carzino_enqueue_assets' );
