<?php

function kasseb_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'kasseb_post_thumbnails' );

// Including Custom Developments
require_once (get_template_directory () . '/module/kasseb.php');
Kasseb::init();