<?php 
/*
 * Template Name: Refer a Friend Template
 * description: Page Template for Refering Users
 */
get_header();
global $KASSEB_CREATE_USER_CODE;
?>
<!-- Contenido de página -->
<div class="col-xs-12 col-sm-8 offset-sm-2 formulario-login">
    <div class="signup-form-container">

        <!-- form start -->
        <form role="form" id="register-form" autocomplete="off">

            <div class="">
                <h3 class="h3b yellow">Refer a Friend</h3>
            </div>

            <div class="pull-right">
                <p class="form-title">Thank you for refering a friend. To complete the referral, please include the information requested below. Each new person you refer will receive an email invitation.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <input name="adress" id="adress" type="text" class="form-control-f first" style="margin-left: 0px;" placeholder="FIRST NAME">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <input name="city" id="city" type="text" class="form-control-f first" style="margin-left: 0px;" placeholder="LAST NAME"> 
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <input name="postal" id="postal" type="text" class="form-control-f first" style="margin-left: 0px;" placeholder="EMAIL">
                    </div>
                </div>
            </div>
        </form>

        <button class="btn-sumit">Submit</button>
        <button class="btn-cancel">Cancel</button>
    </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>