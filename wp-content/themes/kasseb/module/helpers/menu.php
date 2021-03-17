<?php
/*
Name: Kasseb Menu Helper
*/
// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;

/**
 * Class Kasseb
 */
class Kasseb_Menu_Helper {

	/**
	 *  Formatting default wp_get_nav_menu_items response
	 */
	public static function format_menu_data( $list_menu_options=array() ){
		if( count($list_menu_options) == 0 ) return array();

		$formatted = array();
		foreach ($list_menu_options as $list_menu_option) {
			if( $list_menu_option->menu_item_parent == "0" ){
				$formatted[$list_menu_option->ID] = array(
					"id"    => $list_menu_option->ID,
					"title" => $list_menu_option->title,
					"link"  => $list_menu_option->url
				);
			}else{
				$formatted[$list_menu_option->menu_item_parent]['children'][] = array(
					"id"    => $list_menu_option->ID,
					"title" => $list_menu_option->title,
					"link"  => $list_menu_option->url
				);
			}
		}
		return $formatted;
	}
}