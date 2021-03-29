<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php
$data = array();
$data['main_background_image'] = get_field('main_background_image');
$data['main_title']      = get_field('main_title');
$data['powered_by']      = get_field('powered_by');
$data['qualities_title'] = get_field('qualities_title');
$qualities_title         = explode( ' ', $data['qualities_title'] );
$qualities_title_end     = array_pop( $qualities_title );
$data['qualities']       = get_field('qualities');
$data['oportunities_title'] = get_field('oportunities_title');
$oportunities_title      = explode( ' ', $data['oportunities_title'] );
$oportunities_title_end  = array_pop( $oportunities_title );
$data['oportunities_text'] = get_field('oportunities_text');
$data['footer_logos']    = get_field('footer_logos');
?>
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid text-center" style="background-image: url(<?php echo $data['main_background_image']; ?>);">
        <h1 class="display-4"><?php echo $data['main_title']; ?></h1>
    </div>
    <div class="row grey main-logos">
        <?php foreach( $data['powered_by'] as $sponsor ){ ?>
        <div class="col-12 col-sm-3 center">
            <img class="img-fluid img-xs" src="<?php echo $sponsor['sponsor']; ?>" alt="">
        </div>
        <?php } ?>
    </div>
    <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
            <h3 class="h3">
                <?php echo implode( " ", $qualities_title ); ?>
                <span class="yellow"><?php echo $qualities_title_end; ?></span>
            </h3>
			<hr>
        </div>
    </div>
    <div class="row col-xs-12 col-sm-10 offset-sm-1" style="margin-top: -5px;">
        <?php foreach( $data['qualities'] as $quality ){ ?>
        <div class="col-xs-12 col-sm-6 col-md-3 center">
            <div class="">
                <img class="img-fluid img-xs" src="<?php echo $quality['image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-h4"><?php echo $quality['title']; ?></h4>
                    <p class="card-text"><?php echo $quality['description']; ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <br/>
    <br>
    <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
            <h3 class="h3">
                <?php echo implode( " ", $oportunities_title ); ?>
                <span class="yellow"><?php echo $oportunities_title_end; ?></span>
            </h3>
			<hr>
        </div>
    </div>
    <br>
    <div class="row col-xs-12 col-md-8 offset-md-2">
        <p class="card-p"><?php echo $data['oportunities_text']; ?></p>
    </div>
    <?php Kasseb_Deal::render_featured_deals(); ?>
    <div class="footer-logos row gris">
        <?php foreach( $data['footer_logos'] as $sponsor ){ ?>
        <div class="col-xs-12 col-sm-4 center">
            <img class="img-fluid img-xs" src="<?php echo $sponsor['image']; ?>" alt="">
        </div>
        <?php } ?>
    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>