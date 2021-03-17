<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido del post -->
<?php if ( have_posts() ) : the_post(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 offset-sm-2">
                <br>
                <h3 class="h3"><span class="yellow"><?php the_title(); ?></span></h3>
                <br>
                <?php the_content(); ?>
            </div>
        </div>
        <br/>
        <br>
    </div>
<?php else : ?>
    <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>