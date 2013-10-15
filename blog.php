<?php 
$the_query = new WP_Query( array('post_type' => 'post') );
?>
<section class="blog">
	<?php if($the_query ->have_posts()):?>
		<?php $last_post = wp_get_recent_posts(array('numberposts' => '1'));?>
			<h2>Dernier Post de mon blog</h2>
			<a class="black article" href=" <?php echo $last_post[0]['post_name'] ?> ">
				<?php if (has_post_thumbnail()) :?>
					<div class="image">
						<?php echo the_post_thumbnail( array(170,170))?>
					</div><!--
				--><?php endif;?><!--
				--><div class="cadre">
					<span class="title"><?php echo $last_post[0]['post_title']?></span>
					<?php echo $last_post[0]['post_excerpt']?><br>
					<br>Lire la suite
				</div><!--
			--></a><!--
	--><?php wp_reset_postdata(); endif;?><!--
	--><div class="lien" id="blog">
		<a href="blog.html">Blog</a>
	</div>
</section>