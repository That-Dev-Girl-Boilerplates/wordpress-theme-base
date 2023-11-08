<?php

namespace TDG_Theme;

class Support {

  /**
   * __construct()
   */
  public function __construct() {
    add_action( 'after_setup_theme', [ $this, 'theme_support' ] );
  }

  
  /**
   * theme_support()
   * 
   * @return void
   */
  public function theme_support(): void {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
  }

}

new Support;
