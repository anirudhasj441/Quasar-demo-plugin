<?php
/*
Plugin Name: Quasar Demo
*/

// Include Section
include_once('inc/enqueue.inc.php');
include_once('inc/func.inc.php');

// add Action Filter
add_action( 'wp_enqueue_scripts', 'enqueue_func' );
add_shortcode( 'quasar_demo', 'quasar_func' );

?>