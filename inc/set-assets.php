<?php

namespace TDG_Theme;

class Assets {

  /**
   * __construct()
   */
  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'add_assets' ] );
  }


  /**
   * add_assets()
   * 
   * Enqueue built CSS and JS assets to the theme.
   * 
   * @return void
   */
  public function add_assets(): void {
    $js = '/assets/build/js/scripts.min.js';

    // Default theme stylesheet.
    wp_enqueue_style(
      'tdg-styles',
      get_stylesheet_uri(),
      [],
      filemtime( '/' . get_stylesheet_directory() . '/style.css' )
    );

    // Built theme JavaScript.
    wp_enqueue_script(
      'tdg-scripts',
      get_stylesheet_directory_uri() . $js,
      [ 'jquery' ],
      filemtime( '/' . get_stylesheet_directory() . $js ),
    );
  }

}

new Assets;
