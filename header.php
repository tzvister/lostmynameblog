<!DOCTYPE html>

<!-- BEGIN html -->
<html <?php language_attributes(); ?>>
<!-- A ThemeZilla design (http://www.themezilla.com) - Proudly powered by WordPress (http://wordpress.org) -->

<!-- BEGIN head -->
<head>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php zilla_meta_head(); ?>
	
	<!-- Title -->
	<title><?php wp_title('|', true, 'right'); ?></title>
	
	<!-- RSS & Pingbacks -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php if(zilla_get_option('general_feedburner_url')){ echo zilla_get_option('general_feedburner_url'); } else { bloginfo( 'rss2_url' ); } ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<script type="text/javascript" src="//use.typekit.net/boi8gch.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
    <?php zilla_head(); ?>
    
<!-- END head -->
</head>

<!-- BEGIN body -->
<body <?php body_class( 'no-js' ); ?>>
    <?php zilla_body_start(); ?>
	
	    <?php zilla_header_before(); ?>
		<!-- BEGIN #header -->
      <header>
          <div class="wobbly-line"></div>

          <div class="section links links-footer">
              <div class="centered-content">
                  <div class="nav-wrapper">
                      <nav class="top-level-nav aligned-left mobile-menu closed">
                          <a href="javascript:void(0);" class="mobile-toggle">Menu</a>
	                      <a href="http://lostmy.name" class="">Lostmy.name</a>
	                      <a href="http://lostmy.name" class="">Create</a>
	                      <a href="http://blog.lostmy.name" class="">Blog</a>
	                      <a href="mailto:hello@lostmy.name" class="">Contact Us</a>
                      </nav>

                      <div class="social-widgets">
                          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                          <div class="fb-like widget" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" style="margin-top: -1px;"></div>
                          <a class="widget pinit" data-pin-config="beside" href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
                      </div>
                  </div>
              </div>
              <div class="wobbly-line"></div>
          </div>

      </header>

    	        
		<!-- END #header-->
		<?php zilla_header_after(); ?>
		
		<!-- BEGIN .main-navigation -->
		
		<!-- BEGIN #content -->
		<div id="content" class="clearfix">
		<?php zilla_content_start(); ?>