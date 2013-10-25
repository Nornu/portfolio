<?php $recent_posts = wp_get_recent_posts(array('numberposts' => '1', 'post_type'=>'creations'));
$sSpeed = array('slower','slow','quick','quicker');
$rand_key = array_rand($sSpeed,1);
$speed = $sSpeed[$rand_key];
?>
<a class="black clear" href="<?php echo get_permalink( $recent_posts[0]['ID'] )?>"><figure class="highlight load_<?php echo $speed ?>">
		<!--
		--><div class="imageL"><?php echo get_the_post_thumbnail($recent_posts[0]['ID'],array(340,340))?></div><!--
		-->
		<figcaption class="cadre">
			<span class="title"> <?php echo $recent_posts[0]['post_title'] ?> </span> <?php echo $recent_posts[0]['post_excerpt'] ?>
		</figcaption>
	</figure>
</a>