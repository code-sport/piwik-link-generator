<?php
/**
 * Plugin Name: Piwik Link Generator
 * Plugin URI: https://github.com/code-sport/piwik-link-generator
 * Description: Shows links for logedin user to share the content with piwik tracking
 * Version: 1.0.0
 * License: GPLv3
 * Author: Code.Sport
 * Author URI: mailto:code.sport@t-online.de
 **/

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define('PLG_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('PLG_PLUGIN_TITLE', 'Piwik Link Generator');

register_activation_hook(__FILE__, array('PiwikLinkGenerator', 'plugin_activation'));
register_deactivation_hook(__FILE__, array('PiwikLinkGenerator', 'plugin_deactivation'));

require_once(PLG_PLUGIN_DIR . 'PiwikLinkGenerator.php');

add_action('init', array('PiwikLinkGenerator', 'init'));