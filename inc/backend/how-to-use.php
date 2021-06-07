<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
<dl>
    <dd>There are 2 main settings tabs that will help you to setup the plugin to work properly.</dd>
    <dt><div class='ap-title'><strong>Network Settings:</strong></div></dt>
    <dd>In this tab you can enable and disable the available social medias as per your need. Also you can order the appearance of the social medias simply by drag and drop.
    </dd>
    <p>For each social media you can</p>
    <ul class='how-list'>
        <li><strong>Enable/Disable:</strong> You can enable and disable the social media.</li>
        <li><strong>App ID:</strong> App id of the social media.</li>
        <li><strong>App secret:</strong> App secret of the social media.</li>
    </ul>
    To get the App ID and App Secret please follow the instructions(notes).

    <dt><div class='ap-title'><strong>Other settings:</strong></div></dt>
    <dd>
        <p>In this tab you can do various settings of a plugin.</p>
        <ul class="how-list">
            <li>Enable or disable the social login.</li>
            <li>Options to enable the social logins for login form, registration form and in comments.</li>
            <li><strong>Set user role:</strong> Here you can assign the users role. These roles will be assigned only to those user who have login/register through accesspress social login plugin.</li>
            <li>Options to choose the pre available themes, You can choose any one theme from the pre available 10 themes.</li>
            <li><strong>Text settings:</strong>
                <ul>
                    <li><strong>Login text:</strong> Here you can setup the login text as per your need.</li>
                    <li><strong>Login short text:</strong> Here you can setup the login short text. If you kept blank "Login" text will appear.</li>
                    <li><strong>login with long text:</strong> Here you can setup the login long text. If you kept blank "Login with" text will appear.</li>
                    <li><strong>Link title attribute:</strong> Here you can setup the link title attributes for social icons.</li>
                    <li><strong>Login error message:</strong> Here you can setup the login error message. If kept blank default error message will appear.</li>
                </ul>
            </li>
            <li><strong>Logout redirect link:</strong> Here you can setup the redirect link for the user when user logout from a site using our plugin's logout button.</li>
            <li><strong>Login redirect link:</strong> Here you can setup the redirect link for the user when user login/register from a site using our plugin's login buttons.</li>
            <li><strong>User avatar:</strong> Here you can choose an options to display the user avatar from provided social medias or wordpress default avatar. </li>
            <li><strong>Email notification settings:</strong> Here you can choose an option either notify user and admin about user registration.</li>
        </ul>
    </dd>

    <dt><div class='ap-title'><strong>Shortcode:</strong></div></dt>
    <dd><p>You can use shortcode for the display of the social logins in the contents of a posts and pages.
        <ul class="how-list">
            <li><strong>Example 1:</strong></li>
            <div class="ap-title">[apsl-login theme='2' login_text='Social Connect' login_redirect_url='<?php echo site_url(); ?>']</div>
            <li><strong>Shortcode attributes:</strong> <br />
                i. <strong>theme:</strong> you can set the theme attributes from 1 to 30 to select the desired theme.<br />
                ii. <strong>login_text:</strong> you can use the custom login text for the shortcodes using this attribute.<br />
                iii. <strong>login_redirect_url:</strong> You can set the login redirect url explicitly by defining here(if the login redirect can't detect the provided url it will be redirected back to home page).
            </li>

            <li><strong>Example 2:</strong></li>
            <div class="ap-title">[apsl-login-with-login-form template='3' theme='1' login_text='Please login to site' login_redirect_url='<?php echo site_url(); ?>']</div>
            <li><strong>Shortcode attributes:</strong> <br />
            <li>i. <strong>template:</strong> You can select the design of the social login with login form using this attributes. There are all together 4 templates available.</li>
            <li>ii. <strong>theme:</strong> You can set the theme attributes from 1 to 17 to select the desired theme.</li>
            <li>iii. <strong>login_text:</strong> You can use the custom login text for the shortcodes using this attribute.</li>
            <li>iv. <strong>login_redirect_url :</strong> You can set the login redirect url explicitly by defining here(if the login redirect can't detect the provided url it will be redirected back to home page).
            </li>


        </ul>
        </p></dd>

    <dt><div class='ap-title'><strong>Widget:</strong></div></dt>
    <dd>
        <p>You can use widget for the display of the social logins in the widgets area. <br/>
        <ul class="how-list">
            <li><strong>Widget attributes </strong><br />
                i. <strong>Title:</strong> You can setup the widget title here.<br />
                ii. <strong>Login text:</strong> You can setup the login text here.<br />
                iii. <strong>Theme:</strong> You can choose any theme from the available dropdown options.<br />
            </li>
        </ul>
    </dd>

</dl>



