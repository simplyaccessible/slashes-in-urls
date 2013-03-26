<?php
/*
Plugin Name: Allow Slashes in Short URLs
Plugin URI: http://simplyaccessible.comorg/
Description: Allow slashes in short URLs (like <tt>http://sho.rt/hello/world</tt>)
Version: 1.0
Author: Simply Accessible
Author URI: http://simplyaccessible.com/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter( 'get_shorturl_charset', 'sa_slash_in_charset' );
function sa_slash_in_charset( $in ) {
	return $in.'/';
}


