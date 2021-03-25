<?php

/**
 * Class Kasseb_Render
 */
class Kasseb_Render {

    public static function render_template( $path, $args=array() ){
    	if ( $args && is_array( $args ) ) {
			extract( $args );
		}
		$server_path = $path;
		include( $server_path );
    }

}