<?php global $speed; $the_query = new WP_Query( array('post_type' => 'creations') ); ?>
<section class="gallery">
		<?php if($the_query -> have_posts()): ?>
			<h2>Galerie du Portfolio</h2>
			<?php get_template_part('highlight') ?>
			<?php $id = 1; $speed = 'quick'; get_template_part('tile-large') ?><!--
			--><div class="lien load_slower" id="portfolio">
					<a href="<?php echo get_post_type_archive_link( 'creations' );?>">Portfolio</a>
				</div><!--
			--><?php $id = 2; $speed = 'quicker';get_template_part('tile-normal');?><!--
			--><?php $id = 3; $speed = 'slow';get_template_part('tile-large') ?><!--
			--><?php $id = 4; $speed = 'quick';get_template_part('tile-normal') ?>
		<?php endif; ?>
	</section>