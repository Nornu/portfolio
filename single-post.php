<?php get_header(); $sSpeed = array('slower','slow','quick','quicker');?>
<section class="blog">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title()?></h2>
			<div class="introduction">
				<p><strong><?php the_title()?></strong><span class="date"><?php the_date()?></span></p>
			</div><!--
			--><div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="blog">
				<a href="<?php echo get_category_link(get_cat_ID( 'Blog' )); ?>">Blog</a>
			</div>
			<div class="page_blog">			
				<a class="black article load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" href=" <?php the_permalink() ?> " title="cliquez sur l'article pour lire la suite de <?php the_title()?>">
					<?php if (has_post_thumbnail()) :?>
						<div class="image">
							<?php echo get_the_post_thumbnail()?>
						</div><!--
					--><?php endif;?><!--
					--><div class="cadre cadre_moi">
						<?php the_content();?>
					</div><!--
				--></a>
			</div>
<?php endwhile;endif; ?>
</section>
<?php $location='blog';get_template_part('menu');get_footer(); ?>