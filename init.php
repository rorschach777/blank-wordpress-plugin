
<?php 
/*
Plugin Name: 55OVER34 - Blank Plugin Setup
Plugin URI : None
Description: Plugin Description
Version: 1.0.0
Contributors: msweitzer
Author: Mark Sweitzer
License: GPLv2 or later
Text Domain: wpplugin
Domain: /languages
*/

// If this file is called directly, abort.
if (!defined('WPINC')){
    die;
}
// Plugin Base Path: 
define( 'BLANK_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
// Enqueue Plugin CSS
include (plugin_dir_path(__FILE__) . 'includes/blank-plugin-styles.php');
// // Enqueue Plugin JavaScript
include (plugin_dir_path(__FILE__) . 'includes/blank-plugin-js.php');
// // Create the menu and page sections
include (plugin_dir_path(__FILE__) . 'includes/blank-plugin-menu.php');

// Adds a link to your settings page once the plugin is activated. 
function blankPlugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=blankPlugin">' . __( 'Settings', 'blankPlugin' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'blankPlugin_add_settings_link' );


?>