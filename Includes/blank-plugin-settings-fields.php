<?php 

function blankSection_settings(){

    // If plugin setting don't exist, then create
    if(!get_option('blankPlugin_settings')){
        add_option('blankPlugin_settings');
    }

    // Define at least one section for our fields
    add_settings_section(
        // Unique identifier for the section
        'blankPlugin_settings_section',
        //Section Title
        __('A Plugin Settings Section', 'blankPlugin'),
        //Callback fro an options descriptiong
        'blankPlugin_settings_section_callback',
        //Admin page to add section to
        'blankPlugin'
    );

    add_settings_field(
        // Unique identifier for the section
        'blankPlugin_settings_custom_text',
        //Field Title
        __('Custom Text', 'blankPlugin'),
        //Callback fro an options description
        // you have to create the input markup for this. 
        'blankPlugin_settings_custom_text_callback',
        //Page to go on
        'blankPlugin',
        // Section to go in
        'blankPlugin_settings_section'
    ); 

    register_setting(
        'blankPlugin_settings',
        'blankPlugin_settings'
    );
}

add_action('admin_init', 'blankSection_settings');

function blankPlugin_settings_custom_text_callback(){
    // Get an array of settings data. 
    $options = get_option('blankPlugin_settings');

    $custom_text = ''; 
    if(isset($options['custom_text'])){
        $custom_text = esc_html($options['custom_text']);
    }
    echo '<input type="text" id="blankPlugin_customtext" name="blankPlugin_settings[custom_text]" value="'.$custom_text.'"/>';
}


function blankPlugin_settings_section_callback () {
    esc_html_e('Plugin settings section description', 'blankPlugin'); 
}