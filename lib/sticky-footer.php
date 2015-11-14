<?php
/**
 * User: Ben
 * Date: 11/13/2015
 * Time: 9:41 PM
 *
 * Add an inner footer for the Compass sticky footer method.
 */


add_action('genesis_before_footer','inner_footer_div');

function cascadia_content_footer_div() {
	?> <div class="inner-footer clearfix"> </div> <?php
}

