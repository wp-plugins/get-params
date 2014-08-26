=== Plugin Name ===
Contributors: danlester
Tags: get, params, shortcode, vars
Requires at least: 2.5
Tested up to: 4.0
Stable tag: 1.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Shortcodes allowing you to display GET parameters from the current URL in pages and posts, or show/hide content depending
on GET param values

== Description ==

GET params is a plugin providing your pages and posts with shortcodes allowing you to display GET parameters from 
the current URL in pages and posts, or show/hide content depending on GET param values.

As an example, I use this plugin so that I can show personalized installation instructions to users of another piece of 
software I wrote, simply by directing them to a URL on my WordPress site, along with GET variables chosen to 
ensure that custom fields and sections display exactly as required for them to install my software.

Examples, if the user goes to your post page http://example.com/post/3/?paramname=showme

= Displaying GET parameters directly =

 `[display-get-param name="paramname"]`
 
 Shows the value of GET named paramname ('showme' in the example URL), or "blank value" if none given.
 
 `[display-get-param name="paramname" default="Paramname was blank"]`
 
 Shows the value of GET named paramname, or "Paramname was blank" if none
 
= Controlling display of enclosed content depending on GET parameter values =

 `[display-if-get name="myparam"]`
 
	This enclosed content only shows if myparam is passed as a GET param (with any value)
	
 `[/display-if-get]`

Another example specifying a value to match:

 `[display-if-get name="myparam" value="true"]`
 
	This content only shows if myparam is passed as a GET param and equals "true"

 `[/display-if-get]`
 
 
== Frequently Asked Questions ==

= How can I obtain support for this plugin? =

Please email wpgetparams@danlester.com

== Installation ==

Easiest way:

1. Go to your WordPress admin control panel's plugin page
1. Search for 'GET params'
1. Click Install
1. Click Activate on the plugin
1. Start using shortcodes as described in our examples

If you cannot install from the WordPress plugins directory for any reason, and need to install from ZIP file:

1. Upload directory and contents to the `/wp-content/plugins/` directory, or upload the ZIP file directly in
the Plugins section of your Wordpress admin
1. Follow the instructions from step 4 above

== Changelog ==

= 1.0 =
First version

