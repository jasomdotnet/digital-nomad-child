<?php

/**
 * Add child css
 */
function child_header_css() {
    wp_enqueue_style( 'child', get_stylesheet_directory_uri() . '/style.css', array(), get_bloginfo( 'version' ) );

}

add_action( 'wp_print_styles', 'child_header_css', 100 );

/**
 * Adds code for footer
 */
function code_for_footer() {

    ?>
    <!-- code for footer like Google Analytics. -->
    <?php

}

add_action( 'wp_footer', 'code_for_footer' );
