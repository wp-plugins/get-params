<?php
/**
 * Plugin Name: GET Params
 * Plugin URI: http://danlester.com/wp-get-params
 * Description: Shortcodes allowing you to display GET parameters from the current URL in pages and posts, or show/hide content depending on GET param values
 * Version: 1.0
 * Author: Dan Lester
 * Author URI: http://danlester.com/
 * License: GPL2
 */

class wp_get_params {

	/* [display-get-param name="paramname"]
	 *  - shows the value of GET named paramname, or <blank value> if none
	 * 
	 * [display-get-param name="paramname" default="Paramname was blank"]
	 *  - shows the value of GET named paramname, or "Paramname was blank" if none
	 */
	public static function display_get_param($atts) {
		if (!isset($atts['name'])) {
			return '<b>display-get-param requires a name attribute</b>';
		}
		$name = $atts['name'];
		$default = isset($atts['default']) ? $atts['default'] : '<blank value>';
		return htmlentities(isset($_GET[$name]) ? $_GET[$name] : $default); 
	}

	/* [display-if-get name="myparam"]
	 * 		This only shows if myparam is passed as a GET param
	 * [/display-if-get]
	 *
	 * [display-if-get name="myparam" value="true"]
	 * 		This only shows if myparam is passed as a GET param and equals "true"
	 * [/display-if-get]
	 */
	public static function display_if_get($atts, $content=null) {
		if (!isset($atts['name'])) {
			return '<b>display-if-get requires a name attribute</b>';
		}
		if (is_null($content)) {
			return '<b>display-if-get must have opening and closing tags</b>';
		}
		$name = $atts['name'];
		if (isset($_GET[$name])) {
			if (!isset($atts['value']) || $atts['value'] == $_GET[$name]) {
				return do_shortcode($content);
			}
		}
		return '';
	}
	
}

add_shortcode( 'display-get-param', Array('wp_get_params', 'display_get_param') );
add_shortcode( 'display-if-get', Array('wp_get_params', 'display_if_get') );
