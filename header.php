<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;

            wp_title('|', true, 'right');

            // Add the blog name.
            bloginfo('name');

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";

            // Add a page number if necessary:
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));
            ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');

        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
        ?>
    </head>

    <body <?php body_class(); ?>>
        <?php get_template_part('topbar'); ?>
            <div id="header" class="clearfix">
	            <div class="container">
		            <div class="row">
		                <div id="masthead">
			                <div class="col-md-6">
			                    <div id="branding" role="banner">
			                        <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
			                        <<?php echo $heading_tag; ?> id="site-title">
			                        <span>
			                            <a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
			                        </span>
			                        </<?php echo $heading_tag; ?>>
			                        <div id="site-description"><?php bloginfo('description'); ?></div>
			                    </div><!-- #branding -->
							</div>
							<div class="col-md-6">
			                    <div id="access" role="navigation">
			                        <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			                        <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e('Skip to content', 'twentyten'); ?>"><?php _e('Skip to content', 'twentyten'); ?></a></div>
			                        <?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
			                        <?php
			                        wp_nav_menu(array(
			                            'container_class' => 'menu-header',
			                            'theme_location'  => 'primary'));
			                        ?>
			                    </div><!-- #access -->
		                    </div>
		                </div><!-- #masthead -->
	                </div>
                </div>
            </div><!-- #header -->
            
<div class="header-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3><?php echo esc_html__('Our Support Center', 'support-forum');?></h3>
				<p><?php echo esc_html__('Please try looking for your problem before place your question, thanks !', 'support-forum');?></p>
				<div class="clearfix"></div>
			    <?php
			    // Seach form
			    $exclude = array('forum','topic','reply','');
			    if (
			            !in_array(
			                    get_post_type(), $exclude)) {
			        bbp_get_template_part(
			                'meta', 'forum-intro');
			    }
			    ?>
			</div>
		</div>
	</div>
</div><!-- #header banner -->
        <div id="wrapper" class="hfeed">
            <div class="container">
