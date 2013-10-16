<?php global $speed,$id; $recent_post = get_post($id, ARRAY_A);?>
<a href="<?php echo get_permalink( $id )?>" class="black"><figure class="tile load_<?php echo $speed ?>">
	<div class="image"><?php echo get_the_post_thumbnail($id) ?></div> 
	<figcaption class="onglet">
		<span class="title"><?php echo $recent_post['post_title'] ?></span> <?php echo $recent_post['post_excerpt'];?>
	</figcaption>
</figure></a>