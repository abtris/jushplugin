<?php
/*
Plugin Name: JUSH
Plugin URI: http://jush.sourceforge.net/
Description: JUSH Wordpress plugin
Version: 1
Author: Ladislav Prskavec
Author URI: http://ladislav.prskavec.net
*/

if (!class_exists("JushPlugin")) {
        class JushPlugin {					
				function JushPlugin()
				{
				}
				
				function addCode() {
                  echo '<script type="text/javascript" src="' . get_bloginfo('wpurl') . '/wp-content/plugins/jushplugin/js/jush.js"></script>'. "\n";
				  echo '<script type="text/javascript">'. "\n";
				  echo "jush.style('".get_bloginfo('wpurl')."/wp-content/plugins/jushplugin/css/jush.css');\n";
				  echo "jush.highlight_tag('pre');\n";
				  echo '</script>';
                }
				
		}
	}

if (class_exists("JushPlugin")) {
        $jush_plugin = new JushPlugin();
}


if (isset($jush_plugin)) {
        //Actions    
        add_action('wp_footer', array(&$jush_plugin, 'addCode'), 1);
}
