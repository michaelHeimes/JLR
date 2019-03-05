<?php
/**
 * Template Name: Contact Page
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
		
		
		<div id="address-contact-wrap">
			<div id="contact-address" class="address-contact-wrap-half drk-gray-bg">
				<div class="contact-wrap-half-inner">
					<a href="tel:(610) 374-9811"><span class="address-icon"><i class="fas fa-phone-volume"></i></span><span>610.374.9811</span></a>
					<a href="https://www.google.com/maps/place/Junior+League+of+Reading+Pa/@40.330248,-75.971641,15z/data=!4m5!3m4!1s0x0:0x9294a47e885e5e4c!8m2!3d40.330248!4d-75.971641" target="blank">
						<span class="address-icon"><i class="fas fa-map-pin"></i></span><span>The Junior League<br>Of Reading, PA Inc.<br>1520 Penn Ave<br>Wyomissing, PA<br>19610</span>
					</a>
				</div>
			</div>
			<div id="contact-form" class="address-contact-wrap-half jl-red-bg">
				<div class="contact-wrap-half-inner">
					<?php echo do_shortcode('[contact-form-7 id="330" title="Contact form 1"]');?>
				</div>
			</div>

		</div>
		
		<div id="map" style="height: 400px;">
<!-- 			<?php echo do_shortcode('[wpgmza id="1"]');?> -->
		</div>
		
		<script>
			jQuery( document ).ready(function() {
			    var map = L.map('map',{
			    center: [40.3303428, -75.97170080000001],
			    zoom: 14
			    });

			    L.tileLayer('https://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', {
				    maxZoom: 18,
	attribution: 'Tiles courtesy of <a href="http://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
			    }).addTo(map);
			    
			     var marker = L.marker([40.3303428, -75.97170080000001]).addTo(map);





			});
		</script>
		
		

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php
get_footer();
