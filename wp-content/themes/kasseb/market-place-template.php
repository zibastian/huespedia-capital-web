<?php 
/*
 * Template Name: MarketPlace Template
 * description: Page Template for Deal's Market Place
 */
get_header();
?>
<!-- Contenido de página -->
<br>
<?php get_template_part( 'title', '', array('title'=>get_the_title()) ); ?>
<div class="container-fluid">
<br>
<?php
$items = Kasseb_Deal::get_deals();
get_template_part( 'module/deals/templates/market-place', '', array('items'=>$items) );
?>
</div>
<br>
<br>
<br>
<br>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>