<?php
defined('ABSPATH') or die("No script kiddies please!");
$current_url = APSL_Class:: curlPageURL();
$options = get_option(APSL_SETTINGS);

if (isset($options['apsl_custom_login_redirect_options']) && $options['apsl_custom_login_redirect_options'] != '') {
    if ($options['apsl_custom_login_redirect_options'] == 'home') {
        $user_login_url = home_url();
    } else if ($options['apsl_custom_login_redirect_options'] == 'current_page') {
        $user_login_url = $current_url;
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

// $redirect_to = isset( $_REQUEST['redirect_to'] ) ? $_REQUEST['redirect_to'] : '';

$encoded_url = urlencode($user_login_url);
?>

<div class='<?php if (is_rtl()) { ?> apsl-rtl-wrap <?php } ?> apsl-login-networks theme-<?php echo $options['apsl_icon_theme']; ?> clearfix'>
    <span class='apsl-login-new-text'><?php echo $options['apsl_title_text_field']; ?></span>
    <?php if (isset($_SESSION['apsl_login_error_flag']) && $_SESSION['apsl_login_error_flag'] == '1') { //if( isset($_REQUEST['error']) || isset($_REQUEST['denied']) ){  ?>
        <div class='apsl-error'>
            <?php
            if (isset($options['apsl_login_error_message']) && $options['apsl_login_error_message'] != '') {
                echo $options['apsl_login_error_message'];
            } else {
                _e('You have Access Denied. Please authorize the app to login.', APSL_TEXT_DOMAIN);
            }
            ?>
        </div>
        <?php
        unset($_SESSION['apsl_login_error_flag']);
    }
    ?>

    <div class='social-networks'>
        <?php foreach ($options['network_ordering'] as $key => $value): ?>
            <?php if (isset($options["apsl_{$value}_settings"]["apsl_{$value}_enable"]) && $options["apsl_{$value}_settings"]["apsl_{$value}_enable"] === 'enable') { ?>
                <?php
                if ($encoded_url) {
                    $state = "&state=" . base64_encode("redirect_to=$encoded_url");
                } else {
                    $state = '';
                }
                ?>
                <?php $link = wp_login_url(). "?apsl_login_id=$value" . "_login" . $state; ?>
                <a href='javascript:void(0);' <?php echo isset($options['apsl_add_no_follow_in_login_link']) && $options['apsl_add_no_follow_in_login_link'] == 'yes' ? 'rel="nofollow"' : ''; ?> onclick="apsl_open_in_popup_window(event, '<?php echo $link; ?>');" title='<?php
                if (isset($options['apsl_each_link_title_attribute']) && $options['apsl_each_link_title_attribute'] != '') {
                    echo $options['apsl_each_link_title_attribute'];
                    } else {
                        _e('Login with', APSL_TEXT_DOMAIN);
                        } echo ' ' . $value;
                        ?>' >
                        <div class="apsl-icon-block apsl-icon-<?php echo $value; ?> <?php
                        if ($value == 'buffer') {
                            echo "buffer";
                        }
                        ?> clearfix">
                        <i class="fa fa-<?php echo $value; ?>"></i>
                        <?php echo isset($options['apsl_icon_theme']) && $options['apsl_icon_theme'] == '20' ? '<span class="login-longshort-text-wrapper">' : ''; ?>
                        <?php echo isset($options['apsl_icon_theme']) && $options['apsl_icon_theme'] == '20' ? '<span class="apsl-social-media-text">' . $value . '</span>' : ''; ?>
                        <span class="apsl-login-text"><?php
                        if (isset($options['apsl_login_short_text']) && !empty($options['apsl_login_short_text'])) {
                            echo __(esc_attr($options['apsl_login_short_text']), APSL_TEXT_DOMAIN);
                        } else {
                            _e('Login', APSL_TEXT_DOMAIN);
                        }
                        ?></span>
                        <span class="apsl-long-login-text" <?php echo isset($options['apsl_icon_theme']) && $options['apsl_icon_theme'] == '30' ? 'data-hover="' . $value . '"' : ''; ?>><?php
                        if ((isset($options['apsl_showhide_title_attr']) && $options['apsl_showhide_title_attr'] == 'show') || !isset($options['apsl_showhide_title_attr'])) {
                            if (isset($options['apsl_login_with_long_text']) && $options['apsl_login_with_long_text'] != '') {
                                echo __(esc_attr($options['apsl_login_with_long_text']), APSL_TEXT_DOMAIN);
                            } else {
                                _e('Login with', APSL_TEXT_DOMAIN);
                            }
                            ?>
                        <?php } ?>
                        <?php echo ' ' . $value; ?></span>
                        <?php echo isset($options['apsl_icon_theme']) && $options['apsl_icon_theme'] == '20' ? '</span>' : ''; ?>
                        <?php if (isset($options['apsl_icon_theme']) && $options['apsl_icon_theme'] == '28') { ?>
                            <span class="line -right"></span><span class="line -top"></span><span class="line -left"></span><span class="line -bottom"></span>
                        <?php } ?>
                    </div>
                </a>
            <?php } ?>
        <?php endforeach; ?>
    </div>
</div>