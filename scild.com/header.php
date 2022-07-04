<?php 
/** --------------------------------------------------
 * Enqueue Fontawesome for blog comment logo
 ---------------------------------------------------**/
function astra_enqueu_fontawesome_for_comment_logo(){
	// Fontawesome Register link
	wp_register_style('__fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	// Enqueue Fontawesome
	wp_enqueue_style('__fontawesome');
}
add_action('wp_enqueue_scripts','astra_enqueu_fontawesome_for_comment_logo');
