<div class='network-settings'>
    <?php
    if (isset($options['network_ordering']) && !empty($options['network_ordering'])) {
        foreach ($options['network_ordering'] as $key => $value):
            ?>
            <?php
            switch ($value) {
                case 'facebook':
                    ?>
                    <div class='apsl-settings apsl-facebook-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_facebook_settings']['apsl_facebook_enable']) && $options['apsl_facebook_settings']['apsl_facebook_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-facebook-square"></i></span> <?php esc_attr_e("Facebook", APSL_TEXT_DOMAIN); ?><span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'>
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type='hidden' name='network_ordering[]' value='facebook' />
                                <input type="checkbox" id='aspl-facbook-enable' value='enable' name='apsl_facebook_settings[apsl_facebook_enable]' <?php checked('enable', $options['apsl_facebook_settings']['apsl_facebook_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('App ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-facebook-app-id' name='apsl_facebook_settings[apsl_facebook_app_id]' value='<?php
                                if (isset($options['apsl_facebook_settings']['apsl_facebook_app_id'])) {
                                    echo $options['apsl_facebook_settings']['apsl_facebook_app_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('App Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-facebook-app-secret' name='apsl_facebook_settings[apsl_facebook_app_secret]' value='<?php
                                if (isset($options['apsl_facebook_settings']['apsl_facebook_app_secret'])) {
                                    echo $options['apsl_facebook_settings']['apsl_facebook_app_secret'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-fb-profile-image-size'>
                                <label><?php esc_attr_e('Profile picture image size', APSL_TEXT_DOMAIN); ?></label><br />
                                <label for='apsl-fb-profile-image-width'><?php esc_attr_e('Width:', APSL_TEXT_DOMAIN); ?></label>  <input type='number' name='apsl_facebook_settings[apsl_profile_image_width]' id='apsl-fb-profile-image-width' value='<?php
                                if (isset($options['apsl_facebook_settings']['apsl_profile_image_width'])) {
                                    echo $options['apsl_facebook_settings']['apsl_profile_image_width'];
                                }
                                ?>' style="width: 60px;" /> px
                                <br />
                                <label for='apsl-fb-profile-image-height'><?php esc_attr_e('Height:', APSL_TEXT_DOMAIN); ?></label> <input type='number' name='apsl_facebook_settings[apsl_profile_image_height]' id='apsl-fb-profile-image-height' value='<?php
                                if (isset($options['apsl_facebook_settings']['apsl_profile_image_height'])) {
                                    echo $options['apsl_facebook_settings']['apsl_profile_image_height'];
                                }
                                ?>' style="width: 60px;" /> px
                                <div class='apsl-info'><?php esc_attr_e('Please note that the facebook might not provide the exact dimention of the image as settings above.', APSL_TEXT_DOMAIN); ?></div>
                            </div>
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to create a new facebook API Applitation to setup facebook login. Please follow the instructions to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <br />
                                <ul class='apsl-info-lists'>
                                    <li><b><?php esc_attr_e('Please note:', APSL_TEXT_DOMAIN); ?></b><?php esc_attr_e(' We have now updated our facbook sdk version to 5.0 so to make the facebook login work you need to have PHP version 5.4 at least.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Go to ', APSL_TEXT_DOMAIN); ?><a href='//developers.facebook.com/apps' target='_blank'>//developers.facebook.com/apps</a>.</li>
                                    <li><?php esc_attr_e('click on "Add a New App" button. A popup will open.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Now please enter the name of the app as you wish and enter your contact Email.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Now click on "Create App ID" button. Again a popup will appear with security check. Please enter the security and submit.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('You should now be able to see your App Dashboard. On the left side, you have a navigation panel.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Go to Settings -> Basic and enter your contact email and privacy policy URL(Required).', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Again Go to Settings-> Basic and choose to Add Platform and choose website.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter your site URL and Save Changes. Facebook app are site specific so an app can be used only for one website. If you want to use this app for a different site, just change site URL.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('In the application page in facebook, navigate to Apps >Add Product > Facebook Login >Quickstart >Web > Site URL. Set the site url as your site url(which is given below as a note at the end of this note).', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('And then navigate to Apps > Facebook Login > Settings. There Please set the Use Strict Mode for Redirect URIs as Yes.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Please configure the Valid OAuth redirect URIs(which is given below as a note at the end of this note).', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('In the landing page you will find the API version, App ID, App Secret. To view your App secret please click on "Show" button. Those are the required App ID and App Secret to be entered in our plugin settings.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('The next thing is to make this app Public. To do this check your left panel for App Review. You will see Make [Your App Name] Public. Slider the button to enable it.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('And you are done! You can check for your App ID and App Secret from your Dashboard.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Site url:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' /></li>
                                    <li><?php esc_attr_e('Valid Oauth redirect URIs:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>/wp-login.php?apsl_login_id=facebook_check' readonly='readonly' /><br /><input type='text' value='<?php echo site_url(); ?>/admin.php?apsl_login_id=facebook_check' readonly='readonly' /></li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>

                <?php case 'twitter': ?>
                    <div class='apsl-settings apsl-twitter-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_twitter_settings']['apsl_twitter_enable']) && $options['apsl_twitter_settings']['apsl_twitter_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'> <span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>-square"></i></span> <?php esc_attr_e("Twitter", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-twitter-enable' value='enable' name='apsl_twitter_settings[apsl_twitter_enable]' <?php checked('enable', $options['apsl_twitter_settings']['apsl_twitter_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>

                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Consumer Key (API Key):', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-twitter-app-id' name='apsl_twitter_settings[apsl_twitter_api_key]' value='<?php
                                if (isset($options['apsl_twitter_settings']['apsl_twitter_api_key'])) {
                                    echo $options['apsl_twitter_settings']['apsl_twitter_api_key'];
                                }
                                ?>' />
                            </div>

                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Consumer Secret (API Secret):', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-twitter-app-secret' name='apsl_twitter_settings[apsl_twitter_api_secret]' value='<?php
                                if (isset($options['apsl_twitter_settings']['apsl_twitter_api_secret'])) {
                                    echo $options['apsl_twitter_settings']['apsl_twitter_api_secret'];
                                }
                                ?>' />
                            </div>

                            <input type='hidden' name='network_ordering[]' value='twitter' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?> <br /> </span>
                                <span class='apsl-info-content'><?php esc_attr_e('You need to create new twitter API application to setup the twitter login. Please follow the instructions to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to ', APSL_TEXT_DOMAIN); ?><a href='//apps.twitter.com/' target='_blank'>//apps.twitter.com/</a></li>
                                    <li><?php esc_attr_e('Click on Create New App button. A new application details form will appear. Please fill up the application details and click on "create your twitter application" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Please note that before creating twiiter API application, You must add your mobile phone to your Twitter profile.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('After successful creation of the app. Please go to "Keys and Access Tokens" tabs and get Consumer key(API Key) and Consumer secret(API secret).', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Website:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>' readonly='readonly'/></li>
                                    <li><?php esc_attr_e('Callback URL: ', APSL_TEXT_DOMAIN); ?><input type='text' value='<?php echo site_url(); ?>/wp-login.php' readonly='readonly'/></li>
                                    <li><?php _e("Note: To get the user's email address please go to app's permission tab and in additional Permissions there you will find a checkbox to request for user email address. Please enable it. To enable it you need to enter privacy policy url and terms of service url. <br /> If you have enabled the <strong>callback locking</strong> please use the Callback URL as given above.", APSL_TEXT_DOMAIN); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                    break;

                case 'google':
                    ?>
                    <div class='apsl-settings apsl-google-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>-plus"></i></span> <?php esc_attr_e("Google", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-google-enable' value='enable' name='apsl_google_settings[apsl_google_enable]' <?php checked('enable', $options['apsl_google_settings']['apsl_google_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-google-client-id' name='apsl_google_settings[apsl_google_client_id]' value='<?php
                                if (isset($options['apsl_google_settings']['apsl_google_client_id'])) {
                                    echo $options['apsl_google_settings']['apsl_google_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-google-client-secret' name='apsl_google_settings[apsl_google_client_secret]' value='<?php
                                if (isset($options['apsl_google_settings']['apsl_google_client_secret'])) {
                                    echo $options['apsl_google_settings']['apsl_google_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='google' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span> <br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to create new google API application to setup the google login. Please follow the instructions to create new application.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//console.developers.google.com/project' target='_blank'>//console.developers.google.com/project.</a> </li>
                                    <li><?php esc_attr_e('Click on "Create Project" button. A popup will appear.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Please enter Project name and click on "Create" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('An App will be created and a dashobard will appear.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Then please click on the "Go to APIs Overview"', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('In the blue box please click on Enable and manage APIs link. A new page will load.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Now In the Social APIs section click on Google+ API and click "Enable API" button. Then the Google+ API will be activated.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Then click on Blue button labeled "Manage".', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Now click on "Credentials" section as seen on left side of the screen and you will land on OAuth consent list screen.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Click on Credentials tab and click on "New credentials" or "Add credentials" if you have already created one, a selection will appear and click on "OAuth client ID".', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('A new page will load. Please select Application type to Web application and click "create" button. Further forms will loaded up and enter the details there.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('In the authorized redirect URIs please enter the details provided in the note section from plugin and click save button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('In the popup you will get Client ID and client secret.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('And please enter those credentials in the google setting in our plugin.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Rediret uri setup:', APSL_TEXT_DOMAIN); ?><br />
                                        <?php esc_attr_e('Please use', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>/wp-login.php?apsl_login_id=google_check' readonly='readonly'/> - <?php esc_attr_e('for wordpress login page.', APSL_TEXT_DOMAIN); ?><br />
                                        <?php esc_attr_e('Please use', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>/index.php?apsl_login_id=google_check' readonly='readonly'/> - <?php esc_attr_e('if you have used the shortcode or widget in frontend.', APSL_TEXT_DOMAIN); ?>
                                    </li>
                                    <li>
                                        <?php esc_attr_e('Please note: Make sure to check the protocol', APSL_TEXT_DOMAIN); ?> "http://" <?php esc_attr_e('or', APSL_TEXT_DOMAIN); ?> "//" <?php esc_attr_e('as google checks protocol as well. Better to add both URL in the list if you site is https so that google social login work properly for both https and http browser.', APSL_TEXT_DOMAIN); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>	
                    </div>
                    <?php break; ?>

                <?php case 'linkedin': ?>
                    <div class='apsl-settings apsl-linkedin-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'> <span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>-square"></i></span> <?php esc_attr_e("LinkedIn", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-linkedin-enable' value='enable' name='apsl_linkedin_settings[apsl_linkedin_enable]' <?php checked('enable', $options['apsl_linkedin_settings']['apsl_linkedin_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-linkedin-client-id' name='apsl_linkedin_settings[apsl_linkedin_client_id]' value='<?php
                                if (isset($options['apsl_linkedin_settings']['apsl_linkedin_client_id'])) {
                                    echo $options['apsl_linkedin_settings']['apsl_linkedin_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-linkedin-client-secret' name='apsl_linkedin_settings[apsl_linkedin_client_secret]' value='<?php
                                if (isset($options['apsl_linkedin_settings']['apsl_linkedin_client_secret'])) {
                                    echo $options['apsl_linkedin_settings']['apsl_linkedin_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='linkedin' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to create a new linkedin API application to setup the linkedin login. Please follow the instrcutions to create new application.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//www.linkedin.com/developer/apps' target='_blank'>//www.linkedin.com/developer/apps</a></li>
                                    <li><?php esc_attr_e('Enter the application name,company name,privacy policy url and  upload app logo.Check the API Terms of Use and click on create app.', APSL_TEXT_DOMAIN); ?>
                                    <li><?php esc_attr_e('Click on Auth and enter ', APSL_TEXT_DOMAIN); ?>
                                    <input type='text' value='<?php echo site_url(); ?>/wp-login.php' readonly='readonly' /><br />
                                    <?php esc_attr_e('as Redirect URLs and click on Update',APSL_TEXT_DOMAIN); ?>   </li> 
                                    <li><?php esc_attr_e('On the same page you will be able to see your Client ID and Client Secret under the Application credentials section.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Copy them and Paste them into the fields above.', APSL_TEXT_DOMAIN); ?></li>
<!--                                    <li><?php //esc_attr_e('OAuth 1.0a', APSL_TEXT_DOMAIN); ?> <br />
                                        <?php //esc_attr_e('Default "Accept" Redirect URL:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php //echo site_url(); ?>' readonly='readonly' /> <br />
                                        <?php //esc_attr_e('Default "Cancel" Redirect URL:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php //echo site_url(); ?>' readonly='readonly' /> <br />
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>


                <?php case 'instagram': ?>
                    <div class='apsl-settings apsl-instagram-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("Instagram", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'>
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-instagram-enable' value='enable' name='apsl_instagram_settings[apsl_instagram_enable]' <?php checked('enable', $options['apsl_instagram_settings']['apsl_instagram_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('App ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-instagram-api_key' name='apsl_instagram_settings[apsl_instagram_api_key]' value='<?php
                                if (isset($options['apsl_instagram_settings']['apsl_instagram_api_key'])) {
                                    echo $options['apsl_instagram_settings']['apsl_instagram_api_key'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('App Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-instagram-api-secret' name='apsl_instagram_settings[apsl_instagram_api_secret]' value='<?php
                                if (isset($options['apsl_instagram_settings']['apsl_instagram_api_secret'])) {
                                    echo $options['apsl_instagram_settings']['apsl_instagram_api_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='instagram' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('After the latest changes in Instagram API, we have used Instagram Basic Display API which allows users of the app to get the basic profile information.But Instagram Basic Display is not an authentication solution. If you need an authentication solution we recommend using Facebook Login instead (as said by instagram itself).But for now, you can assign Instagram user as a tester and then login with the same account.', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new application to setup the instagram social login. Please follow the instructions to create new applications.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='https://developers.facebook.com/products/instagram/' target='_blank'>https://developers.facebook.com/products/instagram/</a></li>
                                    <li><?php esc_attr_e('Click on My Apps, and create a new app.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Navigate to Settings > Basic, scroll the bottom of page, and click Add Platform.
                                        Choose Website, add your website’s URL, enter the site url as', APSL_TEXT_DOMAIN); ?><br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' /><br />
                                            <?php esc_attr_e(' and save your changes.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter your privacy policy URL in Privacy Policy URL and select Category of your website and then click on Save Changes', APSL_TEXT_DOMAIN); ?></li>
                                    <li> <?php esc_attr_e('Click on Products, locate the Instagram product, and click Set Up to add it to your app.
Click Basic Display, scroll to the bottom of the page, then click Create New App.', APSL_TEXT_DOMAIN); ?><br />
                                        <!--<input type='text' value='<?php //echo site_url(); ?>' readonly='readonly' /> - <?php //esc_attr_e('If you have used the shortcode or widget in home page.', APSL_TEXT_DOMAIN); ?>  <br />
                                        <input type='text' value='<?php //echo site_url(); ?>/wp-login.php' readonly='readonly' /> - <?php //esc_attr_e('For wordpress default login.', APSL_TEXT_DOMAIN); ?> <br />
                                        <input type='text' value='<?php //echo site_url(); ?>/index.php' readonly='readonly' /> - <?php //esc_attr_e('If you have used the shortcode or widget in home page or other pages.', APSL_TEXT_DOMAIN); ?> <br />-->
                                    </li>
                                    <li><?php esc_attr_e('Enter the valid redirect URL as', APSL_TEXT_DOMAIN); ?><br />
                                        <input type='text' value='<?php echo site_url(); ?>/apsl_instagram_check' readonly='readonly' />
                                    </li>
                                    <li><?php esc_attr_e('Navigate to Roles > Roles and scroll down to the Instagram Testers section. Click Add Instagram Testers and enter your Instagram account’s username and send the invitation.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Change your app status from In Development to Live.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Open a new web browser and go to www.instagram.com and sign into your Instagram account that you just invited. Navigate to (Profile Icon) > Edit Profile > Apps and Websites > Tester Invites and accept the invitation.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Now Click on Instagram from the left menu and then click on Basic Display option, copy the instagram app ID and instagram app secret from there.', APSL_TEXT_DOMAIN); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>

                <?php case 'foursquare': ?>
                    <div class='apsl-settings apsl-foursquare-settings'>
                        <!-- foursquare Settings -->
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("Foursquare", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'>
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-foursquare-enable' value='enable' name='apsl_foursquare_settings[apsl_foursquare_enable]' <?php checked('enable', $options['apsl_foursquare_settings']['apsl_foursquare_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-foursquare-client-id' name='apsl_foursquare_settings[apsl_foursquare_client_id]' value='<?php
                                if (isset($options['apsl_foursquare_settings']['apsl_foursquare_client_id'])) {
                                    echo $options['apsl_foursquare_settings']['apsl_foursquare_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-foursquare-client-secret' name='apsl_foursquare_settings[apsl_foursquare_client_secret]' value='<?php
                                if (isset($options['apsl_foursquare_settings']['apsl_foursquare_client_secret'])) {
                                    echo $options['apsl_foursquare_settings']['apsl_foursquare_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='foursquare' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new app to setup the foursquare social login. Please follow the instructions below to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//foursquare.com/developers/apps' target='_blank'>//foursquare.com/developers/apps</a></li>
                                    <li><?php esc_attr_e('Click on "Create a new app" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter the required details in the form and click the "Save Changes" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Get the client id and client secret.', APSL_TEXT_DOMAIN); ?></li>
                                    <li> <?php esc_attr_e('Redirect URI(s) :', APSL_TEXT_DOMAIN); ?> <br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>

                <?php case 'wordpress': ?>
                    <div class='apsl-settings apsl-wordpress-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("WordPress", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-wordpress-enable' value='enable' name='apsl_wordpress_settings[apsl_wordpress_enable]' <?php checked('enable', $options['apsl_wordpress_settings']['apsl_wordpress_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-wordpress-client-id' name='apsl_wordpress_settings[apsl_wordpress_client_id]' value='<?php
                                if (isset($options['apsl_wordpress_settings']['apsl_wordpress_client_id'])) {
                                    echo $options['apsl_wordpress_settings']['apsl_wordpress_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-wordpress-client-secret' name='apsl_wordpress_settings[apsl_wordpress_client_secret]' value='<?php
                                if (isset($options['apsl_wordpress_settings']['apsl_wordpress_client_secret'])) {
                                    echo $options['apsl_wordpress_settings']['apsl_wordpress_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='wordpress' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new app to setup the wordpress social login. Please follow the instructions below to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//developer.wordpress.com/apps/' target='_blank'>//developer.wordpress.com/apps/</a></li>
                                    <li><?php esc_attr_e('Click on "Create new Application" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter the required details in the form and click the "Create" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('A message will appear informing the application has been created.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Click on the Application link to get the application details.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Get the oauth details - client id and client secret there.', APSL_TEXT_DOMAIN); ?></li>
                                    <li> <?php esc_attr_e('Redirect URL:', APSL_TEXT_DOMAIN); ?><br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' />
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <?php break; ?>
                <?php case 'vk': ?>
                    <div class='apsl-settings apsl-vk-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("VKontakte", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-vk-enable' value='enable' name='apsl_vk_settings[apsl_vk_enable]' <?php checked('enable', $options['apsl_vk_settings']['apsl_vk_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('App ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-vk-app-id' name='apsl_vk_settings[apsl_vk_app_id]' value='<?php
                                if (isset($options['apsl_vk_settings']['apsl_vk_app_id'])) {
                                    echo $options['apsl_vk_settings']['apsl_vk_app_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Secure Key:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-vk-secure_key' name='apsl_vk_settings[apsl_vk_secure_key]' value='<?php
                                if (isset($options['apsl_vk_settings']['apsl_vk_secure_key'])) {
                                    echo $options['apsl_vk_settings']['apsl_vk_secure_key'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='vk' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new app to setup the VKontakte social login. Please follow the instructions below to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//vk.com/apps?act=manage' target='_blank'>//vk.com/apps?act=manage</a></li>
                                    <li><?php esc_attr_e('Click on "Create an Application" button. Enter the title, and please choose website as category, enter the site address and base domain. And click "Connect site". Now a popup will appear and you will receive a confirmation code in text message in your mobile device after clicking "get code" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('After that you need to give addition information about the application and click save.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Now click on Settings tab and there you will get the application id and secure key.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Open API:', APSL_TEXT_DOMAIN); ?> <br />
                                        <?php esc_attr_e('Site Address:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>/wp-login.php' readonly='readonly' />
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <?php break; ?>

                <?php case 'buffer': ?>
                    <div class='apsl-settings apsl-buffer-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("Buffer", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-buffer-enable' value='enable' name='apsl_buffer_settings[apsl_buffer_enable]' <?php checked('enable', $options['apsl_buffer_settings']['apsl_buffer_enable']); ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-buffer-client-id' name='apsl_buffer_settings[apsl_buffer_client_id]' value='<?php
                                if (isset($options['apsl_buffer_settings']['apsl_buffer_client_id'])) {
                                    echo $options['apsl_buffer_settings']['apsl_buffer_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-buffer-client-secret' name='apsl_buffer_settings[apsl_buffer_client_secret]' value='<?php
                                if (isset($options['apsl_buffer_settings']['apsl_buffer_client_secret'])) {
                                    echo $options['apsl_buffer_settings']['apsl_buffer_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='buffer' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span>
                                <span class="apsl-info-content"><?php esc_attr_e('As of October 14th, 2019, Buffer no longer supports the registration of new developer applications.So only those user who created applications in buffer before October 14th, 2019 can make use of buffer login.', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('For those user who had their applications registerd before above mentioned time can follow below instructions to setup the buffer social login.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//buffer.com/developers/apps' target='_blank'>//buffer.com/developers/apps</a></li>
                                    <li><?php esc_attr_e('Click on "Create an App" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter the application details and click on "Create application" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Get the client id and client secret.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Redirect URI:', APSL_TEXT_DOMAIN); ?> <br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>
                <?php case 'tumblr': ?>
                    <div class='apsl-settings apsl-buffer-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("Tumblr", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><span class="apsl-new-setting-span" ><?php esc_attr_e('New Setting', APSL_TEXT_DOMAIN); ?></span><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-<?php echo $value; ?>-enable' value='enable' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_enable]' <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'checked' : ''; ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-buffer-client-id' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_id]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-buffer-client-secret' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_secret]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='tumblr' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new app to setup the tumblr social login. Please follow the instructions below to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//www.tumblr.com/oauth/apps' target='_blank'>//www.tumblr.com/oauth/register</a></li>
                                    <li><?php esc_attr_e('Click on "Register application" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter the "Register your application" page. And after filling reqiored detaiils, please click"Register" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Get the client id and client secret.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Site URI:', APSL_TEXT_DOMAIN); ?> <br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' />
                                    </li>
                                    <li><?php esc_attr_e('Valid Oauth redirect URIs:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>/wp-login.php?apsl_login_id=tumblr_check' readonly='readonly' /><br /><input type='text' value='<?php echo site_url(); ?>/admin.php?apsl_login_id=tumblr_check' readonly='readonly' /></li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>
                <?php case 'reddit': ?>
                    <div class='apsl-settings apsl-buffer-settings'>
                        <!-- Buffer Settings -->
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("Reddit", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><span class="apsl-new-setting-span" ><?php esc_attr_e('New Setting', APSL_TEXT_DOMAIN); ?></span><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-<?php echo $value; ?>-enable' value='enable' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_enable]' <?php echo $value; ?>_enable]' <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'checked' : ''; ?>  />
                                       <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-<?php echo $value; ?>-client-id' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_id]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-<?php echo $value; ?>-client-secret' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_secret]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='reddit' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new app to setup the Reddit social login. Please follow the instructions below to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//www.reddit.com/prefs/apps' target='_blank'>//www.reddit.com/prefs/apps</a></li>
                                    <li><?php esc_attr_e('Click on "Register application" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter the "Register your application" page. And after filling reqiored detaiils, please click"Register" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Get the client id and client secret.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Site URI:', APSL_TEXT_DOMAIN); ?> <br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' />
                                    </li>
                                    <li><?php esc_attr_e('Valid Oauth redirect URIs:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>/wp-login.php?apsl_login_id=reddit_check' readonly='readonly' /><br />
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>
                <?php case 'yahoo': ?>
                    <div class='apsl-settings apsl-buffer-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("Yahoo", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><span class="apsl-new-setting-span" ><?php esc_attr_e('New Setting', APSL_TEXT_DOMAIN); ?></span><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-<?php echo $value; ?>-enable' value='enable' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_enable]' <?php echo $value; ?>_enable]' <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'checked' : ''; ?>  />
                                       <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-<?php echo $value; ?>-client-id' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_id]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-<?php echo $value; ?>-client-secret' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_secret]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='<?php echo $value; ?>' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new app to setup the Reddit social login. Please follow the instructions below to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//developer.yahoo.com/apps/create/' target='_blank'>//developer.yahoo.com/apps/create/</a></li>
                                    <li><?php esc_attr_e('Click on "Register application" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter the "Register your application" page. And after filling reqiored detaiils, please click"Register" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Get the client id and client secret.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Site URI:', APSL_TEXT_DOMAIN); ?> <br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' />
                                    </li>
                                    <li><?php esc_attr_e('Valid Oauth redirect URIs:', APSL_TEXT_DOMAIN); ?> 
                                        <input type='text' value='<?php echo site_url(); ?>/apsl_yahoo_check' readonly='readonly' /><br />
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>
                <?php case 'weibo': ?>
                    <div class='apsl-settings apsl-buffer-settings'>
                        <div class='apsl-label <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'apsl-active-network' : ''; ?>'><span class="social-link-display-icon social-link-display-icon-<?php echo $value; ?>"><i class="fa fa-<?php echo $value; ?>"></i></span> <?php esc_attr_e("Weibo", APSL_TEXT_DOMAIN); ?> <span class='apsl_show_hide' id='apsl_show_hide_<?php echo $value; ?>'><span class="apsl-new-setting-span" ><?php esc_attr_e('New Setting', APSL_TEXT_DOMAIN); ?></span><i class="fa fa-caret-down"></i></span> </div>
                        <div class='apsl_network_settings_wrapper' id='apsl_network_settings_<?php echo $value; ?>' style='display:none'>
                            <div class='apsl-enable-disable apsl-even-class'> 
                                <label><?php esc_attr_e('Enable?', APSL_TEXT_DOMAIN); ?></label>
                                <input type="checkbox" id='aspl-<?php echo $value; ?>-enable' value='enable' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_enable]' <?php echo isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable']) && $options['apsl_' . $value . '_settings']['apsl_' . $value . '_enable'] == 'enable' ? 'checked' : ''; ?>  />
                                <div class="apsl-check round"></div>
                            </div>
                            <div class='apsl-app-id-wrapper apsl-odd-class'>
                                <label><?php esc_attr_e('Client ID:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-<?php echo $value; ?>-client-id' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_id]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_id'];
                                }
                                ?>' />
                            </div>
                            <div class='apsl-app-secret-wrapper apsl-even-class'>
                                <label><?php esc_attr_e('Client Secret:', APSL_TEXT_DOMAIN); ?></label><input type='text' id='apsl-<?php echo $value; ?>-client-secret' name='apsl_<?php echo $value; ?>_settings[apsl_<?php echo $value; ?>_client_secret]' value='<?php
                                if (isset($options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'])) {
                                    echo $options['apsl_' . $value . '_settings']['apsl_' . $value . '_client_secret'];
                                }
                                ?>' />
                            </div>
                            <input type='hidden' name='network_ordering[]' value='<?php echo $value; ?>' />
                            <div class='apsl-info'>
                                <span class='apsl-info-note'><?php esc_attr_e('Note:', APSL_TEXT_DOMAIN); ?></span><br />
                                <span class='apsl-info-content'><?php esc_attr_e('You need to register a new app to setup the Reddit social login. Please follow the instructions below to create new app.', APSL_TEXT_DOMAIN); ?></span>
                                <ul class='apsl-info-lists'>
                                    <li><?php esc_attr_e('Go to', APSL_TEXT_DOMAIN); ?> <a href='//www.weibo.com/prefs/apps' target='_blank'>//www.weibo.com/prefs/apps</a></li>
                                    <li><?php esc_attr_e('Click on "Register application" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Enter the "Register your application" page. And after filling reqiored detaiils, please click"Register" button.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Get the client id and client secret.', APSL_TEXT_DOMAIN); ?></li>
                                    <li><?php esc_attr_e('Site URI:', APSL_TEXT_DOMAIN); ?> <br />
                                        <input type='text' value='<?php echo site_url(); ?>' readonly='readonly' />
                                    </li>
                                    <li><?php esc_attr_e('Valid Oauth redirect URIs:', APSL_TEXT_DOMAIN); ?> <input type='text' value='<?php echo site_url(); ?>/wp-login.php?apsl_login_id=<?php echo $value; ?>_check' readonly='readonly' /><br />
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php break; ?>
                <?php
                default:
                    ?>
                    <div class="apsl-label apsl-no-setting-social-notice">
                        <p><?php echo __('No fields settings for ' . $value . ' found', APSL_TEXT_DOMAIN) . '<br/>'; ?></p>
                    </div>
                    <?php
                    break;
            }
            ?>
            <?php
        endforeach;
    } else {
        ?>
        <div class='apsl-settings apsl-no-setting-table-notice'>
            <div class='apsl-label'>
                <?php echo __('No table found. Please try "Restore Default Setting" or "Reactivating the plugin."', APSL_TEXT_DOMAIN); ?>
            </div>
        </div>
    <?php }
    ?>
</div>