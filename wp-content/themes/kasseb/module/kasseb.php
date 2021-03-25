<?php
/*
Name: Kasseb Module
*/
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

define( 'KASSEB_VERSION',     '0.1' );
define( 'KASSEB_FRONT_PATH',  get_template_directory_uri().'/module' );
define( 'KASSEB_SERVER_PATH', get_template_directory().'/module' );

require( 'helpers/menu.php' );
require( 'helpers/translations.php' );
require( 'helpers/mail.php' );
require( 'helpers/user.php' );
require( 'helpers/render.php' );
require( 'models/post.php' );
require( 'deals/deal.php' );

/**
 * Class Kasseb
 */
class Kasseb {

	/**
	 *  Initialize Global Kasseb Module.
	 */
	public static function init() {
		// Init Submodules
		self::init_submodules();

		// Registering Custom Menus
		self::register_menus();

		// Include Assets
		add_action( 'wp_enqueue_scripts', 'Kasseb::enqueue_assets', 20 );

		// Loading Translations
		self::load_translations();

		// Setting Current Language
		self::set_locale();

		// Hook for wp_ajax_{action}
		add_action( "wp_ajax_nopriv_kasseb", 'Kasseb::ajax_router_not_logged' );
		add_action( 'wp_ajax_kasseb', 'Kasseb::ajax_router_logged' );

		// Hook for init
		add_action( 'init', 'Kasseb::router' );

		if ( ! current_user_can('manage_options') ) {
			add_filter( 'show_admin_bar', '__return_false' );
		}
	}

	/**
	 * Assets.
	 */
	public static function init_submodules() {
		Kasseb_Deal::init();
	}

	/**
	 * Assets.
	 */
	public static function enqueue_assets() {
		self::enqueue_styles();
		self::enqueue_scripts();
	}

	/**
	 * Styles.
	 */
	public static function enqueue_styles(){
		wp_enqueue_style( 'kasseb-bootstrap', get_template_directory_uri().'/assets/css/bootstrap-4.2.1.css', array(), KASSEB_VERSION );
		wp_enqueue_style( 'kasseb-main', get_bloginfo('stylesheet_url'), array(), KASSEB_VERSION);
	}

