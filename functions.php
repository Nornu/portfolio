<?php 
//pour les widgets, les menus, les custom post type

/*function affiche_bonjour(){
	echo "bonjour";
}*/

add_action('widgets_init', 'portfolio_widget_init');
add_action('after_setup_theme','portfolio_setup');
add_action( 'init', 'create_post_type' );
add_theme_support( 'post-thumbnails', array('creations','post') );

//sidebar
function portfolio_widget_init(){
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'portfolio' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Secondary Sidebar', 'portfolio' ),
		'id' => 'sidebar-2',
		'description' => __( 'The sidebar for the optional Showcase Template', 'portfolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
};

function portfolio_setup(){
	register_nav_menu( 'primary', __( 'Primary Menu', 'portfolio' ) );
}

function create_post_type() {
	register_post_type( 'creations',
		array(
			'labels' => array(
				'name' => __( 'Créations' ),
				'singular_name' => __( 'Création' )
			),
			'public' => true,
			'has_archive' => true,
			'supports'=> array('title','editor','excerpt','custom-fields','thumbnail'),
		)
	);
}
//ne pas terminer le php pour ne pas faire foirer le truc