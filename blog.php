<?php 
$the_query = new WP_Query( array('post_type' => 'post') );
?>
<section class="blog">
	<div class="lien load_slow" id="blog">
		<a href="<?php echo get_category_link(get_cat_ID( 'Blog' )); ?>">Blog</a>
	</div><!--
	--><?php if($the_query ->have_posts()):?><!--
		--><?php $last_post = wp_get_recent_posts(array('numberposts' => '1'));?><!--
			--><a class="black article load_quick" href=" <?php echo get_permalink( $last_post[0]['ID'] )?> " title="cliquez sur l'article pour lire la suite de <?php echo $last_post[0]['post_title']?>">
				<h2>Dernier Post de mon blog</h2>
				<?php if (has_post_thumbnail()) :?>
					<div class="image">
						<?php echo get_the_post_thumbnail($last_post[0]['ID'], array(170,170))?>
					</div><!--
				--><?php endif;?><!--
				--><div class="cadre">
					<span class="title"><?php echo $last_post[0]['post_title']?></span>
					<span class="date"><?php echo $last_post[0]['post_date'];?></span>
					<?php echo $last_post[0]['post_content']?>
					<span class="date bottom">Lire la suite</span>
				</div><!--
			--></a><!--
	--><?php endif; wp_reset_postdata(); ?>
</section>