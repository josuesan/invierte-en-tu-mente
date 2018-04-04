<?php

/* Basic setup */

function basic_setup() {
    // JQuery CDN
    wp_enqueue_script( 'jquery-3.3.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' , array(), null);
    wp_enqueue_script( 'tether-1.4.3', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js' , array(), null);

    // Bootstrap CDN
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css' , array(), null );
    wp_enqueue_style( 'bootstrap-grid-css', get_template_directory_uri().'/css/bootstrap-grid.css' , array(), null );

    wp_enqueue_style( 'bootstrap-reboot-css', get_template_directory_uri().'/css/bootstrap-reboot.min.css' , array(), null );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/fontawesome-all.min.css' , array(), null );
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/styles.css' , array(), null );
    wp_enqueue_style( 'media-queries', get_template_directory_uri().'/css/media-queries.css' , array(), null );
    wp_enqueue_style( 'font', get_template_directory_uri().'/css/fonts.css' , array(), null );

    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js' , array(), null);
    wp_enqueue_script( 'main-script', get_template_directory_uri().'/js/index.js' , array(), null);

}
function POST_contact_email(){
    
    $nombre = isset ($_POST['name']) ? $_POST['name'] : '';
    $email = isset ($_POST['mail']) ? $_POST['mail'] : '';
    $detalles= isset ($_POST['details']) ? $_POST['details'] : '';

    if ( '' == $nombre ) {
        echo '{"code": "1", "data": "name"}';
        die();
    }

    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        echo '{"code": "1", "data": "mail"}';
        die();
    }

    if ( '' == $mensaje ) {
        echo '{"code": "1", "data": "details"}';
        die();
    }

    $to = get_bloginfo('admin_email');
    $subject = '[Solicitud asesoría] Contacto - '.$nombre ;
    $message = 'El usuario :: '.$nombre.' ' .$apellido.'; y tiene el siguiente mensaje :  '.$mensaje.;

    //-- Valid if the email was sent or not

    if (wp_mail( $to, $subject, $message)){
        echo '{"code": "0", "data": "Correo existoso"}';
    }   
    else{
        echo '{"code": "2", "data": "Ocurrio un problema en el envio por favor vuelva intentarlo."}';
    }
    

    exit();
}
add_action( 'wp_enqueue_scripts', 'basic_setup' );
add_action( 'wp_ajax_POST_contact', 'POST_contact_email' );
add_action( 'wp_ajax_nopriv_POST_contact', 'POST_contact_email' );

/* Wordpress supporting */

add_theme_support( 'post-thumbnails' );

