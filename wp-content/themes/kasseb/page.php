<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página -->
<div class="container-fluid">
    <div class="row">
        <div class="kasseb-content col-xs-12 col-sm-10 offset-sm-1">
        	<?php get_template_part( 'title', '', array('title'=>get_the_title()) ); ?>
        	<?php the_content(); ?>
        </div>
    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>