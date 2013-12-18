<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $sSpeed = array('slower','slow','quick','quicker');?>
<section class="moi" itemscope itemtype="http://schema.org/Person">
	<h2>À mon propos</h2>
	<div class="introduction">
		<p><strong>À mon propos</strong> Des trucs que je fais, que je sais faire et des trucs tout court.</p>
	</div><!--
	--><div class="lien load_quicker" id="moi">
		<a href="<?php 
		$page = get_page_by_title( 'Moi' );
		$pageID = $page->ID;
		echo get_page_link( $pageID ); ?>">Moi</a>
	</div>
	<img itemprop="image" class="portrait load_quick" src="<?php
	$test=get_posts(array('post_title' => 'moi', 'post_type' => 'attachment'));
	$file = $test['0'];
	$photo_ID = get_object_vars($file);
	$img=wp_get_attachment_image_src( $photo_ID['ID'] );
	echo $img[0];?>">
	<div class="contenu blog">
		<div class="cadre cadre_moi load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>">
			<span class="date">modifié le <?php the_modified_date();?></span>
			<?php the_content()?>
		</div><!--
	--><div class="cadre load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>">
			<span class="date"></span>
			<?php
				$customFields = get_post_custom();
				foreach ( $customFields as $key => $value ) {
					//$keyet = trim($key);
					if( '_' !== $key{0} ){
						echo $key." <meter min=0 max=25 value=".$value[0].">".$value[0]." points de compétences</meter><br>";
					}
				}
?>
		</div>
	</div>
</section>
<?php endwhile;endif;
$location = 'moi';
//var_dump($customFields);
get_template_part('menu');
get_footer(); ?>