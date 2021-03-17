<?php get_header(); ?>
<!-- Contenido de página -->
<?php
$category = get_queried_object();

get_template_part( 'title', '', array('title'=>$category->name) );

$entries = Kasseb_Model_Post::get_posts( array('cat'=>$category->term_id) );

get_template_part( 'templates/list-entries', '', array(
	'entries'  => $entries,
	'category' => $category->term_id
));
?>
<br>
<br>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>