<?php 
/*
 * Template Name: Deals Request Template
 * description: Page Template for Showing Contact Deals Form
 */
get_header();
$reasons       = get_field('reasons');
global $KASSEB_SEND_CONTACT;
$message = "Request sent succesfully!";
if( $KASSEB_SEND_CONTACT == 2 ) $message = "Request couldn't be sent. Try again later!";
?>
<!-- Contenido de página -->
<div class="row col-xs-12 col-sm-10 offset-sm-1">
    <div class="col-xs-12 col-sm-6">
        <h1 class="h1"><?php echo get_the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <?php foreach( $reasons as $reason ){ ?>
        <i class="far fa-check-circle"></i> <p><?php echo $reason['text']; ?></p>
        <?php } ?>
    </div>
    <div class="col-xs-12 col-sm-6 formulario-login">
        <div class="signup-form-container">


            <?php if( $KASSEB_SEND_CONTACT > 0 ){ ?>
            <!-- form start -->
            <form role="form" id="register-form" autocomplete="off">
                <p style="text-align: center;"><?php echo $message; ?></p>
            </form>
            <?php } else { ?>
            <!-- form start -->
            <form role="form" id="register-form" autocomplete="off" method="POST">

                <div class="form-body">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="fname" type="text" class="form-control formulario-contac" placeholder="First Name" required style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div> 
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="lname" type="text" class="form-control formulario-contac" placeholder="Last Name" required style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div> 
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="email" type="email" class="form-control formulario-contac " required placeholder="Email" style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div> 
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="phone" type="text" class="form-control formulario-contac" placeholder="Phone Number" required style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div> 
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="state" type="text" class="form-control formulario-contac" placeholder="State" required style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="company" type="text" class="form-control formulario-contac" placeholder="Enterprise" required style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="portfolio" type="text" class="form-control formulario-contac" required placeholder="Portfolio Activity" style="margin-left: 0px;">
                        </div> 
                        <span class="help-block" id="error"></span>                     
                    </div> 
                </div>

                <div class="form-footer">
                    <button type="submit"  style="background: : #18263f;" class="btn-contac btn-info-login">
                        <span class="glyphicon glyphicon-log-in"></span>SUBMIT REQUEST
                    </button>
                </div>

            </form>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>