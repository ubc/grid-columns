<?php 


/**
 * grid_column_shortcode_twitter_support_column_class function.
 * 
 * @access public
 * @param mixed $class
 * @param mixed $attr
 * @return void
 */
function grid_column_shortcode_twitter_support_column_class( $class, $attr ) {
	
	$span = $attr['span'];
		
	switch( $attr['grid'] ){
		
		case 2:
			$span = (int)$attr['span']*6;
			$push = (int)$attr['push']*6;
		break;
		
		case 3:
			$span = (int)$attr['span']*4;
			$push = (int)$attr['push']*4;
		break;
		
		case 4:
			$span = (int)$attr['span']*3;
			$push = (int)$attr['push']*3;
		break;
		
		case 6:
			$span = (int)$attr['span']*2;
			$push = (int)$attr['push']*2;
		break;
	
	}
	
	$twitter_class[] = "span".$span;
	
	( empty( $push ) ? false : $twitter_class[] = "offset".$push );
	return $twitter_class;
	
}
add_filter('gc_column_class', 'grid_column_shortcode_twitter_support_column_class', 10, 2 );


/**
 * grid_column_shortcode_twitter_support_row_class function.
 * 
 * @access public
 * @param mixed $class
 * @return void
 */
function grid_column_shortcode_twitter_support_row_class( $class ) {
	return array('row-fluid');
}
add_filter( 'gc_row_class','grid_column_shortcode_twitter_support_row_class');

function grid_column_shortcode_twitter_support_allowed_grids( $grids ){
	return array( 2, 3, 4, 6, 12 );

}
add_filter( 'gc_allowed_grids','grid_column_shortcode_twitter_support_allowed_grids');