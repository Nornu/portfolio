<?php
$sSpeed = array('slower','slow','quick','quicker');
?>
<section class="menu">
	<h2>Menu de Navigation</h2>
	<div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="portfolio">
		<a href="<?php echo get_post_type_archive_link( 'creations' );?>">Portfolio</a>
	</div><div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="blog">
		<a href="<?php echo get_category_link(get_cat_ID( 'Blog' )); ?>">Blog</a>
	</div><div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="moi">
		<a href="<?php 
		$page = get_page_by_title( 'Moi' );
		$pageID = $page->ID;
		echo get_page_link( $pageID ); ?>">Moi</a>
	</div><div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="contact">
		<a href="<?php 
		$page = get_page_by_title( 'Contact' );
		$pageID = $page->ID;
		echo get_page_link( $pageID ); ?>">Contact</a>
	</div>
</section>