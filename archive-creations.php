<?php get_header();?>
<?php $creations = new WP_Query( array('post_type' => 'creations') ); ?>
<section class="gallery">
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
			if($i % 2 === 0){
				$speed = quick; get_template_part('tile-large');
			}else{
				$speed = slow; get_template_part('tile-normal');
			}
			
		}?>
	<?php endif; ?>
</section>
<?php 
//var_dump($posts);
get_footer();
?>