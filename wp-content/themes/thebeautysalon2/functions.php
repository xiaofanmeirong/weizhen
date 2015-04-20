<?php
/** Theme Functions File
  *
  * @package The Vacation Rental
  *
  **/


include( 'framework/init.php' );
$framework = new EB_Framework( $eb_config, $eb_defaults );
$eb_widgets = new EB_Widgets( $framework );
$blueprint = new EB_Blueprint( $framework );
$products = new EB_Products( $framework );

if ( ! isset( $content_width ) ) $content_width = 1140;

add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

	class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu{
		function start_lvl(&$output, $depth){
			$indent = str_repeat("\t", $depth);
		}

		function end_lvl(&$output, $depth){
			$indent = str_repeat("\t", $depth);
		}

		function start_el(&$output, $item, $depth, $args){
			global $framework;
 			$selected = ( $framework->get_current_url() == $item->url ) ? 'selected="selected"' : '';
			$item->title = str_repeat("&nbsp;", $depth * 4).$item->title;
			parent::start_el($output, $item, $depth, $args);
			$output = str_replace('<li', '<option ' . $selected . ' value="' . $item->url . '"', $output);
		}

		function end_el(&$output, $item, $depth){
			$output .= "</option>\n";
		}
	}

function tbs_add_mime_types($mime_types){
	$mime_types['ico'] = 'image/x-icon';
	return $mime_types;
}
add_filter('upload_mimes', 'tbs_add_mime_types', 1, 1);

function tbs_get_postlist_array() {
	$pages = get_posts( 'post_type=eb_product_list&post_status=publish' );
	$options = array();
	foreach( $pages as $page ) {
		$options[$page->post_title] = $page->ID;
	}

	return $options;
}

function tbs_get_page_title() {
	global $framework, $post;
	if( is_category() ) {
		$title = $framework->options['category_page_title'];
		$title = str_replace( '%s', single_cat_title( '', false ), $title );
	}
	elseif( is_tag() ) {
		$title = $framework->options['tag_page_title'];
		$title = str_replace( '%s', single_cat_title( '', false ), $title );
	}
	elseif( is_author() ) {
		$title = $framework->options['author_page_title'];
		$title = str_replace( '%s', get_the_author(), $title );
	}
	elseif( is_day() ) {
		$title = $framework->options['daily_page_title'];
		$title = str_replace( '%s', get_the_date(), $title );
	}
	elseif( is_month() ) {
		$title = $framework->options['monthly_page_title'];
		$title = str_replace( '%s', get_the_date( 'F Y' ), $title );
	}
	elseif( is_year() ) {
		$title = $framework->options['yearly_page_title'];
		$title = str_replace( '%s', get_the_date( 'Y' ), $title );
	}
	elseif( is_search() ) {
		$title = $framework->options['search_page_title'];
		$title = str_replace( '%s', get_search_query(), $title );
	}
	elseif( is_home() ) {
		$title = $framework->options['home_page_title'];
	}
	elseif( is_singular( 'post' ) ) {
		$title = $framework->options['post_titles'];
	}
	elseif( is_singular( 'eb_product' ) ) {
		$title = $framework->options['product_titles'];
	}
	elseif( is_singular( array( 'page', 'eb_product_list' ) ) ) {
		$title = $post->post_title;
	}
	else {
		$title = 'Archives';
	}

	return $title;

}


function tbs_get_breadcrumbs() {
	global $post;

	if( !is_home() ) {
		$links[] = '<a href="'.get_bloginfo('url') .'">Home</a>';

	if( $post->post_parent != 0 ) {
		$links[] = '<a href="' . get_permalink( $post->post_parent ) . '">' . get_the_title( $post->post_parent ) . '</a>';
	}

	$links = implode( ' / ', $links ) . ' /';

	return $links;

	}

}


function tbs_docs() {
?>
<div class='documentation_video'>
<iframe src="http://player.vimeo.com/video/55473220?byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="500" height="388" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>

<div class='documentation_video'>
<iframe src="http://player.vimeo.com/video/56055731?byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="500" height="388" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>



<?php

}



function tbs_readme() {

$myFile = get_template_directory() . "/readme.txt";
$fh = fopen($myFile, 'r');
$data = fread($fh, filesize($myFile));
fclose($fh);


$data = preg_replace( '/###(.*)/', '<h4>$1</h4>' , $data );
$data = preg_replace( '/##(.*)/', '<h3>$1</h3>' , $data );
$data = preg_replace( '/#(.*)/', '<h2>$1</h2>' , $data );

$data = wpautop( $data );

echo $data;

}





	function tvr_dropdown_pages() {
		global $framework;
		$dropdown = wp_dropdown_pages( 'hierarchical=1&echo=0' );
		preg_match_all("/value=\"([0-9]*)\"/", $dropdown, $matches );
		foreach( $matches[1] as $key => $id ) {
			$url = get_permalink( $id );
			$selected = ( $url == $framework->get_current_url() ) ? 'selected="selected"' : '';
			$dropdown = str_replace( $matches[0][$key], $selected . ' value="' . $url . '"', $dropdown );
		}
		echo $dropdown;
	}




