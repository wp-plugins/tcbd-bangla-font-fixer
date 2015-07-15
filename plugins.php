<?php
/*
Plugin Name: TCBD Bangla Font Fixer
Plugin URI: http://demos.tcoderbd.com/wordpress_plugin/tcbdbanglafont/tcbdbanglafont.zip
Description: বাংলা ফন্ট ভেঙে যাওয়া থেকে বাঁচার উপায়
Author: Md Touhidul Sadeek
Version: 1.0
Author URI: http://tcoderbd.com
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;



// Define Plugin Directory
define('X_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


function tcbd_bangla_font_scripts(){
	// Custom font Call in header.
	wp_enqueue_style('tcbdbanglafont-plugin-font-css', X_PLUGIN_URL.'fonts/tcbdbanglafont.css');
}
add_action('wp_enqueue_scripts', 'tcbd_bangla_font_scripts');

// Custom font for wp_head and front page body
function tcbdbanglafont_head() {
  ?>
	<style type="text/css">
		body, td, textarea, input, select {
			font-family: "SolaimanLipi";
		} 
		#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
			font-family: "SolaimanLipi";
		} 
	</style>
  <?php
}
add_action('wp_head', 'tcbdbanglafont_head');



// Custom font for wp_admin
function tcbdbanglafont_adminfont() {
  ?>
	<style type="text/css">
		body, td, textarea, input, select {
			font-family: "SolaimanLipi";
		} 
		#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
			font-family: "SolaimanLipi";
		} 
	</style>
  <?php
}
add_action('admin_head', 'tcbdbanglafont_adminfont');



// Custom font for login page
function tcbdbanglafont_loginfont() {
  ?>
	<style type="text/css">
		p {font-family: "SolaimanLipi";} 
	</style>
  <?php
}
add_action('login_head', 'tcbdbanglafont_loginfont');