<?php
/*
Plugin Name: WP Canvas - Responsive Videos
Plugin URI: http://webplantmedia.com/starter-themes/wordpresscanvas/features/plugins/wc-responsive-video/
Description: Simple responsive video plugin. Automatically determine aspect ratio. CSS only. No Javascript.
Author: Chris Baldelomar
Author URI: http://webplantmedia.com/
Version: 1.8
License: GPLv2 or later
*/

define( 'WC_RESPONSIVE_VIDEO_VERSION', '1.8' );

require_once( dirname(__FILE__) . '/includes/functions.php' ); // Adds basic filters and actions
require_once( dirname(__FILE__) . '/includes/scripts.php' ); // Adds plugin JS and CSS