add_action( 'wp_enqueue_scripts', 'tbs_theme_scripts' );
function tbs_theme_scripts() {
	wp_register_script( 'thebeautysalon', get_template_directory_uri() . '/js/thebeautysalon.js', array( 'jquery' ) );
	wp_register_script( 'jquery-isotope', get_template_directory_uri() . '/js/vendor/jquery.isotope.min.js', array( 'jquery' ) );
	wp_register_script( 'jquery-flexslider', get_template_directory_uri() . '/js/vendor/jquery.flexslider.min.js', array( 'jquery' ) );
	wp_register_script( 'jquery-uniform', get_template_directory_uri() . '/js/vendor/jquery.uniform.min.js', array( 'jquery' ) );
	wp_register_script( 'jquery-scrollto', get_template_directory_uri() . '/js/vendor/jquery.scrollTo.min.js', array( 'jquery' ) );
	wp_register_script( 'product_list', get_template_directory_uri() . '/js/product_list.min.js', array( 'jquery' ) );
	wp_register_script( 'tiles', get_template_directory_uri() . '/js/tiles.min.js', array( 'jquery' ) );


    wp_localize_script( 'thebeautysalon', 'tbs', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );


    wp_enqueue_script( 'jquery-ui-slider' );
    wp_enqueue_script( 'jquery-uniform' );
    wp_enqueue_script( 'jquery-scrollto' );
    wp_enqueue_script( 'jquery-ui-datepicker' );
    wp_enqueue_script( 'jquery-isotope' );
    wp_enqueue_script( 'jquery-flexslider' );
    wp_enqueue_script( 'thebeautysalon' );
    wp_enqueue_script( 'product_list' );
    wp_enqueue_script( 'tiles' );


}


add_filter( 'get_avatar', 'tbs_get_avatar' );
function tbs_get_avatar( $avatar ) {
	$avatar = preg_replace( '/class=(["|\'])/', 'class=$1round ', $avatar );
	return $avatar;
}



add_filter( 'blueprint_pagination', 'tbs_pagination_arrow' );

function  tbs_pagination_arrow( $html ) {
	$html = str_replace( '>next<', '><span class="arrow-white-right"></span><', $html );
	$html = str_replace( '>previous<', '><span class="arrow-white-left"></span><', $html );
	return $html;
}


	function tbs_show_comment( $comment, $args, $depth ) {
		global $blueprint, $framework;
		$indent_side = ( $blueprint->get_sidebar_position() == 'right' ) ? 'left' : 'right';

		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
		?>
			<li class="comment pingback">
				<p>Pingback: <?php comment_author_link(); ?><?php edit_comment_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
		<?php
			break;
			default :
		?>
			<li <?php comment_class( 'comment' ); ?> id="comment-<?php comment_ID(); ?>">
				<article class='comment-inner indent <?php echo $indent_side ?>'>

					<div class='comment-image <?php echo $indent_side ?>'>
						<div class='image'>
							<?php echo get_avatar( $comment, 100 ) ?>
						</div>
					</div>

					<div class='comment-content <?php echo $blueprint->get_sidebar_position() ?>'>
						<header>
							<span class='comment-author'><?php comment_author_link() ?></span>
							<span class='comment-time'><?php comment_time( 'F d Y \a\t H:i a' ) ?></span>
							<span class='comment-reply'>
								<?php
									comment_reply_link( array_merge( $args, array(
										'reply_text' => 'Reply',
										'depth' => $depth,
										'max_depth' => $args['max_depth']
										)));
								?>
							</span>
						</header>

						<div class='content'>
							<?php comment_text() ?>
						</div>
					</div>
				</article>
		<?php
		break;
		endswitch;
	}


	add_action('wp_footer', 'tbs_add_analytics');

	function tbs_add_analytics() {
		global $framework;
		$analytics = $framework->options['analytics'];
		echo $analytics;
	}


add_action( 'wp_head', 'rf_google_maps_api' );
function rf_google_maps_api() {
	global $framework;
	$api_key = $framework->options['google_maps_api_key'];
	$api_key = ( empty( $api_key ) ) ? 'AIzaSyBMuUz8oeTCH94o0SsI_swMxV6nzffSVco' : $api_key;
	echo '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=' . $api_key . '&sensor=false"></script>';
}




?>