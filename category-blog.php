<?php get_header(); $sSpeed = array('slower','slow','quick','quicker');?>
<section class="blog">
	<h2>Blog de Julien Cheron</h2>
			<div class="introduction">
				<p><strong>Mon Blog</strong> Les articles, trouvailles, etc. que je vous partage.</p>
			</div>
			<div class="lien load_slow" id="blog">
				<a href="<?php echo get_category_link(get_cat_ID( 'Blog' )); ?>">Blog</a>
			</div>
			<div>
	<?php 
	$the_query = new WP_Query( array('post_type' => 'post') );
	if ( have_posts() ) : while ( have_posts() ) : the_post()?>
			
				<a class="black article load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" href=" <?php the_permalink() ?> " title="cliquez sur l'article pour lire la suite de <?php the_title()?>">
					<?php if (has_post_thumbnail()) :?>
						<div class="image">
							<?php echo get_the_post_thumbnail()?>
						</div><!--
					--><?php endif;?><!--
					--><div class="cadre">
						<span class="title"><?php the_title()?></span>
						<span class="date"><?php the_date()?></span>
						<?php the_content();?>
						<span class="date bottom">Lire la suite</span>
					</div><!--
				--></a>
<?php endwhile;?>
			</div>
<?php endif; wp_reset_postdata(); ?>
</section>
<?php get_template_part('menu');get_footer(); ?>