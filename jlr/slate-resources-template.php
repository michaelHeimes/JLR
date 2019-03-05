<?php
/**
 * Template Name: SLATE Resources Page
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
		<?php if( !post_password_required( $post )): ?>

			<?php if( have_rows('directories') ):?>
				<div id="nested-directories-wrap" class="wrap-992">
				<?php while ( have_rows('directories') ) : the_row();?>	
					<?php if( have_rows('single_directory') ):?>
						<div class="single-directory ">
							
						<?php while ( have_rows('single_directory') ) : the_row();?>
							
							<h3 class="directory-name"><?php the_sub_field('directory_name');?><i class="fas fa-angle-down"></i></h3>
							
							<?php if( have_rows('sub-directories') ):?>
								<div>
								<?php while ( have_rows('sub-directories') ) : the_row();?>					
									<?php if( have_rows('single_sub-directory') ):?>
										<div class="single-sub-directory">
										<?php while ( have_rows('single_sub-directory') ) : the_row();?>
											<h3 class="sub-directory-name"><i class="fas fa-level-down-alt"></i><?php the_sub_field('sub-directory_name');?><i class="fas fa-angle-down"></i></h3>
											<?php if( have_rows('files') ):?>
												<div class="file-grid-wrap">
												<?php while ( have_rows('files') ) : the_row();?>
													<?php 
													$file = get_sub_field('file');
													if( $file ):				
														if(get_sub_field('pdf_question')):?>
															<div class="single-resource-file jl-red-bg">
																<p class="file-title"><?php echo $file['title']; ?></p>
																<a href="<?php echo $file['url']; ?>" target="_blank"><span>View<br>PDF</span><span><i class="far fa-file-pdf"></i></span></a>
															</div>
														<?php else:?>
															<div class="single-resource-file jl-red-bg">
																<p class="file-title"><?php echo $file['title']; ?></p>
																<a href="<?php echo $file['url']; ?>" download><span>Download<br>File</span><span><i class="far fa-file-alt"></i></span></a>
															</div>
														<?php endif; ?>
													<?php endif; ?>
													
												<?php endwhile;?>
												</div>
											<?php endif;?>	
											
											<?php if( have_rows('sub-sub-directories') ):?>
												<div>
												<?php while ( have_rows('sub-sub-directories') ) : the_row();?>					
													<?php if( have_rows('single_sub-sub-directory') ):?>
														<div class="single-sub-sub-directory">
														<?php while ( have_rows('single_sub-sub-directory') ) : the_row();?>
															<h3 class="sub-sub-directory-name"><i class="fas fa-level-down-alt"></i><?php the_sub_field('sub-sub-directory_name');?><i class="fas fa-angle-down"></i></h3>
															<?php if( have_rows('files') ):?>
																<div class="file-grid-wrap">
																<?php while ( have_rows('files') ) : the_row();?>
																	<?php 
																	$file = get_sub_field('file');
																	if( $file ):				
																		if(get_sub_field('pdf_question')):?>
																			<div class="single-resource-file jl-red-bg">
																				<p class="file-title"><?php echo $file['title']; ?></p>
																				<a href="<?php echo $file['url']; ?>" target="_blank"><span>View<br>PDF</span><span><i class="far fa-file-pdf"></i></span></a>
																			</div>
																		<?php else:?>
																			<div class="single-resource-file jl-red-bg">
																				<p class="file-title"><?php echo $file['title']; ?></p>
																				<a href="<?php echo $file['url']; ?>" download><span>Download<br>File</span><span><i class="far fa-file-alt"></i></span></a>
																			</div>
																		<?php endif; ?>
																	<?php endif; ?>
																<?php endwhile;?>
																</div>
															<?php endif;?>					
														<?php endwhile;?>
														</div>
													<?php endif;?>							
												<?php endwhile;?>
												</div>
											<?php endif;?>					
											
											
											
															
										<?php endwhile;?>
										</div>
									<?php endif;?>							
								<?php endwhile;?>
								</div>
							<?php endif;?>					
						<?php endwhile;?>
						</div>
					<?php endif;?>					
				<?php endwhile;?>
				</div>
			<?php endif;?>				
		<?php endif;?>				
			

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<script>
	jQuery( document ).ready(function($) {		
		$( ".single-directory" ).accordion({
        	autoHeight:false,
			animated: 'bounceslide',
			easing: 'swing',
			active: false,
			heightStyle: "content",
			collapsible: true
		});	
		
		$(".single-directory").show();
		$(".single-directory").accordion();
		
		$( ".single-sub-directory" ).accordion({
			autoHeight:false,
			animated: 'bounceslide',
			easing: 'swing',
			active: false,
			heightStyle: "content",
			collapsible: true
		});	
			
		$( ".single-sub-sub-directory" ).accordion({
			autoHeight:false,
			animated: 'bounceslide',
			easing: 'swing',
			active: false,
			heightStyle: "content",
			collapsible: true
		});				
	});				
	</script>

<?php
get_footer();
