<?php
/** Top Bar */
?>

<div id="topbar">
    <div class="inner">

        <div class="left small-12 large-10 columns">
            Welcome to <a href="http://monalisa.alenastudio.com/">Alena Studio </a>Support Forum :)  
        </div>

        <div class="right small-12 large-2 columns">
            <?php
            if (is_user_logged_in()) {
                echo '<a href="' . bbp_get_user_profile_edit_url(bbp_get_user_id('', false, true)) . '">Edit Profile</a>';
                echo '<a href="' . wp_logout_url($redirect = home_url()) . '">Logout</a>';
            }
            else {
                echo '<a href="' . wp_login_url($redirect     = home_url(), $force_reauth = false) . '">Login</a>';
                echo '<a href="' . wp_login_url() . '?action=register">Register</a>';
            }
            ?>
        </div>

        <div class="clearfix"></div>

    </div>
</div>