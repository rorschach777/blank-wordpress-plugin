<?php 


// Define what happens on the main plugin screen. 
function render_blank_plugin_settings_markup(){
    if(!current_user_can('manage_options')){
        return;
    }
    else {
        ?>
        <div class="wrap">
            <h1><?php esc_html_e(get_admin_page_title())?></h1>
            <p><?php  esc_html_e("Blank plugin setup")?></p>
        </div>
        <?php 
    }
}

// Define what happens for the sub-menu
function render_feature_1_markup(){
    if(!current_user_can('manage_options')){
        return;
    }
    else {
        ?>
        <div>
            <h1>Feature 1 Markup</h1>
            <p><?php  esc_html_e("Blank plugin setup")?></p>
        </div>
        <?php 
    }
}
// Activates the Menu for the plugin. 
function blank_plugin_settings_page()
{
    add_menu_page(
    'Blank Plugin Name', 
    'blankPlugin', 
    'manage_options', 
    'blankPlugin', 
    'render_blank_plugin_settings_markup', 
    'dashicons-wordpress-alt', 
    100
    );
    add_submenu_page(
        // This would make the feature show up in another part of the admin panel. 
        // 'options-general.php',
        'blankPlugin',
        __('Plugin Feature 1', 'blankPlugin'),
        __('Feature 1', 'blankPlugin'),
        'manage_options',
        'blankPlugin-features-1',
        'render_feature_1_markup'
        
    );
}
add_action('admin_menu', 'blank_plugin_settings_page');

