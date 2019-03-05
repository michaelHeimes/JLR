<?php
/**
 * Template Name: Resource Pages
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
			<div id="resources-page-wrap" class="wrap-1200">
				<?php if( have_rows('file_and_links') ):?>
					<?php while ( have_rows('file_and_links') ) : the_row();?>
					<?php if( have_rows('category') ):?>
						<div class="cat-wrap">
						<?php while ( have_rows('category') ) : the_row();?>
							<div class="single-cat">
							<h3><?php the_sub_field('category_name');?></h3>
							<?php if( have_rows('sub-category') ):?>
								<section class="sub-cat-wrap">
								<?php while ( have_rows('sub-category') ) : the_row();?>		
									<div class="single-sub-cat">	
										<h3><?php the_sub_field('sub-category_title');?></h3>
										<?php if( have_rows('sub-category_files_and_links') ):?>
											<?php while ( have_rows('sub-category_files_and_links') ) : the_row();?>
											<?php if( have_rows('single_year_or_all') ):?>
												<div class="single-year-wrap">
													<?php while ( have_rows('single_year_or_all') ) : the_row();?>											
													<h3><?php the_sub_field('year_number_or_all');?></h3>
														<?php if( have_rows('files_and_links') ):?>
															<?php while ( have_rows('files_and_links') ) : the_row();?>		
																<?php if( have_rows('single_file_or_link') ):?>
																	<?php while ( have_rows('single_file_or_link') ) : the_row();?>																																	<div class="single-file-link">
																		<h5><?php the_sub_field('name');?></h5>
																			<?php if( get_sub_field('type') == 'File' ): ?>
																				<a href="<?php the_sub_field('file');?>" target="_blank"><span>View or Download</span><i class="far fa-file"></i></a>
																			<?php endif;?>
																			<?php if( get_sub_field('type') == 'Link' ): ?>
																				<a href="<?php the_sub_field('link');?>" target="_blank"><span>Open Link</span><i class="fas fa-external-link-alt"></i></a>
																			<?php endif;?>																	
																	</div>
																	<?php endwhile; ?>
																<?php endif; ?>												
															<?php endwhile; ?>
														<?php endif; ?>																							
												<?php endwhile; ?>
												</div>
											<?php endif; ?>
											<?php endwhile; ?>
										<?php endif; ?>									
									</div>
								<?php endwhile; ?>
								</section>
							<?php endif; ?>													
							</div>					
						<?php endwhile; ?>
						</div>
					<?php endif; ?>				
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	<script>
	jQuery( document ).ready(function($) {		
		$( ".single-cat" ).accordion({
			animated: 'bounceslide',
			easing: 'swing',
			active: false,
			heightStyle: content,
			collapsible: true
		});	
		
		$( ".single-sub-cat" ).accordion({
			animated: 'bounceslide',
			easing: 'swing',
			active: false,
			heightStyle: content,
			collapsible: true
		});		
		
		$( ".single-year-wrap" ).accordion({
			animated: 'bounceslide',
			easing: 'swing',
			active: false,
			heightStyle: content,
			collapsible: true
		});	
			
	});				
	</script>

<?php
get_footer();
