<?php if(get_post_type(get_the_ID()) == 'members' ):?>

	<article class="member-card">
		<h3><?php echo the_title();?></h3>
		<img src="<?php the_field('photo');?>" />
		<p><?php the_field('year');?></p>
		<p><?php the_field('email');?></p>
		<p><?php the_field('address');?></p>
		<p><?php the_field('home_phone');?></p>
		<p><?php the_field('cell_phone');?></p>

		
	</article>
  
  <?php endif;?>