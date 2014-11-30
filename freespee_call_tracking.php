<?php

/**
 * @package Freespee Call Tracking
 * @version 1.0
 */
/*
Plugin Name: Freespee Call Tracking
Plugin URI: http://wordpress.org/plugins/freespee-call-tracking/
Description: The Freespee Call Tracking plugin dynamically displays a phone number on your Wordpress site. Every phone call made by your visitors is turned into useful data. With the flip of a switch you deliver this phone call data to your Google Analytics account to see what keyword and Ad that drove the phone call.
Author: Freespee
Version: 1.0
Author URI: http://freespee.com
*/

function fsct_admin_init()
{
  register_setting('freespee_call_tracking-group', 'fs_advid');
  register_setting('freespee_call_tracking-group', 'fs_conf_append');
}

function fsct_admin_menu()
{
  add_options_page('Freespee Call Tracking', 'Freespee', 'manage_options', 'fs_settings_page', 'fsct_plugin_settings_page');
}

function fsct_plugin_settings_page()
{
  if(!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
  }

  include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
}

function fsct_fs_conf_js()
{
  include(sprintf("%s/templates/fs_conf_js.php", dirname(__FILE__)));
}

function fsct_fs_adding_scripts()
{
  wp_register_script('fs_call_tracking_js', '//analytics.freespee.com/js/external/fs.js', array(), '1.0', true);
  wp_enqueue_script('fs_call_tracking_js');
}

function fsct_admin_notice()
{
  $advid = get_option('fs_advid');
  if(empty($advid)) {
    include(sprintf("%s/templates/notify_banner.php", dirname(__FILE__)));
  }
}

add_action('admin_init', 'fsct_admin_init');
add_action('admin_menu', 'fsct_admin_menu');
add_action('admin_notices', 'fsct_admin_notice' );

if (get_option('fs_advid')) {
  add_action('wp_print_scripts', 'fsct_fs_conf_js');
  add_action('wp_enqueue_scripts', 'fsct_fs_adding_scripts'); 
}

