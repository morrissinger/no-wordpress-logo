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

/*  Copyright 2013  Morris Singer  (email : morrissinger@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function no_wordpress_logo_remove_logo() {
	global $wp_admin_bar;
    $wp_admin_bar->remove_node('wp-logo');
}

add_filter ( 'wp_before_admin_bar_render', 'no_wordpress_logo_remove_logo' );

?>