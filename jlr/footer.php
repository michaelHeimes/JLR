<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JLR
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if(!is_page_template('guide-page-template.php') ):?>
			<img class="pre-footer_graphic" src="<?php the_field('pre-footer_graphic', 'option');?>" />
		<?php endif;?>
		<?php if(!is_front_Page() && !is_page_template('member-directory-page-template.php') && !is_page_template('slate-resources-template.php') && !is_page_template('member-resources-template.php') && !is_page_template('guide-page-template.php') ):?>
			<section class="join-donate centered">
				<div class="join-donate-wrap">
				<?php if( have_rows('join_&_donate', 'option') ):
					    while ( have_rows('join_&_donate', 'option') ) : the_row();?>					
					
					
					<div id="join-donate-bg">
						<div class="join-donate-bg-half j-d-bg-l" style="background-image: url(<?php the_sub_field('join_&_donate_left_image', 'option');?>)">
							<span>Join</span>
							<a class="jd-join box-link" href="/join">- Learn About Becoming a Member -</a>
						</div>
						<div class="join-donate-bg-half j-d-bg-r" style="background-image: url(<?php the_sub_field('join_&_donate_right_image', 'option');?>)">
							<span>Donate</span>
							<a class="jd-donate box-link" href="/donate">- Learn About Donating -</a>
						</div>
						<div id="join-donate-bg-mask" class="jl-red-bg"></div>
					</div>
					<div id="join_donate_cta-wrap">
						<p id="join_donate_cta" class="absolute-centered"><?php the_sub_field('join_&_donate_cta', 'option');?>
							<span id="mobile-j-d-link-wrap">
								<a class="jd-join box-link" href="/join">- Learn About Becoming a Member -</a>
								<a class="jd-donate box-link" href="/donate">- Learn About Donating -</a>
							</span>
						</p>
					</div>
				<?php endwhile;endif;?>					
				</div>
			</section>

		<?php endif;?>
		
		
		<div class="footer-inner centered drk-gray-bg">
			<div id="footer-widget-wrap" class="wrap-1200">
				<div class="footer-widget address-widget">
					<div class="widget-row" id="footer-logo-wrap">
						<a href="<?php get_site_url();?>">
							<img src="<?php the_field('white_logo', 'option');?>"/>
							<img class="white_title" src="<?php the_field('white_title', 'option');?>" />
						</a>
					</div>
					<div class="widget-row">
						<a href="https://www.google.com/maps/dir//Junior+League+of+Reading+Pa,+1520+Penn+Ave,+Wyomissing,+PA+19610/@40.3779325,-76.0344404,12z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c67147a638f79d:0x9294a47e885e5e4c!2m2!1d-75.971641!2d40.330248!3e0" target="_blank">1520 Penn Ave<br>Wyomissing, PA 19610</a></div>
					<div class="widget-row"><a href="tel:610-374-9811">610.374.9811</a></div>
				</div>
	
				<div class="footer-widget social-widget">
					<div class="fb-link-wrap"><a class="fb-svg" href="https://www.facebook.com/JuniorLeagueOfReading/" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
					<div class="ig-link-wrap"><a href="https://www.instagram.com/jlreadingpa/" target="_blank"><i class="fab fa-instagram"></i></a></div>
					<div class="tw-link-wrap"><a href="https://twitter.com/jlreadingpa" target="_blank"><i class="fab fa-twitter-square"></i></a></div>
				</div>
				<div class="footer-widget footer-widget-copyright">
					<p>Copyright <i class="far fa-copyright"></i> 2018 The Junior League Of Reading, PA, Inc.</p>
					<p>Site By <a href="https://cairndigitalmedia.com/" target="_blank">Cairn</a></p>
				</div>

			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<script>
		var controller = new ScrollMagic.Controller();
	</script>
	
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		// init controller
		var controller = new ScrollMagic.Controller();
		
		// loop through all elements
		jQuery('#join-donate-bg-mask').each(function() {
		  
		  // build a tween
		  var tween = TweenMax.from(jQuery(this), 0.5, {autoAlpha:1});
		
		  // build a scene
		  var scene = new ScrollMagic.Scene({
		    triggerElement: "p#join_donate_cta",
		    triggerHook: "onEnter",
		    offset: "200px"
		  })
		  .setTween(tween) // trigger a TweenMax.to tween
		  .addTo(controller);
		  
		});
	});
	
	jQuery(function () { // wait for document ready
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "img.pre-footer_graphic", triggerHook: "onEnter", offset: "240px"})
			.setClassToggle("img.pre-footer_graphic" , "in-view")
