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
    <?php Kasseb_Deal::render_featured_deals(); ?>
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