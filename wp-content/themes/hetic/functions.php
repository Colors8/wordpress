<?php

/* Activation image à la une */
add_theme_support('post-thumbnails' );
add_image_size( 'img_liste', 270, 220, array( 'center', 'top') );

add_action('init', 'create_post_type');
function create_post_type() {

	register_post_type( 'projet',
		array(
			'labels' => array(
				'name' => __('Projets'),
				'singular_name' => __('Projet')
			),
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'has_archive' => true
		)
	);

	/* Custom taxonomy */
	register_taxonomy(
		'type',
		'projet',
		array(
				'label' => __('Type'),
				'hierarchical' => true,
			)
	);
}


// add_action('init', 'create_movie');
// function create_movie() {

// 	register_post_type( 'film',
// 		array(
// 			'labels' => array(
// 				'name' => __('Films'),
// 				'singular_name' => __('Film')
// 			),
// 			'public' => true,
// 			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
// 			'has_archive' => true
// 		)
// 	);

// 	register_post_type( 'acteur',
// 		array(
// 			'labels' => array(
// 				'name' => __('Acteurs'),
// 				'singular_name' => __('Acteur')
// 			),
// 			'public' => true,
// 			'supports' => array('title', 'editor', 'thumbnail'),
// 			'has_archive' => true
// 		)
// 	);

// 		register_taxonomy(
// 		'sujet',
// 		'film',
// 		array(
// 				'label' => __('Sujet'),
// 				'hierarchical' => true,
// 			)
// 	);
// }
