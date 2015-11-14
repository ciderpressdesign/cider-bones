<?php
/**
 * User: Ben
 * Date: 11/13/2015
 * Time: 9:41 PM
 *
 * Add an inner footer for the Compass sticky footer method.
 */

// Add the site-container footer
add_action('genesis_before_footer','inner_footer_div');

function inner_footer_div() {
	?> <div class="inner-footer clearfix"> </div> <?php
}



//Move the site-footer outside of the site-container

remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
add_action( 'genesis_after', 'genesis_footer_markup_open', 11 );
add_action( 'genesis_after',  'genesis_do_footer', 12 );
add_action( 'genesis_after', 'genesis_footer_markup_close', 13 );


