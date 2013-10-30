<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $sSpeed = array('slower','slow','quick','quicker');?>
<section class="moi">
	<h2>Contacter Julien Cheron</h2>
	<div class="introduction">
		<p><strong>Me Contacter</strong> N'hésitez pas à remplir le formulaire pour me contacter.</p>
	</div><!--
	--><div class="lien load_quicker" id="contact">
		<a href="<?php
		$page = get_page_by_title( 'Contact' );
		$pageID = $page->ID;
		echo get_page_link( $pageID ); ?>">Contact</a>
	</div>
	<div class="contenu blog">
		<div class="cadre cadre_moi load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>">
			<form id="contact" method="post" action="traitement_formulaire.php">
			    <fieldset><legend>Vos coordonnées</legend>
			    <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" tabindex="1" /></p>
			    <p><label for="email">Email :</label><input type="email" id="email" name="email" tabindex="2" /></p>
			    </fieldset>
			     
			    <fieldset><legend>Votre message :</legend>
			    <p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" tabindex="3" /></p>
			    <p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea></p>
			    </fieldset>
			     
			    <input type="submit" name="envoi" value="Envoyer le formulaire !" />
			</form>
		</div>
	</div>
</section>
<?php endwhile;endif;
$location='contact';
//var_dump($customFields);
get_template_part('menu');
get_footer(); ?>