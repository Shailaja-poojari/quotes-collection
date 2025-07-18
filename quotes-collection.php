<?php
/**
 * Plugin Name: Quotes Collection
 * Description: Displays daily motivational quotes using a public API.
 * Version: 1.0
 * Author: Shailaja Poojary
 */

function qc_enqueue_assets() {
    wp_enqueue_style('qc-style', plugins_url('/assets/style.css', __FILE__));
    wp_enqueue_script('qc-script', plugins_url('/assets/script.js', __FILE__), array(), false, true);
}
add_action('wp_enqueue_scripts', 'qc_enqueue_assets');

function qc_display_quote() {
    return '<div id="quote-box">Fetching quote...</div>';
}
add_shortcode('quote_collection', 'qc_display_quote');
