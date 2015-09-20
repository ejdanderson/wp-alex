<?php
/*
Plugin Name: WP Alex
Plugin URI: http://github.com/kidfiction/wp-alex
Description:
Version: 0.1
Author: Evan Anderson
Author URI: http://ejdanderson.com
License: GPLv2 or later
*/

function wpalex_load_tinymce_plugin( $plugins ) {
	$plugins['alextinymce'] =  plugins_url( '/lib/tinymce-alex/tinymce-alex.js', __FILE__ ) ;
	return $plugins;
}
add_filter( 'mce_external_plugins', 'wpalex_load_tinymce_plugin' );
