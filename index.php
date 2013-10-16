<?php 
get_header();
$speed = 0;
//$the_query = new WP_Query( array('post_type' => 'post') );
?>
	<?php 
		get_template_part('intro');
		get_template_part('gallery');
		get_template_part('blog');
		get_template_part('moi');
		?>
<?php 
var_dump($speed);
get_footer(); 
?>