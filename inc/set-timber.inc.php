<?php
/**
 * Set up Timber.
 */

// Load Timber.
$composer_autoload = __DIR__ . '/../vendor/autoload.php';

if ( file_exists( $composer_autoload ) ) {
  require_once $composer_autoload;
  $timber = new Timber\Timber();
}

// Set up the theme directories to find .twig files.
Timber::$dirname = array( 'templates', 'views' );

class TDGSite extends Timber\Site {
  public function __construct() {
    add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );
    add_filter( 'timber/context', array( $this, 'add_to_context' ) );
  }

  // Add some context to the theme.
  public function add_to_context( $context ) {
    $context[ 'primary_nav' ] = new Timber\Menu( 'Primary Navigation' );
    $context[ 'footer_nav' ]  = new Timber\Menu( 'Footer Menu' );
    $context[ 'search' ] = get_search_form( array( 'echo' => false, 'aria-label' => 'Full site search' ) );
    return $context;
  }

  // Add support to the theme.
  public function theme_supports() {
    add_theme_support( 'menus' );
  }
}

new TDGSite();
