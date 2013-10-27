<section class="intro">
	<h2>Mot d'introduction et Contact</h2>
	<div class="introduction">
		<p><strong>Bien le bonjour!</strong> Je m'appelle Julien, je fais des sites internet et des applications mobiles pour vous.</p>
	</div><!--
	--><div class="lien load_quicker" id="contact">
		<a href="<?php 
		$page = get_page_by_title( 'Contact' );
		$pageID = $page->ID;
		echo get_page_link( $pageID ); ?>">Contact</a>
	</div>
</section>