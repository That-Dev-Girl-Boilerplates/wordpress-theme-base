<?php
/**
 * Add CSS and Javascript assets to the theme.
 */

class TDGAssets {

  public function __construct() {
    add_action( 'wp_enqueue_scripts', array( $this, 'add_assets' ) );
  }

  public function add_assets() {
    // Default theme stylesheet.
    wp_enqueue_style(
      'tdg-styles',
      get_stylesheet_uri(),
      array(),
      '20200106'
    );

    // Built theme Javascript.
    wp_enqueue_script(
      'tdg-scripts',
      get_template_directory_uri() . '/assets/build/js/scripts.min.js',
      array( 'jquery' ),
      '20200106'
    );
  }

}

new TDGAssets;
