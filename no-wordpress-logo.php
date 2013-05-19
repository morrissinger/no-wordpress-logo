<?php
/*
Plugin Name: No Wordpress Logo
Plugin URI: http://www.github.com/morrissinger/no-wordpress-logo
Description: This plugin quite simply removes the Wordpress logo from the admin menu bar. Useful for whitelabeled and reseller solutions.
Version: 1.0
Author: Morris Singer
Author URI: http://github.com/morrissinger
License: GPL2
*/

function no_wordpress_logo_remove_logo() {
	global $wp_admin_bar;
    $wp_admin_bar->remove_node('wp-logo');
}

add_filter ( 'wp_before_admin_bar_render', 'no_wordpress_logo_remove_logo' );

?>