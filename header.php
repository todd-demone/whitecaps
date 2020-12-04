<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oakville_Whitecaps
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <style>
		@import url('https://fonts.googleapis.com/css?family=Ubuntu:300,400&display=swap');
	</style> -->
	<script src="https://kit.fontawesome.com/88c00655be.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>


<?php 
// add a class named ".frontpage" to the body tag in the html of front-page.php (for CSS styling purposes)
$class = is_front_page() ? "frontpage" : "";
?>
<body <?php body_class($class); ?>>

<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="search-and-social">
			<div class="search-and-social-inner container-1200 remove-right-padding remove-left-padding">
				<div class="search-bar">
					<form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="Search …" value="" name="s">
						</label>
						<button type="submit" class="search-submit" />
								<span class="icon"><i class="fa fa-search"></i></span>   
						</button>
					</form>
				</div>
				<div class="social-bar remove-right-padding">
					<div class="social-bar-item">
						<a href="https://twitter.com/oakville_llb" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
					</div>
					<div class="social-bar-item">
						<a href="https://www.facebook.com/pages/Oakville-Little-League-Baseball/118235944887859" target="blank"><i class="fab fa-facebook fa-lg"></i></a>
					</div>
					<div class="social-bar-item">
						<a href="https://www.instagram.com/explore/locations/276522508/oakville-little-league-baseball/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="navbar">
			<div class="navbar-inner container-1200 remove-right-padding">
				<div class="site-branding">
					<?php
					the_custom_logo();
					?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
				<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div><!-- container-1200 -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
