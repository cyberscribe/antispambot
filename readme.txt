=== Anti-Spambot ===
Contributors: robertpeake, robert.peake
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 4.9.5
Stable tag: 1.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Obfuscation of email via the <code>[email]...[/email]</code> shortcode syntax using built-in <a href="http://codex.wordpress.org/Function_Reference/antispambot#Examples" target="_blank">Wordpress Codex</a> functionality.

== Description ==

Obfuscation of email via the <code>[email]...[/email]</code> shortcode syntax using built-in <a href="http://codex.wordpress.org/Function_Reference/antispambot#Examples" target="_blank">Wordpress Codex</a> functionality.

Alternative variations:

 * <code>[email]user@example.com?subject=foo+bar&body=baz[/email]</code> creates a mailto: link with subject and body pre-populated
 * <code>[email nolink=1]user@example.com[/email]</code> just displays the email without a link wrapping it
 * <code>[email linktext="click here"]user@example.com[/email]</code> displays the text "click here" with a link to the email address

== Installation ==

Install via "Add Plugin".

== Frequently Asked Questions ==

= How does this work? =

This plugin converts email addresses within the <code>[email]...[/email]</code> shortcodes using the built-in Wordpress Codex <a href="http://codex.wordpress.org/Function_Reference/antispambot">antispambot()</a> function. The function converts email address characters to HTML entities. It converts a random selection of characters each time, making it more difficult for spam-bots to "harvest" the email address programmatically.

= Is it foolproof? =

The only foolproof way to ensure email addresses do not get harvested from a web page is to not include them on the page in any form. However, the method created by the Wordpress developers that we employ here should provide reasonable protection against all but the most concerted automatic-harvesting efforts.

== Screenshots ==

1. Use the <code>[email]...[/email]</code> tag to wrap your email input
2. This will display as an email address wrapped in a mailto: hyperlink (i.e. clickable to open a mail client)
3. The source code used to render this involves randomly-encoded characters, making it more difficult for spambots to harvest

== Changelog ==

 * 1.1.2 - Tested with WordPress 4.9.5
 * 1.1. - Added support for ?subject= strings, nolink= shortcode attribute (just print) and linktext= shortcode attribute to specify link text
 * 1.0 - upgraded to stable version after eight months in the wild
 * 0.1-alpha - Initial release

== Upgrade Notice ==

