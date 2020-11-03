<?php 
function blankPlugin_options(){
    
    $options = [];
    $options['name'] = 'Blank Plugin';
    $options['location'] = 'Philadelphia';
    $options['sponsor'] = 'Plugin Co';

    if (!get_option('blankPlugin_option_2')){
        add_option('blankPlugin_option_2', $options);
    }
 
    if(!get_option('blankPlugin_option')){
        add_option('blankPlugin_option', 'blank plugin option value');
    }
    update_option('blankPlugin_option_2', $options);
    update_option('blankPlugin_option', 'My Updated Plugin Options');
}
add_action('admin_init', 'blankPlugin_options');