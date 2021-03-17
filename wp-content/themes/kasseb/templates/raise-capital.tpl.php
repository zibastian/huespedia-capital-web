<?php 
/*
 * Template Name: Raise Capital Template
 * description: Page Template for rendering raise capital page
 */
get_header();
$main_background_image   = get_field('main_background_image');
$main_title      = get_field('main_title');
$first_section_title     = get_field('first_section_title');
$first_section_title     = explode( ' ', $first_section_title );
$first_section_title_end = array_pop( $first_section_title );
$first_section_text      = get_field('first_section_text');
$first_button_copy       = get_field('first_button_copy');
$reasons_section_title   = get_field('reasons_section_title');
$reasons_section_title   = explode( ' ', $reasons_section_title );
$reasons_section_title_end = array_pop( $reasons_section_title );
$reasons       = get_field('reasons');
$second_button_copy      = get_field('second_button_copy');
$have_questions_title    = get_field('have_questions_title');
$have_questions_text     = get_field('have_questions_text');
$final_background_image  = get_field('final_background_image');
?>
<!-- Contenido de página -->
<div class="container-fluid">
    <div class="jumbotron jumbotron-raicer text-center" style="background-image: url(<?php echo $main_background_image; ?>);">
        <h1 class="display-5"><?php echo $main_title; ?></h1>
    </div>
    <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
            <h3 class="h3"><?php echo implode( " ", $first_section_title ); ?><span class="yellow"> <?php echo $first_section_title_end; ?></span></h3>
			<hr>
        </div>
    </div>
    <br>
    <div class="row col-xs-12 col-sm-10 offset-sm-1">
        <p><?php echo $first_section_text; ?></p>
    </div>
    <br/>
    <br>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
                                        <p class="p2-market">Targeted Investors IRR			           <span class="derecha"> 12.99% </span> </p>
                                        <p class="p2-market">Targeted Equity Multiple			       <span class="derecha"> 2.1x </span></p>
                                        <p class="p2-market">Targeted Average Cash Yield		           <span class="derecha"> 7.2x </span></p>
                                        <p class="p2-market">Targeted Investment Period		           <span class="derecha"> 7years </span></p>
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
    <br>
    <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
            <h3 class="h3"><?php echo implode( " ", $reasons_section_title ); ?><span class="yellow"> <?php echo $reasons_section_title_end; ?></span></h3>
			<hr>
        </div>
    </div>
    <br>
    <div class="row col-xs-12 col-sm-10 offset-sm-1 center">
    	<?php foreach( $reasons as $reason ){ ?>
        <div class="col-md-4 center-raicer">
            <div class="">
                <img class="img-fluid img-xs" src="<?php echo $reason['image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-raicer"><?php echo $reason['text']; ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
        <button type="button" class="btn-raicer2 btn-sm"><a href="/deals-request" class="center_link"><?php echo $second_button_copy; ?></a></button>
    </div>
    <div class="row gris center">
        <div class="col-lg-10 offset-lg-1">
            <h3 class="h3"><?php echo $have_questions_title; ?></h3>
			<hr>
            <h5><?php echo $have_questions_text; ?> <span class="yellow"><a href="/deals-request" class="featured_link">Connect with them today.</a></span></h5>
        </div>
        <br>
    </div>

    <div class="row raicer" style="background-image: url(<?php echo $final_background_image; ?>);"></div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>