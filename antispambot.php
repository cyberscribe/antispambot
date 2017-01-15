<?php
/*
Plugin Name: Anti-Spambot Email Shortcode
Version: 1.1.1
Description: Obfuscation of email via the <code>[email]...[/email]</code> shortcode syntax using built-in <a href="http://codex.wordpress.org/Function_Reference/antispambot#Examples" target="_blank">Wordpress Codex</a> functionality.
Author: Robert Peake
Author URI: http://www.peakepro.com/
Plugin URI: https://wordpress.org/plugins/antispambot
Text Domain: antispambot
Domain Path: /languages
*/
/**
 * Hide email from Spam Bots using a shortcode.
 *
 * @param array  $atts    Shortcode attributes. Not used.
 * @param string $content The shortcode content. Should be an email address.
 *
 * @return string The obfuscated email address. 
 */
function wpcodex_hide_email_shortcode( $atts , $content = null ) {
    $email = strtok($content,'?'); //allow e.g. ?subject=foo+bar&body=bif in email
    $urlpart = strtok('');
    if (strlen($urlpart) > 0) {
        $urlpart = '?'.$urlpart;
    }
	if ( ! is_email( $email ) ) { 
		return $content;
	}
    extract( shortcode_atts( array(
                'hex_encoding' => 0,
                'nolink' => false,
                'linktext' => false,
            ), $atts, 'antispambot' ) );

    if ($nolink) {
        return antispambot( $email, $hex_encoding );
    } else {
        $url = esc_url('mailto:' . antispambot( $email, $hex_encoding ) . $urlpart );
        if ($linktext) {
	        return '<a href="'. $url . '">' . htmlspecialchars($linktext) . '</a>';
        } else {
	        return '<a href="'. $url . '">' . antispambot( $email, $hex_encoding ) . '</a>';
        }
    }
}
add_shortcode( 'email', 'wpcodex_hide_email_shortcode' );
