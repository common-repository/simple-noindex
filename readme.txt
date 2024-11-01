=== Simple Noindex ===
Contributors: arianalashes
Tags: robots,header,meta,seo
Donate link: https://arianalashes.com/
Requires at least: 4.0
Tested up to: 4.8
Requires PHP: 5.6
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds the noindex tag to all URLs

== Description ==
This is a very simple plugin that adds a “robots” meta tag to the head of your site with “noindex” in it.

The effect of the noindex robots meta tag is that search engines will not index your pages and posts at all.
This is a better solution then the wordpress default settings option, which tells search engines to not crawl the URLs in the robots.txt. Because Google (and other search engines) sometimes still index URLs they haven't crawled, for which they determine relevancy based on anchor text of links which lead to the specific URL.

== Installation ==
1. Upload the simple-noindex folder to the /wp-content/plugins/ directory
2. Activate the plugin through the “Plugins” menu in WordPress.

== Frequently Asked Questions ==
= Does this plugin require any settings to be made? =
No, after activating it simply adds the noindex robots meta tag to all URLs and no additional settings need to be made.

= What about support? =
Create a support ticket at WordPress forum and I will take care of any issue.

== Changelog ==
= 1.1 =
* Fixed 2 typos.

= 1.0 =
* Initial release.