<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );


//Registra el CPT "Libros"
function cpt_libros() {
    $args = array(
        'label'              => 'Libros',
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-book',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'has_archive'        => true,
        'hierarchical'       => false,
    );
    register_post_type('libros', $args);
}
add_action('init', 'cpt_libros');

//Registra la taxonomía "Géneros"
function taxonomia_generos() {
    $args = array(
        'label'             => 'Géneros',
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
    );
    register_taxonomy('generos', 'libros', $args);
}
add_action('init', 'taxonomia_generos');

//Agrega un Metabox para el "Autor del Libro"
function metabox_autor() {
    add_meta_box('autor_libro', 'Autor del Libro', 'llamado_metabox_autor', 'libros', 'side');
}
add_action('add_meta_boxes', 'metabox_autor');

function llamado_metabox_autor($post) {
    $autor = get_post_meta($post->ID, '_autor_libro', true);
    echo '<input type="text" name="autor_libro" value="' . esc_attr($autor) . '" style="width:100%" />';
}

function guarda_metabox_autor($post_id) {
    if (array_key_exists('autor_libro', $_POST)) {
        update_post_meta($post_id, '_autor_libro', sanitize_text_field($_POST['autor_libro']));
    }
}
add_action('save_post', 'guarda_metabox_autor');

//Crea y relaciona la plantilla "single-libros.php"
add_filter('template_include', 'plantilla_libros');
function plantilla_libros($template) {
    if (is_singular('libros')) {
        $nuevo_template = locate_template(array('single-libros.php'));
        if (!$nuevo_template) {
            $nuevo_template = plugin_dir_path(__FILE__) . 'single-libros.php';
        }
        return $nuevo_template;
    }
    return $template;
}