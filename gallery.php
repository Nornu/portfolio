<?php $the_query = new WP_Query( array('post_type' => 'post') ); ?>
<section class="gallery">
		<?php if($the_query -> have_posts()): ?>
		<?php $recent_posts = wp_get_recent_posts(array('numberposts' => '5', 'post_type'=>'creations'));?>
			<h2>Galerie du Portfolio</h2>
			<a class="black" href="<?php echo $recent_posts[0]['post_name']?>"><figure class="highlight">
				<!--
				--><div class="imageL"><?php echo get_the_post_thumbnail($recent_posts[0]['ID'],array(340,340))?></div><!--
				-->
				<figcaption class="cadre">
					<span class="title"> <?php echo $recent_posts[0]['post_title'] ?> </span> <?php echo $recent_posts[0]['post_excerpt'] ?>
				</figcaption>
			</figure></a>
			<!--
		--><a href="<?php echo $recent_posts[1]['post_name']?>" class="black"><figure class="tile">
				<div class="imageL"><?php echo get_the_post_thumbnail($recent_posts[1]['ID']) ?></div> 
				<figcaption class="onglet">
					<span class="title"><?php echo $recent_posts[1]['post_title'] ?></span> <?php echo $recent_posts[1]['post_excerpt'] ?>
				</figcaption>
			</figure></a><!--
			--><div class="lien" id="portfolio">
					<a href="portfolio.html">Portfolio</a>
				</div><!--
			--><a href="<?php echo $recent_posts[2]['post_name']?>" class="black"><figure class="tile">
				<div class="image"><?php echo get_the_post_thumbnail($recent_posts[2]['ID']) ?></div> 
				<figcaption class="onglet">
					<span class="title"><?php echo $recent_posts[2]['post_title'] ?></span> <?php echo $recent_posts[2]['post_excerpt'] ?>
				</figcaption>
			</figure></a><!--
			--><br>
			<a href="<?php echo $recent_posts[3]['post_name']?>" class="black"><figure class="tile">
				<div class="imageL"><?php echo get_the_post_thumbnail($recent_posts[3]['ID']) ?></div> 
				<figcaption class="onglet">
					<span class="title"><?php echo $recent_posts[3]['post_title'] ?></span> <?php echo $recent_posts[3]['post_excerpt'] ?>
				</figcaption>
			</figure></a><!--
			--><a href="<?php echo $recent_posts[4]['post_name']?>" class="black"><figure class="tile">
				<div class="image"><?php echo get_the_post_thumbnail($recent_posts[4]['ID']) ?></div> 
				<figcaption class="onglet">
					<span class="title"><?php echo $recent_posts[4]['post_title'] ?></span> <?php echo $recent_posts[4]['post_excerpt'] ?>
				</figcaption>
			</figure></a>
		<?php endif; ?>
	</section>