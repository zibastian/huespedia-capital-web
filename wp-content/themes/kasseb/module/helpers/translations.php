<?php
/*
Name: Kasseb Translations Helper
*/
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

/**
 * Class Kasseb
 */
class Kasseb_Translations_Helper {

	/**
	 *  Getting script translation vars
	 */
	public static function get_script_translations( $script="main" ){
		if( $script == "main" ){
			return array(
				'SENDING_CONTACT_FORM'      => __('SENDING', 'kasseb'),
				'FAILED_SEND_CONTACT_FORM'  => __('Sent email failed. Try again later', 'kasseb'),
				'SUCCESS_SEND_CONTACT_FORM' => __('Contact sent!.', 'kasseb'),
				'LOADING_TEXT'              => __('LOADING ...', 'kasseb'),
				'PASSWORDS_ARE_NOT_EQUAL'   => __('The passwords you have entered are not equals. Please review them.', 'kasseb')
			);
		}
		return array();
	}
}