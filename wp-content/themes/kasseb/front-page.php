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
    <div class="row center d-none d-md-block">
        <div class="col-xs-12">
            <div id="carouselExampleIndicators1" class="carousel slide carusel-color" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <h3 class="h3" style="text-align: center; color: #fff">featured  <span class="yellow">deals </span></h3>
                    <hr>
                    <br>
                    <div class="carousel-item active"> 
                        <div class="row col-xs-12 col-sm-10 offset-sm-1">
                            <div class="col-md-4">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4 ">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="row col-xs-12 col-sm-10 offset-sm-1">
                            <div class="col-md-4">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4 ">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="row col-xs-12 col-sm-10 offset-sm-1">
                            <div class="col-md-4">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4 ">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>

        </div>
    </div>

    <div class="row center d-block d-sm-block d-md-none">
        <div class="col-xs-12">
            <div id="carouselExampleIndicators" class="carousel slide carusel-color" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <h3 class="h3" style="text-align: center; color: #fff">feautured  <span class="yellow">deals </span></h3>
                    <hr>
                    <br>
                    <div class="carousel-item active"> 
                        <div class="row col-xs-12 col-sm-10 offset-sm-1">
                            <div class="col-12">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="row col-xs-12 col-sm-10 offset-sm-1">
                            <div class="col-12">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div> 

                        </div>
                    </div>
                    <div class="carousel-item">

                        <div class="row col-xs-12 col-sm-10 offset-sm-1">
                            <div class="col-12">
                                <div class="">
                                    <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/market.jpg" alt="Card image cap">
                                    <div class="card-body-c">
                                        <p class="p-market">Cartagena · Colombia</p>
                                        <h4 class="card-h4-market">NOMBRE DEL PROYECTO</h4>

                                        <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                        <p class="p2-market">Targeted Investors IRR                    <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple                  <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield                   <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period                <span class="derecha"> 7years </span></p>
                                    </div>
                                </div>
                            </div> 

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