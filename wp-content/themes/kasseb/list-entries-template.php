<?php 
/*
 * Template Name: List Entries Template
 * description: Page Template for Listing Blog Entries
 */
get_header();
?>
<!-- Contenido de página -->
<br>
<?php get_template_part( 'title', '', array('title'=>get_the_title()) ); ?>
<?php
$entries = Kasseb_Model_Post::get_posts();
get_template_part( 'templates/list-entries', '', array('entries'=>$entries) );
?>
<br>
<br>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>