// 			.addIndicators({name: "img.pre-footer_graphic"})
			.addTo(controller);
	});
	</script>
	
<?php if(is_page_template('about-page-template.php')):?>
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		
		jQuery('.single_bod-l').each(function() {
		
		var scene = new ScrollMagic.Scene({triggerElement: this, triggerHook: "onCenter", offset: "-100px"})
			.setClassToggle( this , "arrow-in-view")
			.addTo(controller);
		});
	});
	</script>
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		
		jQuery('.about-half-mark').each(function() {
			
		var tween = TweenMax.from(jQuery(this), 0.5, {scale:0.5});
		
		var scene = new ScrollMagic.Scene({triggerElement: this, triggerHook: "onCenter", offset: "-100px"})
		  	.setTween(tween) // trigger a TweenMax.to tween
			.addTo(controller);
		});
	});
	</script>
<?php endif;?>
	
<?php if(is_front_page() || is_page_template('community-dev-single-page-template.php') || is_page_template('events-single-page-template.php') || is_page_template('about-page-template.php') || is_page_template('join-page-template.php')):?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>

	<script>
	jQuery(document).ready(function($) {
		
	var downArrow = $("#home-down-arrow-bg")
	var downArrowWrap = $("#home-down-arrow-wrap")
	
	var downArrowAnimation = new TimelineMax();
	downArrowAnimation
	.to(downArrowWrap, 0.75, {autoAlpha: 1, bottom: 0, ease:Power2.easeOut}, 1)
	.to(downArrow, 0.5, {autoAlpha: 1, ease:Power2.easeOut}, 1.75)
	});
	</script>

<?php endif;?>

<?php if(is_page_template('join-page-template.php')):?>
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#why_we_need_members", triggerHook: "onCenter", offset: "-150px"})
			.setClassToggle("#why_we_need_members" , "arrow-in-view")
// 			.addIndicators({name: "project_history_arrow"})
			.addTo(controller);
	});
	</script>
	<script>
		jQuery(function () { // wait for document ready
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#arrow-trigger", triggerHook: "onEenter", offset: "-220px"})
			.setClassToggle("#wpcf7-f365-o1" , "arrow-in-view")
			.addTo(controller);
	});
	</script>
<?php endif;?>

<?php if(is_page_template('community-dev-single-page-template.php') || is_page_template('events-single-page-template.php')|| is_page_template('join-page-template.php')):?>
	<script>
	jQuery(function () { 
		var scene = new ScrollMagic.Scene({triggerElement: "#arrow-trigger", triggerHook: "onEnter", offset: "150px"})
			.setClassToggle("#project_history" , "arrow-in-view")
			.addTo(controller);
	});
	</script>
<?php endif;?>

<?php if(is_page_template('join-page-template.php')):?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>

	<script>
	jQuery(function () {
		var controller = new ScrollMagic.Controller();
		
		jQuery('.zoom-card').each(function() {
		  
		
		  var scene = new ScrollMagic.Scene({
		    triggerElement: this,
		    triggerHook: "onCenter",
		    offset: "-100px"
		  })
		  .setClassToggle(this , "in-view")
		  .addTo(controller);
		  
		});
	});
	</script>
<?php endif;?>


