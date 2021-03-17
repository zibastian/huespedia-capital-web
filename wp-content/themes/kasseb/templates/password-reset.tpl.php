<?php 
global $KASSEB_RESET_MESSAGE;
global $KASSEB_RESET_CODE;
?>
<form role="form" id="set-password-form" autocomplete="off" method="POST">

    <div class="form-header">
        <h3 class="reset">SET YOUR NEW PASSWORD</h3>
        <?php if($KASSEB_RESET_CODE == 1){ ?>
        	<p class="txt-reset">Enter below your new password</p>
        <?php } ?>
        <div class="pull-right">
            <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
        </div>
    </div>
    <?php if( is_user_logged_in() ){ ?>
    <p class="center">You are already logged in!<br><br>
            Go to <a href="/profile">My Account</a><br>
            Or <a href="/logout">Logout</a>
    </p>
	<?php }elseif( $KASSEB_RESET_CODE == 2 || $KASSEB_RESET_CODE == 3 ){ ?>
	<p class="center"><?php echo $KASSEB_RESET_MESSAGE; ?><br><br>
            <a href="/reset-password">Request a new password</a><br>
    </p>
	<?php }elseif( $KASSEB_RESET_CODE == 4 ){ ?>
	<p class="center"><?php echo $KASSEB_RESET_MESSAGE; ?><br><br>
            Go to <a href="/login">Login</a><br>
            Or <a href="/">Home Page</a>
    </p>
    <?php }else{ ?>
    <div class="form-body">
        <div class="form-group">
            <p>New Password</p>
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="login" type="hidden" class="form-control" value="<?php echo $_REQUEST['login']; ?>">
                <input name="password" type="password" class="form-control" required style="margin-left: 0px;">
            </div> 
            <span class="help-block" id="error"></span>                     
        </div>
        <div class="form-group">
            <p>Repeat New Password</p>
            <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="rpassword" type="password" class="form-control" required style="margin-left: 0px;">
            </div> 
            <span class="help-block" id="error"></span>                     
        </div>
    </div>

    <div class="form-footer">
        <span class="message"><?php echo $KASSEB_RESET_MESSAGE; ?></span>
        <button type="submit" class="btn-login btn-info-login">
            <span class="glyphicon glyphicon-log-in"></span>SET YOUR NEW PASSWORD
        </button>
    </div>
    <?php } ?>

    <p class="center">If you requiere adicional help, please contact us <br> at XXXXX or XXXX@huespedia.com</p>
</form>