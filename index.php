<?php
/**
 * Default theme template.
 */

$context          = Timber::context();
$context['title'] = single_post_title( '', false );
$context['posts'] = new Timber\PostQuery();
$templates        = array( 'index.twig' );

Timber::render( $templates, $context );
