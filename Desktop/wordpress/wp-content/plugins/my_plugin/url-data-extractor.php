<?php
/*
Plugin Name: URL data extractor
Plugin URI:
Description: foo
Author: Mark Daniel Louwe
Author URI: none
Version: 0.1
*/

//following code extracts data for the initial form pages
function apply_code_to_initial_form(){
//listed are page names where this code will apply
	if(is_page("hello") or is_page("hi") or is_page("thank-you-infographic-11") or is_page("ebook-5-success-factors") or is_page("take-the-quiz") or is_page("ebook-5-mistakes") or is_page("case-study-dm")){// add more or for more tags

	?>
	<script>

	/*var url_string = "http://www.example.com/t.html?a=1&b=3&c=m2-m3-m4-m5"; //window.location.href
	var url = new URL(url_string);
	var c = url.searchParams.get("c");
	console.log(c);*/
	var foo = getParameterByName('data');
	var obj = JSON.parse(foo);//convert string to an object

var first_name = getParameterByName('FirstName');
var email = getParameterByName('Email');

//sets form to the extract-data-from-url
jQuery("div.tve_lg_input_container:nth-child(1) > input:nth-child(1)").val(first_name);
jQuery("div.tve_lg_input_container:nth-child(2) > input:nth-child(1)").val(email);

	</script>

	<?php
	}// close if is_page("landing-page-infographic-11..
}//close fun apply_code_to_initial_form..

function apply_code_to_quiz_form(){
	if(is_page("hello") or is_page("hi") or is_page("thank-you-infographic-11") or is_page("ebook-5-success-factors") or is_page("take-the-quiz") or is_page("ebook-5-mistakes") or is_page("case-study-dm") or is_page("download-the-5-ways-ebook")){// add more or for more tags
	?>
	<script>

		var r_interval = setInterval(foo1, 100);////runs every 100 ms


function foo1(){
if(jQuery("#agilefield-1").val() == ""){

	var foo = getParameterByName('data');
	var obj = JSON.parse(foo);


	try{

		jQuery("#agilefield-1").val(obj.first_name);

	}
	catch(err){}

	try{

		jQuery("#agilefield-2").val(obj.email);
	}
	catch(err){}

} else {

	clearInterval(foo1);
}//close outer if


}//close fun foo1

	</script>
	<?php
	}// close if is_page

}

//this function adds a reusable js that is applied to all pages in site. it's purpose is to extract data from url
function mrkdnllw_reusable_js(){
	?>
	<script type="text/javascript">
	//extracts data from a url of current page and returns it as string
	function getParameterByName(name, url) {
		if (!url) url = window.location.href;
		name = name.replace(/[\[\]]/g, "\\$&");
		var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),

		results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';

		return decodeURIComponent(results[2].replace(/\+/g, " "));
	}// end fun getParameterByName..

	</script>
	<?php

}//close fun mrkdnllw_reusable_js..

//below iniates code to be applied to wordpress site identified by its function name
add_action( 'wp_footer', 'mrkdnllw_reusable_js' );
add_action( 'wp_footer', 'apply_code_to_initial_form' );
add_action( 'wp_footer', 'apply_code_to_quiz_form' );

//below code applies code to landing pages, same idea as the function apply_code_to_quiz_form
function mrkdnllw_landing_page_infographic_11() {
	//below are the pages where this script will run on
	if(is_page("landing-page-infographic-11") or is_page("infographic-11-activators")){
	?>

<script type="text/javascript">


	var foo = getParameterByName('data');
	var obj = JSON.parse(foo);
var first_name = getParameterByName('FirstName');
var email = getParameterByName('Email');

jQuery("div.tve_lg_input_container:nth-child(1) > input:nth-child(1)").val(first_name);
jQuery("div.tve_lg_input_container:nth-child(2) > input:nth-child(1)").val(email);


</script>

	<?php

	}// close if is_page 'landing-page-infographic-11..

}// close fun mrkdnllw_landing_page_infographic_11..
	add_action( 'wp_footer', 'mrkdnllw_landing_page_infographic_11' );// above script will be added sa footer sa wp site

//this code is applied to 'take-the-quiz' page, does similar thing, extracts data from url
function mrkdnllw_take_the_quiz(){
	if(is_page("take-the-quiz")){
		?>
		<script>
		//this interval will continually run function foo1 every 100 ms to check if agilefield-1 is empty, it is, it will extract data from url and set a value
		var r_interval = setInterval(foo1, 100);


function foo1(){


if(jQuery("#agilefield-1").val() == ""){

	var foo = getParameterByName('data');
	var obj = JSON.parse(foo);


	try{

		jQuery("#agilefield-1").val(obj.first_name);

	}
	catch(err){}

	try{

		jQuery("#agilefield-2").val(obj.email);
	}
	catch(err){}

}else {

	clearInterval(foo1);
}//close outer if

}//close fun foo1

		</script>

		<?php

	}//close if is_page take-the-quiz..

}// close fun mrkdnl..take-the-quiz..

add_action( 'wp_footer', 'mrkdnllw_take_the_quiz' );// above script will be added sa footer sa wp site

function mrkdnllw_infographic_11_activators_focused(){
	if(is_page("infographic-11-activators")){
		?>
		<script>



var foo_fname = getParameterByName('FirstName');
var foo_email = getParameterByName('Email');


jQuery("#_back_url").val("http://clientengage.wpengine.com/download-11-activators-infographic-quiz/?" +"FirstName=" +foo_fname +"&"+
		"Email=" + foo_email);

		</script>

		<?php

	} //close is_page landing-page-infographic-11..

}//closed fun mrkdnllw_infographic_11_activators_focused..
add_action( 'wp_footer', 'mrkdnllw_infographic_11_activators_focused' );// above script will be




function mrkdnllw_download_11_activators_infographic_quiz(){
	if(is_page("download-11-activators-infographic-quiz")){?>
	<script>

			var foo_fname1 = getParameterByName('FirstName');
var foo_email1 = getParameterByName('Email');
			jQuery("div.thrv-button:nth-child(1) > a:nth-child(1)").attr("href", "http://clientengage.wpengine.com/take-the-quiz/?"+ "FirstName=" +foo_fname1 +"&"+
		"Email=" + foo_email1);


//}
	</script>

	<?php

	}//close if is_page..

}//close fun mrkdnllw_download_11_activators_infographic_quiz..
add_action( 'wp_footer', 'mrkdnllw_download_11_activators_infographic_quiz' );//
