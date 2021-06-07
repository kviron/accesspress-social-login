<?php defined('ABSPATH') or die('No script kiddies please!'); ?>
<?php

$apsl_settings = array();

if (isset($_POST['apsl_save_settings'])) {
    $apsl_settings['network_ordering'] = $_POST['network_ordering'];

    //for facebook settings
    foreach ($_POST['apsl_facebook_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_facebook_enable = isset($apsl_facebook_enable) ? $apsl_facebook_enable : '';

    $facebook_parameters = array(
        'apsl_facebook_enable' => $apsl_facebook_enable,
        'apsl_facebook_app_id' => $apsl_facebook_app_id,
        'apsl_facebook_app_secret' => $apsl_facebook_app_secret,
        'apsl_profile_image_width' => $apsl_profile_image_width,
        'apsl_profile_image_height' => $apsl_profile_image_height
    );
    $apsl_settings['apsl_facebook_settings'] = $facebook_parameters;

    foreach ($_POST['apsl_twitter_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_twitter_enable = isset($apsl_twitter_enable) ? $apsl_twitter_enable : '';
    $twitter_parameters = array(
        'apsl_twitter_enable' => $apsl_twitter_enable,
        'apsl_twitter_api_key' => $apsl_twitter_api_key,
        'apsl_twitter_api_secret' => $apsl_twitter_api_secret
    );
    $apsl_settings['apsl_twitter_settings'] = $twitter_parameters;

    foreach ($_POST['apsl_linkedin_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_linkedin_enable = isset($apsl_linkedin_enable) ? $apsl_linkedin_enable : '';
    $linkedin_parameters = array(
        'apsl_linkedin_enable' => $apsl_linkedin_enable,
        'apsl_linkedin_client_id' => $apsl_linkedin_client_id,
        'apsl_linkedin_client_secret' => $apsl_linkedin_client_secret
    );
    $apsl_settings['apsl_linkedin_settings'] = $linkedin_parameters;

    foreach ($_POST['apsl_google_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_google_enable = isset($apsl_google_enable) ? $apsl_google_enable : '';
    $google_parameters = array(
        'apsl_google_enable' => $apsl_google_enable,
        'apsl_google_client_id' => $apsl_google_client_id,
        'apsl_google_client_secret' => $apsl_google_client_secret
    );
    $apsl_settings['apsl_google_settings'] = $google_parameters;

    foreach ($_POST['apsl_instagram_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_instagram_enable = isset($apsl_instagram_enable) ? $apsl_instagram_enable : '';
    $instagram_parameters = array(
        'apsl_instagram_enable' => $apsl_instagram_enable,
        'apsl_instagram_api_key' => $apsl_instagram_api_key,
        'apsl_instagram_api_secret' => $apsl_instagram_api_secret
    );
    $apsl_settings['apsl_instagram_settings'] = $instagram_parameters;

    foreach ($_POST['apsl_foursquare_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_foursquare_enable = isset($apsl_foursquare_enable) ? $apsl_foursquare_enable : '';
    $foursquare_parameters = array(
        'apsl_foursquare_enable' => $apsl_foursquare_enable,
        'apsl_foursquare_client_id' => $apsl_foursquare_client_id,
        'apsl_foursquare_client_secret' => $apsl_foursquare_client_secret
    );
    $apsl_settings['apsl_foursquare_settings'] = $foursquare_parameters;

    foreach ($_POST['apsl_wordpress_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_wordpress_enable = isset($apsl_wordpress_enable) ? $apsl_wordpress_enable : '';
    $wordpress_parameters = array(
        'apsl_wordpress_enable' => $apsl_wordpress_enable,
        'apsl_wordpress_client_id' => $apsl_wordpress_client_id,
        'apsl_wordpress_client_secret' => $apsl_wordpress_client_secret
    );
    $apsl_settings['apsl_wordpress_settings'] = $wordpress_parameters;

    foreach ($_POST['apsl_vk_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_vk_enable = isset($apsl_vk_enable) ? $apsl_vk_enable : '';
    $vk_parameters = array(
        'apsl_vk_enable' => $apsl_vk_enable,
        'apsl_vk_app_id' => $apsl_vk_app_id,
        'apsl_vk_secure_key' => $apsl_vk_secure_key
    );
    $apsl_settings['apsl_vk_settings'] = $vk_parameters;

    foreach ($_POST['apsl_buffer_settings'] as $key => $value) {
        $$key = $value;
    }
    $apsl_buffer_enable = isset($apsl_buffer_enable) ? $apsl_buffer_enable : '';
    $buffer_parameters = array(
        'apsl_buffer_enable' => $apsl_buffer_enable,
        'apsl_buffer_client_id' => $apsl_buffer_client_id,
        'apsl_buffer_client_secret' => $apsl_buffer_client_secret
    );
    $apsl_settings['apsl_buffer_settings'] = $buffer_parameters;

    if (isset($_POST['apsl_tumblr_settings'])) {
        foreach ($_POST['apsl_tumblr_settings'] as $key => $value) {
            $$key = $value;
        }
        $apsl_tumblr_enable = isset($apsl_tumblr_enable) ? $apsl_tumblr_enable : '';
        $tumblr_parameters = array(
            'apsl_tumblr_enable' => $apsl_tumblr_enable,
            'apsl_tumblr_client_id' => $apsl_tumblr_client_id,
            'apsl_tumblr_client_secret' => $apsl_tumblr_client_secret
        );
    } else {
        $tumblr_parameters = array();
    }
    $apsl_settings['apsl_tumblr_settings'] = $tumblr_parameters;

    if (isset($_POST['apsl_reddit_settings'])) {
        foreach ($_POST['apsl_reddit_settings'] as $key => $value) {
            $$key = $value;
        }
        $apsl_reddit_enable = isset($apsl_reddit_enable) ? $apsl_reddit_enable : '';
        $reddit_parameters = array(
            'apsl_reddit_enable' => $apsl_reddit_enable,
            'apsl_reddit_client_id' => $apsl_reddit_client_id,
            'apsl_reddit_client_secret' => $apsl_reddit_client_secret
        );
    } else {
        $reddit_parameters = array();
    }
    $apsl_settings['apsl_reddit_settings'] = $reddit_parameters;

    if (isset($_POST['apsl_yahoo_settings'])) {
        foreach ($_POST['apsl_yahoo_settings'] as $key => $value) {
            $$key = $value;
        }
        $apsl_yahoo_enable = isset($apsl_yahoo_enable) ? $apsl_yahoo_enable : '';
        $yahoo_parameters = array(
            'apsl_yahoo_enable' => $apsl_yahoo_enable,
            'apsl_yahoo_client_id' => $apsl_yahoo_client_id,
            'apsl_yahoo_client_secret' => $apsl_yahoo_client_secret
        );
    } else {
        $yahoo_parameters = array();
    }
    $apsl_settings['apsl_yahoo_settings'] = $yahoo_parameters;

    if (isset($_POST['apsl_weibo_settings'])) {
        foreach ($_POST['apsl_weibo_settings'] as $key => $value) {
            $$key = $value;
        }
        $apsl_weibo_enable = isset($apsl_weibo_enable) ? $apsl_weibo_enable : '';
        $weibo_parameters = array(
            'apsl_weibo_enable' => $apsl_weibo_enable,
            'apsl_weibo_client_id' => $apsl_weibo_client_id,
            'apsl_weibo_client_secret' => $apsl_weibo_client_secret
        );
    } else {
        $weibo_parameters = array();
    }
    $apsl_settings['apsl_weibo_settings'] = $weibo_parameters;

    $apsl_settings['apsl_enable_disable_plugin'] = $_POST['apsl_enable_disable_plugin'];
    $apsl_settings['apsl_enable_disable_buddypress'] = $_POST['apsl_enable_disable_buddypress'];
    $apsl_settings['apsl_enable_disable_woocommerce'] = $_POST['apsl_enable_disable_woocommerce'];
    $apsl_settings['apsl_enable_disable_edd_login_shortcode'] = $_POST['apsl_enable_disable_edd_login_shortcode'];
    $apsl_settings['apsl_enable_disable_edd_register_shortcode'] = $_POST['apsl_enable_disable_edd_register_shortcode'];
    $apsl_settings['apsl_enable_disable_edd_checkout'] = $_POST['apsl_enable_disable_edd_checkout'];
    $display_options = array();
    if (isset($_POST['apsl_display_options'])) {
        foreach ($_POST['apsl_display_options'] as $key => $value) {
            $display_options[] = $value;
        }
    }

    $apsl_settings['apsl_display_options'] = $display_options;
    $apsl_settings ['apsl_user_role'] = $_POST['apsl_user_role'];
    $apsl_settings['apsl_icon_theme'] = $_POST['apsl_icon_theme'];
    $apsl_settings['apsl_title_text_field'] = $_POST['apsl_title_text_field'];
    $apsl_settings['apsl_login_short_text'] = $_POST['apsl_login_short_text'];
    $apsl_settings['apsl_login_with_long_text'] = $_POST['apsl_login_with_long_text'];
    $apsl_settings['apsl_each_link_title_attribute'] = $_POST['apsl_each_link_title_attribute'];
    $apsl_settings['apsl_login_error_message'] = $_POST['apsl_login_error_message'];
    $apsl_settings['apsl_custom_logout_redirect_options'] = $_POST['apsl_custom_logout_redirect_options'];
    $apsl_settings['apsl_custom_logout_redirect_link'] = $_POST['apsl_custom_logout_redirect_link'];
    $apsl_settings['apsl_custom_login_redirect_options'] = $_POST['apsl_custom_login_redirect_options'];
    $apsl_settings['apsl_custom_login_redirect_link'] = $_POST['apsl_custom_login_redirect_link'];
    $apsl_settings['apsl_user_avatar_options'] = $_POST['apsl_user_avatar_options'];
    $apsl_settings['apsl_send_email_notification_options'] = $_POST['apsl_send_email_notification_options'];
    $apsl_settings['apsl_email_sender_email'] = $_POST['apsl_email_sender_email'];
    $email_body = stripslashes_deep($_POST['apsl_email_body']);

    $apsl_settings['apsl_email_body'] = self:: sanitize_escaping_linebreaks($email_body);

    $apsl_settings['apsl_custom_username_allow'] = isset($_POST['apsl_custom_username_allow']) ? $_POST['apsl_custom_username_allow'] : false;
    $apsl_settings['apsl_custom_email_allow'] = isset($_POST['apsl_custom_email_allow']) ? $_POST['apsl_custom_email_allow'] : false;
    $apsl_settings['apsl_profile_mapping_options'] = isset($_POST['apsl_profile_mapping_options']) ? $_POST['apsl_profile_mapping_options'] : 'no';
    $apsl_settings['apsl_settings_buddypress_xprofile_map'] = isset($_POST['apsl_settings_buddypress_xprofile_map']) ? $_POST['apsl_settings_buddypress_xprofile_map'] : array();
    //Since Version 2.0.0. Newly Added Settings
    $apsl_settings['apsl_user_login_allowed_type'] = isset($_POST['apsl_user_login_allowed_type']) ? $_POST['apsl_user_login_allowed_type'] : 'yes';
    $apsl_settings['apsl_login_non_registered_info_text'] = isset($_POST['apsl_login_non_registered_info_text']) ? sanitize_text_field($_POST['apsl_login_non_registered_info_text']) : __('Sorry. Only registered user can log in.', APSL_TEXT_DOMAIN);
    $apsl_settings['apsl_disable_autoclose_login_window'] = isset($_POST['apsl_disable_autoclose_login_window']) ? $_POST['apsl_disable_autoclose_login_window'] : 'enable';
    $apsl_settings['apsl_add_no_follow_in_login_link'] = isset($_POST['apsl_add_no_follow_in_login_link']) ? $_POST['apsl_add_no_follow_in_login_link'] : 'no';
    
    $apsl_settings['apsl_showhide_title_attr'] = isset($_POST['apsl_showhide_title_attr']) ? $_POST['apsl_showhide_title_attr'] : 'show';
    update_option(APSL_SETTINGS, $apsl_settings);
    $_SESSION['apsl_message'] = __('Settings Saved Successfully.', APSL_TEXT_DOMAIN);
    wp_redirect(admin_url() . 'admin.php?page=apsl');
    exit;
}