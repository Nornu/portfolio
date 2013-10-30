<?php
global $location;
$sSpeed = array('slower','slow','quick','quicker');
$menu = array('portfolio', 'blog', 'moi', 'contact');
?>
<section class="menu">
	<h2>Menu de Navigation</h2>
	<?php for ($i=0; $i < count($menu)-2; $i++):?><!--
		--><?php if($location!==$menu[$i]):?><!--
		--><div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="<?php echo($menu[$i]);?>">
			<a href="<?php if($menu[$i]=='portfolio'){echo get_post_type_archive_link( 'creations' );}else{echo get_category_link(get_cat_ID( 'Blog' ));};?>">
				<?php echo(ucfirst($menu[$i]));?>
			</a>
		</div><!--
		--><?php endif; endfor;
			for ($i=2; $i < count($menu); $i++):
				if($location!==$menu[$i]):?><!--
					--><div class="lien load_<?php $rand_key = array_rand($sSpeed,1); $speed = $sSpeed[$rand_key]; echo $speed ?>" id="<?php echo($menu[$i]);?>">
						<a href="<?php $page = get_page_by_title( $menu[$i] ); $pageID = $page->ID; echo get_page_link( $pageID ); ?>">
							<?php echo(ucfirst($menu[$i]));?>
						</a>
					</div><!--
		--><?php endif;endfor;?><!--
--></section>