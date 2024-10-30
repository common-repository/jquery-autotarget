=== jQuery.autoTarget for WordPress ===
Contributors: billknechtel
Tags: target, standards compliance, automagic
Requires at least: 3.0
Stable tag: 1.0.0
Tested up to: 4.9
License: MIT
License URI: http://opensource.org/licenses/MIT

Simply, automatically and standards-compliantly make any external link open in 
a new window/tab.

== Description ==

There is a little gotcha when you're writing standards compliant code, but still want off-site links to open in new windows. XHTML 1.0 Strict deprecated the use of the "target" attribute. Early versions of HTML5 also had this deprecation, but have since brought it back. In either case, making sure the target attribute is set on every off-site link can be tedious.

= Enter jQuery.autoTarget =

Instead of going through the tedium of ensuring your target attributes are set, this jQuery plugin automatically scans all the links on a page, and sets the attribute for you (target="_blank") if the href attributes domain isn't the same as the domain the page is served from. Just to sweeten the deal, it also sets any offsite link to have a class of "external-link", so you can style offsite links in the manner of your choice. Easy-peasy. And it only weighs in at 272 bytes!

= No-clobber =

Just in case, the script does not touch any link that already has a target set, so if you're already doing something with the target attribute, this won't clobber your extant work.

= Use of jQuery.autoTarget in Non-WordPress Sites =

If you need it, my jQuery plugin sans wordpress plugin is available at https://github.com/wknechtel/jQuery.autoTarget

== Installation ==

Upload the plugin zip into your wordpress installation, or use the WordPress search utility and install from within WordPress if your installation is set up to work that way.  Then activate the plugin.  That's it!  No configuration whatsoever.

== Changelog ==

= 1.0.0 = 
Initial Release
