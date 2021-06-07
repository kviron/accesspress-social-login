<?php
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