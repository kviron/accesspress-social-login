<?php

class redditConfig {

    public $subdomain;

    //public $options;

    public function __construct() {
//        $this->options = get_option(APSL_SETTINGS);
    }

    static function pull_reddit_userdata() {
        $options = get_option(APSL_SETTINGS);
        $callBackUrl = APSL_Functions::callBackUrl();

        $client_id = isset($options['apsl_reddit_settings']['apsl_reddit_client_id']) && !empty($options['apsl_reddit_settings']['apsl_reddit_client_id']) ? esc_attr($options['apsl_reddit_settings']['apsl_reddit_client_id']) : '';
        $client_secret = isset($options['apsl_reddit_settings']['apsl_reddit_client_secret']) && !empty($options['apsl_reddit_settings']['apsl_reddit_client_secret']) ? esc_attr($options['apsl_reddit_settings']['apsl_reddit_client_secret']) : '';
        
        $encoded_url = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : '';
        if (isset($encoded_url) && $encoded_url != '') {
            $callback = $callBackUrl . 'apsl_login_id' . '=reddit_check&redirect_to=' . $encoded_url;
        } else {
            $callback = $callBackUrl . 'apsl_login_id' . '=reddit_check';
        }
        $reddit_data['ENDPOINT_STANDARD'] = 'http://www.reddit.com';
        $reddit_data['ENDPOINT_OAUTH'] = 'https://oauth.reddit.com';
        $reddit_data['ENDPOINT_OAUTH_AUTHORIZE'] = 'https://www.reddit.com/api/v1/authorize';
        $reddit_data['ENDPOINT_OAUTH_TOKEN'] = 'https://www.reddit.com/api/v1/access_token';
        $reddit_data['ENDPOINT_OAUTH_REDIRECT'] = $callback;
        //access token configuration from https://ssl.reddit.com/prefs/apps
        $reddit_data['CLIENT_ID'] = $client_id;
        $reddit_data['CLIENT_SECRET'] = $client_secret;
        //access token request scopes
        //full list at http://www.reddit.com/dev/api/oauth
        $reddit_data['SCOPES'] = 'save,modposts,identity,edit,flair,history,modconfig,modflair,modlog,modposts,modwiki,mysubreddits,privatemessages,read,report,submit,subscribe,vote,wikiedit,wikiread';

        return $reddit_data;
        https://www.reddit.com/api/v1/authorize?response_type=code&client_id=nVwcgS5PU-jR0A&redirect_uri=http://localhost/accesspress-social-login/wp-login.php?apsl_login_id=reddit_check&redirect_to=&scope=save,modposts,identity,edit,flair,history,modconfig,modflair,modlog,modposts,modwiki,mysubreddits,privatemessages,read,report,submit,subscribe,vote,wikiedit,wikiread&state=1794361845
    }

//standard, oauth token fetch, and api request endpoints
}

?>
