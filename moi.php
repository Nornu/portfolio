<section class="moi">
	<h2>A mon propos</h2>
	<div class="lien load_quicker" id="moi">
		<a href="index.php/moi">Moi</a>
	</div><!--
	--><img class="portrait load_quick" src="<?php
	$test=get_posts(array('post_title' => 'moi', 'post_type' => 'attachment'));
	$file = $test['0'];
	$photo_ID = get_object_vars($file);
	$img=wp_get_attachment_image_src( $photo_ID['ID'] );
	echo $img[0];?>">
</section>