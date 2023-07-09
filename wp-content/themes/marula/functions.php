<?php

add_action( 'wp_enqueue_scripts', 'wp_marula_enqueue_scripts' );
function wp_marula_enqueue_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', [], true );
	wp_enqueue_style( 'components', get_template_directory_uri() . '/assets/css/component.css', [ 'main' ], true );
	wp_enqueue_style( 'splidecss', get_template_directory_uri() . '/assets/css/splide.min.css' );
	wp_enqueue_style( 'fullpagecss', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.css' );

//	wp_register_script('tailwind', 'https://cdn.tailwindcss.com?plugins=forms');
//	wp_enqueue_script('tailwind');

	wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js');
	wp_enqueue_script('splidejs', get_template_directory_uri() . '/assets/js/splide.min.js');
//	wp_enqueue_script('tailwind-conf', get_template_directory_uri() . '/assets/js/tailwind-conf.js');

	wp_register_script( 'alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js' );
	wp_enqueue_script( 'alpine' );

	wp_register_script( 'fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.min.js' );
	wp_enqueue_script( 'fullpage' );
}

add_action( 'after_setup_theme', 'wp_marula_add_theme_supports' );
function wp_marula_add_theme_supports() {
	add_theme_support( 'menus' );
}

add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );
function wsds_defer_scripts( $tag, $handle, $src ) {

	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array(
		'alpine',
	);

	if ( in_array( $handle, $defer_scripts ) ) {
		return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}

	return $tag;
}

//
//function change_link( $post_link, $id = 0 ) {
//	$post = get_post( $id );
//	if( $post->post_type == 'room' )
//	{
//		if ( is_object( $post ) ) {
//			# assume that 'available-for' is slug of your taxonomy
//			$terms = wp_get_object_terms( $post->ID, array('lodges') );
//			if ( $terms ) {
//				return str_replace( '%cat%', $terms[0]->slug, $post_link );
//			}
//		}
//	}
//	return   $post_link ;
//}
//add_filter( 'post_type_link', 'change_link', 1, 3 );
//
//function movie_cpt_generating_rule($wp_rewrite) {
//	$rules = array();
//	$terms = get_terms( array(
//		'taxonomy' => 'lodges',
//		'hide_empty' => false,
//	) );
//
//	$post_type = 'room';
//	foreach ($terms as $term) {
//
//		$rules[ $term->slug .'/([a-z]+)/([^/]*)$'] = 'index.php?post_type=' . $post_type. '&movies=$matches[1]&name=$matches[1]';
//
//	}
//// merge with global rules
//	$wp_rewrite->rules = $rules + $wp_rewrite->rules;
//}
//add_filter('generate_rewrite_rules', 'movie_cpt_generating_rule');


function transformMenu ($acc, WP_Post $item) {
	if ($item->menu_item_parent) {
		$acc[$item->menu_item_parent]['children'][] = [
			'url' => $item->url,
			'title' => $item->title,
		];
	} else {
		if ($item->post_name === 'languages' || $item->post_name === 'languages-2') {
			$lang = substr($item->lang, 0, 2);
			$acc['lang'][$lang] = [
				'url' => $item->url,
				'title' => strtoupper($lang),
				'children' => [],
			];
		} else {
			$acc[$item->ID] = [
				'url' => $item->url,
				'title' => $item->title,
				'children' => [],
			];
		}
	}

	return $acc;
};