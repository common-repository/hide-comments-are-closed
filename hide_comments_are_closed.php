<?php
/*
Plugin Name: Hide "Comments are closed"
Plugin URI: http://wpuncle.com/uncleplugins/hide-comments-are-closed/
Description: On posts where it says comments are closed, the plugin will remove this text 'Comments are closed.' also this plugin supports any languages/text domains and will remove the text from themes and plugins.
Author: Amitpal Singh
Domain Path: http://wpuncle.com/donate/
Version: 1.0
Author URI: http://amitpal.in/
*/
 
add_filter('gettext', 'hide_comments_are_closed', 20, 3);
 
function hide_comments_are_closed($translated_text, $untranslated_text, $domain) {
    if ( $untranslated_text == 'Comments are closed.' ) {
        return '';
    }
    return $translated_text;
}
?>