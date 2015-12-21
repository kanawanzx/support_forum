<?php
/** Top Bar */
?>
<div id="topbar">
	<div class="container">
	    <div class="row">
	        <div class="col-xs-12 col-md-8">
		        <div class="as-text-topbar-header">
	            	<?php echo esc_html__('Welcome to ', 'support-forum');?><a href="http://monalisa.alenastudio.com/"><?php echo esc_html__('Alena Studio ', 'support-forum');?></a><?php echo esc_html__('Support Forum :)', 'support-forum');?>  
	            </div>
	        </div>
	        <div class="col-xs-12 col-md-4">
		        <div class="as-group-button-topbar">
		            <?php
		            if (is_user_logged_in()) {
		                echo '<a href="' . bbp_get_user_profile_edit_url(bbp_get_user_id('', false, true)) . '" class="as-btn-style as-bg-color">Edit Profile</a>';
		                echo '<a href="' . wp_logout_url($redirect = home_url()) . '" class="as-btn-style">Logout</a>';
		            }
		            else {
		                echo '<a href="' . wp_login_url($redirect     = home_url(), $force_reauth = false) . '" class="as-btn-style">Login</a>';
		                echo '<a href="' . wp_login_url() . '?action=register" class="as-btn-style as-bg-color">Register</a>';
		            }
		            ?>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>
    </div>
</div>