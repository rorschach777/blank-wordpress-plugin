
<?php 
/*
Plugin Name: 55OVER34 - Blank Plugin Setup
Plugin URI : None
Description: This is a stupid dummy plugin. 
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

define('WPPLUGIN_URL', plugin_dir_url(__FILE__));

function render_dummy_plugin(){
    if(!current_user_can('manage_options')){
        return;
    }
    else {
        ?>
        <div>
            <h1><?php esc_html_e(get_admin_page_title())?></h1>
            <p><?php  esc_html_e("Blank plugin setup")?></p>
        </div>
        <?php 
    }
}

function wpplugin_settings_page()
{
    add_menu_page(
    'Blank Plugin Name', 
    'Blank Plugin', 
    'manage_options', 
    'dummy-plugin-slug', 
    'render_dummy_plugin', 
    'dashicons-wordpress-alt', 
    100
    );
}
add_action('admin_menu', 'wpplugin_settings_page');

?>