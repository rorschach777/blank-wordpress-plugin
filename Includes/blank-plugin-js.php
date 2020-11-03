<?php

// Conditionally load JS on plugin settings pages only
function wpplugin_admin_scripts( $hook ) {

  wp_register_script(
    'blankPlugin-admin',
    BLANK_PLUGIN_URL . 'admin/js/blankPlugin-admin.js',
    ['jquery'],
    time()
  );

  wp_localize_script( 'blankPlugin-admin', 'blankPlugin', [
      'hook' => $hook
  ]);

  if( 'toplevel_page_blankPlugin' == $hook ) {
      wp_enqueue_script( 'blankPlugin-admin' );
  }

}
add_action( 'admin_enqueue_scripts', 'wpplugin_admin_scripts' );


// Conditionally load JS on single post pages
function wpplugin_frontend_scripts() {

  wp_register_script(
    'blankPlugin-frontend',
    BLANK_PLUGIN_URL . 'frontend/js/blankPlugin-frontend.js',
    [],
    time()
  );

  if( is_single() ) {
      wp_enqueue_script( 'blankPlugin-frontend' );
  }

}
add_action( 'wp_enqueue_scripts', 'blankPlugin_frontend_scripts', 100 );
