<?php
/** Elderberry Styler
  *
  * This file houses the Elderberry styler class
  *
  * @package Elderberry
  *
  */


/** Elderberry Styler Class
  *
  * This class is used to create browser-safe CSS code where
  * dynamic inline CSS, or other CSS generate via PHP is needed.
  *
  * @todo Make this a proper class so we can work with values better
  *
  */
class EB_Styler {


	/** Border Radius
	  *
	  * Given a radius it generates all the CSS needed for the radius
	  * to be applied.
	  *
	  * @param string $radius a CSS value for the radius amount
	  * @param integer $difference an integer to add to the radius
	  *
	  * @return string $style The border radius CSS code
	  *
	  */
	function radius( $radius, $difference = 0 ) {
		$radius = trim( $radius );
		$noradius = array( '0px', '0', 'none', '0 0 0 0', '0px 0px 0px 0px' );

		$style = '';
		if( !in_array( $radius, $noradius) ) {
			if( substr_count( $radius, ' ' ) == 0 ) {
				if( $difference != 0 ) {
					$radius_value = str_replace( 'px', '' , $radius );
					$radius = $radius_value + $difference . 'px';
				}
				$radius = $radius . ' ' . $radius . ' ' . $radius . ' ' . $radius;
			}

			$style = '
				-webkit-border-radius: ' . $radius . ';
				 -khtml-border-radius: ' . $radius . ';
				   -moz-border-radius: ' . $radius . ';
				    -ie-border-radius: ' . $radius . ';
				     -o-border-radius: ' . $radius . ';
				        border-radius: ' . $radius . ';
			';
		}

		return $style;
	}

	/** Color
	  *
	  * Returns the CSS for setting an element's color
	  *
	  * @param string @color The color we want to apply
	  *
	  * @return string $color The color CSS code
	  *
	  */
	function color( $color ) {
		$color = 'color: ' . $color;
		return $color;
	}

	/** Background Color
	  *
	  * Returns the CSS for the background color of an element
	  *
	  * @param string $color The color value to use
	  * @param string $gradient Weather or not we would like an autogenerated gradient
	  *
	  * @uses gradient()
	  *
	  * @return string $background The border radius CSS code
	  *
	  */
	function background( $color, $gradient = 'no' ) {
		if( $gradient == 'yes' ) {
			$background = $this->gradient( $color );
		}
		else {
			$background = 'background: ' . $color;
		}

		return $background;
	}

	/** Gradient
	  *
	  * Returns the CSS for an auto-generated gradient based on a color
	  *
	  * @param string $color The color value to use
	  *
	  * @uses lightness()
	  *
	  * @return string $gradient The gradient CSS code
	  *
	  */
	function gradient( $color ) {
		$background = $color;
		$start = $this->lightness( $color, '+', '15' );
		$end = $this->lightness( $color, '-', '15' );
		$gradient = '
			background: ' . $background . ';
			background: -moz-linear-gradient(top,  ' . $start . ' 0%, ' . $end . ' 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,' . $start . '), color-stop(100%,' . $end . '));
			background: -webkit-linear-gradient(top,  ' . $start . ' 0%,' . $end . ' 100%);
			background: -o-linear-gradient(top,  ' . $start . ' 0%,' . $end . ' 100%);
			background: -ms-linear-gradient(top,  ' . $start . ' 0%,' . $end . ' 100%);
			background: linear-gradient(to bottom,  ' . $start . ' 0%,' . $end . ' 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="' . $start . '", endColorstr="' . $end . '",GradientType=0 );
		';
		return $gradient;
	}

	/** Gradient
	  *
	  * Returns the CSS for an auto-generated text shadow based on a color.
	  * The function also takes a look at the lightness of the color,
	  * and generates an appropriate shadow
	  *
	  * @param string $color The color value to use
	  *
	  * @return string $textshadow The text shadow CSS code
	  *
	  */
	function textshadow( $color ) {
		global $framework;
		$base_color = substr( $color, 1 );
		if( strlen( $base_color ) == 3 ) {
			$c = str_split( $base_color );
			$base_color = $c[0].$c[0].$c[1].$c[1].$c[2].$c[2];
		}

		$r = hexdec(substr($base_color,0,2));
		$g = hexdec(substr($base_color,2,2));
		$b = hexdec(substr($base_color,4,2));

		if($r + $g + $b > 400 ){
		   $textshadow = 'text-shadow: 1px 1px rgba(0,0,0,0.2)';
		}else{
		   $textshadow = 'text-shadow: 1px 1px rgba(255,255,255,0.2)';
		}


		return $textshadow;

	}

	/** Shadow
	  *
	  * Returns the CSS for a shadow, given the value of the
	  * box-shadow property
	  *
	  * @param string $value The box-shadow value to use
	  *
	  * @return string $shadow The shadow CSS code
	  *
	  */
	function shadow( $value ) {

		$shadow = '
			-webkit-box-shadow: ' . $value . ';
			   -moz-box-shadow: ' . $value . ';
			        box-shadow: ' . $value . ';
        ';

        return $shadow;

    }

	/** Color Lightness Modification
	  *
	  * Enables the ad-hoc manipulation of a color's
	  * lightness. Given a hex color, a direction and
	  * a modification value, it gives back the hex
	  * code for the new color.
	  *
	  * The direction should be '+' or '-' and the
	  * modification value should be a double digit
	  * number translating to a color from
	  * 000000 - ffffff (00-ff)
	  *
	  * @param string $color The color value to use
	  * @param srting $direction The direction of the color change
	  * @param string $modify The amount of modification
	  *
	  * @return string $shadow The shadow CSS code
	  *
	  */
	function lightness( $color, $direction, $modify ) {

		if( substr( $color, 0, 1 ) == "#" ) {
			$color = substr( $color, 1 );
		}

		$rgb = str_split( $color, 2 );
		$modify = hexdec( $modify );

		foreach( $rgb as $value ) {
			$newcolor_value = "";
			$newcolor_value = ( $direction == "+" ) ? hexdec( $value ) + $modify : hexdec( $value ) - $modify;
			if( $newcolor_value < 0 ) {
				$newcolor_value = "00";
			}
			elseif( $newcolor_value > 0 AND $newcolor_value < 16 ) {
				$newcolor_value = "0" .dechex( $newcolor_value );
			}
			elseif( $newcolor_value > 255 ) {
				$newcolor_value	= "ff";
			}
			else {
				$newcolor_value = dechex( $newcolor_value );
			}

			$newcolor[] = $newcolor_value;
		}

		return '#' . implode( $newcolor );

	}

}


?>