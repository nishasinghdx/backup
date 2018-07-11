<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	
	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$test_array = array("simpleFade" => "simpleFade","random" => "random","curtainSliceLeft" => "curtainSliceLeft","blindCurtainTopLeft" => "blindCurtainTopLeft","blindCurtainBottomLeft" => "blindCurtainBottomLeft","stampede" => "stampede","mosaic" => "mosaic","mosaicReverse" => "mosaicReverse","mosaicRandom" => "mosaicRandom","mosaicSpiral" => "mosaicSpiral","mosaicSpiralReverse" => "mosaicSpiralReverse","topLeftBottomRight" => "topLeftBottomRight","bottomRightTopLeft" => "bottomRightTopLeft","bottomLeftTopRight" => "bottomLeftTopRight");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
/*
	// Pull all the products into an array
	$options_posts = array();  
	$options_posts_obj = get_posts(array('post_type'=> 'products', 'post_status'=> 'publish', 'suppress_filters' => false, 'posts_per_page'=>-1));
	$options_posts[''] = 'Select a department:';
	foreach ($options_posts_obj as $post) {
    	$options_posts[$post->ID] = $post->post_title;
	}
*/
			
	
	$genre_tax = array();
	$genre_args = array( 'hide_empty' => '0' );
	$genre_terms = get_terms('department', $genre_args);
	
	foreach ( $genre_terms as $genre_term) {
	    $genre_tax[$genre_term->slug] = $genre_term->slug;
	}
	$genre_tax_tmp = array_unshift($genre_tax, "Select a department:");
	
		
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_bloginfo('stylesheet_directory') . '/images/';
		
	$options = array();
	
	
	
						
	$options[] = array( "name" => "Banner Settings",
						"type" => "heading");		
						
	
	$options[] = array( "name" => "Select slider option",
						"desc" => "",
						"id" => "radio1",
						"type" => "radio",
						"options" => $test_array);
						
						
	$options[] = array( "name" => "Stay",
						"desc" => "milliseconds between the end of the sliding effect and the start of the nex one, by drfault (7000)",
						"id" => "stime",
						"type" => "text");	
						
	$options[] = array( "name" => "Transition time",
					'desc' => __('milliseconds between the end of the sliding effect and the start of the nex one, by drfault (7000)', 'options_check'),
						"id" => "sTransition",
						"type" => "text");	

	
						
	$options[] = array(
			'name' => __('Banner1', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'w2f_banner1',
			'type' => 'upload');	
			
	
	$options[] = array( "name" => "Banner Alt text",
						"desc" => "",
						"id" => "w2f_Alt1",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
	
	
	
	
	
	$options[] = array( "name" => "Banner white text",
						"desc" => "",
						"id" => "w2f_txts1",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	


	
	$options[] = array( "name" => "Banner  black text",
						"desc" => "",
						"id" => "w2f_txtf1",
						"std" => "Cheap reliable web hosting from WebHostingHub.com",
						"type" => "text");		
						
						
						
	$options[] = array( "name" => "Banner  link ",
						"desc" => "",
						"id" => "w2f_lab1",
						"std" => "Web Hosting Hub - Cheap reliable web hosting.",
						"type" => "text");						
						

	$options[] = array( "name" => "banner discraption",
						"desc" => "",
						"id" => "w2f_des1",
						"std" => "",
						"type" => "textarea");	





	$options[] = array(	"type" => "break");
	
						
	$options[] = array(
			'name' => __('Banner2', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'w2f_banner2',
			'type' => 'upload');						
						
	
	$options[] = array( "name" => "Banner Alt text",
						"desc" => "",
						"id" => "w2f_Alt2",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
						
						
	$options[] = array( "name" => "Banner white text",
						"desc" => "",
						"id" => "w2f_txts2",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	





	
	$options[] = array( "name" => "Banner  black text",
						"desc" => "",
						"id" => "w2f_txtf2",
						"std" => "Cheap reliable web hosting from WebHostingHub.com",
						"type" => "text");		
						
						
						
	$options[] = array( "name" => "Banner  link ",
						"desc" => "",
						"id" => "w2f_lab2",
						"std" => "Web Hosting Hub - Cheap reliable web hosting.",
						"type" => "text");						
						

	$options[] = array( "name" => "banner discraption",
						"desc" => "",
						"id" => "w2f_des2",
						"std" => "",
						"type" => "textarea");	
										
	$options[] = array(	"type" => "break");								
																
	$options[] = array(
				'name' => __('Banner 3', 'options_check'),
				'desc' => __('', 'options_check'),
				'id' => 'w2f_banner3',
				'type' => 'upload');		

				
				$options[] = array( "name" => "Banner Alt text",
						"desc" => "",
						"id" => "w2f_Alt3",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
				
				
	$options[] = array( "name" => "Banner white text",
						"desc" => "",
						"id" => "w2f_txts3",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");				
				
				
				
							
	$options[] = array( "name" => "Banner  black text",
						"desc" => "",
						"id" => "w2f_txtf3",
						"std" => "Cheap reliable web hosting from WebHostingHub.com",
						"type" => "text");		
						
						
						
	$options[] = array( "name" => "Banner  link ",
						"desc" => "",
						"id" => "w2f_lab3",
						"std" => "Web Hosting Hub - Cheap reliable web hosting.",
						"type" => "text");						
						

	$options[] = array( "name" => "banner discraption",
						"desc" => "",
						"id" => "w2f_des3",
						"std" => "",
						"type" => "textarea");	
								
														
	$options[] = array(	"type" => "break");																			
	$options[] = array(
			'name' => __('Banner 4', 'options_check'),
			'desc' => __('.', 'options_check'),
			'id' => 'w2f_banner4',
			'type' => 'upload');		
	
	$options[] = array( "name" => "Banner Alt text",
						"desc" => "",
						"id" => "w2f_Alt4",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
	
	
	$options[] = array( "name" => "Banner white text",
						"desc" => "",
						"id" => "w2f_txts4",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
	
	
							
	$options[] = array( "name" => "Banner  black text",
						"desc" => "",
						"id" => "w2f_txtf4",
						"std" => "Cheap reliable web hosting from WebHostingHub.com",
						"type" => "text");		
						
						
						
	$options[] = array( "name" => "Banner  link ",
						"desc" => "",
						"id" => "w2f_lab4",
						"std" => "Web Hosting Hub - Cheap reliable web hosting.",
						"type" => "text");						
						

	$options[] = array( "name" => "banner discraption",
						"desc" => "",
						"id" => "w2f_des4",
						"std" => "",
						"type" => "textarea");	

	$options[] = array(	"type" => "break");		
	$options[] = array(
			'name' => __('Banner 5 ', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'w2f_banner5',
			'type' => 'upload');		
	
	
	$options[] = array( "name" => "Banner Alt text",
						"desc" => "",
						"id" => "w2f_Alt5",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
						
						
						
	$options[] = array( "name" => "Banner white text",
						"desc" => "",
						"id" => "w2f_txts5",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
	
	
	
	
	
	$options[] = array( "name" => "Banner  black text",
						"desc" => "",
						"id" => "w2f_txtf5",
						"std" => "Cheap reliable web hosting from WebHostingHub.com",
						"type" => "text");		
						
						
						
	$options[] = array( "name" => "Banner  link ",
						"desc" => "",
						"id" => "w2f_lab5",
						"std" => "Web Hosting Hub - Cheap reliable web hosting.",
						"type" => "text");						
						

	$options[] = array( "name" => "banner discraption",
						"desc" => "",
						"id" => "w2f_des5",
						"std" => "",
						"type" => "textarea");	


						
	$options[] = array(	"type" => "break");		
	$options[] = array(
			'name' => __('Banner 6', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'w2f_banner6',
			'type' => 'upload');	
	
	
	$options[] = array( "name" => "Banner Alt text",
						"desc" => "",
						"id" => "w2f_Alt6",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
	
	
	$options[] = array( "name" => "Banner white text",
						"desc" => "",
						"id" => "w2f_txts6",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");	
	
	
	
			
	$options[] = array( "name" => "Banner  black text",
						"desc" => "",
						"id" => "w2f_txtf6",
						"std" => "Cheap reliable web hosting from WebHostingHub.com",
						"type" => "text");		
						
						
						
	$options[] = array( "name" => "Banner  link ",
						"desc" => "",
						"id" => "w2f_lab6",
						"std" => "Web Hosting Hub - Cheap reliable web hosting.",
						"type" => "text");						
						

	$options[] = array( "name" => "banner discraption",
						"desc" => "",
						"id" => "w2f_des6", 
						"std" => "",
						"type" => "textarea");	


	$options[] = array(	"type" => "break");		
	$options[] = array(
			'name' => __('Banner7', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'w2f_banner7',
			'type' => 'upload');		

			
	$options[] = array( "name" => "Banner Alt text",
						"desc" => "",
						"id" => "w2f_Alt7",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");			
			
			
	$options[] = array( "name" => "Banner white text",
						"desc" => "",
						"id" => "w2f_txts7",
						"std" => "http://www.webhostinghub.com/",
						"type" => "text");			
			
			
	$options[] = array( "name" => "Banner  black text",
						"desc" => "",
						"id" => "w2f_txtf7",
						"std" => "Cheap reliable web hosting from WebHostingHub.com",
						"type" => "text");		
						
					
						
	$options[] = array( "name" => "Banner  link ",
						"desc" => "",
						"id" => "w2f_lab7",
						"std" => "Web Hosting Hub - Cheap reliable web hosting.",
						"type" => "text");						
						

	$options[] = array( "name" => "banner discraption",
						"desc" => "",
						"id" => "w2f_des7",
						"std" => "",
						"type" => "textarea");	


						
						
	$options[] = array( "name" => "Services",
						"type" => "heading");	


	$options[] = array( "name" => "Title",
						"desc" => "",
						"id" => "title1",
						"std" => "",
						"type" => "text");	
	
	$options[] = array( "name" => "Font-Awesome cheat code",
						"desc" => 'To veiw cheat codes  <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank"> click here </a>.please write only last 4 digit code Eg(f001) ',
						"id" => "icon1",
						"std" => "",
						"type" => "text");	


	$options[] = array( "name" => "Read more URL",
						"desc" => '',
						"id" => "url1",
						"std" => "",
						"type" => "text");	
	
	
	
	$options[] = array( "name" => "Description",
						"desc" => "",
						"id" => "desc1",
						"std" => "",
						"type" => "textarea");	
	
	$options[] = array(	"type" => "break");


	$options[] = array( "name" => "Title",
						"desc" => "",
						"id" => "title2",
						"std" => "",
						"type" => "text");	
	
	$options[] = array( "name" => "Font-Awesome cheat code",
						"desc" => '',
						"id" => "icon2",
						"std" => "",
						"type" => "text");	


	$options[] = array( "name" => "Read more URL",
						"desc" => '',
						"id" => "url2",
						"std" => "",
						"type" => "text");	
	
	
	
	$options[] = array( "name" => "Description",
						"desc" => "",
						"id" => "desc2",
						"std" => "",
						"type" => "textarea");	
	
	$options[] = array(	"type" => "break");
	
	
	
		$options[] = array( "name" => "Title",
						"desc" => "",
						"id" => "title3",
						"std" => "",
						"type" => "text");	
	
	$options[] = array( "name" => "Font-Awesome cheat code",
						"desc" => '',
						"id" => "icon3",
						"std" => "",
						"type" => "text");	


	$options[] = array( "name" => "Read more URL",
						"desc" => '',
						"id" => "url3",
						"std" => "",
						"type" => "text");	
	
	
	
	$options[] = array( "name" => "Description",
						"desc" => "",
						"id" => "desc3",
						"std" => "",
						"type" => "textarea");	
	
	$options[] = array(	"type" => "break");
	
	
		$options[] = array( "name" => "Title",
						"desc" => "",
						"id" => "title4",
						"std" => "",
						"type" => "text");	
	
	$options[] = array( "name" => "Font-Awesome cheat code",
						"desc" => '',
						"id" => "icon4",
						"std" => "",
						"type" => "text");	


	$options[] = array( "name" => "Read more URL",
						"desc" => '',
						"id" => "url4",
						"std" => "",
						"type" => "text");	
	
	
	
	$options[] = array( "name" => "Description",
						"desc" => "",
						"id" => "desc4",
						"std" => "",
						"type" => "textarea");	
	
	$options[] = array(	"type" => "break");



	
	
	$options[] = array( "name" => "Header - Footer",
						"type" => "heading");		
						

	$options[] = array( "name" => "Admin email",
						"desc" => '',
						"id" => "email",
						"std" => "",
						"type" => "text");	
						
						
	$options[] = array( "name" => "Projects Budget",
						"desc" => '',
						"id" => "budget",
						"std" => "",
						"type" => "text");						
						
						
						
						
						
						
						
	$options[] = array( "name" => "Phone number",
						"desc" => '',
						"id" => "number",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => "Facebook Link",
						"desc" => '',
						"id" => "facebook",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => "Twitter Link",
						"desc" => '',
						"id" => "twitter",
						"std" => "",
						"type" => "text");	
							
    $options[] = array( "name" => "Google Plus Link",
						"desc" => '',
						"id" => "google",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => "Pinterest Link",
						"desc" => '',
						"id" => "pinterest",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => "Dribbble Link",
						"desc" => '',
						"id" => "dribbble",
						"std" => "",
						"type" => "text");	

	
	$options[] = array( "name" => "Youtube Link",
						"desc" => '',
						"id" => "vimeo",
						"std" => "",
						"type" => "text");	
	
	
	
		$options[] = array( "name" => "Recent Work URL",
						"desc" => '',
						"id" => "rurl",
						"std" => "",
						"type" => "text");	
	
	








	
	$options[] = array( "name" => "bottom banner",
						"desc" => '',
						"id" => "bbanner",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => "copyright statement",
						"desc" => '',
						"id" => "copyright",
						"std" => "",
						"type" => "text");
	
		$options[] = array(
			'name' => __('Logo', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alogo',
		'type' => 'upload');	
	
	
	
	
	
	
	
	$options[] = array( "name" => "Address 1",
						"desc" => '',
						"id" => "address1",
						"std" => "",
						"type" => "textarea");	
						
						
						
	
	$options[] = array( "name" => "Address 2",
						"desc" => '',
						"id" => "address2",
						"std" => "",
						"type" => "textarea");						
						
						
						
						
	
	$options[] = array( "name" => "Address 3",
						"desc" => '',
						"id" => "address3",
						"std" => "",
						"type" => "textarea");	

						
						
						
						
						
						
	$options[] = array( "name" => "Join Us",
						"desc" => '',
						"id" => "join",
						"std" => "",
						"type" => "text");

						
	$options[] = array( "name" => "Clients",
						"type" => "heading");		
											
	$options[] = array(
			'name' => __('Heading', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clientheading',
			'type' => 'text');				
	
	
	
	$options[] = array(
			'name' => __('client 1', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat0',
			'type' => 'upload');
			
			
		$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt1',
			'type' => 'text');		
			
			
			
			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink1',
			'type' => 'text');
			
	$options[] = array(
			'name' => __('client 2', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat1',
			'type' => 'upload');	
			
			
			
			
		$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt2',
			'type' => 'text');			
			
			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink2',
			'type' => 'text');
			
	$options[] = array(
			'name' => __('client 3', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat2',
			'type' => 'upload');	

			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt3',
			'type' => 'text');			
			
			
			
			
			
			
			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink3',
			'type' => 'text');
			
	$options[] = array(
			'name' => __('client 4', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat3',
			'type' => 'upload');	

			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt4',
			'type' => 'text');			
			
			
			
			
			
			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink4',
			'type' => 'text');
			
	$options[] = array(
			'name' => __('client 5', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat4',
			'type' => 'upload');	

			
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt5',
			'type' => 'text');			
			
			
			
			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink5',
			'type' => 'text');
			
	$options[] = array(
			'name' => __('client 6', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat5',
			'type' => 'upload');	
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt6',
			'type' => 'text');	

			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink6',
			'type' => 'text');
			
			
			
			
			
			
	$options[] = array(
			'name' => __('client 7', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat6',
			'type' => 'upload');	
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt7',
			'type' => 'text');	

			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink7',
			'type' => 'text');
	



	$options[] = array(
			'name' => __('client 8', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat7',
			'type' => 'upload');	
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt8',
			'type' => 'text');	

			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink8',
			'type' => 'text');
	


	$options[] = array(
			'name' => __('client 9', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat8',
			'type' => 'upload');	
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt9',
			'type' => 'text');	


			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink9',
			'type' => 'text');





$options[] = array(
			'name' => __('client 10', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat9',
			'type' => 'upload');	
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt10',
			'type' => 'text');	

			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink10',
			'type' => 'text');


$options[] = array(
			'name' => __('client 11', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat10',
			'type' => 'upload');	
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt11 ',
			'type' => 'text');	


			
	$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink11',
			'type' => 'text');




$options[] = array(
			'name' => __('client 12', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat11',
			'type' => 'upload');	

	$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt12',
			'type' => 'text');	
			
						
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink12',
			'type' => 'text');




$options[] = array(
			'name' => __('client 13', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat12',
			'type' => 'upload');	
			
	$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt13 ',
			'type' => 'text');							
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink13',
			'type' => 'text');



$options[] = array(
			'name' => __('client 14', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat13',
			'type' => 'upload');	
			
		$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt14 ',
			'type' => 'text');						
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink14',
			'type' => 'text');




$options[] = array(
			'name' => __('client 15', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat14',
			'type' => 'upload');	
			
	$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt15 ',
			'type' => 'text');							
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink15',
			'type' => 'text');






$options[] = array(
			'name' => __('client 16', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat15',
			'type' => 'upload');	
			
	$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt16 ',
			'type' => 'text');							
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink16',
			'type' => 'text');




$options[] = array(
			'name' => __('client 17', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat16',
			'type' => 'upload');	
			
			$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt17 ',
			'type' => 'text');					
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink17',
			'type' => 'text');




$options[] = array(
			'name' => __('client 18', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat17',
			'type' => 'upload');	
			
	$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt18 ',
			'type' => 'text');							
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink18',
			'type' => 'text');






$options[] = array(
			'name' => __('client 19', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat18',
			'type' => 'upload');	
			
	$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt19 ',
			'type' => 'text');							
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink19',
			'type' => 'text');



$options[] = array(
			'name' => __('client 20', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'example_repeat19',
			'type' => 'upload');	
			
	$options[] = array(
			'name' => __('ALT', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'alt20 ',
			'type' => 'text');							
$options[] = array(
			'name' => __('Link', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'clink20',
			'type' => 'text');










	
			
	$options[] = array( "name" => "Backgrounds",
						"type" => "heading");	
	
	
	$options[] = array(
			'name' => __('Backgrounds 1', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'background1',
			'type' => 'upload');	
			
    $options[] = array(
			'name' => __('Backgrounds 2', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'background2',
			'type' => 'upload');	
			
	$options[] = array(
			'name' => __('Backgrounds 3', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'background3',
			'type' => 'upload');	
								
	$options[] = array(
			'name' => __('Backgrounds 4', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'background4',
			'type' => 'upload');	
								
	$options[] = array(
			'name' => __('Backgrounds 5', 'options_check'),
			'desc' => __('', 'options_check'),
			'id' => 'background5',
			'type' => 'upload');	
								
						
						
								// 					
								// 					
								// 					
								// 					
								// 					
								// 	
								// $options[] = array( "name" => "Basic Settings",
								// 					"type" => "heading");
								// 						
								// $options[] = array( "name" => "Input Text Mini",
								// 					"desc" => "A mini text input field.",
								// 					"id" => "example_text_mini",
								// 					"std" => "Default",
								// 					"class" => "mini",
								// 					"type" => "text");
								// 							
								// $options[] = array( "name" => "Input Text",
								// 					"desc" => "A text input field.",
								// 					"id" => "example_text",
								// 					"std" => "Default Value",
								// 					"type" => "text");
								// 						
								// $options[] = array( "name" => "Textarea",
								// 					"desc" => "Textarea description.",
								// 					"id" => "example_textarea",
								// 					"std" => "Default Text",
								// 					"type" => "textarea"); 
								// 					
								// $options[] = array( "name" => "Input Select Small",
								// 					"desc" => "Small Select Box.",
								// 					"id" => "example_select",
								// 					"std" => "three",
								// 					"type" => "select",
								// 					"class" => "mini", //mini, tiny, small
								// 					"options" => $test_array);			 
								// 					
								// $options[] = array( "name" => "Input Select Wide",
								// 					"desc" => "A wider select box.",
								// 					"id" => "example_select_wide",
								// 					"std" => "two",
								// 					"type" => "select",
								// 					"options" => $test_array);
								// 					
								// $options[] = array( "name" => "Select a Category",
								// 					"desc" => "Passed an array of categories with cat_ID and cat_name",
								// 					"id" => "example_select_categories",
								// 					"type" => "select",
								// 					"options" => $options_categories);
								// 					
								// $options[] = array( "name" => "Select a Page",
								// 					"desc" => "Passed an pages with ID and post_title",
								// 					"id" => "example_select_pages",
								// 					"type" => "select",
								// 					"options" => $options_pages);
								// 					
								// $options[] = array( "name" => "Input Radio (one)",
								// 					"desc" => "Radio select with default options 'one'.",
								// 					"id" => "example_radio",
								// 					"std" => "one",
								// 					"type" => "radio",
								// 					"options" => $test_array);
								// 						
								// $options[] = array( "name" => "Example Info",
								// 					"desc" => "This is just some example information you can put in the panel.",
								// 					"type" => "info");
								// 										
								// $options[] = array( "name" => "Input Checkbox",
								// 					"desc" => "Example checkbox, defaults to true.",
								// 					"id" => "example_checkbox",
								// 					"std" => "1",
								// 					"type" => "checkbox");
								// 					
								// $options[] = array( "name" => "Advanced Settings",
								// 					"type" => "heading");
								// 					
								// $options[] = array( "name" => "Check to Show a Hidden Text Input",
								// 					"desc" => "Click here and see what happens.",
								// 					"id" => "example_showhidden",
								// 					"type" => "checkbox");
								// 
								// $options[] = array( "name" => "Hidden Text Input",
								// 					"desc" => "This option is hidden unless activated by a checkbox click.",
								// 					"id" => "example_text_hidden",
								// 					"std" => "Hello",
								// 					"class" => "hidden",
								// 					"type" => "text");
								// 					
								// $options[] = array( "name" => "Uploader Test",
								// 					"desc" => "This creates a full size uploader that previews the image.",
								// 					"id" => "example_uploader",
								// 					"type" => "upload");
								// 					
								// 
								// 					
								// $options[] = array( "name" =>  "Example Background",
								// 					"desc" => "Change the background CSS.",
								// 					"id" => "example_background",
								// 					"std" => $background_defaults, 
								// 					"type" => "background");
								// 							
								// $options[] = array( "name" => "Multicheck",
								// 					"desc" => "Multicheck description.",
								// 					"id" => "example_multicheck",
								// 					"std" => $multicheck_defaults, // These items get checked by default
								// 					"type" => "multicheck",
								// 					"options" => $multicheck_array);
								// 						
								// $options[] = array( "name" => "Colorpicker",
								// 					"desc" => "No color selected by default.",
								// 					"id" => "example_colorpicker",
								// 					"std" => "",
								// 					"type" => "color");
								// 					
								// $options[] = array( "name" => "Typography",
								// 					"desc" => "Example typography.",
								// 					"id" => "example_typography",
								// 					"std" => array('size' => '12px','face' => 'verdana','style' => 'bold italic','color' => '#123456'),
								// 					"type" => "typography");			
	return $options;
}