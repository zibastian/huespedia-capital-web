<?php
$index    = 0;
$items    = $args['items'];
$by_page  = $args['by_page'] ?? 4;
$row      = 4;
$category = $args['category'] ?? '';
$page     = $args['page'] ?? 1;
while ( $items->have_posts() ){
    $items->the_post();
    $locations = get_the_terms( get_the_ID(), "deal_location" );
?>
<?php if( $index % $row == 0 ){ ?><div class="row"><?php } ?>
    <div class="col-md-3">
        <a href="<?php echo get_permalink(); ?>"><div class="">
            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
            <div class="card-body-m">
                <?php if( count($locations)>0 ){ ?>
                <p class="p-market"><?php echo $locations[0]->name; ?></p>
                <?php } ?>
                <h4 class="card-h4-market"><?php echo get_the_title(); ?></h4>
                <p class="p2-market">HUESPEDIA INVESTMENTS </p>
                <p class="p2-market">
                    Targeted Investors IRR
                    <span class="derecha">
                        <?php echo get_field('targeted_investor_irr'); ?>
                    </span>
                </p>
                <p class="p2-market">
                    Targeted Equity Multiple
                    <span class="derecha">
                        <?php echo get_field('targeted_equity_multiple'); ?>
                    </span>
                </p>
                <p class="p2-market">
                    Targeted Average Cash Yield
                    <span class="derecha">
                        <?php echo get_field('targeted_average_cash_yield'); ?>
                    </span>
                </p>
                <p class="p2-market">
                    Targeted Investment Period
                    <span class="derecha">
                        <?php echo get_field('targeted_investment_period'); ?> 
                    </span>
                </p>
            </div>
        </div>
    </div>
<?php if( $index % $row == $row-1 ){ ?></div><?php } ?>
<?php 
    $index++;
}
?>
<?php if( $items->post_count >= $by_page ){ ?>
<div class="row text-center kasseb-load-more">
    <div class="col-xs-12 col-sm-10 offset-sm-1"><br>
        <button class="load-more-button btn-raicer2 btn-sm"
            data-page="<?php echo $page+1; ?>" >
            LOAD MORE
        </button>
    </div>
</div>
<?php } ?>