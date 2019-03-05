<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JLR
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php if(is_singular('members')):?>
		<meta name="robots" content="noindex, nofollow" />
		<meta http-equiv="refresh" content="0; URL='/member-directory'" />
	<?php endif;?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php if(is_page_template('guide-page-template.php') || is_page_template('member-directory-page-template.php') || is_page_template('member-resources-template.php') || is_page_template('resources-page-template.php') || is_page_template('slate-resources-template.php')):?>
	<meta name="robots" content="noindex,nofollow,noarchive,noydir,nosnippet" />
	<?php endif;?>
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		
	<?php if(is_page_template('contact-page-template.php')):?>	
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
   <?php endif;?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jlr' ); ?></a>
	<header id="masthead" class="site-header">
			<div id="title-hero-wrap">

				<?php
					$imgID1 = get_field('header_bg_high_res');
					$imgSize1 = "hero"; // (thumbnail, medium, large, full or custom size)
					$imgArr1 = wp_get_attachment_image_src( $imgID1, $imgSize1 );
					// url = $image[0];
					// width = $image[1];
					// height = $image[2];
				?>

				<?php
					$imgID2 = get_field('header_bg_high_res');
					$imgSize2 = "hero-2x"; // (thumbnail, medium, large, full or custom size)
					$imgArr2 = wp_get_attachment_image_src( $imgID2, $imgSize2 );
					// url = $image[0];
					// width = $image[1];
					// height = $image[2];
				?>
				
				<div class="header_bg header_bg_low_res" style="background-image: url(<?php echo $imgArr1[0]; ?> );background-repeat: no-repeat;background-position: center center; background-size:cover;"></div>				
				
				<div class="header_bg header_bg_high_res" style="background-image: url(<?php echo $imgArr2[0]; ?> );background-repeat: no-repeat;background-position: center center; background-size:cover;"></div>

				<div id="title-wrap">
					
					<?php if(is_front_page()):?>
<!-- 						<img id="home-hero-tjl" class="rich-red-bg" src="/wp-content/uploads/2018/03/Home-Overlay-TJL.png"/> -->
						<img id="home-hero-tjl" class="rich-red-bg" src="/wp-content/uploads/2018/06/WomenBuildingABetter.png"/>
<!-- 						<img id="home-hero-or" class="jl-red-bg" src="/wp-content/uploads/2018/03/Home-Overlay-OR.png"/> -->
						<img id="home-hero-or" class="jl-red-bg" src="/wp-content/uploads/2018/06/BetterReading.png"/>
						<div id="black-mask"></div>
						<div id="red-mask"></div>
					<?php endif;?>
					
<!--
					<?php if(!is_front_page() && !is_page_template('community-dev-single-page-template.php')):?>
					<img id="header-red-logo" src="/wp-content/uploads/2018/03/JL_boxLogo100px.png"/>
					<?php echo the_title('<h1 class="header-page-title">', '</h1>');?>
					<?php endif;?>
-->
					
					<?php if(is_page_template('community-dev-single-page-template.php')):?>
					<img src="/wp-content/uploads/2018/03/jl-box.png"/>
					<h2 class="hero-white-title">Community Impact</h2>
					<?php endif;?>
					<?php if(is_page_template('events-single-page-template.php')):?>
					<img src="/wp-content/uploads/2018/03/jl-box.png"/>
					<h2 class="hero-white-title">Events</h2>
					<?php endif;?>
					<?php if(is_page_template('about-page-template.php')):?>
					<img src="/wp-content/uploads/2018/03/jl-box.png"/>
					<h1 class="hero-white-title">About Us</h1>
					<?php endif;?>
					<?php if(is_page_template('join-page-template.php')):?>
					<img src="/wp-content/uploads/2018/03/jl-box.png"/>
					<h1 class="hero-white-title">Join Us</h1>
					<?php endif;?>
				</div>
			</div>
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$jlr_description = get_bloginfo( 'description', 'display' );
			if ( $jlr_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $jlr_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div id="main-navigation-inner" class="wrap-1200">
				<div id="nav-logo-wrap">
					<a href="<?php echo get_site_url();?>">
					<img class="white-logo" src="<?php the_field('white_logo', 'option');?>"/>
					<img class="white_title" src="<?php the_field('white_title', 'option');?>" />
					</a>
				</div>
				<div id="main-nav-links-wrap">
					<div id="main-nav-links">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
						<div id="join-donate-nav-wrap">
							<ul>
							<li><a class="jd-nav-join" href="/join">Join</a></li>
							<li><a class="jd-nav-donate" href="/donate">Donate</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<button id="mmenu-button"><a href="#mmenu">
				<i class="fas fa-bars"></i>
			</a></button>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		
	<?php if (is_front_page() || is_page_template('community-dev-single-page-template.php') || is_page_template('events-single-page-template.php') || is_page_template('about-page-template.php') || is_page_template('join-page-template.php')):?>
	<div id="home-down-arrow-wrap">
		<div id="home-down-arrow"><div id="home-down-arrow-bg"></div><i class="fas fa-arrow-alt-circle-down"></i></div>
	</div>
	<?php endif;?>
	
	
	
