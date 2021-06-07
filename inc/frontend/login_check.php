<?php

defined('ABSPATH') or die("No script kiddies please!");

if (isset($_GET['apsl_login_id'])) {

    if (isset($_REQUEST['state'])) {
        parse_str(base64_decode($_REQUEST['state']), $state_vars);

        if (isset($state_vars['redirect_to'])) {
            $_GET['redirect_to'] = $_REQUEST['redirect_to'] = $state_vars['redirect_to'];
        }
    }

    $exploder = explode('_', $_GET['apsl_login_id']);
    switch ($exploder[0]) {
        case 'facebook':
        if (version_compare(PHP_VERSION, '5.4.0', '<')) {
            echo _e('The Facebook SDK requires PHP version 5.4 or higher. Please notify about this error to site admin.', APSL_TEXT_DOMAIN);
            die();
        }
        onFacebookLogin();
        break;

        case 'twitter':
        if (!class_exists('TwitterOAuth')) {
            include( APSL_PLUGIN_DIR . 'twitter/OAuth.php' );
            include( APSL_PLUGIN_DIR . 'twitter/twitteroauth.php' );
        }
        onTwitterLogin();
        break;

        case 'google':
        include( APSL_PLUGIN_DIR . 'google/Client.php' );
        include( APSL_PLUGIN_DIR . 'google/Service/Oauth2.php' );
        onGoogleLogin();
        break;

        case 'linkedin':
        include( APSL_PLUGIN_DIR . 'linkedin/LinkedIn.OAuth2.class.php' );
        onLinkedInLogin();
        break;

        case 'instagram':
        include( APSL_PLUGIN_DIR . 'instagram/instagram.class.php' );
        include( APSL_PLUGIN_DIR . 'instagram/InstagramException.php' );
        onInstagramLogin();
        break;

        case 'foursquare':
        onFourSquareLogin();
        break;

        case 'wordpress':
        onWordPressLogin();
        break;

        case 'vk':
        include( APSL_PLUGIN_DIR . 'vk/vk.php' );
        include( APSL_PLUGIN_DIR . 'vk/vkException.php' );
        onVkLogin();
        break;

        case 'buffer':
        onBufferLogin();
        break;
        case 'tumblr':
            include( APSL_PLUGIN_DIR . 'Tumblr/Eher/OAuth/SignatureMethod/SignatureMethod.php'); //2
            include( APSL_PLUGIN_DIR . 'Tumblr/API/Client.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/API/RequestException.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Eher/OAuth/Token.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/API/RequestHandler.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Eher/OAuth/HmacSha1.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/ClientInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr7/functions.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Client.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/HandlerStack.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/functions.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Handler/Proxy.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Handler/CurlMultiHandler.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Handler/CurlFactoryInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Handler/CurlFactory.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Handler/CurlHandler.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Handler/StreamHandler.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Middleware.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/RedirectMiddleware.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/RequestOptions.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Eher/OAuth/Consumer.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Eher/OAuth/Request.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Eher/OAuth/Util.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr/Http/Message/UriInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr7/Uri.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr/Http/Message/MessageInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr/Http/Message/RequestInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr7/MessageTrait.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr/Http/Message/StreamInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr7/Stream.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr7/Request.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Promise/functions.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/PrepareBodyMiddleware.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Exception/GuzzleException.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Exception/TransferException.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Exception/RequestException.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Promise/PromiseInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Promise/RejectedPromise.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Handler/EasyHandle.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr/Http/Message/ResponseInterface.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/Psr7/Response.php');
            include( APSL_PLUGIN_DIR . 'Tumblr/GuzzleHttp/Promise/FulfilledPromise.php');
            onTumblrLogin();
            break;
            case 'reddit':
            include( APSL_PLUGIN_DIR . 'reddit/config.php');
            include( APSL_PLUGIN_DIR . 'reddit/reddit.php');
            onRedditLogin();
            break;
            case 'yahoo':
            include( APSL_PLUGIN_DIR . 'yahoo/YahooOAuth2.class.php');
            onYahooLogin();
            break;
        }
    }

//for facebook login
    function onFacebookLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/facebook-login-check.php');
    }

//for twitter login
    function onTwitterLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/twitter-login-check.php');
    }

//for google login
    function onGoogleLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/google-login-check.php');
    }

//for linkedin login
    function onLinkedInLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/linkedin-login-check.php');
    }

//for instagram login
    function onInstagramLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/instagram-login-check.php');
    }

//for FourSquare login
    function onFourSquareLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/foursquare-login-check.php');
    }

//for WordPress login
    function onWordPressLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/wordpress-login-check.php');
    }

//for Vkontakte login
    function onVKLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/vk-login-check.php');
    }

//for Buffer login
    function onBufferLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/buffer-login-check.php');
    }

//for Tumblr login
    function onTumblrLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/tumblr-login-check.php');
    }

//for Reddit login
    function onRedditLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/reddit-login-check.php');
    }

//for Yahoo login
    function onYahooLogin() {
        include(APSL_PLUGIN_DIR . 'inc/frontend/login-check/yahoo-login-check.php');
    }