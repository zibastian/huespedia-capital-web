<div class="kasseb-title col-lg-6 offset-lg-3">
	<?php
	$title_fragmented = explode( ' ', $args['title'] );
	$title_ending     = array_pop( $title_fragmented );
	?>
    <h3 class="h3" style=" text-align: center">
    	<?php echo implode( ' ', $title_fragmented); ?> <span class="yellow"><?php echo $title_ending; ?></span>
    </h3>
	<hr>
</div>