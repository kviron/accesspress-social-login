<div class='apsl-settings'>
    <div class='apsl-enable-disable-opt'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-icon-social-login"><i class="fa fa-bars" aria-hidden="true"></i></span> <?php esc_attr_e('Social Login', APSL_TEXT_DOMAIN); ?><span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <p class="social-login">
                <span><?php esc_attr_e('Enable social login?', APSL_TEXT_DOMAIN); ?></span>
                <input type='radio' id='apsl_enable_plugin' name='apsl_enable_disable_plugin' value='yes' <?php checked($options['apsl_enable_disable_plugin'], 'yes', 'true'); ?> /> <label for='apsl_enable_plugin'>Yes</label>
                <input type='radio' id='apsl_disable_plugin' name='apsl_enable_disable_plugin' value='no' <?php checked($options['apsl_enable_disable_plugin'], 'no', 'true'); ?> /> <label for='apsl_disable_plugin'>No</label>
            </p>
            <p class="social-login-buddypress">
                <span><?php esc_attr_e('Enable social login in Buddypress?', APSL_TEXT_DOMAIN); ?></span>
                <input type='radio' id='apsl_enable_buddypress' name='apsl_enable_disable_buddypress' value='yes' <?php checked($options['apsl_enable_disable_buddypress'], 'yes', 'true'); ?> /> <label for='apsl_enable_buddypress'>Yes</label>
                <input type='radio' id='apsl_disable_buddypress' name='apsl_enable_disable_buddypress' value='no' <?php checked($options['apsl_enable_disable_buddypress'], 'no', 'true'); ?> /> <label for='apsl_disable_buddypress'>No</label>
            </p>
            <p class="social-login-woocommerce">
                <span><?php esc_attr_e('Enable social login in Woocommerce?', APSL_TEXT_DOMAIN); ?></span>
                <input type='radio' id='apsl_enable_woocommerce' name='apsl_enable_disable_woocommerce' value='yes' <?php checked($options['apsl_enable_disable_woocommerce'], 'yes', 'true'); ?> /> <label for='apsl_enable_woocommerce'>Yes</label>
                <input type='radio' id='apsl_disable_woocommerce' name='apsl_enable_disable_woocommerce' value='no' <?php checked($options['apsl_enable_disable_woocommerce'], 'no', 'true'); ?> /> <label for='apsl_disable_woocommerce'>No</label>
            </p>
            <p class="social-login">
                <span><?php esc_attr_e("Enable social login in EDD's login shortcode", APSL_TEXT_DOMAIN); ?></span>
                <input type='radio' id='apsl_enable_edd_login_shortcode' name='apsl_enable_disable_edd_login_shortcode' value='yes' <?php
                if (isset($options['apsl_enable_disable_edd_login_shortcode'])) {
                    checked($options['apsl_enable_disable_edd_login_shortcode'], 'yes', 'true');
                }
                ?> /> <label for='apsl_enable_edd_login_shortcode'><?php esc_attr_e("Yes", APSL_TEXT_DOMAIN); ?></label>
                <input type='radio' id='apsl_disable_edd_login_shortcode' name='apsl_enable_disable_edd_login_shortcode' value='no' <?php
                if (isset($options['apsl_enable_disable_edd_login_shortcode'])) {
                    checked($options['apsl_enable_disable_edd_login_shortcode'], 'no', 'true');
                } else {
                    echo "checked='checked'";
                }
                ?> /> <label for='apsl_disable_edd_login_shortcode'><?php esc_attr_e("No", APSL_TEXT_DOMAIN); ?></label>
            </p>
            <p class="social-login">
                <span><?php esc_attr_e("Enable social login in EDD's register shortcode", APSL_TEXT_DOMAIN); ?></span>
                <input type='radio' id='apsl_enable_edd_register_shortcode' name='apsl_enable_disable_edd_register_shortcode' value='yes' <?php
                if (isset($options['apsl_enable_disable_edd_register_shortcode'])) {
                    checked($options['apsl_enable_disable_edd_register_shortcode'], 'yes', 'true');
                }
                ?> /> <label for='apsl_enable_edd_register_shortcode'><?php esc_attr_e("Yes", APSL_TEXT_DOMAIN); ?></label>
                <input type='radio' id='apsl_disable_edd_register_shortcode' name='apsl_enable_disable_edd_register_shortcode' value='no' <?php
                if (isset($options['apsl_enable_disable_edd_register_shortcode'])) {
                    checked($options['apsl_enable_disable_edd_register_shortcode'], 'no', 'true');
                } else {
                    echo "checked='checked'";
                }
                ?> /> <label for='apsl_disable_edd_register_shortcode'><?php esc_attr_e("No", APSL_TEXT_DOMAIN); ?></label>
            </p>
            <p class="social-login">
                <span><?php esc_attr_e("Enable social login in EDD's checkout page?", APSL_TEXT_DOMAIN); ?></span>
                <input type='radio' id='apsl_enable_edd_checkout' name='apsl_enable_disable_edd_checkout' value='yes' <?php
                if (isset($options['apsl_enable_disable_edd_checkout'])) {
                    checked($options['apsl_enable_disable_edd_checkout'], 'yes', 'true');
                }
                ?> /> <label for='apsl_enable_edd_checkout'><?php esc_attr_e("Yes", APSL_TEXT_DOMAIN); ?></label>
                <input type='radio' id='apsl_disable_edd_checkout' name='apsl_enable_disable_edd_checkout' value='no' <?php
                if (isset($options['apsl_enable_disable_edd_checkout'])) {
                    checked($options['apsl_enable_disable_edd_checkout'], 'no', 'true');
                } else {
                    echo "checked='checked'";
                }
                ?> /> <label for='apsl_disable_edd_checkout'><?php esc_attr_e("No", APSL_TEXT_DOMAIN); ?></label>
            </p>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-display-options'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-icon-display-option"><i class="fa fa-window-maximize"></i></span> <?php esc_attr_e('Display Options', APSL_TEXT_DOMAIN); ?><span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span></div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <p><?php esc_attr_e('Please choose the options where you want to display the social login form.', APSL_TEXT_DOMAIN); ?></p>
            <p><input type="checkbox" id="apsl_login_form" value="login_form" name="apsl_display_options[]" <?php
                if (in_array("login_form", $options['apsl_display_options'])) {
                    echo "checked='checked'";
                }
                ?> ><label for="apsl_login_form"><?php esc_attr_e('Login Form', APSL_TEXT_DOMAIN); ?> </label></p>
            <p><input type="checkbox" id="apsl_register_form" value="register_form" name="apsl_display_options[]" <?php
                if (in_array("register_form", $options['apsl_display_options'])) {
                    echo "checked='checked'";
                }
                ?> ><label for="apsl_register_form"><?php esc_attr_e('Register Form', APSL_TEXT_DOMAIN); ?> </label></p>
            <p><input type="checkbox" id="apsl_comment_form" value="comment_form" name="apsl_display_options[]" <?php
                if (in_array("comment_form", $options['apsl_display_options'])) {
                    echo "checked='checked'";
                }
                ?> ><label for="apsl_comment_form"><?php esc_attr_e('Comments', APSL_TEXT_DOMAIN); ?> </label></p>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-user-role-opt'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-icon-user-role"><i class="fa fa-user-plus" aria-hidden="true"></i></span> <?php esc_attr_e('Set user role', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <?php esc_attr_e('User role', APSL_TEXT_DOMAIN); ?>
            <?php
            if (isset($options['apsl_user_role'])) {
                $selected = $options['apsl_user_role'];
            } else {
                $selected = '';
            }
