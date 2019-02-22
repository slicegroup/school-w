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

/**
 * Cambio de textos en WooCommerce/WordPress
 *
 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/gettext
 */
function my_text_strings( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Categories' :
		$translated_text = __( 'School', 'woocommerce' );
		break;
		case 'Añadir al carrito' :
		$translated_text = __( 'Añadir a la cesta', 'woocommerce' );
		break;
		case 'Productos relacionados' :
		$translated_text = __( 'Quizás te interesen estos fantásticos productos', 'woocommerce' );
		break;
	}
	return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );


/******************Carrusel*****************/
function carrusel_post_type() {

	$labels = array(
		'name'                  => _x( 'Carrusel', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Carrusel', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Carrusel', 'text_domain' ),
		'name_admin_bar'        => __( 'Carrusel', 'text_domain' ),
		'archives'              => __( 'Archivos del artículo', 'text_domain' ),
		'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
		'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
		'all_items'             => __( 'Todos los artículos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
		'edit_item'             => __( 'Editar elemento', 'text_domain' ),
		'update_item'           => __( 'Elemento de actualización', 'text_domain' ),
		'view_item'             => __( 'Ver ítem', 'text_domain' ),
		'view_items'            => __( 'Ver artículos', 'text_domain' ),
		'search_items'          => __( 'Buscar artículo', 'text_domain' ),
		'not_found'             => __( 'Extraviado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
		'featured_image'        => __( 'Foto principal', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
		'items_list'            => __( 'Lista de artículos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'text_domain' ),

	);
	$args = array(
		'label'                 => __( 'Carrusel', 'text_domain' ),
		'description'           => __( 'Site carrusel.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'carrusel', $args );

}

add_action( 'init', 'carrusel_post_type', 0 );

/******************Carrusel*****************/
