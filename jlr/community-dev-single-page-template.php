<?php
/**
 * Template Name: Community Development Page
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
		
			<section id="page-intro" class="centered wrap-992">
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
				<?php the_field('project_intro_for_home_page');?>
			</section>
			
			<section class="lt-gray-bg with-half">
				<div class="table">
				<div id="project_history" class="callout-half"><div id="arrow-trigger"></div><div class="callout-half-inner wrap-600"><h3 class="fjalla"><?php the_field('project_history_title');?></h3><?php the_field('project_history');?></div></div>
				
				<div id="did_you_know" class="callout-half jl-red-bg"><div class="callout-half-inner wrap-600"><h3 class="fjalla"><?php the_field('project_facts_title');?></h3><?php the_field('did_you_know');?></div></div>
				</div>
			</section>
			
			<section id="recent-event">
				<div class="drk-gray-bg">
					<div class="wrap-1600 centered recent-contact"><?php the_field('most_recent_event');?></div>
				</div>
				
				<?php if( have_rows('sponsors') ):?>
					<div id="sponsors" class="wrap-1200">
						<h3 class="jl-red"><?php the_field('sponsors_title');?></h3>
						<?php the_field('sponsors_copy');?>
						<div id="sponsor-logos-wrap">
					    	<?php while ( have_rows('sponsors') ) : the_row();?>
					    		<a href="<?php the_sub_field('link');?>" target="_blank"><img src="<?php the_sub_field('logo');?>"/></a>
							<?php endwhile;?>
						</div>
					</div>
				<?php endif;?>
				
				<div id="gallery-wrap">
					<h3 class="jl-red centered"><?php the_field('gallery_title');?></h3>
					<?php the_field('gallery');?>
				</div>

			</section>			
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
