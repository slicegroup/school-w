<?php 

the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) ); 



function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );



function apk_register_sidebar(){
	register_sidebar( array(
		'name'             => __('Sidebar principal','apk'),
		'id'               => 'main_sidebar',
		'description'      => __('Este es el Sidebar principal','apk'),
		'before_widget'    => '<div id="%1$s" class="widget %2$s">',
		'after_widget'     => '</div>',
		'before_title'     => '	<h3 class="widget-title">',
		'after_title'      => '</h3>',
	));

}
add_action('widgets_init', 'apk_register_sidebar');

function apk_register_header(){
	register_sidebar( array(
		'name'             => __('Header','apk'),
		'id'               => 'main_headerr',
		'description'      => __('Header','apk'),
		'before_widget'    => '<div id="%1$s" class="widget %2$s">',
		'after_widget'     => '</div>',
		'before_title'     => '	<h3 class="widget-title">',
		'after_title'      => '</h3>',
	));

}
add_action('widgets_init', 'apk_register_header');


/******************truncar cantidad de palabras*****************/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/******************truncar cantidad de palabras*****************/
/*****************funcion para actualizar el contador de producto*****************/

add_filter( 'woocommerce_add_to_cart_fragments', 'actualizar_minicarro_ajax', 10, 1 );
function actualizar_minicarro_ajax( $fragments ) {

	$fragments['div.cont-minicarro'] = '<div class="cont-minicarro"><span id="items-minicarro">' . WC()->cart->get_cart_contents_count() . '</span></div>';

	return $fragments;

}
/*****************funcion para actualizar el contador de producto*****************/
