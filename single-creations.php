<?php get_header(); $sSpeed = array('slower','slow','quick','quicker');?>
<section class="blog">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title()?></h2>
			<div class="introduction">
				<p><strong><?php the_title()?></strong><span class="date"><?php the_date()?></span></p>
			</div><!--
			--><div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="portfolio">
				<a href="<?php echo get_post_type_archive_link( 'creations' );?>">Portfolio</a>
			</div>
			<div class="page_blog">			
				<div class="black article load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>">
					<?php if (has_post_thumbnail()) :?>
						<div class="fullscreen">
							<?php echo get_the_post_thumbnail(get_the_ID(),array(670,363))?>
						</div><!--
					--><?php endif;?><!--
					--><div class="cadre cadre_moi full_height">
						<?php the_content();?>
					</div><!--
				--></div>
			</div>
<?php endwhile;endif; ?>
</section>
<?php $location='portfolio'; get_template_part('menu');get_footer(); ?>