<div class="wrap"><div class='apsl-outer-wrapper'>
        <?php include(APSL_PLUGIN_DIR . 'inc/backend/header.php'); ?>
        <div class="clear"></div>
        <?php
        $options = get_option(APSL_SETTINGS);
        if (isset($_SESSION['apsl_message'])) {
            ?>
            <div class="apsl-message">
                <p><?php
                    echo $_SESSION['apsl_message'];
                    unset($_SESSION['apsl_message']);
                    ?></p>
            </div>
        <?php } ?>
        <div class='apsl-networks'>
            <div class='apsl-network-options'>
                <form method="post" action="<?php echo admin_url() . 'admin-post.php' ?>">
                    <input type="hidden" name="action" value="apsl_save_options"/>
                    <div class='wrap about-wrap clearfix'>
                        <h2 class='nav-tab-wrapper clearfix'>
                            <a href='javascript: void(0);' id='apsl-networks-settings' class='nav-tab nav-tab-active ' ><span><i class="fa fa-share-alt"></i></span> <?php esc_attr_e('Network settings', APSL_TEXT_DOMAIN) ?></a>
                            <a href='javascript: void(0);' id='apsl-theme-settings' class='nav-tab' ><span><i class="fa fa-cogs"></i></span> <?php esc_attr_e('Other settings', APSL_TEXT_DOMAIN) ?></a>
                            <?php if (function_exists('bp_has_profile')) { ?>
                                <a href='javascript: void(0);' id='apsl-buddypress-settings' class='nav-tab' ><span><i class="fa fa-user-friends"></i></span> <?php esc_attr_e('BuddyPress settings', APSL_TEXT_DOMAIN) ?></a>
                            <?php } ?>
                            <a href='javascript: void(0);' id='apsl-how-to-use' class='nav-tab' ><span><i class="fa fa-question-circle"></i></span> <?php esc_attr_e('How to use', APSL_TEXT_DOMAIN) ?></a>
                            <a href='javascript: void(0);' id='apsl-about' class='nav-tab' ><span><i class="fa fa-info"></i></span> <?php esc_attr_e('About', APSL_TEXT_DOMAIN) ?></a>
                            <a href='javascript: void(0);' id='apsl-more-wordpress-resources' class='nav-tab' ><span><i class="fa fa-wordpress"></i></span> <?php esc_attr_e('More WordPress Resources', APSL_TEXT_DOMAIN) ?></a>
                            </ul>
                    </div>
                    <div class='apsl-setting-tabs-wrapper'>
                        <div class='apsl-tab-contents' id='tab-apsl-networks-settings'>
                            <?php include(APSL_PLUGIN_DIR . 'inc/backend/networks-settings.php'); ?>
                        </div>

                        <div class='apsl-tab-contents' id='tab-apsl-theme-settings' style="display:none">
                            <?php include(APSL_PLUGIN_DIR . 'inc/backend/theme-settings.php'); ?>
                        </div>

                        <?php if (function_exists('bp_has_profile')) { ?>
                            <div class='apsl-tab-contents' id='tab-apsl-buddypress-settings' style="display:none">
                                <?php include(APSL_PLUGIN_DIR . 'inc/backend/buddypress-settings.php'); ?>
                            </div>
                        <?php } ?>

                        <!-- how to use section -->
                        <div class='apsl-tab-contents' id='tab-apsl-how-to-use' style="display:none">
                            <?php include(APSL_PLUGIN_DIR . 'inc/backend/how-to-use.php'); ?>
                        </div>

                        <!-- about section -->
                        <div class='apsl-tab-contents' id='tab-apsl-about' style="display:none">
                            <?php include(APSL_PLUGIN_DIR . 'inc/backend/about.php'); ?>
                        </div>
                        <div class='apsl-tab-contents' id='tab-apsl-more-wordpress-resources' style="display:none">
                            <?php include( APSL_PLUGIN_DIR . 'inc/backend/more-wordpress-resources.php' ); ?>
                        </div>
                        <!-- Save settings Button -->
                        <div class='apsl-save-settings'>
                            <?php wp_nonce_field('apsl_nonce_save_settings', 'apsl_settings_action'); ?>
                            <input type='submit' class='apsl-submit-settings primary-button' name='apsl_save_settings' value='<?php esc_attr_e('Save settings', APSL_TEXT_DOMAIN); ?>' />
                        </div>

                        <div class='apsl-restore-settings'>
                            <?php $nonce = wp_create_nonce('apsl-restore-default-settings-nonce'); ?>
                            <a href="<?php echo admin_url() . 'admin-post.php?action=apsl_restore_default_settings&_wpnonce=' . $nonce; ?>" onclick="return confirm('<?php esc_attr_e('Are you sure you want to restore default settings?', APSL_TEXT_DOMAIN); ?>')"><input type="button" value="Restore Default Settings" class="apsl-reset-button button primary-button"/></a>
                            <?php if (isset($options['network_ordering']) && !in_array('yahoo', $options['network_ordering'])) { ?>
                                <a href="<?php echo admin_url() . 'admin-post.php?action=apsl_add_new_network_array&_wpnonce=' . $nonce; ?>" onclick="return confirm('<?php esc_attr_e('Add New Social Login Sites? 3 new Social sites will be added. Since version >= 2.0.0.', APSL_TEXT_DOMAIN); ?>')"><input type="button" value="Insert New Social Login Sites" class="apsl-reset-button button primary-button"/></a>
                                <?php } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>