<?php
$index    = 0;
$entries  = $args['entries'];
$by_page  = $args['by_page'] ?? 6;
$category = $args['category'] ?? '';
$page     = $args['page'] ?? 1;
while ( $entries->have_posts() ){
	$entries->the_post();
	$categories = get_the_category();
?>
<?php if( $index % 3 == 0 ){ ?><div class="row"><?php } ?>
	<div class="col-md-4 center-raicer">
	    <div class="card-body-m">
	    	<?php if( has_post_thumbnail() ){ ?>
	        <img class="img-fluid r" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
	    	<?php } ?>
	        <p class="yellow">
	        	<?php
	        	foreach($categories as $entry_category){
	        		if( $categories[0] != $entry_category ) echo " · ";
	        	?>
	        		<a href="<?php echo get_category_link($entry_category->cat_ID); ?>">
	        			<?php echo $entry_category->name; ?>
	        		</a>
	        	<?php } ?>
	    	</p>
	        <h4 class="card-h4-market"><?php echo get_the_title(); ?></h4>
			<p class="p-new"><?php echo get_the_excerpt(); ?></p>
	        <a href="<?php echo get_the_permalink(); ?>" class="a-new">
	        	<?php echo __('Read More','kasseb'); ?>
	        </a>
	    </div>
	</div>
<?php if( $index % 3 == 2 ){ ?></div><?php } ?>
<?php 
	$index++;
}
?>
<?php if( $entries->post_count >= $by_page ){ ?>
<div class="row text-center kasseb-load-more">
    <div class="col-xs-12 col-sm-10 offset-sm-1"><br>
    	<button class="load-more-button btn-raicer2 btn-sm"
    		data-page="<?php echo $page+1; ?>" data-category="<?php echo $category; ?>" >
    		LOAD MORE
    	</button>
    </div>
</div>
<?php } ?>