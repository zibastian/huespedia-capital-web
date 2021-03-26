<?php

require( "mail-base.php" );

/**
 * Class Kasseb_Mail extends Kasseb_Base_Mail
 */
class Kasseb_Mail extends Kasseb_Base_Mail {

	/**
	 *  Get mail's Body.
	 */
	public static function sendContactForm( $data=array() ){
        if( !count($data) ) return false;

        parent::$mail_recipients = array( get_bloginfo('admin_email') );
		parent::$mail_subject = "Contacto Recibido";
		parent::$mail_content = '
<table width="100%" style="margin-top:30px;border-spacing:0;font-family:sans-serif;color:#333333">
    <tbody>
        <tr>
            <td style="padding:20px 20px;width:100%;text-align:center">
                <span>Se ha recibido un contacto en huespediacapital.com con la siguiente información:</span>
            </td>
        </tr>
        <tr>
            <td style="padding:25px 20px;width:100%;text-align:center">
                <table style="margin: 0 auto;">
                    <tr><td><b>Nombre:</b></td><td>'.$data['name'].'</td></tr>
                    <tr><td><b>Email:</b></td><td>'.$data['email'].'</td></tr>
                    <tr><td><b>Teléfono:</b></td><td>'.$data['phone'].'</td></tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>';
		return parent::send_email();
	}

    /**
     *  Get recover password mail's Body.
     */
    public static function send_password_recover( $user ){
        if( !isset( $user ) ) return false;

        parent::$mail_recipients = array( $user->user_email );
        parent::$mail_subject = __('Password Reset','kasseb');
        $path = "reset-password/?key=".get_password_reset_key($user)."&login=" . rawurlencode( $user->user_login );
        if( get_locale() == "es_CO" ) $path = 'es/'.$path;
        $url = site_url( $path, 'login' );
        parent::$mail_content = '
<table width="100%" style="margin-top:30px;border-spacing:0;font-family:sans-serif;color:#333333">
    <tbody>
        <tr>
            <td style="padding:20px 20px;width:100%;text-align:center">
                <span>'.__('We have received a request for resetting your password','kasseb').'</span>
            </td>
        </tr>
        <tr>
            <td style="padding:25px 20px;width:100%;text-align:center">
                <span style="font-size: 14px;">'.__('To reset your password please click on the link below','kasseb').': <a href="'.$url.'" target="_blank">'.$url.'</a></span>
            </td>
        </tr>
        <tr>
            <td style="padding:20px 20px;width:100%;text-align:center">
                <span style="font-size: 14px;">'.__('If you think this an error or you did not request this, just ignore this message and nothing will happen.','kasseb').'</span>
            </td>
        </tr>
    </tbody>
</table>';
        return parent::send_email();
    }

    /**
     *  Get mail's Body.
     */
    public static function sendContactDeals( $data=array() ){
        if( !count($data) ) return false;

        parent::$mail_recipients = array( get_bloginfo('admin_email') );
        //parent::$mail_recipients = array( 'seskassner@gmail.com' );
        parent::$mail_subject = "Contacto Formulario Deals";
        parent::$mail_content = '
<table width="100%" style="margin-top:30px;border-spacing:0;font-family:sans-serif;color:#333333">
    <tbody>
        <tr>
            <td style="padding:20px 20px;width:100%;text-align:center">
                <span>Se ha recibido un contacto a través del formulario de Deals en huespediacapital.com con la siguiente información:</span>
            </td>
        </tr>
        <tr>
            <td style="padding:25px 20px;width:100%;text-align:center">
                <table style="margin: 0 auto;">
                    <tr><td><b>Nombre:</b></td><td>'.$data['fname'].'</td></tr>
                    <tr><td><b>Apellido:</b></td><td>'.$data['lname'].'</td></tr>
                    <tr><td><b>Email:</b></td><td>'.$data['email'].'</td></tr>
                    <tr><td><b>Teléfono:</b></td><td>'.$data['phone'].'</td></tr>
                    <tr><td><b>State:</b></td><td>'.$data['state'].'</td></tr>
                    <tr><td><b>Company:</b></td><td>'.$data['company'].'</td></tr>
                    <tr><td><b>Portfolio:</b></td><td>'.$data['portfolio'].'</td></tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>';
        return parent::send_email();
    }

    /**
     *  Get mail's Body.
     */
    public static function sendQuestionDeal( $data=array() ){
        if( !count($data) ) return false;

        parent::$mail_recipients = array( get_bloginfo('admin_email') );
        //parent::$mail_recipients = array( 'seskassner@gmail.com' );
        parent::$mail_subject = "Pregunta Recibida en Huespedia Capital";
        parent::$mail_content = '
<table width="100%" style="margin-top:30px;border-spacing:0;font-family:sans-serif;color:#333333">
    <tbody>
        <tr>
            <td style="padding:20px 20px;width:100%;text-align:center">
                <span>Se ha recibido una pregunta a través del formulario de Preguntas en huespediacapital.com con la siguiente información:</span>
            </td>
        </tr>
        <tr>
            <td style="padding:25px 20px;width:100%;text-align:center">
                <table style="margin: 0 auto;">
                    <tr><td><b>URL:</b></td><td>'.$data['url'].'</td></tr>
                    <tr><td><b>Pregunta:</b></td><td>'.$data['question'].'</td></tr>
                    <tr><td><b>Nombre:</b></td><td>'.$data['fname'].'</td></tr>
                    <tr><td><b>Apellido:</b></td><td>'.$data['lname'].'</td></tr>
                    <tr><td><b>Email:</b></td><td>'.$data['email'].'</td></tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>';
        return parent::send_email();
    }

}