<?php

defined('ABSPATH') or die('No script kiddies please!');
$apsl_settings = array();

$social_networks = array(
    0 => 'facebook',
    1 => 'twitter',
    2 => 'google',
    3 => 'linkedin',
    4 => 'instagram',
    5 => 'vk',
    6 => 'foursquare',
    7 => 'wordpress',
    8 => 'buffer'
);
$apsl_settings['network_ordering'] = $social_networks;

/*
 * New Social Network array to add >> Since version 2.0.0
 */
$social_networks_new_array = array(
    0 => 'tumblr',
    1 => 'reddit',
    2 => 'yahoo',
        //3 => 'weibo'
); //0 => 'tumblr', 1 => 'reddit');
$apsl_settings['network_ordering'] = array_merge($social_networks, $social_networks_new_array);

/*
 * Different parameter settings
 */

//Facebook Settings
$facebook_parameters = array(
    'apsl_facebook_enable' => '0',
    'apsl_facebook_app_id' => '',
    'apsl_facebook_app_secret' => '',
    'apsl_profile_image_width' => '480',
    'apsl_profile_image_height' => '480'
);
$apsl_settings['apsl_facebook_settings'] = $facebook_parameters;

//twitter settings
$twitter_parameters = array(
    'apsl_twitter_enable' => '0',
    'apsl_twitter_api_key' => '',
    'apsl_twitter_api_secret' => ''
);
$apsl_settings['apsl_twitter_settings'] = $twitter_parameters;

//google settings
$google_parameters = array(
    'apsl_google_enable' => '0',
    'apsl_google_client_id' => '',
    'apsl_google_client_secret' => ''
);
$apsl_settings['apsl_google_settings'] = $google_parameters;

//linkedin settings
$linkedin_parameters = array(
    'apsl_linkedin_enable' => '0',
    'apsl_linkedin_client_id' => '',
    'apsl_linkedin_client_secret' => ''
);
$apsl_settings['apsl_linkedin_settings'] = $linkedin_parameters;

//Instagram settings
$instagram_parameters = array(
    'apsl_instagram_enable' => '0',
    'apsl_instagram_api_key' => '',
    'apsl_instagram_api_secret' => ''
);
$apsl_settings['apsl_instagram_settings'] = $instagram_parameters;

//vk settings
$vk_parameters = array(
    'apsl_vk_enable' => '0',
    'apsl_vk_app_id' => '',
    'apsl_vk_secure_key' => ''
);
$apsl_settings['apsl_vk_settings'] = $vk_parameters;

//Foursquare settings
$foursquare_parameters = array(
    'apsl_foursquare_enable' => '0',
    'apsl_foursquare_client_id' => '',
    'apsl_foursquare_client_secret' => ''
);
$apsl_settings['apsl_foursquare_settings'] = $foursquare_parameters;

//Wordpress settings
$wordpress_parameters = array(
    'apsl_wordpress_enable' => '0',
    'apsl_wordpress_client_id' => '',
    'apsl_wordpress_client_secret' => ''
);
$apsl_settings['apsl_wordpress_settings'] = $wordpress_parameters;

//Buffer settings
$buffer_parameters = array(
    'apsl_buffer_enable' => '0',
    'apsl_buffer_client_id' => '',
    'apsl_buffer_client_secret' => ''
);
$apsl_settings['apsl_buffer_settings'] = $buffer_parameters;

//Reddit settings
$reddit_parameters = array(
    'apsl_reddit_enable' => '0',
    'apsl_reddit_client_id' => '',
    'apsl_reddit_client_secret' => ''
);
$apsl_settings['apsl_reddit_settings'] = $reddit_parameters;

//Tumblr Settings
$tumblr_parameters = array(
    'apsl_tumblr_enable' => '0',
    'apsl_tumblr_client_id' => '',
    'apsl_tumblr_client_secret' => ''
);
$apsl_settings['apsl_tumblr_settings'] = $tumblr_parameters;

//Yahoo settings
$yahoo_parameters = array(
    'apsl_yahoo_enable' => '0',
    'apsl_yahoo_client_id' => '',
    'apsl_yahoo_client_secret' => ''
);
$apsl_settings['apsl_yahoo_settings'] = $yahoo_parameters;

//Weibo settings
$weibo_parameters = array(
    'apsl_weibo_enable' => '0',
    'apsl_weibo_client_id' => '',
    'apsl_weibo_client_secret' => ''
);
$apsl_settings['apsl_weibo_settings'] = $weibo_parameters;

$apsl_settings['apsl_enable_disable_plugin'] = 'no';
$apsl_settings['apsl_enable_disable_buddypress'] = 'no';
$apsl_settings['apsl_enable_disable_woocommerce'] = 'no';

// for easy digital download settings
$apsl_settings['apsl_enable_disable_edd_login_shortcode'] = 'no';

$apsl_settings['apsl_enable_disable_edd_register_shortcode'] = 'no';

$apsl_settings['apsl_enable_disable_edd_checkout'] = 'no';
// for easy digital download settings ends

$display_options = array('login_form', 'register_form', 'comment_form');
$apsl_settings['apsl_display_options'] = $display_options;

$apsl_settings ['apsl_user_role'] = 'subscriber';

$apsl_settings['apsl_icon_theme'] = '1';

$apsl_settings['apsl_title_text_field'] = 'Social connect:';

$apsl_settings['apsl_login_short_text'] = '';

$apsl_settings['apsl_login_with_long_text'] = '';

$apsl_settings['apsl_each_link_title_attribute'] = '';

$apsl_settings['apsl_login_error_message'] = '';

$apsl_settings['apsl_custom_logout_redirect_options'] = 'home';
$apsl_settings['apsl_custom_logout_redirect_link'] = '';

$apsl_settings['apsl_custom_login_redirect_options'] = 'home';
$apsl_settings['apsl_custom_login_redirect_link'] = '';

$apsl_settings['apsl_user_avatar_options'] = 'default';
$apsl_settings['apsl_send_email_notification_options'] = 'yes';

// $apsl_settings['apsl_email_sender_name'] = '';
$apsl_settings['apsl_email_sender_email'] = '';
$apsl_settings['apsl_email_body'] = "Hello there,
\n
Welcome to #blogname
\n
Here's your log details:
Username: #username
To set your password, visit the following link: <a href='#password_set_link'>Link</a>
\n
Thank You!";

$apsl_settings['apsl_custom_username_allow'] = '';
$apsl_settings['apsl_custom_email_allow'] = '';
$apsl_settings['apsl_profile_mapping_options'] = 'no';

//Since version 2.0.0
$apsl_settings['apsl_user_login_allowed_type'] = 'yes';
$apsl_settings['apsl_login_non_registered_info_text'] = 'Sorry. Only registered user can log in. This window will close automatically after 5 seconds.';

update_option(APSL_SETTINGS, $apsl_settings);
