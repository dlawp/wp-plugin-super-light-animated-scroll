=== Super Light Animated Scroll to id ===
Contributors: dlawp
Tags: scroll, smooth, animation, anchor, jquery, links, scrolling, animate, javascript
Requires at least: 5.0
Tested up to: 5.3.2
Requires PHP: 7.0
Stable tag: 0.2.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Super light and easy to setup links that scroll the page smoothly to any id within the document.

== Installation ==

1.  Upload your plugin folder to the '/wp-content/plugins' directory.
2.  Activate the plugin through the 'Plugins' menu in WordPress.


== Description ==

**Usage**

Add HTML id attribute to element you want to scroll to.

*Example:*
`
<h1 id="your-anchor">Header we will be drawn to smoothly!</h1>
`

Now add hash to href attribute and class `sl-animated-scroll` to an A tag or element containing A tag.

*Example:*
`
<a href="#your-anchor" class="sl-animated-scroll">
    Get me smoothly to my anchor!
</a>
`

Try it.


**How to hook menu / nav links?**

1. Go to Appearance -> Menus.

2. Make sure you have enabled classes in Screen Options (top right corner).

3. Create new Custom Link 

4. Add your anchor in URL of the custom link: `/#your-anchor`

5. Insert special class to the custom link: `sl-animated-scroll`

6. Save and try it!


== Support ==

If any problems, questions or suggestions please contact us at support@dlawp.pl

GitHub: https://github.com/dlawp/wp-plugin-super-light-animated-scroll


== Frequently Asked Questions ==

There are no FAQ just yet.


== Changelog ==

= 0.1 =
* First release


== Upgrade Notice ==

There is no need to upgrade just yet.

