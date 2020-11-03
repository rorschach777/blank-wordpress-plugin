<?php

// Conditionally load CblankPlugin settings pages only
function blankPlugin_admin_styles( $hook ) {

  wp_register_style(
    'blankPlugin-admin',
    BLANK_PLUGIN_URL . 'admin/css/blankPlugin-admin-style.css',
    [],
    time()
  );

  if( 'toplevel_page_blankPlugin' == $hook ) {
    wp_enqueue_style( 'blankPlugin-admin' );
  }

}
add_action( 'admin_enqueue_scripts', 'blankPlugin_admin_styles' );


// Load CSS on the frontend
function blankPlugin_frontend_styles() {

  wp_register_style(
    'blank-plugin-frontend',
    BLANK_PLUGIN_URL . 'frontend/css/blankPlugin-frontend-style.css',
    [],
    time()
  );

  if( is_single() ) {
      wp_enqueue_style( 'blankPlugin-frontend' );
  }

}
add_action( 'wp_enqueue_scripts', 'blankPlugin_frontend_styles', 100 );
