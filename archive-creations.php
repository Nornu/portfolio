<?php get_header();?>
<?php $creations = new WP_Query( array('post_type' => 'creations') ); ?>
<section class="gallery">
	<h2>La page avec toutes les créations de Julien Cheron</h2>
	<div class="introduction">
		<p><strong>Mes créations</strong> Sur cette page vous retrouvez toutes mes créations concernant le web.</p>
	</div><!--
--><div class="lien load_slower" id="portfolio">
					<a href="<?php echo get_post_type_archive_link( 'creations' );?>">Portfolio</a>
			</div>
	<div>
		<?php 
			if($creations -> have_posts()):
		?>
			<h2>Galerie du Portfolio</h2>
			<?php get_template_part('highlight')?>
			<?php 
			$posts = get_posts(array('numberposts'=>'','post_type' => 'creations'));
			for ($i=1; $i < count($posts); $i++) {
				$tiles = $posts[$i];
				$stats = get_object_vars($tiles);
				$id = $stats['ID'];
				$sSpeed = array('slower','slow','quick','quicker');
				$rand_key = array_rand($sSpeed,1);
				if($i % 2 === 0){
					$speed = $sSpeed[$rand_key]; get_template_part('tile-large');
				}else{
					$speed = $sSpeed[$rand_key]; get_template_part('tile-normal');
				}
				
			}?>	
	</div>
	
	<?php endif; ?>
</section>
<?php
$location='portfolio';
get_template_part('menu');
//var_dump($posts);
get_footer();
?>