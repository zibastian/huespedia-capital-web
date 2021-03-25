<!-- Archivo de cabecera global de Wordpress -->
<?php
get_header();
$features = array();
if( get_field('targeted_investor_irr') )         $features[] = array( "Targeted Investor IRR", get_field('targeted_investor_irr') );
if( get_field('targeted_equity_multiple') )      $features[] = array( "Targeted Equity Multiple", get_field('targeted_equity_multiple') );
if( get_field('targeted_average_cash_yield') )   $features[] = array( "Targeted Average Cash Yield", get_field('targeted_average_cash_yield') );
if( get_field('targeted_investment_period') )    $features[] = array( "Targeted Investment Period", get_field('targeted_investment_period') );
if( get_field('minimum_investment') )            $features[] = array( "Minimum Investment", get_field('minimum_investment') );
if( get_field('property_type') )                 $features[] = array( "Property Type", get_field('property_type') );
if( get_field('investment_profile') )            $features[] = array( "Investment Profile", get_field('investment_profile') );
if( get_field('preferred_return_accrual_date') ) $features[] = array( "Preferred Return Accrual Date", get_field('preferred_return_accrual_date') );
if( get_field('offers_due') )                    $features[] = array( "Offers Due", get_field('offers_due') );
if( get_field('funds_due') )                     $features[] = array( "Funds Due", get_field('funds_due') );
if( get_field('targeted_project_level_irr') )    $features[] = array( "Targeted Project Level IRR", get_field('targeted_project_level_irr') );
if( get_field('sponsor_co-investment') )         $features[] = array( "Sponsor Co-Investment", get_field('sponsor_co-investment') );
if( get_field('initial_posting_date') )          $features[] = array( "Initial Posting Date", get_field('initial_posting_date') );
$documents = get_field('documents');
?>
<!-- Contenido del post -->
<br><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
            <br><br>
            <div class="recuadro">
                <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/logo-n.png" alt="Card image cap">
                <?php echo apply_filters( 'the_content', get_the_content() ); ?>
            </div>
            <div class="recuadro">
                <p class="">
                    Total Portfolio Activity
                    <span class="derecha">
                    	<strong><?php echo get_field('total_portfolio_activity'); ?></strong>
                    </span>
                </p>
                <p class="">
                    Total Assets Under Management
                    <span class="derecha">
                    	<strong><?php echo get_field('total_assets_under_management'); ?></strong>
                    </span>
                </p>
            </div>
            <br><br><br><br>
            <div class="embed-responsive embed-responsive-16by9">
            	<?php echo get_field('video'); ?>
            </div>
            <br><br>
            <div class="recuadro">
                <h3 class="titulo-h3">KEY DEAL POINTS</h3>
                <?php echo apply_filters( 'the_content', get_field('key_deal_points') ); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h3 class="dorado"><?php echo get_the_title(); ?></h3>
            <p class="p-deal"><?php echo get_field('description'); ?></p>
            <button type="button" class="btn-deal btn-sm">INVEST NOW</button>
            <div class="card-deal">
            	<?php foreach( $features as $feature ){ ?>
            	<p class="black"><strong><?php echo $feature[0]; ?>:</strong><span class="derecha"><?php echo $feature[1]; ?></span></p><br>
            	<?php } ?>
            </div>
            <br><br>
            <?php if( $documents ){ ?>
            <h3>DOCUMENTS</h3>
            <?php foreach( $documents as $document ){ ?>
            	<i class="fas fa-file-alt" aria-hidden="true"></i>
            	<p><a target="_blank" href="<?php echo $document['file']; ?>"><?php echo $document['name']; ?></a></p>
            <?php } ?>
            <br>
            <br>
        	<?php } ?>
            <h3>QUESTIONS?</h3>
            <p>If you have questions, we're here to help. Send us a message below and we'll respond promptly</p>
            <input id="questionText" class="cuadro-txt" type="text" name="nombredelacaja">
            <button id="sendQuestionDeal" type="button" class="btn-carrusel btn-sm">SEND QUESTION</button>
        </div>
    </div>
    <br/>
    <br>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>