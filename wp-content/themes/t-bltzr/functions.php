<?php


/* Mise à jour automatique */

add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_core', '__return_true' );
add_filter( 'auto_core_update_send_email', '__return_false' );

$templatepath = get_template_directory();

if ( defined( 'DOING_AJAX' ) && DOING_AJAX && is_admin() ) {

	include( $templatepath . '/function/ajax.php' );

} elseif ( is_admin() ) {

	include( $templatepath . '/function/admin.php' );

} elseif ( ! defined( 'XMLRPC_REQUEST' ) && ! defined( 'DOING_CRON' ) ) {

	include( $templatepath . '/function/front.php' );

}

include( $templatepath . '/function/all.php' );

?>


