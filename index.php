<?php 
get_header();
$the_query = new WP_Query( array('post_type' => 'post') );
?>
	<header class="title">
		<h1>Le Portfolio de Julien Cheron</h1>
		<a href="<?php echo get_site_url();?>"><span>Julien Cheron</span></a>
	</header>
	<?php get_template_part('intro') ?>
	<?php get_template_part('gallery') ?>
	<?php get_template_part('blog'); ?>
	<?php get_template_part('moi') ?>
<?php 
//var_dump($id);
get_footer(); 
?>