<?php
/*
Plugin Name: WPC Disable WordPress Plugin Updates
Plugin URI: http://wpchoice.com
Description: Disables the annoying WordPress plugin update checking and notification system. Dont forget to activate the disable option in the plugins option menu to get it to work. Visit "<a href="http://wpchoice.com">WP Choice</a>" to get information on this plugin and many others.
Version: 1.0
Build: 10.02.07
Author: Eric Hamby
Author URI: http://erichamby.com/
*/

/* Sets the locations for the plugin */
$pluginupdateloc = basename(dirname(__FILE__));
$pluginupdatedir = get_settings('home').'/wp-content/plugins/'.$pluginupdateloc;
$pluginupdatefile = $pluginupdatedir.'/wpc-disable-plugin-updates.php';
$pluginupdatelogo = $pluginupdatedir.'/admin/images/admin_logo.png';

/* Gets all the files needed for the plugin to work */
require_once('admin/admin_functions.php');
require_once('admin/info_page.php');
require_once('admin/update_page.php');
require_once('admin/options_page.php');
require_once('admin/register_page.php');

/* Places settings links */
define( 'FB_BASENAME', plugin_basename( __FILE__ ) );
define( 'FB_BASEFOLDER', plugin_basename( dirname( __FILE__ ) ) );
define( 'FB_FILENAME', disable_plugins );
 function filter_plugin_meta($links, $file) {
  if ( $file == FB_BASENAME ) {
		array_unshift(
			$links,
			sprintf( '<a href="admin.php?page=%s">%s</a>', FB_FILENAME, __('Settings') )
		);
	}
  return $links; }
  global $wp_version;
   if ( version_compare( $wp_version, '2.8alpha', '>' ) )
 add_filter( 'plugin_row_meta', 'filter_plugin_meta', 10, 2 ); // only 2.8 and higher
 add_filter( 'plugin_action_links', 'filter_plugin_meta', 10, 2 );

/* Main plugin function */
if ( get_option('wpc_plugin_update_active') ) :
# 2.3 to 2.7:
add_action( 'admin_menu', create_function( '$a', "remove_action( 'load-plugins.php', 'wp_update_plugins' );") );
add_action( 'admin_init', create_function( '$a', "remove_action( 'admin_init', 'wp_update_plugins' );"), 2 );
add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_update_plugins' );"), 2 );
add_filter( 'pre_option_update_plugins', create_function( '$a', "return null;" ) );

# 2.8:
remove_action( 'load-plugins.php', 'wp_update_plugins' );
remove_action( 'load-update.php', 'wp_update_plugins' );
remove_action( 'admin_init', '_maybe_update_plugins' );
remove_action( 'wp_update_plugins', 'wp_update_plugins' );
add_filter( 'pre_transient_update_plugins', create_function( '$a', "return null;" ) );
endif;
?>