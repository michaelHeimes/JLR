<?php
/**
 * Template Name: Member Directory Page
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
			<div id="member-filter-wrap">
				<p><input type="text" id="quicksearch" placeholder="Search" /></p>
				<p id="just-show">Show me:</p>
				<div id="member-filter-button-wrap">
					<button class="active" data-filter="*" type="button">All</button>
					<button data-filter=".category-board-of-directors" type="button">Board of Directors</button>
					<button data-filter=".category-community-council" type="button">Community Council</button>
					<button data-filter=".category-financial-resources-council" type="button">Financial Resources Council</button>
					<button data-filter=".category-membership-council" type="button">Membership Council</button>
					<button data-filter=".category-sustainers" type="button">Sustainers</button>
				</div>
			</div>

			<div class="grid wrap-1400">
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php
				  // set up or arguments for our custom query
				  $query_args = array(
				    'post_type' => 'members',
				    'orderby'        => 'title',
					'order'          => 'ASC',
				    'posts_per_page' => -1
				  );
				  		$classes = array(
							'podcast-preview',
							'wow',
							'slideInUp',
						);
				  // create a new instance of WP_Query
				  $the_query = new WP_Query( $query_args );
				?>
					
					<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
				<article <?php post_class('member-card'); ?>>		
					<div class="member-card-top">
						<div class="member-card-img-wrap member-img-low-res">
						<?php 

						$image = get_field('photo');
						$size = 'member-photo-1x'; // (thumbnail, medium, large, full or custom size)
						
						if( $image ) {
						
							echo wp_get_attachment_image( $image, $size );
						
						}
						
						?>
						</div>
						<div class="member-card-img-wrap member-img-high-res">
						<?php 

						$image = get_field('photo');
						$size = 'member-photo'; // (thumbnail, medium, large, full or custom size)
						
						if( $image ) {
						
							echo wp_get_attachment_image( $image, $size );
						
						}
						
						?>
						</div>
						
						<div class="member-card-top-text">
							<h3><?php echo the_title();?></h3>
							<?php if(get_field('title')):?>
								<h4><?php the_field('title');?></h4>
							<?php endif;?>
							<p class="year"><span>Joined: </span><?php the_field('year');?></p>
						</div>
					</div>
					
					<div class="member-card-bottom">
						<?php if(get_field('email')):?>
							<p class="email"><span>Email: </span><a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></p>
						<?php endif;?>
						<?php if(get_field('home_phone')):?>
							<p class="home_phone" ><span>Home Phone: </span><a href="tel:<?php the_field('home_phone');?>"><?php the_field('home_phone');?></a></p>
						<?php endif;?>
						<?php if(get_field('cell_phone')):?>
							<p class="cell_phone"><span>Cell Phone: </span><a href="tel:<?php the_field('cell_phone');?>"><?php the_field('cell_phone');?></a></p>
						<?php endif;?>
						<?php if(get_field('home_address')):?>
							<p><span>Address: </span><?php the_field('home_address');?></p>
						<?php endif;?>
					</div>
					
				</article>
				
					<?php endwhile; endif; ?>		
			
			</div>
		<?php endif;?>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.5/isotope.pkgd.min.js"></script>


<script>
jQuery( document ).ready(function($) {
	
	// quick search regex
	var qsRegex;
	var buttonFilter;
	
	// init Isotope
	var $grid = $('.grid').isotope({
		itemSelector: '.member-card',
		layoutMode: 'fitRows',
		percentPosition: true,
		fitRows: {
		gutter: '.gutter-sizer'
	},
		filter: function() {
			var $this = $(this);
			var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
			var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
			return searchResult && buttonResult;
		}
	});
	
	$('#member-filter-button-wrap').on( 'click', 'button', function() {
		buttonFilter = $( this ).attr('data-filter');
		$grid.isotope();
	});
	
	// use value of search field to filter
	var $quicksearch = $('#quicksearch').keyup( debounce( function() {
		qsRegex = new RegExp( $quicksearch.val(), 'gi' );
		$grid.isotope();
	}) );
	
	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
		var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', 'button', function() {
		$buttonGroup.find('.is-checked').removeClass('is-checked');
		$( this ).addClass('is-checked');
		});
	});
	
	
	// debounce so filtering doesn't happen every millisecond
	function debounce( fn, threshold ) {
		var timeout;
		threshold = threshold || 100;
		return function debounced() {
		clearTimeout( timeout );
		var args = arguments;
		var _this = this;
		function delayed() {
		fn.apply( _this, args );
		}
		timeout = setTimeout( delayed, threshold );
		};
	}	
	
	$('.grid').css('opacity', '1');
	
});
</script>
<?php
get_footer();