	/**
	 * Scripts.
	 */
	public static function enqueue_scripts(){
		wp_enqueue_script( 'kasseb-main', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), KASSEB_VERSION );
		wp_localize_script('kasseb-main', 'KASSEB_LANG', Kasseb_Translations_Helper::get_script_translations() );
	}

	/**
	 * Registering menus.
	 */
	public static function register_menus() {
		register_nav_menus(
			array(
				'header-menu' => 'Menu Header',
				'footer-menu' => 'Menu Footer'
			)
		);
	}

	/**
	 * Change language.
	 */
	public static function set_locale() {
		add_filter( 'locale', function( $default_locale ) {
		    // if ( isset( $_SESSION[ 'WPLANG' ] ) )
		    //     return $_SESSION[ 'WPLANG' ];
		    return "es_CO";//$default_locale;
		} );
	}

	/**
	 * Load Translations.
	 */
	public static function load_translations() {
		add_action( "after_setup_theme", function(){
    		load_theme_textdomain( 'kasseb', get_template_directory() . '/lang' );
		}, 5);
	}

	/**
	 * Router when User is Logged.
	 */
	public static function router(){
		if( ($_SERVER["REQUEST_URI"] == '/login/' || $_SERVER["REQUEST_URI"] == '/es/login/') 
			&& !is_user_logged_in()){
			if( $_POST['email'] )
				Kasseb_User_Helper::authenticate( array(
					'email'    => $_POST['email'],
					'password' => $_POST['password'],
					'redirect' => $_POST['referer']
				));
		}
		if( ($_SERVER["REQUEST_URI"] == '/logout/' || $_SERVER["REQUEST_URI"] == '/es/logout/') 
			&& is_user_logged_in()){
			Kasseb_User_Helper::logout();
		}
		if( (is_numeric(strrpos($_SERVER["REQUEST_URI"],'/reset-password/')) || is_numeric(strrpos($_SERVER["REQUEST_URI"],'/es/reset-password/')) )
			&& !is_user_logged_in()){
			global $KASSEB_RESET_MESSAGE;
			global $KASSEB_RESET_CODE;
			$KASSEB_RESET_MESSAGE = '';
			$KASSEB_RESET_CODE = 0;
			if( isset($_POST['email']) ){
				$KASSEB_RESET_MESSAGE = Kasseb_User_Helper::reset_password( $_POST['email'] );
			}
			if( isset($_REQUEST['key']) ){
				$KASSEB_RESET_CODE = 1;
		        $user = check_password_reset_key( $_REQUEST['key'], $_REQUEST['login'] );
		        if ( ! $user || is_wp_error( $user ) ) {
		            if ( $user && $user->get_error_code() === 'expired_key' ) {
		                $KASSEB_RESET_CODE = 2;
		                $KASSEB_RESET_MESSAGE = 'Your link has expired!';
		            } else {
		                $KASSEB_RESET_CODE = 3;
		                $KASSEB_RESET_MESSAGE = 'Your link is invalid!';
		            }
		        }
			}
			if( isset($_POST['password']) ){
				$KASSEB_RESET_CODE = 4;
				$KASSEB_RESET_MESSAGE = Kasseb_User_Helper::set_new_password( $_REQUEST['login'], $_POST['password'] );
			}
		}
		if( (is_numeric(strrpos($_SERVER["REQUEST_URI"],'/register/')) || is_numeric(strrpos($_SERVER["REQUEST_URI"],'/es/register/')) )
			&& !is_user_logged_in()){
			if( $_POST['email'] ){
				global $KASSEB_CREATE_USER_CODE;
				$KASSEB_CREATE_USER_CODE = 0;
				$created = Kasseb_User_Helper::create_user( array(
					'email'    => $_POST['email'],
					'fname'    => $_POST['fname'],
					'lname'    => $_POST['lname'],
					'password' => $_POST['password'],
					'investor' => $_POST['investor']
				));
				if( $created ) $KASSEB_CREATE_USER_CODE = 1;
				else $KASSEB_CREATE_USER_CODE = 2;
			}
		}
		if( is_numeric(strrpos($_SERVER["REQUEST_URI"],'/deals-request/')) || is_numeric(strrpos($_SERVER["REQUEST_URI"],'/es/deals-request/')) ){
			global $KASSEB_SEND_CONTACT;
			$KASSEB_SEND_CONTACT = 0;
			if( $_POST['email'] ){
				$sent = Kasseb_Mail::sendContactDeals(array(
					'fname'     => $_POST['fname'],
					'lname'     => $_POST['lname'],
					'email'     => $_POST['email'],
					'phone'     => $_POST['phone'],
					'state'     => $_POST['state'],
					'company'   => $_POST['company'],
					'portfolio' => $_POST['portfolio']
				));
				if( $sent ) $KASSEB_SEND_CONTACT = 1;
				else $KASSEB_SEND_CONTACT = 2;
			}
		}
	}

	/**
	 * Ajax Router when User is Logged.
	 */
	public static function ajax_router_logged(){
		if( isset($_POST['type']) ){
			if( $_POST['type'] == 'send-contact-form' ){
	        	self::ajax_send_contact_form();
	        }
	        if( $_POST['type'] == 'load-more-entries' ){
	        	self::ajax_load_more_entries();
	        }
	        if( $_POST['type'] == 'load-more-deals' ){
	        	self::ajax_load_more_deals();
	        }
	        echo '{"message":"Función no reconocida."}';
	    }else{
	    	echo '{"message":"Función no definida."}';
	    }
	    die();
	}

	/**
	 * Ajax Router when User is not Logged.
	 */
	public static function ajax_router_not_logged(){
		if( isset($_POST['type']) ){
	        if( $_POST['type'] == 'send-contact-form' ){
	        	self::ajax_send_contact_form();
	        }
	        if( $_POST['type'] == 'load-more-entries' ){
	        	self::ajax_load_more_entries();
	        }
	        if( $_POST['type'] == 'load-more-deals' ){
	        	self::ajax_load_more_deals();
	        }
	        echo '{"message":"Función no reconocida."}';
	    }else{
	    	echo '{"message":"Función no definida."}';
	    }
	    die();
	}

	/**
	 * Kasseb Ajax Process for Sending Contact Form Request.
	 */
	public static function ajax_send_contact_form(){
		$name  = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		// Check all data available to proceed
		if( empty($name) || empty($email) || empty($phone) ){
			echo '{"data":"0"}';
			die();
		}
		// Send User Email
		$sent = Kasseb_Mail::sendContactForm(array(
			'name'  => $name,
			'email' => $email,
			'phone' => $phone
		));
		if($sent) echo '{"data":"1"}';
		else echo '{"data":"0"}';
		die();
	}

	/**
	 * Kasseb Ajax Process for rendering entries paginated
	 */
	public static function ajax_load_more_entries(){
		$category  = $_POST['category'];
		$page      = $_POST['page'];

		// Getting entries and retrieving html
		$args = array();
		if( $category ) $args['cat'] = $category;
		if( $page )   $args['paged'] = $page;
		$entries = Kasseb_Model_Post::get_posts( $args );

		get_template_part( 'templates/list-entries', '', array(
			'entries'  => $entries,
			'category' => $category,
			'page'     => $page
		));
		die();
	}

	/**
	 * Kasseb Ajax Process for rendering deals paginated
	 */
	public static function ajax_load_more_deals(){
		$page = $_POST['page'];

		// Getting entries and retrieving html
		$args = array();
		if( $page ) $args['paged'] = $page;
		$items = Kasseb_Deal::get_deals( $args );

		get_template_part( 'module/deals/templates/market-place', '', array(
			'items' => $items,
			'page'  => $page
		));
		die();
	}
}