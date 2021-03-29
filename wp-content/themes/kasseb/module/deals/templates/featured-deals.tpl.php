<?php
$index = 0;
$pages = ceil( count($items)/9 );
?>
<div class="row center d-none d-md-block">
    <div class="col-xs-12">
        <div id="carouselExampleIndicators1" class="carousel slide carusel-color" data-ride="carousel">
            <ol class="carousel-indicators">
            	<?php for($i=0;$i<$pages;$i++){ ?>
            		<li data-target="#carouselExampleIndicators1" data-slide-to="<?php echo $i; ?>"></li>
            	<?php } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <h3 class="h3" style="text-align: center; color: #fff">featured  <span class="yellow">deals </span></h3>
                <hr>
                <br>
                <?php foreach( $items as $item ){ ?>
                	<?php $locations = get_the_terms( $item->ID, "deal_location" ); ?>

                <?php if( $index % 3 == 0 ){ ?>
                <div class="carousel-item active"> 
                    <div class="row col-xs-12 col-sm-10 offset-sm-1">
                <?php } ?>

                		<div class="col-md-4">
                			<a href="<?php echo get_permalink( $item->ID ); ?>">
                            <div class="">
                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="Card image cap">
                                <div class="card-body-c">
                                    <?php if( count($locations)>0 ){ ?>
					                <p class="p-market"><?php echo $locations[0]->name; ?></p>
					                <?php } ?>
                                    <h4 class="card-h4-market">
                                    	<?php echo $item->post_title; ?>
                                    </h4>

                                    <p class="p2-market">HUESPEDIA INVESTMENTS</p>
                                    <p class="p2-market">Targeted Investors IRR 
                                    	<span class="derecha">
                                    		<?php echo get_field('targeted_investor_irr', $item->ID); ?>
                                    	</span>
                                    </p>
                                    <p class="p2-market">Targeted Equity Multiple 
                                    	<span class="derecha">
                                    		<?php echo get_field('targeted_equity_multiple', $item->ID); ?>
                                    	</span>
                                    </p>
                                    <p class="p2-market">Targeted Average Cash Yield
                                    	<span class="derecha">
                                    		<?php echo get_field('targeted_average_cash_yield', $item->ID); ?>
                                    	</span>
                                    </p>
                                    <p class="p2-market">Targeted Investment Period
                                    	<span class="derecha">
                                    		<?php echo get_field('targeted_investment_period', $item->ID); ?> 
                                    	</span>
                                    </p>
                                </div>
                            </div>
                        	</a>
                        </div>

                <?php if( $index % 3 == 2 || count($items) == $index+1 ){ ?>
                	</div> 
                </div>
                <?php } ?>
            <?php $index++;} ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
    </div>
</div>

<div class="row center d-block d-sm-block d-md-none">
    <div class="col-xs-12">
        <div id="carouselExampleIndicators" class="carousel slide carusel-color" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php for($i=0;$i<count($items);$i++){ ?>
            		<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
            	<?php } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <h3 class="h3" style="text-align: center; color: #fff">feautured  <span class="yellow">deals </span></h3>
                <hr>
                <br>

                <?php foreach( $items as $item ){ ?>
                	<?php $locations = get_the_terms( $item->ID, "deal_location" ); ?>

                <div class="carousel-item active"> 
                    <div class="row col-xs-12 col-sm-10 offset-sm-1">
                        <div class="col-12">
                        	<a href="<?php echo get_permalink( $item->ID ); ?>">
                            <div class="">
                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($item->ID); ?>" alt="Card image cap">
                                <div class="card-body-c">
                                    <?php if( count($locations)>0 ){ ?>
					                <p class="p-market"><?php echo $locations[0]->name; ?></p>
					                <?php } ?>
                                    <h4 class="card-h4-market">
                                    	<?php echo $item->post_title; ?>
                                    </h4>

                                    <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                                    <p class="p2-market">Targeted Investors IRR
                                    	<span class="derecha">
                                    	<?php echo get_field('targeted_investor_irr', $item->ID); ?>
                                    	</span>
                                    </p>
                                    <p class="p2-market">Targeted Equity Multiple
                                    	<span class="derecha">
                                    	<?php echo get_field('targeted_equity_multiple', $item->ID); ?>
                                    	</span>
                                    </p>
                                    <p class="p2-market">Targeted Average Cash Yield
                                    	<span class="derecha">
                                    	<?php echo get_field('targeted_average_cash_yield', $item->ID); ?>
                                    	</span>
                                    </p>
                                    <p class="p2-market">Targeted Investment Period
                                    	<span class="derecha">
                                    	<?php echo get_field('targeted_investment_period', $item->ID); ?> 
                                    	</span>
                                    </p>
                                </div>
                            </div>
                        	</a>
                        </div> 
                    </div>
                </div>
            	<?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        </div>
    </div>
</div>