<?php
/*
 * Plugin Name: OSClass SEO User Profile Links
 * Plugin URI: https://github.com/costel21d/osclass-seo-user-profile-links
 * Description: Adds SEO-friendly attributes (rel="ugc", noopener) to user-submitted website links.
 * Version: 1.0.0
 * Author: Constantin Onu
 * Author URI: https://github.com/costel21d/osclass-seo-user-profile-links
 * License: MIT
 */

if (!defined('OC_ADMIN')) exit('Direct access denied.');

function seo_user_links_filter($html) {
    if (strpos($html, 'class="website"') !== false) {
        // Add rel="ugc noopener" + target="_blank"
        $html = str_replace('<a href="', '<a href=" rel="ugc noopener" target="_blank" ', $html);
        
        // Replace URL text with "Website"
        $html = preg_replace('/<a(.*?)>.*?<\/a>/', '<a$1>Website</a>', $html);
    }
    return $html;
}

// Apply to user profiles and listings
osc_add_filter('user_profile_website_link', 'seo_user_links_filter');
osc_add_filter('user_list_website_link', 'seo_user_links_filter');
