<?php $the_query = new WP_Query( array('post_type' => 'post') ); ?>
<section class="gallery">
		<?php if($the_query -> have_posts()): ?>
			<h2>Galerie du Portfolio</h2>
			<?php get_template_part('highlight') ?>
			<?php $id = 1; get_template_part('tile-large') ?><!--
			--><div class="lien" id="portfolio">
					<a href="portfolio">Portfolio</a>
				</div><!--
			--><?php $id=2; get_template_part('tile-normal');?><!--
			--><?php $id = 3; get_template_part('tile-large') ?><!--
			--><?php $id = 4; get_template_part('tile-normal') ?>
		<?php endif; ?>
	</section>