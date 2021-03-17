<?php
/*
Name: Kasseb User Helper
*/
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

/**
 * Class Kasseb_User_Helper
 */
class Kasseb_User_Helper {

	/**
	 *  Logging user in
	 */
	public static function authenticate( $args=array() ){
		$user = get_user_by("email",$args['email']);
    	if(!$user) return false;
	    
    	$user = wp_signon(array(
			"user_login"    => $user->user_login,
			"user_password" => $args['password']
		));
		if( !is_wp_error($user) ){
			$redirect_to = self::get_redirect_url( $args['redirect'] );
			wp_safe_redirect( $redirect_to );
		}
		return;
	}

	/**
	 *  Logging user out
	 */
	public static function logout(){
		wp_logout();
		wp_redirect( wp_get_referer() );
		exit();
	}

	/**
	 *  Register a new user
	 */
	public static function create_user( $args=array() ){
		if( email_exists($args['email']) ) return false;
		$user_id = wp_create_user (
			$args['email'],
			$args['password'],
			$args['email']
		);

		wp_update_user( array(
			'ID' => $user_id,
			'first_name' => $args['fname'],
			'last_name'  => $args['lname']
		));

		update_field( 'acredited_investor', $args['investor'], 'user_'.$user_id );
		return true;
	}

	/**
	 *  Obtaining redirect url for using after login or logout
	 */
	public static function get_redirect_url( $redirect='' ){
		if( $redirect ) return $redirect;

		if( get_locale() == 'es_CO' ) return get_site_url()."/es/";
		return get_site_url();
	}

	/**
	 *  Recovering User's Password
	 */
	public static function reset_password( $email ){
		$user = get_user_by("email",$email);
    	if(!$user) return "Email address not found!";

    	// Send User Email
		$sent = Kasseb_Mail::send_password_recover( $user );
		if( $sent ) return "Email sent!";
		return "Email can't be sent right now. Try again later!";
	}

	/**
	 *  Setting new User's Password
	 */
	public static function set_new_password( $login, $password ){
		$user = get_user_by( 'login', $login );
		if($user){
			wp_set_password($password,$user->ID);
			return "Password Updated!";
		}else{
			return "There was an error. Try again later!";
		}
	}
}