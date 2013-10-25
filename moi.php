<section class="moi">
	<h2>A mon propos</h2>
	<div class="lien load_quicker" id="moi">
		<a href="<?php 
		$page = get_page_by_title( 'Moi' );
		$pageID = $page->ID;
		echo get_page_link( $pageID ); ?>">Moi</a>
	</div><!--
	--><img class="portrait load_quick" src="<?php
	$test=get_posts(array('post_title' => 'moi', 'post_type' => 'attachment'));
	$file = $test['0'];
	$photo_ID = get_object_vars($file);
	$img=wp_get_attachment_image_src( $photo_ID['ID'] );
	echo $img[0];?>" alt="Mon portrait">
</section>