<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'mon_nouveau_style' );

function mon_nouveau_style() {

 	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'init', 'custom_remove_footer_credit', 10 );
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
	
}

function custom_storefront_credit() {
	echo " <div>© P.GUIDERDONI </div>";
	}