<?php

/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
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
		return $options[$name];
	} else {
		return $default;
	}
}
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');


// my code statts here
function register_my_menu() {
   register_nav_menu('header-menu',__( 'Menu' ));
}
add_action( 'init', 'register_my_menu' );


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Home left sidebar',
		'id'            => 'home_left_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Home middle top first',
		'id'            => 'home_middle_top_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Home middle top second',
		'id'            => 'home_middle_top_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Home middle bottom first',
		'id'            => 'home_middle_bottom_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Home middle bottom second',
		'id'            => 'home_middle_bottom_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//my code ends here



function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>

<?php
}

/*
 * This is an example of how to override a default filter
 * for 'text' sanitization and use a different one.
 */

/*

add_action('admin_init','optionscheck_change_santiziation', 100);

function optionscheck_change_santiziation() {
	remove_filter( 'of_sanitize_text', 'sanitize_text_field' );
	add_filter( 'of_sanitize_text', 'of_sanitize_text_field' );
}

function of_sanitize_text_field($input) {
	global $allowedtags;
	$output = wp_kses( $input, $allowedtags);
	return $output;
}

*/

/*
 * This is an example of how to override the default location and name of options.php
 * In this example it has been renamed options-renamed.php and moved into the folder extensions
 */

/*

add_filter('options_framework_location','options_framework_location_override');

function options_framework_location_override() {
	return array('/extensions/options-renamed.php');
}

*/

/*
 * Here is an example for how to change the menu title name and slug
 */

/*

function optionscheck_options_menu_params( $menu ) {
	$menu['page_title'] = __( 'Hello Options', 'textdomain');
	$menu['menu_title'] = __( 'Hello Options', 'textdomain');
	$menu['menu_slug'] = 'hello-options';
	return $menu;
}

add_filter( 'optionsframework_menu', 'optionscheck_options_menu_params' );

*/
