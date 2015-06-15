<?php
// Your php code goes here



function designdesk_scripts_styles() {
	wp_register_script(
		'custom_script',
		get_bloginfo('stylesheet_directory') . '/js/custom.js',
		array('jquery'),
		'1.0'
	);
	wp_enqueue_script('custom_script');

	wp_register_style(
		'font-awesome',
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'
	);
	wp_enqueue_style( 'font-awesome' );
}

add_action('wp_enqueue_scripts', 'designdesk_scripts_styles');

?>
