<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package koffisani
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'koffisani' ); ?></a>
	<header id="header" class="clearfix" role="banner">
		<div id="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 hidden-xs top-info">
						<!--span><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
						<span><i class="fa fa-envelope"></i>Email: mail@example.com</span-->
					</div>
					<div class="col-sm-5 top-info ">
						<ul>
							<?php
							$twtr = get_option( 'twitter_username' );
							if ( isset( $twtr ) && ! empty( $twtr ) ) :
								?>
							<li><a href="https://twitter.com/<?php echo $twtr; ?>" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
								<?php
							endif;
							$fb = get_option( 'facebook_url' );
							if ( isset( $fb ) && ! empty( $fb ) ) :
								?>
							<li><a href="<?php echo $fb; ?>" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
								<?php
							endif;
							$in = get_option( 'linkedin_url' );
							if ( isset( $in ) && ! empty( $in ) ) :
								?>
							<li><a href="<?php echo $in; ?>" class="my-linkedin"><i class="fa fa-linkedin"></i></a></li>
								<?php
							endif;
							$skype = get_option( 'skype' );
							if ( isset( $skype ) && ! empty( $skype ) ) :
								?>
							<li><a href="skype:<?php echo $skype; ?>" class="my-skype"><i class="fa fa-skype"></i></a></li>
								<?php
							endif;
							$pinterest = get_option( 'pinterest' );
							if ( isset( $pinterest ) && ! empty( $pinterest ) ) :
								?>
							<li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
								<?php
							endif;
							$gplus = get_option( 'gplus_url' );
							if ( isset( $gplus ) && ! empty( $gplus ) ) :
								?>
							<li><a href="<?php echo $gplus; ?>" class="my-google"><i class="fa fa-google-plus"></i></a></li>
								<?php
							endif;
							$gh = get_option( 'github_username' );
							if ( isset( $gh ) && ! empty( $gh ) ) :
								?>
							<li><a href="https://github.com/<?php echo $gh; ?>" class="my-github"><i class="fa fa-github"></i></a></li>
								<?php
							endif;
							$gl = get_option( 'gitlab_username' );
							if ( isset( $gl ) && ! empty( $gl ) ) :
								?>
							<li><a href="https://gitlab.com/<?php echo $gl; ?>" class="my-gitlab"><i class="fa fa-gitlab"></i></a></li>
							<?php endif; ?>
							<li><a href="<?php echo bloginfo( 'rss_url' ); ?>" class="my-rss"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
						<div class="clearfix" id="logo-bar">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 text-center">
										<div class="site-logo" id="logo">
											<div class="screen-reader-text">
												<?php printf( esc_html__( "Aller à l'accueil de %1$s", 'koffisani' ), bloginfo( 'name' ) ); ?>
											</div>
											<div class="col-xs-4"></div>
											<div class="site-firstletter col-xs-4" aria-hidden="true">
												<?php
												if ( has_custom_logo() ) {
													the_custom_logo();
												} else {
													?>
												<h1><?php echo substr( get_bloginfo( 'name' ), 0, 1 ); ?></h1>
												<?php } ?>
											</div>
											<div class="col-xs-4"></div>
											<?php
											if ( is_front_page() && is_home() ) :
												?>
												<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php else : ?>
												<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
												<?php
											endif;

											$description = get_bloginfo( 'description', 'display' );
											if ( $description || is_customize_preview() ) :
												?>
												<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
												<?php
											endif;
											?>
										</div>
									</div>
								</div>
							</div>
						</div><!-- .site-branding -->
						<div class="navbar navbar-default navbar-static-top" role="navigation">
							<div class="container">
								<div class="row">

									<div class="navbar-header">
										<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="primary-menu" aria-expanded="false"><?php // esc_html_e( 'Primary Menu', 'koffisani' ); ?>
											<span class="sr-only">Basculer la navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>

									</div>
									<div class="navbar-collapse collapse">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id' => 'primary-menu',
												'menu_class' => 'nav navbar-nav',
											)
										);
										?>
									</div>
								</div><!-- #site-navigation -->
								
							</div>
						</div>
					</header><!-- #masthead -->
				

	<div id="content" class="site-content content">
		<div class="container">
				<div class="row">
