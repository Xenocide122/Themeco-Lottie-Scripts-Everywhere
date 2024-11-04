function enqueue_lottie_scripts() {
	wp_enqueue_script( 'cs-lottie' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_lottie_scripts' );
