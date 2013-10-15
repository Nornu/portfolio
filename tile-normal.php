<?php $recent_posts = wp_get_recent_posts(array('numberposts' => '5', 'post_type'=>'creations'));?>
<a href="<?php echo get_permalink( $recent_posts[$id]['ID'] )?>" class="black"><figure class="tile">
	<div class="image"><?php echo get_the_post_thumbnail($recent_posts[$id]['ID']) ?></div> 
	<figcaption class="onglet">
		<span class="title"><?php echo $recent_posts[$id]['post_title'] ?></span> <?php echo $recent_posts[$id]['post_excerpt'] ?>
	</figcaption>
</figure></a>