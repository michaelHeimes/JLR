<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JLR
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main wrap-992">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'jlr' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
				<h3>Please use the navigation above to find what you're looking for.</h3>
				<h3>And if you can't find something that you're looking for, feel free to<br><a href="<?php echo get_site_url();?>/contact">CONTACT US</a>.</h3>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
