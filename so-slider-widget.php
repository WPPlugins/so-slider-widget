<?php
/*
Plugin Name: Slider Widget
Description: A very simple slider widget.
Version: 1.0.3
Author: Greg Priday
Author URI: http://siteorigin.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

define('SOW_SLIDER_VERSION', '1.0.3');

if( !class_exists('SiteOrigin_Widgets_Loader') ) include(plugin_dir_path(__FILE__).'base/loader.php');
new SiteOrigin_Widgets_Loader('slider', __FILE__, plugin_dir_path(__FILE__).'inc/widget.php', SOW_SLIDER_VERSION);