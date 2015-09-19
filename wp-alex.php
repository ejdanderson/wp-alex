<?php
/*
Plugin Name: WP Alex
Plugin URI: http://github.com/kidfiction/
Description:
Version: 0.1
Author: Evan Anderson
Author URI: http://ejdanderson.com
License: GPLv2 or later
*/

function wpalex_enqueue_scripts() {
	$base_url = trailingslashit( plugins_url( basename( dirname( __FILE__ ) ) ) );
	wp_enqueue_script('alexjs', $base_url . '/lib/alex/alex.js' , array() );
	//wp_enqueue_script('wpalex', $base_url . 'wp-alex.js' , array( 'alexjs' ) );
}
add_action( 'admin_enqueue_scripts', 'wpalex_enqueue_scripts' );

function wpalex_load_tinymce_plugin( $plugins ) {
	$plugins['alextinymce'] =  plugins_url( '/wp-alex.js', __FILE__ ) ;
	return $plugins;
}
add_filter( 'mce_external_plugins', 'wpalex_load_tinymce_plugin' );
