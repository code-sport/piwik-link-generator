<?php
/**
 * Plugin Name: Piwik Admin Share
 * Plugin URI:
 * Description: Shows links for logedin user to share the content with piwik tracking
 * Version: 1.0.0
 * Author: Marcel Sutter
 * Author URI:
 **/

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define('PAS_PLUGIN_DIR', plugin_dir_path(__FILE__));

register_activation_hook(__FILE__, array('PiwikAdminShare', 'plugin_activation'));
register_deactivation_hook(__FILE__, array('PiwikAdminShare', 'plugin_deactivation'));

require_once(PAS_PLUGIN_DIR . 'PiwikAdminShare.php');

