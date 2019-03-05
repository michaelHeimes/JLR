<?php
/**
 * Template Name: Donate Page
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
			<div id="donate-button-wrap" class="centered">
				<a class="join-donate-wrap box-link" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=87R8X84JTHJC2" target="_blank">- Donate -</a>
			</div>
	

<?php
get_footer();
