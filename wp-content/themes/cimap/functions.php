<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/public/css/app.css', array(), '1', 'all');
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '1', 'all');

    wp_enqueue_script('jquery');
    // wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', array ('jquery'), 2.10, true);
    // wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array ( 'popper' ), 5.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/public/js/app.js', array (), 1, true);

    /**
     * Variable globar para ajax
     */
    wp_localize_script( 'script', 'app_vars', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Soporte imagenes destacadas
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

/**
 * Extracto de entradas en 20 palabras
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Sidebar de blog
 */
function register_blog_sidebar() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'blog_sidebar',
            'name'          => __( 'Blog' ),
            'description'   => __( 'descripcion' ),
            'before_widget' => '<div class="card-body">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4><hr>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'register_blog_sidebar' );


/**
 * Formulario de contacto
 */
add_action( 'wp_ajax_contact', 'contact_form');
add_action( 'wp_ajax_nopriv_contact', 'contact_form');
function contact_form() {
    $formdata = [];
    wp_parse_str( $_POST['contact'], $formdata );

    $from = get_option( 'admin_email');

    // Headers
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From:' . $from;
    $headers[] = 'Reply-to:' . $formdata['Email'];

    $to = $from;

    // Subject
    $subject = "Nuevo mensaje desde página web de " . $formdata['Email'];

    // message
    $message = '';
    foreach($formdata as $index => $field) {
        $message .= '<strong>' . $index . '</strong>: ' . $field . '<br />';
    }

    try {
        if(wp_mail( $to, $subject, $message, $headers)) {
            wp_send_json_success('enviado');
        } else {
            wp_send_json_error('error');
        }
    } catch (Exception $e) {
        wp_send_json_error( $e->getMessage());
    }

}
