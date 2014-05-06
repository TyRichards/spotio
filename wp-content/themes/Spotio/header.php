<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="Shelly Morgan">
		<title><?php wp_title('|', true, 'right'); ?></title>		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">	

		<?php wp_head(); ?>
	
		<!--[if lte IE 8]>
			<meta http-equiv="REFRESH" content="0;url=http://www.browsehappy.com/">
		<![endif]-->	
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Analytics -->
		

		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->				

		<?php do_action('before'); ?> 
		
		<div class="main-container col-no-padding">

			<header>			
				<section class="top-navbar">				
					<nav class="navbar navbar-default" role="navigation">
						<div class="container col-no-padding-xs">						
							<div class="col-md-3 container navbar-header col-no-padding-md col-no-padding-lg">	
								<div class="brand nav-left col-no-padding">									
										<a class="navbar-brand col-no-padding" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">	
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Spotio">
										</a>									
								</div>																			
									<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target=".navbar-primary-collapse">
										<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>									
									</button>
								
							</div><!-- .navbar-header -->
							
							<div class="col-md-9 collapse navbar-collapse navbar-right navbar-primary-collapse col-no-padding">
								<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-left', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
								<?php if (is_active_sidebar('navbar-right')) { 								
									dynamic_sidebar('navbar-right'); 
								} ?>  
								<ul id="menu-main-menu" class="nav navbar-nav navbar-left visible-xs visible-sm ">
									<li class="menu-item"><a href="http://login.icanvassapp.com/">Sign In</a></li>
								</ul>   		
								<form class="container navbar-form pull-right call-to-action hidden-xs hidden-sm">
                  <a class="btn btn-sm btn-primary " href="http://login.icanvassapp.com/Account/Register">
                  	Start Free Trial										
                  </a>
                  &nbsp;
                  <a class="btn btn-sm btn-clear" href="http://login.icanvassapp.com/">Sign In</a>
                </form>			
							</div><!--.navbar-collapse-->
						</div><!-- .container -->
					</nav>				
				</section> <!-- section-navbar -->			
			</header>		
				
				
			<div class="body-content">

				<!-- Mobile Landing Section -->
				<section class="mobile-landing visible-xs visible-sm col-xs-12">
				    <div class="col-xs-12 col-no-padding-xs col-no-padding-sm call-to-action">
					    <a class="btn btn-primary btn-block col-xs-12" href="http://login.icanvassapp.com/Account/Register" style="margin-top:0px">
					        <i class="fa fa-arrow-circle-right fa-1x"></i>
					        Start Free Trial
					    </a>
				    </div>
				</section>			