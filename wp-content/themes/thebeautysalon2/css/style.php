<?php
	global $framework;
	$styler = new EB_Styler();
	$primary_color = $framework->options['primary_color'];

	// Determine Images Used More Than Once
	$site_content_background_image = $framework->options[ 'site_content_background_image' ];
	if( !empty( $site_content_background_image ) ) {
	$site_content_background_image = ( is_numeric( $site_content_background_image ) )
		? wp_get_attachment_image_src( $site_content_background_image, 'full' )
		: array( $site_content_background_image );
	}

	$background_attachment = $framework->options['background_attachment'];
	$background_attachment = ( empty($background_attachment) ) ? 'scroll' : $background_attachment;
?>
html {
	font-family: <?php echo $framework->get_font_display( 'body_font' ) ?>;
	background-color: <?php echo $framework->options['site_content_background_color'] ?>;
	<?php
		if( !empty( $site_content_background_image[0] ) ) :
	?>
	background-image: url( <?php echo $site_content_background_image[0] ?> );
	background-attachment: <?php echo $background_attachment ?>;
	<?php endif ?>
	<?php if( $framework->options['tile_background'] == 'no' OR empty( $framework->options['tile_background'] ) ) : ?>
		background-repeat: no-repeat;
		background-position:center top;
	<?php endif ?>
}

.button input {
	font-family: <?php echo $framework->get_font_display( 'body_font' ) ?>;
	color: <?php echo $framework->defaults['shortcode_defaults']['button']['color']  ?>
}

h1,h2,h3,h4,h5,h6, .page-title {
	font-family: <?php echo $framework->get_font_display( 'heading_font' ) ?>;
}

.content h1 {
	color: <?php echo $primary_color ?>;
}

.product-list .next, .product-list .prev {
	background-color: <?php echo $primary_color ?>
}

.blueprint-header a:hover{
	color: <?php echo $primary_color ?>
}

.product-list .next:hover, .product-list .prev:hover {
	background-color: <?php echo $styler->lightness( $primary_color, '+', '22') ?>
}


.post-date.round {
	font-family: <?php echo $framework->get_font_display( 'heading_font' ) ?>;
}

#reply-title {
	color: <?php echo $primary_color ?>
}

input[type=submit], input.submit, input#submit {
	color: <?php echo $primary_color ?>
}


#site-footer {
	background-color: <?php echo $framework->options['site_footer_background_color'] ?>;
	color: <?php echo $framework->options['site_footer_text_color'] ?>
}

#site-footer a{
	color: <?php echo $framework->options['site_footer_link_color'] ?>
}


.content a, .comments a {
	color: <?php echo $primary_color ?>
}

.primary {
	color: <?php echo $primary_color ?>;
	text-decoration:none;
}

a.primary:hover {
	text-decoration:underline;
}

.primaries a {
	color: <?php echo $primary_color ?>;
	text-decoration:none;
}

.primaries a:hover {
	text-decoration:underline;
}

.read-more-arrow {
	background-color: <?php echo $primary_color ?>;
}

.pagination .page-numbers {
	background-color: <?php echo $primary_color ?>;
}


.widget.widget_calendar a,
.widget.widget_rss a.rsswidget,
.read-more,
.gallery-filter a.current
{
	color: <?php echo $primary_color ?>;
	text-decoration:none;

}

.widget.widget_calendar a:hover,
.widget.widget_rss a.rsswidget:hover,
.read-more:hover,
.gallery-filter a.current:hover,
 {
	text-decoration:underline;
}


.widget.widget_tag_cloud a:hover {
	color: <?php echo $primary_color ?>;
}

.hoverlink {
	<?php
		$background_image = $framework->options['hoverlink'];
		if( !empty( $background_image ) ) :
		$image = ( is_numeric( $background_image ) )
			? wp_get_attachment_image_src( $background_image )
			: array( $background_image );
	?>
	background-image: url( <?php echo $image[0] ?> );
	<?php endif ?>
}

#site-header .navigation-menu > div > ul > li:hover .triangle-down,
#site-header .navigation-menu > div > ul > li.current_page_item .triangle-down,
#site-header .navigation-menu > div > ul > li.current_page_parent .triangle-down,
#site-header .navigation-menu > div > ul > li.current_page_ancestor .triangle-down,
#site-header .navigation-menu > div > ul > li.current-menu-item .triangle-down,
#site-header .navigation-menu > div > ul > li.current-menu-parent .triangle-down,
#site-header .navigation-menu > div > ul > li.current-menu-ancestor .triangle-down
 {
	border-color: <?php echo $primary_color ?> transparent transparent transparent;
}


.navigation-menu {
	<?php
		$push = $framework->options['site_header_logo_height'];
		$push = ( $push - 14 ) /2 ;
	?>
	position:Relative;
	top: <?php echo $push ?>px;
}

#site-header .navigation .triangle-up {
	<?php
		$push = $framework->options['site_header_logo_height'];
		$base = $push + 38 - 42;
		$space = $base - ( ($push ) / 2 ) -4;
	?>
	bottom: -<?php echo $space ?>px;
}


.widget ul li a:hover {
	color: <?php echo $primary_color ?>
}

li.current-menu-item > a, li.current_page_item > a {
	color: <?php echo $primary_color ?> !important
}

li.current-menu-parent >a , li.current-menu-ancestor > a, li.current_page_parent > a, li.current_page_ancestor > a {
	color: <?php echo $primary_color ?> !important
}

li.current-cat > a {
	color: <?php echo $primary_color ?> !important
}

#site-header .navigation-menu > div > ul > li > a:hover,
#site-header .navigation-menu > div > ul > li:hover > a {
	color: <?php echo $primary_color ?>;
}

.widget #recentcomments li a{
	color: <?php echo $primary_color ?>;
	text-decoration:none;
}
.widget #recentcomments li a:hover {
	text-decoration:underline
}
.widget #recentcomments li a.url {
	color:inherit;
}




<?php
	$site_sidebar_background_color = $framework->options[ 'site_sidebar_background_color' ];
	$site_sidebar_list_separator_color = $framework->options[ 'site_sidebar_list_separator_color' ];
	$site_sidebar_heading_color = $framework->options[ 'site_sidebar_heading_color' ];
	$site_sidebar_text_color = $framework->options[ 'site_sidebar_text_color' ];
	$site_sidebar_link_color = $framework->options[ 'site_sidebar_link_color' ];
?>

#blueprint-sidebar {
	background-color: <?php echo $site_sidebar_background_color ?>
}
.widget ul li {
	border-color: <?php echo $site_sidebar_list_separator_color ?>
}

.widget .widget-title h1.title-text {
	color: <?php echo $site_sidebar_heading_color ?>
}

.widget {
	color: <?php echo $site_sidebar_text_color ?>
}

.widget a, .widget ul li a {
	color: <?php echo $site_sidebar_text_color ?>
}


.post-date.round {
	background:<?php echo $primary_color ?>
}