//echo $selected;
            ?>
            <select name='apsl_user_role'>
                <?php wp_dropdown_roles($selected); ?>
            </select>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-themes-wrapper'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-icon-theme"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> <?php esc_attr_e('Available Icon Themes', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <?php for ($i = 1; $i <= 30; $i++): ?>
                <div class='apsl-theme apsl-theme-<?php echo $i; ?>'>
                    <label><input type="radio" id="apsl-theme-<?php echo $i; ?>" value="<?php echo $i; ?>" class="apsl-theme apsl-png-theme" name="apsl_icon_theme" <?php checked($i, $options['apsl_icon_theme']); ?> >
                        <span><?php esc_attr_e('Theme ' . $i, APSL_TEXT_DOMAIN); ?></span></label>
                    <div class="apsl-theme-previewbox">
                        <img src="<?php echo APSL_IMAGE_DIR; ?>/preview-<?php echo $i; ?>.<?php echo $i <= 17 ? 'jpg' : 'png'; ?>" alt="Login Template Theme Preview">
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-text-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-text-setting"><i class="fa fa-i-cursor" aria-hidden="true"></i></span> <?php esc_attr_e('Text Settings', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none;'>
            <p class='apsl-title-text-field'>
                <span><?php esc_attr_e('Login text:', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_title_text_field' id='apsl-title-text' value='<?php
                if (isset($options['apsl_title_text_field']) && $options['apsl_title_text_field'] != '') {
                    echo $options['apsl_title_text_field'];
                }
                ?>' />
            </p>

            <p class='apsl-each-login-short-text'>
                <span><?php esc_attr_e('Login short text:', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_login_short_text' id='apsl-login-short-text' value='<?php
                if (isset($options['apsl_login_short_text']) && $options['apsl_login_short_text'] != '') {
                    echo $options['apsl_login_short_text'];
                }
                ?>' />
            <div class='apsl-info'><?php esc_attr_e('If this field is empty. The default "Login" text will appear.', APSL_TEXT_DOMAIN); ?></div>
            </p>

            <p class='apsl-each-login-long-text'>
                <span><?php esc_attr_e('Login with long text:', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_login_with_long_text' id='apsl-login-with-long-text' value='<?php
                if (isset($options['apsl_login_with_long_text']) && $options['apsl_login_with_long_text'] != '') {
                    echo $options['apsl_login_with_long_text'];
                }
                ?>' />
            <div class='apsl-info'><?php esc_attr_e('If this field is empty. The default "Login with" text will appear for long text.', APSL_TEXT_DOMAIN); ?></div>
            </p>
            <p class='apsl-each-link-title-attribute'>
                <span><?php esc_attr_e('Hide Long Text:', APSL_TEXT_DOMAIN); ?></span> 
                <span><input type="checkbox" id="apsl_showhide_title_attr" value="hide" name="apsl_showhide_title_attr" <?php
                    if (isset($options['apsl_showhide_title_attr']) && $options['apsl_showhide_title_attr'] == 'hide') {
                        echo "checked='checked'";
                    }
                    ?> ><label for="apsl_showhide_title_attr"><?php esc_attr_e('Hide/Show', APSL_TEXT_DOMAIN); ?> </label></p>
            <div class='apsl-info'><?php esc_attr_e('If this field is empty, default "Login with" text will not appear. And social site title will only be shown. Override default behaviour. ', APSL_TEXT_DOMAIN); ?></div>
            </p>
            <p class='apsl-each-link-title-attribute'>
                <span><?php esc_attr_e('Link title attribute:', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_each_link_title_attribute' id='apsl_each_link_title_attribute' value='<?php
                if (isset($options['apsl_each_link_title_attribute']) && $options['apsl_each_link_title_attribute'] != '') {
                    echo $options['apsl_each_link_title_attribute'];
                }
                ?>' />
            <div class='apsl-info'><?php esc_attr_e('If this field is empty. The default "Login with" text will appear.', APSL_TEXT_DOMAIN); ?></div>
            </p>

            <p class='apsl-login-error-message'>
                <span><?php esc_attr_e('Login error message:', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_login_error_message' id='apsl_login_error_message' value='<?php
                if (isset($options['apsl_login_error_message']) && $options['apsl_login_error_message'] != '') {
                    echo $options['apsl_login_error_message'];
                }
                ?>' />
            <div class='apsl-info'><?php esc_attr_e('If this field is empty. The default "You have Access Denied. Please authorize the app to login." text will appear.', APSL_TEXT_DOMAIN); ?></div>
            </p>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-logout-redirect-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-sign-out"><i class="fa fa-sign-out" aria-hidden="true"></i></span> <?php esc_attr_e('Logout Redirect Link', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <input type='radio' id='apsl_custom_logout_redirect_home' class='apsl_custom_logout_redirect_options' name='apsl_custom_logout_redirect_options' value='home' <?php
            if (isset($options['apsl_custom_logout_redirect_options'])) {
                checked($options['apsl_custom_logout_redirect_options'], 'home', 'true');
            }
            ?> /> <label for='apsl_custom_logout_redirect_home'><?php esc_attr_e('Home page', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <input type='radio' id='apsl_custom_logout_redirect_current' class='apsl_custom_logout_redirect_options' name='apsl_custom_logout_redirect_options' value='current_page' <?php
            if (isset($options['apsl_custom_logout_redirect_options'])) {
                checked($options['apsl_custom_logout_redirect_options'], 'current_page', 'true');
            }
            ?> /> <label for='apsl_custom_logout_redirect_current'><?php esc_attr_e('Current page', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <input type='radio' id='apsl_custom_logout_redirect_custom' class='apsl_custom_logout_redirect_options' name='apsl_custom_logout_redirect_options' value='custom_page' <?php
            if (isset($options['apsl_custom_logout_redirect_options'])) {
                checked($options['apsl_custom_logout_redirect_options'], 'custom_page', 'true');
            }
            ?> /> <label for='apsl_custom_logout_redirect_custom'><?php esc_attr_e('Custom page', APSL_TEXT_DOMAIN); ?></label><br />

            <div class='apsl-custom-logout-redirect-link' <?php if ($options['apsl_custom_logout_redirect_options'] == 'custom_page') { ?> style='display: block' <?php } else { ?> style='display:none' <?php } ?>>
                <p class='apsl-title-text-field'>
                    <span><?php esc_attr_e('Logout redirect page:', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_custom_logout_redirect_link' id='apsl-custom-logout-redirect-link' value='<?php
                    if (isset($options['apsl_custom_logout_redirect_link']) && $options['apsl_custom_logout_redirect_link'] != '') {
                        echo $options['apsl_custom_logout_redirect_link'];
                    }
                    ?>' />
                </p>
                <div class='apsl-info'>
                    <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                    <span class='apsl-info-content'><?php esc_attr_e('Please set this value if you want to redirect the user to the custom page url(full url). If this field is not set they will be redirected back to current page.', APSL_TEXT_DOMAIN); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-login-redirect-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-sign-in"><i class="fa fa-sign-in" aria-hidden="true"></i></span> <?php esc_attr_e('Login Redirect Link', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <input type='radio' id='apsl_custom_login_redirect_home' class='apsl_custom_login_redirect_options' name='apsl_custom_login_redirect_options' value='home' <?php
            if (isset($options['apsl_custom_login_redirect_options'])) {
                checked($options['apsl_custom_login_redirect_options'], 'home', 'true');
            }
            ?> /> <label for='apsl_custom_login_redirect_home'><?php esc_attr_e('Home page', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <input type='radio' id='apsl_custom_login_redirect_current' class='apsl_custom_login_redirect_options' name='apsl_custom_login_redirect_options' value='current_page' <?php
            if (isset($options['apsl_custom_login_redirect_options'])) {
                checked($options['apsl_custom_login_redirect_options'], 'current_page', 'true');
            }
            ?> /> <label for='apsl_custom_login_redirect_current'><?php esc_attr_e('Current page', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <div class='apsl-custom-login-redirect-link1' >
                <div class='apsl-info'>
                    <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                    <span class='apsl-info-content'> <?php esc_attr_e('If plugin can\'t detect what is the redirect uri for the page it will be redirected to home page.', APSL_TEXT_DOMAIN); ?></span>
                </div>
            </div>
            <input type='radio' id='apsl_custom_login_redirect_custom' class='apsl_custom_login_redirect_options' name='apsl_custom_login_redirect_options' value='custom_page' <?php
            if (isset($options['apsl_custom_login_redirect_options'])) {
                checked($options['apsl_custom_login_redirect_options'], 'custom_page', 'true');
            }
            ?> /> <label for='apsl_custom_login_redirect_custom'><?php esc_attr_e('Custom page', APSL_TEXT_DOMAIN); ?></label><br />

            <div class='apsl-custom-login-redirect-link' <?php
            if (isset($options['apsl_custom_login_redirect_options'])) {
                if ($options['apsl_custom_login_redirect_options'] == 'custom_page') {
                    ?> style='display: block' <?php } else { ?> style='display:none' <?php
                     }
                 }
                 ?>>
                <p class='apsl-title-text-field'>
                    <span><?php esc_attr_e('Login redirect page:', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_custom_login_redirect_link' id='apsl-custom-login-redirect-link' value='<?php
                    if (isset($options['apsl_custom_login_redirect_link']) && $options['apsl_custom_login_redirect_link'] != '') {
                        echo $options['apsl_custom_login_redirect_link'];
                    }
                    ?>' />
                </p>
                <div class='apsl-info'>
                    <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                    <span class='apsl-info-content'><?php esc_attr_e('Please set this value if you want to redirect the user to the custom page url(full url). If this field is not set they will be redirected back to home page.', APSL_TEXT_DOMAIN); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-user-avatar-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-user-avatar"><i class="fa fa-user-circle-o " aria-hidden="true"></i></span> <?php esc_attr_e('User Avatar', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <input type='radio' id='apsl_user_avatar_default' class='apsl_user_avatar_options' name='apsl_user_avatar_options' value='default' <?php
            if (isset($options['apsl_user_avatar_options'])) {
                checked($options['apsl_user_avatar_options'], 'default', 'true');
            }
            ?> /> <label for='apsl_user_avatar_default'><?php esc_attr_e('Use wordpress provided default avatar.', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <input type='radio' id='apsl_user_avatar_social' class='apsl_user_avatar_options' name='apsl_user_avatar_options' value='social' <?php
            if (isset($options['apsl_user_avatar_options'])) {
                checked($options['apsl_user_avatar_options'], 'social', 'true');
            }
            ?> /> <label for='apsl_user_avatar_social'><?php esc_attr_e('Use the profile picture from social media where available.', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <div class='apsl-info'>
                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                <span class='apsl-info-content'><?php esc_attr_e('Please choose the options from where you want your users avatar to be loaded from. If you choose default wordpress avatar it will use the gravatar profile image if user have gravatar profile assocated with their registered email address.', APSL_TEXT_DOMAIN); ?></span>
            </div>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-user-avatar-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-user-login-control"><i class="fa fa-user-times" aria-hidden="true"></i></span> <?php esc_attr_e('User Login Control Settings', APSL_TEXT_DOMAIN); ?><span class="apsl-new-setting-span" ><?php esc_attr_e('New Setting', APSL_TEXT_DOMAIN); ?></span> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <input type='radio' id='apsl_user_avatar_default' class='apsl_user_avatar_options' name='apsl_user_login_allowed_type' value='yes' <?php
            if (isset($options['apsl_user_login_allowed_type'])) {
                checked($options['apsl_user_login_allowed_type'], 'yes', 'true');
            }
            ?> /> <label for='apsl_user_avatar_default'><?php esc_attr_e('Allow all users to log in', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <input type='radio' id='apsl_user_avatar_social' class='apsl_user_avatar_options' name='apsl_user_login_allowed_type' value='no' <?php
            if (isset($options['apsl_user_login_allowed_type'])) {
                checked($options['apsl_user_login_allowed_type'], 'no', 'true');
            }
            ?> /> <label for='apsl_user_avatar_social'><?php esc_attr_e('Allow only registered users to log in', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <p class='apsl-each-login-short-text'>
                <span><?php esc_attr_e('Message for non registered user', APSL_TEXT_DOMAIN); ?></span> <input type='text' name='apsl_login_non_registered_info_text' id='apsl-login-non-registered-text' value='<?php
                if (isset($options['apsl_login_non_registered_info_text']) && $options['apsl_login_non_registered_info_text'] != '') {
                    echo esc_attr($options['apsl_login_non_registered_info_text']);
                }
                ?>' />
            </p>
            <div class='apsl-info'>
                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                <span class='apsl-info-content'><?php esc_attr_e('Please select the options to choose user log-in privilege. You can set to only allow already registered user to login.', APSL_TEXT_DOMAIN); ?></span>
            </div>
            <p class='apsl-each-login-short-text'>
                <input type='checkbox' id='apsl_custom_username_allow_login_autoclose' class='apsl_custom_username_allow' name='apsl_disable_autoclose_login_window' value='disable' <?php
                if (isset($options['apsl_disable_autoclose_login_window'])) {
                    checked($options['apsl_disable_autoclose_login_window'], 'disable', 'true');
                }
                ?> /> <label for='apsl_custom_username_allow_login_autoclose'><?php esc_attr_e('Disable auto close of login window', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <p class='apsl-each-login-short-text'>
            <div class='apsl-info'>
                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                <span class='apsl-info-content'><?php esc_attr_e('If not disabled, the popup window will close automatically after 5 second of display.', APSL_TEXT_DOMAIN); ?></span>
            </div>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-user-email-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-reply-all"><i class="fa fa-reply-all " aria-hidden="true"></i></span> <?php esc_attr_e('Email Notification Settings', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <input type='radio' id='apsl_send_email_notification_yes' class='apsl_send_email_notification_yes apsl_send_email_notification_options' name='apsl_send_email_notification_options' value='yes' <?php
            if (isset($options['apsl_send_email_notification_options'])) {
                checked($options['apsl_send_email_notification_options'], 'yes', 'true');
            }
            ?> /> <label for='apsl_send_email_notification_yes'><?php esc_attr_e('Send email notification to both user and site admin.', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <div class='apsl-email-format-settings' <?php
            if (isset($options['apsl_send_email_notification_options'])) {
                if ($options['apsl_send_email_notification_options'] == 'yes') {
                    ?> style='display: block' <?php } else { ?> style='display:none' <?php
                     }
                 }
                 ?>>

                <label for='apsl-sender-email-address'><?php esc_attr_e('Sender Email Address:', APSL_TEXT_DOMAIN); ?></label> <input type='text' name='apsl_email_sender_email' id='apsl-sender-email-address' value='<?php
                if (isset($options['apsl_email_sender_email']) && $options['apsl_email_sender_email'] != '') {
                    echo $options['apsl_email_sender_email'];
                }
                ?>' />
                <label for='apsl-email-body'>
                    <?php esc_attr_e('Email Body:', APSL_TEXT_DOMAIN); ?>
                </label>
                <?php
                if (isset($options['apsl_email_body']) && $options['apsl_email_body'] != '') {
                    $content = self:: output_converting_br($options['apsl_email_body']);
                }
                ?>
                <!-- </textarea> -->
                <?php wp_editor($content, 'apsl_email_body', $settings = array('textarea_name' => 'apsl_email_body', 'editor_class' => 'apsl-email-body', 'media_buttons' => false, 'editor_height' => 400)); ?>

                <div class='apsl-info'>
                    <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                    <span class='apsl-info-content'>
                        <?php esc_attr_e('Available parameters:', APSL_TEXT_DOMAIN); ?>
                        <ul>
                            <li>#blogname - <?php esc_attr_e('Display Blog name in the email.', APSL_TEXT_DOMAIN); ?></li>
                            <li>#username - <?php esc_attr_e('Display Username in the email..', APSL_TEXT_DOMAIN); ?></li>
                            <li>#password - <?php esc_attr_e('Display the user password in email. ( Please use this parameter for wordpress version 4.3.0 or older ).', APSL_TEXT_DOMAIN); ?></li>
                            <li>#password_set_link - <?php esc_attr_e('Display the password set link. ( Please use this parameter for wordpress version 4.3.1 or greater ).', APSL_TEXT_DOMAIN); ?></li>
                        </ul>
                        <p><?php esc_attr_e('Note: Please configure this email template as per you need using paramaters available', APSL_TEXT_DOMAIN); ?> </p>
                    </span>
                </div>
            </div>
            <br />
            <input type='radio' id='apsl_send_email_notification_no' class='apsl_send_email_notification_no apsl_send_email_notification_options' name='apsl_send_email_notification_options' value='no' <?php
            if (isset($options['apsl_send_email_notification_options'])) {
                checked($options['apsl_send_email_notification_options'], 'no', 'true');
            }
            ?> /> <label for='apsl_send_email_notification_no'><?php esc_attr_e('Do not send email notification to both user and site admin.', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <div class='apsl-info'>
                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                <span class='apsl-info-content'><?php esc_attr_e('Here you can configure an options to send email notifications about user registration.', APSL_TEXT_DOMAIN); ?></span>
            </div>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-username-email-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-user-rename"><i class="fa fa-id-badge" aria-hidden="true"></i></span> <?php esc_attr_e('Username and Email Rename Settings', APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <input type='checkbox' id='apsl_custom_username_allow' class='apsl_custom_username_allow' name='apsl_custom_username_allow' value='allow' <?php
            if (isset($options['apsl_custom_username_allow'])) {
                checked($options['apsl_custom_username_allow'], 'allow', 'true');
            }
            ?> /> <label for='apsl_custom_username_allow'><?php esc_attr_e('Allow user to change their username.', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <input type='checkbox' id='apsl_custom_email_allow' class='apsl_custom_email_allow' name='apsl_custom_email_allow' value='allow' <?php
            if (isset($options['apsl_custom_email_allow'])) {
                checked($options['apsl_custom_email_allow'], 'allow', 'true');
            }
            ?> /> <label for='apsl_custom_email_allow'><?php esc_attr_e('Allow user to change email address.', APSL_TEXT_DOMAIN); ?></label><br /><br />
            <div class='apsl-info'>
                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                <span class='apsl-info-content'><?php esc_attr_e('Please enable these options if you want your user to change their username or email or both during social login.', APSL_TEXT_DOMAIN); ?></span>
            </div>
        </div>
    </div>
</div>

<div class='apsl-settings'>
    <div class='apsl-username-email-settings'>
        <div class="apsl-label"><span class="apsl-other-setting-icon-span apsl-other-setting-text-setting"><i class="fa fa-wrench" aria-hidden="true"></i></span> <?php esc_attr_e('Additional Settings', APSL_TEXT_DOMAIN); ?> <span class="apsl-new-setting-span" ><?php esc_attr_e('New Setting', APSL_TEXT_DOMAIN); ?></span><span class='apsl_show_hide'><i class="fa fa-caret-down"></i></span> </div>
        <div class='apsl_network_settings_wrapper' style='display:none'>
            <input type='checkbox' id='apsl_add_no_follow_to_login_link' class='apsl_custom_username_allow' name='apsl_add_no_follow_in_login_link' value='yes' <?php
                   if (isset($options['apsl_add_no_follow_in_login_link'])) {
                       checked($options['apsl_add_no_follow_in_login_link'], 'yes', 'true');
                   }
                   ?> /> <label for='apsl_add_no_follow_to_login_link'><?php esc_attr_e('Add "No Follow" to the login link. For SEO reason', APSL_TEXT_DOMAIN); ?></label>
            </label><br /><br />
        </div>
    </div>
</div>