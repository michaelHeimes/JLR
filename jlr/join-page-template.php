<?php
/**
 * Template Name: Join Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JLR
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
			<section id="page-intro" class="centered wrap-750">
				<h2 id="home-mission-title" class="jl-red centered">Our Mission</h2>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
				?>
			</section>
			
			<section id="why_we_need_members" class="drk-gray-bg">
				<div class="wrap-1600 recent-contact centered">
					<p><?php the_field('why_we_need_members');?></p>
				</div>
			</section>
			
			<section id="member-benefits">
				<div id="requirement-wrap">
					<div class="wrap-750 centered join-module-intro"><h2 id="who_can_join_title"><?php the_field('who_can_join_title');?></h2><?php the_field('requirement');?></div>
				</div>
				<div id="benefits-wrap" class="join-module-intro wrap-1200 centered">
					<h2><?php the_field('benefits_title');?></h2>
					<p><?php the_field('benefits_intro');?></p>
					<?php if( have_rows('benefits_cards') ):?>
						<ul>
						<?php while ( have_rows('benefits_cards') ) : the_row();?>	
							<li class="single-benefit-card zoom-card"><span><?php the_sub_field('single_benefit');?></span></li>
						<?php endwhile;?>
						</ul>
					<?php endif;?>				
					
				</div>

			</section>
			
			<section id="join-steps" class="wrap-1200">
				<div id="join-process-intro" class="join-module-intro"><?php the_field('process_intro');?></div>
				<div id="step-cards-wrap">
					<?php if( have_rows('process_step_cards') ):?>
						<?php while ( have_rows('process_step_cards') ) : the_row();?>	
							<div class="single-step-card zoom-card">
								<?php if( have_rows('single_step_card') ):?>
									<?php while ( have_rows('single_step_card') ) : the_row();?>
										<div  class="jl-red-bg">	
											<p class="step-card-number"><span><?php the_sub_field('step_card_number');?></span></p>
											<h4><?php the_sub_field('step_card_title');?></h4>
										</div>
										<div class="step_card_copy"><?php the_sub_field('step_card_copy');?></div>
									<?php endwhile;?>
								<?php endif;?>				
							</div>
						<?php endwhile;?>
					<?php endif;?>				
				</div>
			</section>
			
			<section id="join-expectaions">
				<div id="expectations-intro" class="join-module-intro">
					<?php the_field('expectations_intro');?>
				</div>
				<h3><span>New Member Year</span></h3>
					<div id="step-cards-wrap" class="wrap-1200">
						<?php if( have_rows('new_member_year_expectations_cards') ):?>
							<?php while ( have_rows('new_member_year_expectations_cards') ) : the_row();?>	
								<div class="single-step-card zoom-card">
									<?php if( have_rows('single_step_card') ):?>
										<?php while ( have_rows('single_step_card') ) : the_row();?>	
											<div  class="jl-red-bg">	
												<p class="step-card-number"><span><?php the_sub_field('step_card_number');?></span></p>
												<h4><?php the_sub_field('step_card_title');?></h4>
											</div>
											<div class="step_card_copy"><?php the_sub_field('step_card_copy');?></div>
										<?php endwhile;?>
									<?php endif;?>				
								</div>
							<?php endwhile;?>
						<?php endif;?>
					</div>
					
				<h3 id="after-title"><span>After New Member Year</span></h3>
					<div id="step-cards-wrap" class="wrap-1200">
						<?php if( have_rows('after_new_member_year_expectations_cards') ):?>
							<?php while ( have_rows('after_new_member_year_expectations_cards') ) : the_row();?>	
								<div class="single-step-card zoom-card">
									<?php if( have_rows('single_step_card') ):?>
										<?php while ( have_rows('single_step_card') ) : the_row();?>	
											<div  class="jl-red-bg">	
												<p class="step-card-number"><span><?php the_sub_field('step_card_number');?></span></p>
												<h4><?php the_sub_field('step_card_title');?></h4>
											</div>
											<div class="step_card_copy"><?php the_sub_field('step_card_copy');?></div>
										<?php endwhile;?>
									<?php endif;?>				
								</div>
							<?php endwhile;?>
						<?php endif;?>
					</div>
			</section>
			
			<section id="new-member-inquiry" class="lt-gray-bg with-half">
				<div class="table">
					<div id="project_history" class="callout-half">
						<div id="arrow-trigger"></div>
						<div class="callout-half-inner wrap-600">
							<h3><?php the_field('new_member_inquiry_title');?></h3>
							<p><?php the_field('join_pitch');?></p>
						</div>
					</div>
					
					<div id="did_you_know" class="callout-half jl-red-bg">
						<div class="callout-half-inner wrap-600">
							<?php echo do_shortcode('[contact-form-7 id="365" title="New Member Form"]');?>
						</div>
					</div>
				</div>
				
				

			</section>
					
		</main><!-- #main -->
	</div><!-- #primary -->
<!--
<script>
	!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,a=function(t){return parseFloat(t)||0},n=function(e){var o=t(e),n=null,i=[];return o.each(function(){var e=t(this),o=e.offset().top-a(e.css("margin-top")),r=i.length>0?i[i.length-1]:null;null===r?i.push(e):Math.floor(Math.abs(n-o))<=1?i[i.length-1]=r.add(e):i.push(e),n=o}),i},i=function(e){var o={byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=i(e);if(o.remove){var a=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(a)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="master",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,r._afterUpdate=null,r._rows=n,r._parse=a,r._parseOptions=i,r._apply=function(e,o){var s=i(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),u=h.parents().filter(":hidden");return u.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),u.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0","padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=n(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var n=t(o),i=0;if(s.target)i=s.target.outerHeight(!1);else{if(s.byRow&&n.length<=1)return void n.css(s.property,"");n.each(function(){var e=t(this),o=e.attr("style"),a=e.css("display");"inline-block"!==a&&"flex"!==a&&"inline-flex"!==a&&(a="block");var n={display:a};n[s.property]="",e.css(n),e.outerHeight(!1)>i&&(i=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}n.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=a(e.css("border-top-width"))+a(e.css("border-bottom-width")),o+=a(e.css("padding-top"))+a(e.css("padding-bottom"))),e.css(s.property,i-o+"px"))})}),u.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),a=o.attr("data-mh")||o.attr("data-match-height");e[a]=a in e?e[a].add(o):o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(a,n){if(n&&"resize"===n.type){var i=t(window).width();if(i===e)return;e=i}a?-1===o&&(o=setTimeout(function(){s(n),o=-1},r._throttle)):s(n)},t(r._applyDataApi);var h=t.fn.on?"on":"bind";t(window)[h]("load",function(t){r._update(!1,t)}),t(window)[h]("resize orientationchange",function(t){r._update(!0,t)})});
	jQuery(function() {
		jQuery('.single-step-card').matchHeight();
	});
</script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js"></script>
<script>
var scroll = new SmoothScroll('a[href*="#"]', {
	// Selectors
	ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
	header: null, // Selector for fixed headers (must be a valid CSS selector)

	// Speed & Easing
	speed: 2000, // Integer. How fast to complete the scroll in milliseconds
	offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
	easing: 'easeInOutQuint', // Easing pattern to use


	// Callback API
	before: function (anchor, toggle) {}, // Callback to run before scroll
	after: function (anchor, toggle) {} // Callback to run after scroll
});
</script>
<?php
get_footer();
