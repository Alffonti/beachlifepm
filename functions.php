<?php

function blpm_assets() {
  //  Bootstrap stylesheet
	wp_register_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/assets/css/style.css', array (), null );
	wp_enqueue_style( 'bootstrap_css' );

  // Bootstrap JS
  wp_register_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array (), null );
	wp_enqueue_script( 'bootstrap_js' );

  // Font Awesome
  wp_register_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome.css', array (), null );
	wp_enqueue_style( 'font-awesome' );

  // Google Fonts
  wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array (), null );
	wp_enqueue_style( 'google-fonts' );
}

// Enqueue scripts
add_action( 'wp_enqueue_scripts', 'blpm_assets' );
