<?php
// Esta es la función que activa las imágenes destacadas 
add_theme_support('post-thumbnails');

// Tamaños de imágnes Con recorte
add_image_size('custom-thumb-1024-500', 2048, 1000, true);
add_image_size('custom-thumb-350-200', 700, 400, true);
add_image_size('custom-thumb-70-70', 140, 140, true);

// Tamaños de imágenes Sin recorte
add_image_size('custom-thumb-1024-x', 2048, false);
add_image_size('custom-thumb-800-x', 1600, false);
add_image_size('custom-thumb-300-x', 600, false);

// Habilitar la compresión de imágenes al 50% de su calidad
add_filter('jpeg_quality', create_function('','return 50;'));

// Esto es la función que llama al menú
function register_my_menus()
{
	register_nav_menus(
		array(
			'menu-header' => __('Menú del encabezado'), 
			'menu-footer' => __('Menú del footer')
		)
	);
}
add_action('init', 'register_my_menus');

// Esto es la función para llamar a los scripts
function incrustar_estilos()
{
   

        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer
        wp_register_script('prism', get_bloginfo('template_directory'). '/js/prism.js', array(), '1', true );
        wp_register_script('mi-script', get_bloginfo('template_directory'). '/js/bundle.js', array('prism'), '1', true );

        wp_enqueue_script('prism');
        wp_enqueue_script('mi-script');
    
}
add_action("wp_enqueue_scripts", "incrustar_estilos");

// Permitir comentarios encadenados
function enable_threaded_comments()
{
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) 
    {
       wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'enable_threaded_comments');
?>