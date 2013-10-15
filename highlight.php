<?php $recent_posts = wp_get_recent_posts(array('numberposts' => '5', 'post_type'=>'creations'));?>
<a class="black" href="<?php echo $recent_posts[0]['post_name']?>"><figure class="highlight">
		<!--
		--><div class="imageL"><?php echo get_the_post_thumbnail($recent_posts[0]['ID'],array(340,340))?></div><!--
		-->
		<figcaption class="cadre">
			<span class="title"> <?php echo $recent_posts[0]['post_title'] ?> </span> <?php echo $recent_posts[0]['post_excerpt'] ?>
		</figcaption>
	</figure>
</a>