<?php
/*
Name: Kasseb_Deal
*/
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

/**
 * Class Kasseb_Deal
 */
class Kasseb_Deal {

	static $FRONT_PATH;
	static $SERVER_PATH;

	/**
	 *  Initialize Module Kasseb_Deal.
	 */
	public static function init() {
		static::$FRONT_PATH  = get_template_directory_uri().'/module/deals';
		static::$SERVER_PATH = get_template_directory().'/module/deals';
		// Hook wp_enqueue_scripts
		//add_action( 'wp_enqueue_scripts', 'Kasseb_Deal::enqueue_assets', 1000 );

		// Register Content Types
		self::register_content_types();

		// Register Custom Taxonomies
		self::register_taxonomies();

		// Hook for init
		add_action( 'wp_enqueue_scripts', 'Kasseb_Deal::checkLoggedUser' );
	}

	public static function checkLoggedUser(){
		global $post;
		if( !is_user_logged_in() && $post->post_type == 'deal' ){
			wp_redirect( home_url( 'login' ) );
			exit;
		}
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
		//wp_enqueue_style( 'kasseb-tarot-play', KASSEB_TAROT_PLAY_FRONT_PATH.'/assets/css/tarot-play.css', array(), KASSEB_VERSION );
	}

	/**
	 * Scripts.
	 */
	public static function enqueue_scripts(){
		//wp_enqueue_script( 'kasseb-tarot-play', KASSEB_TAROT_PLAY_FRONT_PATH.'/assets/js/tarot-play.js', array('jquery'),KASSEB_VERSION);
	}

	/**
	 * Registering Custom WP Post Type
	 */
	public static function register_content_types() {
		$labels = array(
	    	'name' => _x( 'Deals', 'post type general name' ),
	        'singular_name' => _x( 'Deal', 'post type singular name' ),
	        'add_new' => _x( 'Añadir Deal', 'book' ),
	        'add_new_item' => __( 'Añadir Nuevo Deal' ),
	        'edit_item' => __( 'Editar Deal' ),
	        'new_item' => __( 'Nuevo Deal' ),
	        'view_item' => __( 'Ver Deal' ),
	        'search_items' => __( 'Buscar Deal' ),
	        'not_found' =>  __( 'No se han encontrado Deals' ),
	        'not_found_in_trash' => __( 'No se han encontrado Deals en la papelera' ),
	        'parent_item_colon' => ''
	    );
	 
	    // Creamos un array para $args
	    $args = array( 'labels' => $labels,
	        'public' => true,
	        'publicly_queryable' => true,
	        'show_ui' => true,
	        'query_var' => true,
	        'rewrite' => array('slug' => 'deals','with_front' => false),
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'menu_position' => null,
	        'supports' => array( 'title', 'editor', 'thumbnail')
	    );
	 
	    register_post_type( 'deal', $args ); 
	}

	/**
	 * Registering Custom WP Taxonomies
	 */
	public static function register_taxonomies() {
		register_taxonomy(  
	        'deal_location',
	        'deal',
	        array(  
	            'hierarchical' => true,  
	            'label' => 'Location',
	            'query_var' => true,
	            'rewrite' => array(
	                'slug' => 'deals/location',
	                'with_front' => false
	            )
	        )  
	    );
	}

	/**
     * Retrieve post's list
     *
     * @return array
     */
    public static function get_deals( $args=array() ) {
    	$args = wp_parse_args(
			$args,
			array(
				'post_type'      => 'deal',
				'post_status'    => 'publish',
				'orderby'        => 'date',
				'order'          => 'DESC',
				'posts_per_page' => 4,
	        	'paged'          => 1
			)
		);
    	return new WP_Query( $args );
    }

	/**
	 * Function for rendering Deal's Detail
	 */
	public static function render_deal_detail($deal) {
		$vars = array(
	  		'deal' => $deal
	  	);
	  	Kasseb_Render::render_template(static::$SERVER_PATH."/templates/single.tpl.php",$vars);
	}

	/**
	 * Function for rendering Featured Deals
	 */
	public static function render_featured_deals() {
		$items = get_posts(array(
			'numberposts'	=> 9,
			'post_type'		=> 'deal',
			'meta_key'		=> 'featured',
			'meta_value'	=> '1'
		));
		$vars = array(
	  		'items' => $items
	  	);
	  	Kasseb_Render::render_template(static::$SERVER_PATH."/templates/featured-deals.tpl.php", $vars );
	}
}