<!doctype html>
<html>

<!-- begin head -->
<head>

<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!-- begin meta -->
<meta charset="utf-8"/>
<meta name="viewport" content="user-scalable=no, maximum-scale=1,  width=device-width, initial-scale=1"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="keywords" content="<?php echo of_get_option('metakeywords'); ?>" />
<meta name="description" content="<?php echo of_get_option('metadescription'); ?>" />
<!-- end meta -->

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- stylesheet -->
<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
<!-- stylesheet -->

<!-- wp_head -->
<?php wp_head(); ?>
<!-- wp_head -->

<?php if(of_get_option('customtypography') == '1') { ?>
<!-- custom typography-->

<?php if(of_get_option('headingfontlink') != '') { ?>
<?php echo of_get_option('headingfontlink');?>
<?php } ?>
<?php if(of_get_option('bodyfontlink') != '') { ?>
<?php echo of_get_option('bodyfontlink');?>
<?php } ?>

<?php load_template( get_template_directory() . '/custom.typography.css.php' );?>

<!-- custom typography -->

<?php } ?>

</head>
<!-- end head -->

	<body <?php body_class(); ?> lang="en">

	<!-- begin container -->
	<div class="container">

		<!-- begin header -->
		<header>

			<h1 class="title">

				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
					<?php if(of_get_option('clogo')) : echo '<img src="'.of_get_option('clogo').'" alt="'.get_bloginfo('name').'" />'; else: echo ''.of_get_option('clogo_text').''; endif; ?>

				</a>

			</h1>

			<span class="description"><?php bloginfo('description'); ?></span>

			<!-- begin nav -->
			<nav>

			<?php wp_nav_menu('theme_location=main-menu&container=&container_class=menu&menu_id=main&menu_class=main-nav sf-menu&link_before=&link_after=&fallback_cb=false'); ?>

			</nav>
			<!-- end nav -->

			<div class="clear"></div>

		</header>
		<!-- end header -->

