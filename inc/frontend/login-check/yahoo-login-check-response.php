<?php

global $wpdb;
if (isset($result->status) && $result->status == 'SUCCESS') {
    $unique_verifier = sha1($result->deutype . $result->deuid);
    $sql = "SELECT *  FROM  `{$wpdb->prefix}apsl_users_social_profile_details` WHERE  `provider_name` LIKE  '$result->deutype' AND  `identifier` LIKE  '$result->deuid' AND `unique_verifier` LIKE '$unique_verifier'";
    $row = $wpdb->get_row($sql);
    $options = get_option(APSL_SETTINGS);

     if (!$row && isset($options['apsl_user_login_allowed_type']) && $options['apsl_user_login_allowed_type'] == 'no') {
        $stop_non_user_message = isset($options['apsl_login_non_registered_info_text']) && !empty($options['apsl_login_non_registered_info_text']) ? esc_attr($options['apsl_login_non_registered_info_text']) : '';
        if (isset($options['apsl_disable_autoclose_login_window']) && $options['apsl_disable_autoclose_login_window'] !== 'disable') {
            ?>
            <script type="text/javascript">setTimeout("window.close();", 7000);</script>
        <?php } ?>
        <div class="notice notice-success is-dismissible" 
             style="background: #0074a2 none repeat scroll 0 0;
             border-left: 5px solid #78B343;
             border-radius: 8px;
             color: #ffffff;
             margin-bottom: 5px;
             margin-top: 6px;
             padding-bottom: 3px;
             padding-left: 5px;
             font-family: sans-serif;
             font-size: 14px;
             padding-top: 3px;
             width: 99%;">
            <p><?php _e($stop_non_user_message, APSL_TEXT_DOMAIN); ?></p>
        </div>
        <?php
        die();
    } else if ((!$row && isset($options['apsl_user_login_allowed_type']) && $options['apsl_user_login_allowed_type'] == 'yes') || !isset($options['apsl_user_login_allowed_type'])) {

        //check if there is already a user with the email address provided from social login already
        $user_details_by_email = APSL_Functions:: getUserByMail($result->email);
        if ($user_details_by_email != false) {
            //user already there so log him in
            $id = $user_details_by_email->ID;
            $sql = "SELECT *  FROM  `{$wpdb->prefix}apsl_users_social_profile_details` WHERE  `user_id` LIKE  '$id'; ";
            $row = $wpdb->get_row($sql);
            if (!$row) {
                APSL_Functions:: link_user($id, $result);
            }
            APSL_Functions::loginUser($id);
            die();
        }

        $_SESSION['user_details'] = $result;
        if ($options['apsl_custom_email_allow'] == 'allow' || $options['apsl_custom_username_allow'] == 'allow') {
            //perform the username and email address entry here
            $url = site_url() . '?page=register_page';
            APSL_Functions:: redirect($url);
            die();
        } else {
            APSL_Functions::creatUser($result->username, $result->email);
            $user_row = APSL_Functions::getUserByMail($result->email);
            $id = $user_row->ID;
            $result = $result;
            $role = $options['apsl_user_role'];
            APSL_Functions::UpdateUserMeta($id, $result, $role);
            APSL_Functions::loginUser($id);
            exit();
        }
    } else {
        if (($row->provider_name == $result->deutype) && ($row->identifier == $result->deuid)) {
            //user found in our database so let login
            APSL_Functions:: loginUser($row->user_id);
            exit();
        } else {
            // user not found in our database so do nothing
        }
    }
} else {
    if (isset($_REQUEST['error'])) {
        $_SESSION['apsl_login_error_flag'] = 1;
        if (isset($_REQUEST['redirect_to'])) {
            $redirect_url = $_REQUEST['redirect_to'];
        } else {
            $options = get_option(APSL_SETTINGS);
            if (isset($options['apsl_custom_login_redirect_options']) && $options['apsl_custom_login_redirect_options'] != '') {
                if ($options['apsl_custom_login_redirect_options'] == 'home') {
                    $user_login_url = home_url();
                } else if ($options['apsl_custom_login_redirect_options'] == 'current_page') {
                    if (isset($_REQUEST['redirect_to'])) {
                        $redirect_to = $_REQUEST['redirect_to'];

                        // Redirect to https if user wants ssl
                        if (isset($secure_cookie) && false !== strpos($redirect_url, 'wp-admin'))
                            $user_login_url = preg_replace('|^http://|', 'https://', $redirect_url);
                    }
                    else {
                        $user_login_url = home_url();
                    }
                } else if ($options['apsl_custom_login_redirect_options'] == 'custom_page') {
                    if ($options['apsl_custom_login_redirect_link'] != '') {
                        $login_page = $options['apsl_custom_login_redirect_link'];
                        $user_login_url = $login_page;
                    } else {
                        $user_login_url = home_url();
                    }
                }
            } else {
                $user_login_url = home_url();
            }
            $redirect_url = $user_login_url;
        }
        echo "<script> window.close(); window.opener.location.href='$redirect_url'; </script>";
    }
    die();
}