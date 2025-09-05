<?php
/**
 * Plugin Name: Carzino Plugin
 * Description: Embeds the Carzino React app inside WordPress.
 * Version: 1.0.0
 * Author: Carzino
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once plugin_dir_path( __FILE__ ) . 'includes/enqueue.php';

function carzino_render_app() {
    return '<div id="carzino-root"></div>';
}
add_shortcode( 'carzino_app', 'carzino_render_app' );
