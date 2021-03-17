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
    <div class="row ancho">
        <div class="col-xs-12">
            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"> <img class="d-bloc img-fluid" src="/wp-content/themes/kasseb/assets/images/home2.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <p class="carrusel-p">Cartagena, Colombia</p>
                            <br>
                            <p class="carrusel-p">NOMBRE DEL PROYECTO</p>
                            <p class="carrusel-p">PROJECTED ROI:                     13%</p>
                            <p class="carrusel-p">PROJECTED IRR:           16% - 19%</p>
                            <p class="carrusel-p">MINIMUM INVESTEMENT: 50.000</p>
                            <button type="button" class="btn-carrusel btn-sm">SEE MORE</button>
                        </div>
                    </div>
                    <div class="carousel-item"> <img class="d-block img-fluid" src="/wp-content/themes/kasseb/assets/images/home3.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <p class="carrusel-p">Cartagena, Colombia</p>
                            <br>
                            <p class="carrusel-p">NOMBRE DEL PROYECTO</p>
                            <p class="carrusel-p">PROJECTED ROI:                     13%</p>
                            <p class="carrusel-p">PROJECTED IRR:           16% - 19%</p>
                            <p class="carrusel-p">MINIMUM INVESTEMENT: 50.000</p>
                            <button type="button" class="btn-carrusel btn-sm">SEE MORE</button>
                        </div>
                    </div>
                    <div class="carousel-item"> <img class="d-block img-fluid" src="/wp-content/themes/kasseb/assets/images/home4.jpg" alt="Third slide">
                        <div class="carousel-caption">
                            <p class="carrusel-p">Cartagena, Colombia</p>
                            <br>
                            <p class="carrusel-p">NOMBRE DEL PROYECTO</p>
                            <p class="carrusel-p">PROJECTED ROI:                     13%</p>
                            <p class="carrusel-p">PROJECTED IRR:           16% - 19%</p>
                            <p class="carrusel-p">MINIMUM INVESTEMENT: 50.000</p>
                            <button type="button" class="btn-carrusel btn-sm">SEE MORE</button>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
        </div>
    </div>
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