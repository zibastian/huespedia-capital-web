<?php

/**
 * Class Kasseb_Base_Mail
 */

class Kasseb_Base_Mail {

	static $mail_recipients = array();
	static $mail_subject    = "";
	static $mail_content    = "";

	/**
	 * Send Email.
	 */
	public static function send_email() {
		return wp_mail( 
			static::getRecipients(), 
			static::getSubject(), 
			static::getBody(), 
			static::getHeaders(), 
			static::getAttachments() );
	}

	/**
	 *  Get mail's headers.
	 */
	public static function getHeaders(){
		$headers   = array();
		$headers[] = "From: Huespedia Capital <contact@huespediacapital.com>";
    	$headers[] = "Content-Type: text/html; charset=UTF-8";
    	return $headers;
	}

	/**
	 *  Get mail's recipients.
	 */
	public static function getRecipients(){ return static::$mail_recipients; }

	/**
	 *  Get mail's Subject.
	 */
	public static function getSubject(){ return "Huespedia Capital: ".static::$mail_subject; }

	/**
	 *  Get mail's Body.
	 */
	public static function getBody(){
		return '
		<div style="max-width:600px;margin:0 auto">
		    <table align="center" style="border-spacing:0;font-family:sans-serif;color:#333333;margin:0 auto;border:1px solid #e1e1e1;padding:10px;background:#fff">
		        <tbody>
		            <tr>
		                <td style="padding:0">
		                    <table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333">
		                        <tbody>
		                            <tr>
		                                <td align="center" style="padding:0">
		                                '.static::getBodyHeader().'
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </td>
		            </tr>
		            <tr>
		                <td style="padding:0">
		                    <table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333">
		                        <tbody>
		                            <tr>
		                                <td style="padding:0 20px;width:100%;text-align:center">
		                                    <h2 style="text-align:center;margin-top:20px;margin-bottom:0">'.static::$mail_subject.'</h2>
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </td>
		            </tr>
		            <tr>
		                <td style="padding:0">'.static::$mail_content.'</td>
		            </tr>
		            <tr>
		                <td style="padding:0">
		                    <table width="100%" style="border-spacing:0;font-family:sans-serif;color:#333333">
		                        <tbody>
		                            <tr>
		                                <td style="padding:0 20px;width:100%;text-align:center">
		                                    '.static::getBodyFooter().'
		                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </td>
		            </tr>
		        </tbody>
		    </table>
		</div>';
	}

	/**
	 *  Get mail's Body Header.
	 */
	public static function getBodyHeader(){
		return '
		<img src="'.get_site_url().'/wp-content/uploads/2020/12/1LogoNegro.png" style="width:400px;padding-top:10px!important;border:0;margin:0 auto!important; display:block!important; padding:10px 0" tabindex="0">';
	}

	/**
	 *  Get mail's Body Footer.
	 */
	public static function getBodyFooter(){
		return '
		<p style="font-size:14px;margin:0;margin-top:30px">
            Cordialmente,<br><br>
            Huespedia Capital<br>
            <a href="https://www.huespediacapital.com">www.huespediacapital.com</a>
        </p>';
	}

	/**
	 *  Get mail's Attachments.
	 */
	public static function getAttachments(){ return array(); }
}