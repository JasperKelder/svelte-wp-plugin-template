<?php
 /*
 * Plugin Name: Svelte Plugin
 * Author: Jasper Kelder
 * Version: 1.0.0
 * Description: Basic setup for using Svelte in WordPress plugins.
 * 
*/
  wp_enqueue_style('CSS', plugin_dir_url(__FILE__) . 'index.???.css');
  wp_enqueue_script('JS', plugin_dir_url(__FILE__) . 'index.???.js');

  echo file_get_contents('wp-content/plugins/svelte-plugin/plugin.html');
?>