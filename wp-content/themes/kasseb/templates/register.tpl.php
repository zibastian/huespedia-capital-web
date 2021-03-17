<?php 
/*
 * Template Name: Register Template
 * description: Page Template for Registering users
 */
get_header();
global $KASSEB_CREATE_USER_CODE;
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
    	<?php }elseif( $KASSEB_CREATE_USER_CODE == 1 ){ ?>
    	<form role="form" id="register-form" autocomplete="off">
            <div class="form-header">
                <h3 class="sign">Account created successfully!<br><br>
                	Go to <a href="/login">Log In</a><br>
                	Or <a href="/">Home Page</a>
                </h3>
            </div>
        </form>
    	<?php }else{ ?>
        <!-- form start -->
        <form role="form" id="register-form" autocomplete="off" method="POST">

                <div class="form-header">
                    <h3 class="sign"> Sign in with <a href="#">Google</a></h3>
                    <p class="line">or</p>           
                    <div class="pull-right">
                        <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                    </div>
                </div>

                <div class="form-body">
                    <div class="form-group">
                        <p>E-mail<span class="red">*</span></p>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="email" type="email" required class="form-control" placeholder="Email" style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div>    
                    <div class="form-group">                      
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <p class="fourm-p">First Name<span class="red">*</span></p>
                                    <input name="fname" id="fname" type="text" required class="form-control first" style="margin-left: 0px;" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6" style="padding-right: 0px;">
                                <div class="form-group">
                                    <p class="fourm-p">Last Name<span class="red">*</span></p>
                                    <input name="lname" id="lname" type="text" required class="form-control first" style="margin-left: 0px;" placeholder=""> 
                                </div>
                            </div>
                        </div>
                        <span class="help-block" id="error"></span>                    
                    </div>      
                </div>

                <div class="form-group">
                    <p>Create Password<span class="red">*</span></p>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="password" type="password" required class="form-control" placeholder="password" style="margin-left: 0px;">
                    </div> 
                    <span class="help-block" id="error"></span>                     
                </div>

                <div class="form-group">
                    <p>Are you an acredited investor?<span class="red">*</span></p>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <label class="custom-radio-checkbox">
                            <!-- Input oculto -->
                            <input class="custom-radio-checkbox__input" type="radio" name="investor" value="1" checked>
                            <!-- Imagen en sustitucion -->
                            <span class="custom-radio-checkbox__show custom-radio-checkbox__show--radio"></span>
                            <!-- Texto -->
                            <span class="custom-radio-checkbox__text">Yes</span>
                        </label>
                        <label class="custom-radio-checkbox no">
                            <!-- Input oculto -->
                            <input class="custom-radio-checkbox__input" type="radio" name="investor" value="0">
                            <!-- Imagen en sustitucion -->
                            <span class="custom-radio-checkbox__show custom-radio-checkbox__show--radio"></span>
                            <!-- Texto -->
                            <span class="custom-radio-checkbox__text">No</span>
                        </label>
                    </div> 
                    <span class="help-block" id="error"></span>                     
                </div>

                <div class="terms">
                    <label class="custom-radio-checkbox">
                        <!-- Input oculto -->
                        <input class="custom-radio-checkbox__input" type="checkbox" name="terms" value="" required>
                        <!-- Imagen en sustitucion -->
                        <span class="custom-radio-checkbox__show custom-radio-checkbox__show--checkbox"></span>
                        <!-- Texto -->
                        <span class="custom-radio-checkbox__text">I agree to the <a href="/terms-and-conditions/" target="_blank">Terms of Services</a>. I have read this agreement and accept the terms and condicions</span>
                    </label>
                </div>

                <div class="form-footer">
                	<?php if( $KASSEB_CREATE_USER_CODE == 2 ){ ?>
			        <div class="message">
			        	<span>Your email address is already registered!</span>
			        </div>
			    	<?php } ?>
                    <button type="submit" class="btn-login btn-info-login">
                        <span class="glyphicon glyphicon-log-in"></span>COMPLETE YOUR INFO
                    </button>
                </div>

                <p class="center">Already have an account? <a href="/login">Sign In</a></p>
            </form>
    	<?php } ?>
    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>