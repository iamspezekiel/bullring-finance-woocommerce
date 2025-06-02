<?php
/**
 * Uninstall file for Bullring Finance Payment Gateway for WooCommerce
 * 
 * This file runs when the plugin is uninstalled to clean up any created data.
 */

// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete plugin options
delete_option('woocommerce_bullring_settings');

// Delete plugin logs if they exist
$log_handler = new WC_Log_Handler_File();
$log_handler->remove('bullring');

// Clean up any other plugin data as needed
// For example, you might want to remove custom user meta or post meta
// global $wpdb;
// $wpdb->query("DELETE FROM {$wpdb->postmeta} WHERE meta_key = '_bullring_transaction_id'");
