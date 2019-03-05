<?php
/**
 * Template Name: About Page
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
				<div id="our-mission"></div>
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
			
			<section id="about-cards" class="centered">
				<div class="wrap-1200">
					<?php if( have_rows('left_card') ):?>
						<div class="single-about-card">
							<?php while ( have_rows('left_card') ) : the_row();?>	
								<h3><?php the_sub_field('title');?></h3>
								<div class="single-about-card-copy-wrap">
									<p><?php the_sub_field('copy');?></p>	
								</div>								<?php endwhile;?>
						</div>
					<?php endif;?>				
					<?php if( have_rows('center_card') ):?>
						<div class="single-about-card">
							<?php while ( have_rows('center_card') ) : the_row();?>	
								<h3><?php the_sub_field('title');?></h3>
								<div class="single-about-card-copy-wrap">
									<p><?php the_sub_field('copy');?></p>	
								</div>		
							<?php endwhile;?>
						</div>
					<?php endif;?>	
					<?php if( have_rows('right_card') ):?>
						<div class="single-about-card">
							<?php while ( have_rows('right_card') ) : the_row();?>	
								<h3><?php the_sub_field('title');?></h3>
								<div class="single-about-card-copy-wrap">
									<p><?php the_sub_field('copy');?></p>	
								</div>								
							<?php endwhile;?>
						</div>
					<?php endif;?>	
				</div>			
			</section>
			
			<?php if( have_rows('who_are_we') ):?>
			<section id="who-we-are" class="about-skew">
				<div class="wrap-1400">
				<?php while ( have_rows('who_are_we') ) : the_row();?>	
					<div class="about-half ash-title">
						<span><?php the_sub_field('title');?></span><span class="about-half-mark q-mark">?</span></div>
					<div class="about-half ash-copy"><span><?php the_sub_field('copy');?></span></div>				
				<?php endwhile;?>
				</div>
			</section>
			<?php endif;?>	

			<?php if( have_rows('what_do_we_do') ):?>
			<section id="who-we-are" class="about-skew">
				<div id="what-we-do" class="wrap-1400">
				<?php while ( have_rows('what_do_we_do') ) : the_row();?>	
					<div class="about-half ash-title"><span><?php the_sub_field('title');?></span><span class="about-half-mark ex-mark">!</span></div>
					<div class="about-half ash-copy"><span><?php the_sub_field('copy');?></span></div>				
				<?php endwhile;?>
				</div>
			</section>
			<?php endif;?>	
			
			<section id="our-legacy" class="members-intro">
				<h2 class="centered drk-gray-bg">Our Legacy</h2>
				<div class="wrap-750">
					<?php the_field('legacy_copy');?>
				</div>
			</section>	
			
			<section id="our-members" class="members-intro">
				<h2 class="centered drk-gray-bg">Our Members</h2>
				<div class="wrap-750">
					<?php the_field('members_copy');?>
					<a class="jd-join box-link" href="/join">– Learn About Becoming a Member –</a>
				</div>
			</section>			
	
			<section id="board-of-directors" class="member-section">
				<h3 class="centered"><span>Board of Directors</span></h3>
				<div id="board-intro-wrap" class="member-section-copy wrap-750 centered">
					<?php the_field('board_of_directors_intro');?>
				</div>
			<?php if( have_rows('board_of_directors') ):?>
				<div class="wrap-1400">
				<?php while ( have_rows('board_of_directors') ) : the_row();?>	
					<?php if( have_rows('single_member') ):?>
						<?php while ( have_rows('single_member') ) : the_row();?>	
						<div class="single_bod">
							<div class="single_bod-l">
								<div class="arrow-trigger"></div>
								<div class="member-card-img-wrap member-img-low-res">
									<?php 
										$image = get_sub_field('photo');
										$size = 'member-photo-1x';
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
									?>
								</div>
								<div class="member-card-img-wrap member-img-high-res">
									<?php 
										$image = get_sub_field('photo');
										$size = 'member-photo';
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
									?>
								</div>
								<div class="single_bod-l-text-wrap">
									<h4 class="bod-name"><?php the_sub_field('name');?></h4>
									<h4 class="bod-title"><?php the_sub_field('title');?></h4>
								</div>
							</div>
							<div class="single_bod-r">
								<?php the_sub_field('copy');?>
							</div>
						</div>
						<?php endwhile;?>
					<?php endif;?>	
				<?php endwhile;?>
				</div>
			<?php endif;?>
			</section>
			
			<section id="active-members" class="member-section">
				<h3 class="centered"><span>Active Members</span></h3>
				<div class="member-section-copy wrap-750 centered">
					<?php the_field('active_member_copy');?>
				</div>
				<?php echo do_shortcode('[unitegallery active_member_gallery]');?>
			</section>
			
			<section id="sustaining-members" class="member-section">
				<h3 class="centered"><span>Sustaining Members</span></h3>
				<div class="member-section-copy wrap-750 centered">
					<?php the_field('sustaining_member_copy');?>
				</div>
				<?php echo do_shortcode('[unitegallery sustaining_members_gallery]');?>
			</section>
	
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
