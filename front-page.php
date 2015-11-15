<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 11/14/2015
 * Time: 11:15 PM
 */

add_action('genesis_after_content', 'custom_gallery');

function custom_gallery() {
    ?>
    <div class="home-gallery">
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/200"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/200"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/200"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
        <span class="gallery__item"><img src="http://lorempixel.com/200/300"></span>
    </div>


<?php
}

genesis();