<?php if(is_front_page()):?>	

	<script>
	jQuery(function () { // wait for document ready
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#community-development-wrap", triggerHook: "onEnter", offset: "260px"})
			.setClassToggle("section#community-development-wrap" , "active")
// 			.addIndicators({name: "section#community-development-wrap"})
			.addTo(controller);
	});
	</script>
	
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		// init controller
		var controller = new ScrollMagic.Controller();
		
		// loop through all elements
		jQuery('.single-community-development').each(function() {
		  
		  // build a tween
		  var tween = TweenMax.from(jQuery(this), 0.3, {autoAlpha: 0});
		
		  // build a scene
		  var scene = new ScrollMagic.Scene({
		    triggerElement: this,
		    triggerHook: "onEnter",
		    offset: "200px"
		  })
		  .setTween(tween) // trigger a TweenMax.to tween
		  .addTo(controller);
		  
		});
	});
	</script>	
	
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		// init controller
		var controller = new ScrollMagic.Controller();
		
		// loop through all elements
		jQuery('div.community_development_intro-l').each(function() {
		  
		  // build a tween
		  var tween = TweenMax.from(jQuery(this), 0.3, {left: -100});
		
		  // build a scene
		  var scene = new ScrollMagic.Scene({
		    triggerElement: this,
		    triggerHook: "onEnter",
		    offset: "200px"
		  })
		  .setTween(tween) // trigger a TweenMax.to tween
		  .addTo(controller);
		  
		});
	});
	</script>	
	
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		// init controller
		var controller = new ScrollMagic.Controller();
		
		// loop through all elements
		jQuery('div.community_development_intro-r').each(function() {
		  
		  // build a tween
		  var tween = TweenMax.from(jQuery(this), 0.3, {right: -100});
		
		  // build a scene
		  var scene = new ScrollMagic.Scene({
		    triggerElement: this,
		    triggerHook: "onEnter",
		    offset: "200px"
		  })
		  .setTween(tween) // trigger a TweenMax.to tween
		  .addTo(controller);
		  
		});
	});
	</script>
		
	<script>
	jQuery(function () { // wait for document ready
		var pinDuration = jQuery( 'section#community-development-wrap' ).height();	
		function getWrapHeight() {
			return pinDuration;
		}
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "h2#community-dev-title", triggerHook: "onLeave", offset: "-65px", duration: pinDuration})
			.setPin("h2#community-dev-title" , {pushFollowers: false})
			.setClassToggle("h2#community-dev-title" , "active")
// 			.addIndicators({name: "community-dev-title"})
			.addTo(controller);
	});
	</script>
	
	<script>
	jQuery(function () { // wait for document ready
		var pinDuration = jQuery( 'section#mobile-community-development-wrap' ).height() - 100;	
		function getWrapHeight() {
			return pinDuration;
		}
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "h2#mobile-community-dev-title", triggerHook: "onLeave", offset: "-46px", duration: pinDuration})
			.setPin("h2#mobile-community-dev-title" , {pushFollowers: false})
			.setClassToggle("h2#mobile-community-dev-title" , "active")
// 			.addIndicators({name: "mobile-community-dev-title"})
			.addTo(controller);
	});
	</script>
	
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#events-wrap", triggerHook: "onEnter", offset: "260px"})
			.setClassToggle("section#events-wrap" , "active")
// 			.addIndicators({name: "section#events-wrap"})
			.addTo(controller);
	});
	</script>
	
	<script>
	jQuery(function () { // wait for document ready
		var pinDuration = jQuery( 'section#events-wrap' ).height();	
		function getWrapHeight() {
			return pinDuration;
		}
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "h2#events-title", triggerHook: "onLeave", offset: "-65px", duration: pinDuration})
			.setPin("h2#events-title" , {pushFollowers: false})
			.setClassToggle("h2#events-title" , "active")
// 			.addIndicators({name: "events-title"})
			.addTo(controller);
	});
	</script>
	
	<script>
	jQuery(function () { // wait for document ready
		var pinDuration = jQuery( 'section#events-wrap' ).height() + 200;	
		function getWrapHeight() {
			return pinDuration;
		}
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "h2#mobile-events-title", triggerHook: "onLeave", offset: "-46px", duration: pinDuration})
			.setPin("h2#mobile-events-title" , {pushFollowers: false})
			.setClassToggle("h2#mobile-events-title" , "active")
// 			.addIndicators({name: "mobile-events-title"})
			.addTo(controller);
	});
	</script>
	
	<script>
	jQuery(function () { // wait for document ready
		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "article.single-community-development", offset: "-100px", duration: "100%"})
			.setClassToggle("article.single-community-development" , "active")
// 			.addIndicators({name: "community-dev-project-title"})
			.addTo(controller);
	});
	</script>

<?php endif;?>


</body>
</html>
