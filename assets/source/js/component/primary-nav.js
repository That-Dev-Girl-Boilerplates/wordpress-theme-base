/**
 * Primary menu functionality.
 */

( function( $ ) {

  const tdgNavigation = {
    go: function() {
      // Events.
      $( '#nav-show' ).on( 'click', this.show );
      $( '#nav-hide' ).on( 'click', this.hide );
      $( 'nav.primary-nav > ul > li' ).on( 'hover', this.showSubNav );
      $( 'nav.primary-nav > ul > li' ).on( 'blur', this.hideSubNav );
    },

    // Event handler to show the menu (small screens).
    show: function() {
      $( 'body' ).addClass( 'show-nav' );
    },

    // Event handler to hide the menu (small screens).
    hide: function() {
      $( 'body' ).removeClass( 'show-nav' );
    },

    // Event handler to show the sub-navigation.
    showSubNav: function( e ) {
      $( 'nav.primary-nav > ul > li' ).removeClass( 'show-subnav' );
      $( e.target ).closest( 'li' ).addClass( 'show-subnav' );
    },

    // Event handler to hide the sub-navigation.
    hideSubNav: function() {
      $( 'nav.primary-nav > ul > li' ).removeClass( 'show-subnav' );
    }
  };

  // Run this thing.
  $( document ).ready( () => { tdgNavigation.go(); } );

})( jQuery );
