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
    wp_enqueue_style(
      'tdg-styles',
      get_stylesheet_uri(),
      [],
      filemtime( '/' . get_stylesheet_directory() . '/style.css' )
    );
  }

}

new Assets;
