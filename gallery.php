<?php global $speed; $creations = new WP_Query( array('post_type' => 'creations') ); ?>
<section class="gallery">
		<?php if($creations -> have_posts()):
		$posts = get_posts(array('post_type' => 'creations'));?>
			<h2>Galerie du Portfolio</h2>
			<div class="lien load_slower" id="portfolio">
					<a href="<?php echo get_post_type_archive_link( 'creations' );?>">Portfolio</a>
			</div>
			<?php get_template_part('highlight') ?>
			<?php 
				$tiles = $posts[1];
				$stats = get_object_vars($tiles);
				$id = $stats['ID'];
				$speed = 'quick';
				get_template_part('tile-large');
			?><!--
			--><?php
			for ($i=2; $i < count($posts); $i++) {
				$tiles = $posts[$i];
				$stats = get_object_vars($tiles);
				$id = $stats['ID'];
				$sSpeed = array('slower','slow','quick','quicker');
				$rand_key = array_rand($sSpeed,1);
				if($i % 2 === 0){
					$speed = $sSpeed[$rand_key];get_template_part('tile-normal');
				}else{
					$speed = $sSpeed[$rand_key];get_template_part('tile-large');
				}
					
			}?>
		<?php endif; wp_reset_postdata(); ?>
	</section>