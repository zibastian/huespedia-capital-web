<?php 
/*
 * Template Name: Password Recovery Template
 * description: Page Template for recovering password users
 */
get_header();
global $KASSEB_RESET_MESSAGE;
global $KASSEB_RESET_CODE;
?>
<!-- Contenido de página -->
<div class="col-xs-12 col-sm-6 offset-sm-3 formulario-login">
    <div class="signup-form-container">
        <?php if( $KASSEB_RESET_CODE > 0 ){ ?>
            <?php get_template_part( 'templates/password-reset.tpl' ); ?>
        <?php }else{ ?>
        <!-- form start -->
        <form role="form" id="register-form" autocomplete="off" method="POST">

            <div class="form-header">
                <h3 class="reset">RESET YOUR PASSWORD</h3>
                <p class="txt-reset">If you've forgotten your password, enter you email <br> and we will send you a link to create a new one</p>           
                <div class="pull-right">
                    <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                </div>
            </div>
            <?php if( is_user_logged_in() ){ ?>
            <p class="center">You are already logged in!<br><br>
                    Go to <a href="/profile">My Account</a><br>
                    Or <a href="/logout">Logout</a>
            </p>
            <?php }else{ ?>
            <div class="form-body">
                <div class="form-group">
                    <p>E-mail</p>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <input name="email" type="email" class="form-control" placeholder="Email" required style="margin-left: 0px;">
                    </div> 
                    <span class="help-block" id="error"></span>                     
                </div>        
            </div>

            <div class="form-footer">
                <span class="message"><?php echo $KASSEB_RESET_MESSAGE; ?></span>
                <button type="submit" class="btn-login btn-info-login">
                    <span class="glyphicon glyphicon-log-in"></span> ENTER YOU EMAIL
                </button>
            </div>

            <p class="center">If you requiere adicional help, please contact us <br> at XXXXX or XXXX@huespedia.com</p>
            <?php } ?>
        </form>
        <?php } ?>

    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>