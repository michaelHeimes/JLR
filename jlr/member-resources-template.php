<?php
/**
 * Template Name: Member Resources Page
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
				<?php if( have_rows('files') ):?>
					<div class="file-grid-wrap wrap-992">
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
			<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
