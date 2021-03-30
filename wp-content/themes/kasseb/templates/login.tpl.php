<?php 
/*
 * Template Name: Login Template
 * description: Page Template for Logging users
 */
get_header();
?>
<!-- Contenido de página -->
<div class="col-xs-12 col-sm-6 offset-sm-3 formulario-login">
    <div class="signup-form-container">
    	<?php if( is_user_logged_in() ){ ?>
    	<form role="form" id="register-form" autocomplete="off">
            <div class="form-header">
                <h3 class="sign">You are already logged in!<br><br>
                	Go to <a href="/profile">My Account</a><br>
                	Or <a href="/logout">Logout</a>
                </h3>
            </div>
        </form>
    	<?php }else{ ?>
        <!-- form start -->
        <form role="form" id="register-form" autocomplete="off" method="POST">
            <div class="form-header">
                <h3 class="sign">Sign in with your account</h3>
                <p class="line">-</p>           
                <div class="pull-right">
                    <h3 class="form-title">
                    	<span class="glyphicon glyphicon-pencil"></span>
                    	<input type="hidden" name="referer" value="<?php echo wp_get_referer();?>">
                    </h3>
                </div>
            </div>

            <div class="form-body">
                <div class="form-group">
                    <p>E-mail*</p>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="email" type="email" class="form-control" required="" style="margin-left: 0px;">
                    </div>                     
                </div>
                <div class="form-group">
                    <p>Password*</p>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="password" type="password" class="form-control" required="" style="margin-left: 0px;">
                    </div> 
                    <span class="help-block" id="error"></span>                     
                </div>
            </div>

            <div class="form-footer">
            	<?php if( $_POST['email'] && $_POST['password'] ){ ?>
		        <div class="message">
		        	<span>Authentication Failed. Review your credentials and try again!</span>
		        </div>
		    	<?php } ?>
                <button type="submit" class="btn-login btn-info-login">
                    <span class="glyphicon glyphicon-log-in"></span>ENTER YOUR LOGIN
                </button>
            </div>
            <p class="center">Don't have an account? 
            	<a href="/register">Sign Up</a><br>
            	<a href="/reset-password">Forgot Password?</a>
            </p>
        </form>
    	<?php } ?>
    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>