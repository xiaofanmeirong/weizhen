<?php
/*********************************************************************************************

Initalize Framework Settings

*********************************************************************************************/
if ( !function_exists( 'optionsframework_init' ) ) {

define('OPTIONS_FRAMEWORK_URL',  get_template_directory_uri() . '/admin/');
define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory() . '/admin/');
define('OPTIONS_DIRECTORY', OPTIONS_FRAMEWORK_DIRECTORY . '/options/');

//Shortname prefix for theme options and custom meta fields
define('SN', 'frames_');

require_once (OPTIONS_FRAMEWORK_DIRECTORY . 'options-framework.php');
require_once (OPTIONS_FRAMEWORK_DIRECTORY . 'inc/contentvalidation.php');
require_once (OPTIONS_FRAMEWORK_DIRECTORY . 'inc/customfunctions.php');
require_once (OPTIONS_FRAMEWORK_DIRECTORY . 'inc/pagination.php');
require_once (OPTIONS_FRAMEWORK_DIRECTORY . 'inc/widgets.php');
require_once (OPTIONS_FRAMEWORK_DIRECTORY . 'inc/wphooks.php');
}

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
    $optionsframework_settings = get_option('optionsframework');
    // Gets the unique option id
    $option_name = $optionsframework_settings['id'];
    if ( get_option($option_name) ) {
        $options = get_option($option_name);
    }
    if ( isset($options[$name]) ) {
        return $options[SN.$name];
    } else {
        return $default;
    }
}
}

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
    $theme    = of_get_theme_info();
    $themeName = $theme['Name'];


	$themeName = preg_replace("/\W/", "", strtolower($themeName) );


	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themeName;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {
	$post_layout = array(
    "pexcerpt" => "Thumbnail with excerpt",
    "pcontent" => "Full content"
    );

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	$options_categories[''] = __('All Categories', 'site5framework');
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = __('Select a page:', 'site5framework');
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/admin/images';
	$blogpath =  get_stylesheet_directory_uri() . '/';

	$options = array();


/*********************************************************************************************

Initalize Theme Options

*********************************************************************************************/
	if ( !function_exists( 'optionsframeworks_init' ) ) {

		require( OPTIONS_DIRECTORY . 'general.php' );
		require( OPTIONS_DIRECTORY . 'typography.php' );
		require( OPTIONS_DIRECTORY . 'social.php');
		require( OPTIONS_DIRECTORY . 'contact.php' );
		require( OPTIONS_DIRECTORY . 'meta.php' );
		require( OPTIONS_DIRECTORY . 'footer.php' );
	}

	return $options;
}

/*********************************************************************************************

Upload Mime-types

*********************************************************************************************/
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
 $existing_mimes['ico'] = 'application/x-ico';
 $existing_mimes['vcf'] = 'text/x-vcard';

 return $existing_mimes;
}
?>