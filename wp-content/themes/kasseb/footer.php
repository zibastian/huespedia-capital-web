<?php
$menu_options = Kasseb_Menu_Helper::format_menu_data( wp_get_nav_menu_items('menu-footer') );
?>
		<div class="footer">
			<div class="row">
				<div class="text-center col-xs-12 col-sm-6 offset-sm-3">
					<h3 class="h3b"><?php echo __('Get in','kasseb'); ?> <span class="yellow"><?php echo __('touch','kasseb'); ?></span></h3>
				</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-3 center">
					<a href="/"><img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/logov2.png" alt=""></a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<form id="contact-footer" class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<div data-role="input-row">
								<input name="name"  required type="text" class="form-control" placeholder="<?php echo __('Name','kasseb'); ?>">
								<input name="email" required type="email" class="form-control " placeholder="<?php echo __('E-mail','kasseb'); ?>">
							</div>
							<div data-role="input-row">
								<input name="phone" required type="text" class="form-control footer-form" placeholder="<?php echo __('Phone','kasseb'); ?>">
								<button type="submit" class="btn-footer btn-default"><?php echo __('SEND','kasseb'); ?></button>
							</div>
						</div>
					</form>

				</div>
				<div class="col-xs-12 col-sm-2 izq">
					<?php foreach( $menu_options as $menu_option ){ ?>
						<h6 class="h6">
							<a href="<?php echo $menu_option['link']; ?>">
								<?php echo __($menu_option['title'], 'kasseb'); ?>
							</a>
						</h6>
					<?php } ?>
				</div>
				<div class="col-xs-12 col-sm-1">
					<ul class="rrss">
					   <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
					   <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					   <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
				   	</ul>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="text-center col-xs-12 col-sm-6 offset-sm-3">
					<p class="blanco">© <?php echo date('Y'); ?> Huespedia. <?php echo __('All rights reserved','kasseb'); ?></p>
				</div>
			</div>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>

	    <!-- Include all compiled plugins (below), or include individual files as needed --> 
	    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/popper.min.js"></script>
	    <script src="<?php echo get_template_directory_uri();  ?>/assets/js/bootstrap-4.2.1.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>