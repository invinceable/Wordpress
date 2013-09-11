<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link rel="dns-prefetch" href="//www.google-analytics.com">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			
		<!-- CSS + JavaScript -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/app.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/vendor/custom.modernizr.js"></script>		

		<!--[if IE 8]>
		  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/ie8-grid-foundation-4.css" />
		<![endif]-->
		
		<?php wp_head(); ?>
		
	</head>
	<body <?php body_class(); ?>>

			<div id="root">
			<div class="row" style="margin-right0;margin-left:0;max-width:100%">
			<div class="">
									<?php wp_nav_menu( array('theme_location' => 'Header' )); ?>			
			</div>
			</div>
