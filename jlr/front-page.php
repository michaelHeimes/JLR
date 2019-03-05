<?php
/**
 * The template for Front Page
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
				<a class="learn-more-link jl-red box-link" href="/about">- Learn More About Us -</a>
			</section>
			
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
						<p id="join_donate_cta" class="jl-red-bg absolute-centered"><?php the_sub_field('join_&_donate_cta', 'option');?>
							<span id="mobile-j-d-link-wrap">
								<a class="jd-join box-link" href="/join">- Learn About Becoming a Member -</a>
								<a class="jd-donate box-link" href="/donate">- Learn About Donating -</a>
							</span>
						</p>
					</div>
				<?php endwhile;endif;?>					
				</div>
			</section>
			
			<section id="community-development-wrap" class="wrap-1600">
				<?php if( have_rows('community_development_intro') ):
					    while ( have_rows('community_development_intro') ) : the_row();?>
					    	<div class="single-community-development community_development_intro-wrap">
						    	<div class="home-half home-half-left community_development_intro-l">
									<h2 id="community-dev-title" class="home-group-title"><?php the_sub_field('community_development_title');?></h2>
									<div class="home-half-text-wrap">
										<?php the_sub_field('community_development_intro_copy');?>
									</div>
						    	</div>
						    	
						    	
						    	<?php if( get_sub_field('video_link') ): ?>
									<div class="home-half home-half-right community_development_intro-r">
										<div class="video-wrap"><?php the_sub_field('video_link');?></div>
									</div>
									
								<?php else:?>
									
									<?php
										$imgID1 = get_sub_field('photo');
										$imgSize1 = "home-preview-images"; // (thumbnail, medium, large, full or custom size)
										$imgArr1 = wp_get_attachment_image_src( $imgID1, $imgSize1 );
									?>								
									<div class="home-half home-half-right community_development_intro-r" style="background-image: url(<?php echo $imgArr1[0]; ?> );"></div>
								
								<?php endif;?>

					    	</div>
				<?php endwhile;endif;?>
			
				<?php if( have_rows('community_development') ):
					    while ( have_rows('community_development') ) : the_row();?>
						<article class="single-community-development" class="wrap-1600">
							<?php
								$post_object = get_sub_field('single_project');
								if( $post_object ): 
									// override $post
									$post = $post_object;
									setup_postdata( $post ); 
									?>
							    	<div class="community_development_intro-wrap">
								    	<div class="home-half home-half-left community_development_intro-l">
									    	<div class="home-half-text-wrap">
												<h3 class="community-dev-project-title"><?php the_title();?></h3>
												<?php the_field('project_intro_for_home_page');?>
												<a class="home-lm-link" href="<?php echo the_permalink();?>">- Learn More -</a>
											</div>
								    	</div>
								    	<?php
											$imgID1 = get_field('image_for_home_page');
											$imgSize1 = "home-preview-images"; // (thumbnail, medium, large, full or custom size)
											$imgArr1 = wp_get_attachment_image_src( $imgID1, $imgSize1 );
										?>
										<div class="home-half home-half-right low-res community_development_intro-r" style="background-image: url(<?php echo $imgArr1[0]; ?> );">
										</div>
										
								    	<?php
											$imgID2 = get_field('image_for_home_page');
											$imgSize2 = "home-preview-image-2s"; // (thumbnail, medium, large, full or custom size)
											$imgArr2 = wp_get_attachment_image_src( $imgID2, $imgSize2 );
										?>
										<div class="home-half home-half-right high-res community_development_intro-r" style="background-image: url(<?php echo $imgArr2[0]; ?> );">
										</div>
										
							    	</div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
								<?php endif; ?>	
						</article>
				<?php endwhile;endif;?>
				
			</section>
				
				
			<section id="mobile-community-development-wrap">
				<?php if( have_rows('community_development_intro') ):
					    while ( have_rows('community_development_intro') ) : the_row();?>
					    	<div class="single-community-development community_development_intro-wrap">
									<h2 id="mobile-community-dev-title" class="home-group-title"><?php the_sub_field('community_development_title');?></h2>
									<div class="home-half-text-wrap">
										<?php the_sub_field('community_development_intro_copy');?>
									</div>
									
									
									
						    	<?php if( get_sub_field('video_link') ): ?>
										<div class="video-wrap"><?php the_sub_field('video_link');?></div>									
								<?php else:?>
									
									<?php 
										$image = get_sub_field('photo');
										$size = 'home-preview-images'; // (thumbnail, medium, large, full or custom size)
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
									?>	
								<?php endif;?>									

					    	</div>
				<?php endwhile;endif;?>
			
					<?php if( have_rows('community_development') ):
						    while ( have_rows('community_development') ) : the_row();?>
							<article class="single-community-development" class="wrap-1600">
								<?php
									$post_object = get_sub_field('single_project');
									if( $post_object ): 
										// override $post
										$post = $post_object;
										setup_postdata( $post ); 
										?>
								    	<div class="community_development_intro-wrap">
										    	<div class="home-half-text-wrap">
													<h3 class="community-dev-project-title"><?php the_title();?></h3>
													<?php 
														$image = get_field('image_for_home_page');
														$size = 'home-preview-images'; // (thumbnail, medium, large, full or custom size)
														if( $image ) {
															echo wp_get_attachment_image( $image, $size );
														}
													?>													<?php the_field('project_intro_for_home_page');?>
													<a class="home-lm-link" href="<?php echo the_permalink();?>">- Learn More -</a>
												</div>
								    	</div>
										    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>	
							</article>
					<?php endwhile;endif;?>
				
			</section>	
			
			<div id="comm-events-divider" class="jl-red-bg"></div>			


			<section id="events-wrap" class="wrap-1600">
				<?php if( have_rows('events_intro') ):
					    while ( have_rows('events_intro') ) : the_row();?>
					    	<div class="single-community-development community_development_intro-wrap">
						    	<div class="home-half home-half-left community_development_intro-l">
									<h2 id="events-title" class="home-group-title"><?php the_sub_field('events_title');?></h2>
									<div class="home-half-text-wrap">
										<?php the_sub_field('events_intro_copy');?>
									</div>
						    	</div>
						    	<?php if( get_sub_field('video_link') ): ?>
									<div class="home-half home-half-right community_development_intro-r">
										<div class="video-wrap"><?php the_sub_field('video_link');?></div>
									</div>
									
								<?php else:?>
									
									<?php
										$imgID1 = get_sub_field('photo');
										$imgSize1 = "home-preview-images"; // (thumbnail, medium, large, full or custom size)
										$imgArr1 = wp_get_attachment_image_src( $imgID1, $imgSize1 );
									?>								
									<div class="home-half home-half-right community_development_intro-r" style="background-image: url(<?php echo $imgArr1[0]; ?> );"></div>
								
								<?php endif;?>

					    	</div>
				<?php endwhile;endif;?>
			
					<?php if( have_rows('events_repeater') ):
						    while ( have_rows('events_repeater') ) : the_row();?>
							<article class="single-community-development" class="wrap-1600">
								<?php
									$post_object = get_sub_field('single_project');
									if( $post_object ): 
										// override $post
										$post = $post_object;
										setup_postdata( $post ); 
										?>
								    	<div class="community_development_intro-wrap">
									    	<div class="home-half home-half-left community_development_intro-l">
										    	<div class="home-half-text-wrap">
													<h3 class="community-dev-project-title"><?php the_title();?></h3>
													<?php the_field('project_intro_for_home_page');?>
													<a class="home-lm-link" href="<?php echo the_permalink();?>">- Learn More -</a>
												</div>
									    	</div>
									    	<?php
												$imgID1 = get_field('image_for_home_page');
												$imgSize1 = "home-preview-images"; // (thumbnail, medium, large, full or custom size)
												$imgArr1 = wp_get_attachment_image_src( $imgID1, $imgSize1 );
											?>
											<?php 
											if( !empty($imgID1) ): ?>
											<div class="home-half home-half-right community_development_intro-r" style="background-image: url(<?php echo $imgArr1[0]; ?> );">
											<?php endif;?>											</div>
								    	</div>
										    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>	
							</article>

					<?php endwhile;endif;?>
				
			</section>				
				

			<section id="mobile-events-wrap">
				<?php if( have_rows('events_intro') ):
					    while ( have_rows('events_intro') ) : the_row();?>
					    	<div class="single-community-development community_development_intro-wrap">
									<h2 id="mobile-events-title" class="home-group-title"><?php the_sub_field('events_title');?></h2>
									<div class="home-half-text-wrap">
										<?php the_sub_field('events_intro_copy');?>
									</div>
						    	<?php if( get_sub_field('video_link') ): ?>
										<div class="video-wrap"><?php the_sub_field('video_link');?></div>
									
								<?php else:?>
									
									<?php 
										$image = get_sub_field('photo');
										$size = 'home-preview-images'; // (thumbnail, medium, large, full or custom size)
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
									?>	
								<?php endif;?>	
								
					    	</div>
				<?php endwhile;endif;?>
			
					<?php if( have_rows('events_repeater') ):
						    while ( have_rows('events_repeater') ) : the_row();?>
							<article class="single-community-development" class="wrap-1600">
								<?php
									$post_object = get_sub_field('single_project');
									if( $post_object ): 
										// override $post
										$post = $post_object;
										setup_postdata( $post ); 
										?>
								    	<div class="community_development_intro-wrap">
										    	<div class="home-half-text-wrap">
													<h3 class="community-dev-project-title"><?php the_title();?></h3>
													<?php 
														$image = get_field('image_for_home_page');
														$size = 'home-preview-images'; // (thumbnail, medium, large, full or custom size)
														if( $image ) {
															echo wp_get_attachment_image( $image, $size );
														}
													?>														<?php the_field('project_intro_for_home_page');?>
													<a class="home-lm-link" href="<?php echo the_permalink();?>">- Learn More -</a>
												</div>
								    	</div>
										    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>	

							</article>

					<?php endwhile;endif;?>
				
				</section>					
				
				
				
				
				
				
				
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
	



<?php
get_footer();
