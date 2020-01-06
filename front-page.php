<?php
/**
 * Front page theme template.
 */

$context            = Timber::context();
$context['posts']   = new Timber\PostQuery();
$context['is_home'] = true;
$templates          = array( 'front-page.twig' );

Timber::render( $templates, $context );
