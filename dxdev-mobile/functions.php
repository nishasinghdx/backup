<?php
/**
 * Twenty Eleven functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 584;

/**
 * Tell WordPress to run twentyeleven_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'twentyeleven_setup' );

if ( ! function_exists( 'twentyeleven_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override twentyeleven_setup() in a child theme, add your own twentyeleven_setup to your child theme's
 * functions.php file.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To style the visual editor.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
 * 	and backgrounds, and post formats.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_setup() {

	/* Make Twenty Eleven available for translation.
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Eleven, use a find and replace
	 * to change 'twentyeleven' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyeleven', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();



	// Grab Twenty Eleven's Ephemera widget.
	require( get_template_directory() . '/inc/widgets.php' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentyeleven' ) );

	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );
	add_theme_support( 'post-thumbnails' );

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
	register_default_headers( array(
		'wheel' => array(
			'url' => '%s/images/headers/wheel.jpg',
			'thumbnail_url' => '%s/images/headers/wheel-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Wheel', 'twentyeleven' )
		),
		'shore' => array(
			'url' => '%s/images/headers/shore.jpg',
			'thumbnail_url' => '%s/images/headers/shore-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Shore', 'twentyeleven' )
		),
		'trolley' => array(
			'url' => '%s/images/headers/trolley.jpg',
			'thumbnail_url' => '%s/images/headers/trolley-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Trolley', 'twentyeleven' )
		),
		'pine-cone' => array(
			'url' => '%s/images/headers/pine-cone.jpg',
			'thumbnail_url' => '%s/images/headers/pine-cone-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Pine Cone', 'twentyeleven' )
		),
		'chessboard' => array(
			'url' => '%s/images/headers/chessboard.jpg',
			'thumbnail_url' => '%s/images/headers/chessboard-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Chessboard', 'twentyeleven' )
		),
		'lanterns' => array(
			'url' => '%s/images/headers/lanterns.jpg',
			'thumbnail_url' => '%s/images/headers/lanterns-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Lanterns', 'twentyeleven' )
		),
		'willow' => array(
			'url' => '%s/images/headers/willow.jpg',
			'thumbnail_url' => '%s/images/headers/willow-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Willow', 'twentyeleven' )
		),
		'hanoi' => array(
			'url' => '%s/images/headers/hanoi.jpg',
			'thumbnail_url' => '%s/images/headers/hanoi-thumbnail.jpg',
			/* translators: header image description */
			'description' => __( 'Hanoi Plant', 'twentyeleven' )
		)
	) );
}
endif; // twentyeleven_setup

if ( ! function_exists( 'twentyeleven_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_header_style() {
	$text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( $text_color == HEADER_TEXTCOLOR )
		return;

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $text_color ) :
	?>
		#site-title,
		#site-description {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo $text_color; ?> !important;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // twentyeleven_header_style

if ( ! function_exists( 'twentyeleven_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_theme_support('custom-header') in twentyeleven_setup().
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_admin_header_style() {
?>
	<style type="text/css">
	.appearance_page_custom-header #headimg {
		border: none;
	}
	#headimg h1,
	#desc {
		font-family: "Helvetica Neue", Arial, Helvetica, "Nimbus Sans L", sans-serif;
	}
	#headimg h1 {
		margin: 0;
	}
	#headimg h1 a {
		font-size: 32px;
		line-height: 36px;
		text-decoration: none;
	}
	#desc {
		font-size: 14px;
		line-height: 23px;
		padding: 0 0 3em;
	}
	<?php
		// If the user has set a custom color for the text use that
		if ( get_header_textcolor() != HEADER_TEXTCOLOR ) :
	?>
		#site-title a,
		#site-description {
			color: #<?php echo get_header_textcolor(); ?>;
		}
	<?php endif; ?>
	#headimg img {
		max-width: 1000px;
		height: auto;
		width: 100%;
	}
	</style>
<?php
}
endif; // twentyeleven_admin_header_style

if ( ! function_exists( 'twentyeleven_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_theme_support('custom-header') in twentyeleven_setup().
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_admin_header_image() { ?>
	<div id="headimg">
		<?php
		$color = get_header_textcolor();
		$image = get_header_image();
		if ( $color && $color != 'blank' )
			$style = ' style="color:#' . $color . '"';
		else
			$style = ' style="display:none"';
		?>
		<h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }
endif; // twentyeleven_admin_header_image

/**
 * Sets the post excerpt length to 40 words.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 */
function twentyeleven_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );

if ( ! function_exists( 'twentyeleven_continue_reading_link' ) ) :
/**
 * Returns a "Continue Reading" link for excerpts
 */
function twentyeleven_continue_reading_link() {
	return ' <a href="'. esc_url( get_permalink() ) . '" class="link hidelink">' . __( 'read more -', 'twentyeleven' ) . '</a>';
}
endif; // twentyeleven_continue_reading_link

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyeleven_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function twentyeleven_auto_excerpt_more( $more ) {
	return ' &hellip;' . twentyeleven_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 */
function twentyeleven_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= twentyeleven_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function twentyeleven_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentyeleven_page_menu_args' );

/**
 * Register our sidebars and widgetized areas. Also register the default Epherma widget.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_widgets_init() {

	register_widget( 'Twenty_Eleven_Ephemera_Widget' );

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentyeleven' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );



	register_sidebar( array(
		'name' => __( 'Services Bottom peragraphs', 'twentyeleven' ),
		'id' => 'services-peragraph',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

		register_sidebar( array(
		'name' => __( 'footer content', 'twentyeleven' ),
		'id' => 'footer-content',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Tweets', 'twentyeleven' ),
		'id' => 'footer-tweets',
		'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );



}
add_action( 'widgets_init', 'twentyeleven_widgets_init' );

if ( ! function_exists( 'twentyeleven_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function twentyeleven_content_nav( $html_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo esc_attr( $html_id ); ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
endif; // twentyeleven_content_nav

/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function twentyeleven_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;

	return esc_url_raw( $matches[1] );
}

/**
 * Count the number of footer sidebars to enable dynamic classes for the footer
 */
function twentyeleven_footer_sidebar_class() {
	$count = 0;

	if ( is_active_sidebar( 'sidebar-3' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-4' ) )
		$count++;

	if ( is_active_sidebar( 'sidebar-5' ) )
		$count++;

	$class = '';

	switch ( $count ) {
		case '1':
			$class = 'one';
			break;
		case '2':
			$class = 'two';
			break;
		case '3':
			$class = 'three';
			break;
	}

	if ( $class )
		echo 'class="' . $class . '"';
}

if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer class="comment-meta">
				<div class="comment-author vcard" style="margin:0px;">

					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo '<div class="img-border-bg ident-right-2 fleft">'. get_avatar( $comment, $avatar_size ).'</div>';

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s  <div class="dte" > %2$s </div>  ', 'twentyeleven' ),


							sprintf( '<h2 class="cmt">%s</h2>', get_comment_author_link() ),


							sprintf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
							)
						);comment_reply_link( array_merge( $args, array( 'reply_text' => __( '<div class="reply" style="float: right; margin-top: -22px;">Reply</div>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) )
					?><br/>
					<div style="color: #444444;   font-family: 'Open Sans',sans-serif;   font-size: 13px;
    line-height: 22px;"><?php comment_text(); ?></div>

				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>




		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for twentyeleven_comment()

if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
		get_the_author()
	);
}
endif;

/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_body_classes( $classes ) {

	if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';

	return $classes;
}
add_filter( 'body_class', 'twentyeleven_body_classes' );









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

function repeat_text_option_type( $option_name, $option, $values ){

  $counter = 0;

    $output = '<div class="of-repeat-loop">';

    if( is_array( $values ) ) foreach ( (array)$values as $value ){

        $output .= '<div class="of-repeat-group">';
        $output .= '<input class="of-input" name="' . esc_attr( $option_name . '[' . $option['id'] . ']['.$counter.']' ) . '" type="text" value="' . esc_attr( $value ) . '" />';
        $output .= '<button class="dodelete button icon delete">'. __('Remove') .'</button>';

        $output .= '</div><!--.of-repeat-group-->';

        $counter++;
    }

    $output .= '<div class="of-repeat-group to-copy">';
    $output .= '<input class="of-input" data-rel="' . esc_attr( $option_name . '[' . $option['id'] . ']' ) . '" type="text" value="' . esc_attr( $option['std'] ) . '" />';
    $output .= '<button class="dodelete button icon delete">'. __('Remove') .'</button>';
    $output .= '</div><!--.of-repeat-group-->';


    $output .= '<button class="docopy button icon add">Add Client</button>';

    $output .= '</div><!--.of-repeat-loop-->';

    return $output;
}
add_filter( 'optionsframework_repeat_text', 'repeat_text_option_type', 10, 3 );

function sanitize_repeat_field( $input, $option ){
    $clean = '';
    if( is_array( $input ) )
        $clean = array_map( 'sanitize_text_field', $input);
    return $clean;
}
add_filter( 'of_sanitize_repeat_text', 'sanitize_repeat_field', 10, 2 );




function of_repeat_script(){    ?>

    <style>
        #optionsframework .to-copy {display: none;}

        #optionsframework .of-repeat-group {
            overflow: hidden;
            margin-bottom: 1.4em;
        }
        #optionsframework .of-repeat-group .of-input {
            width: 80%;
        }

        .of-repeat-group .dodelete {
            float: right;
        }
    </style>

    <script type="text/javascript">
    jQuery(function($){

        $(".docopy").on("click", function(e){

          // the loop object
          $loop = $(this).parent();

          // the group to copy
          $group = $loop.find('.to-copy').clone().insertBefore($(this)).removeClass('to-copy');

          // the new input
          $input = $group.find('input');

          input_name = $input.attr('data-rel');
          count = $loop.children('.of-repeat-group').not('.to-copy').length;

          $input.attr('name', input_name + '[' + ( count - 1 ) + ']');


        });

        $(".of-repeat-group").on("click", ".dodelete", function(e){
          $(this).parent().remove();
        });

    });

    </script>
<?php
}
add_action( 'optionsframework_custom_scripts', 'of_repeat_script' );


// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}




if(isset($_GET['approve']))
	{
		$id=$_GET['approve'];
		$query=mysql_query("delete from wp_custmoreinformation where id=$id");
		?>

		<?php

	}
if(isset($_GET['del']))
	{
		$id=$_GET['del'];
		$query=mysql_query("delete from wp_customerquestion where id=$id");
		?>

		<?php

	}






add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_options_page('My Plugin Options', 'Quote Inquiries', 'manage_options', 'my-unique-identifier951753', 'my_plugin_options');
}

function my_plugin_options() {

$dsx = "http://".$_SERVER['SERVER_NAME'];
	$query  = "SELECT id , name, contact, email_id, budget,cwebsite,services_wd,services_seo,services_wa,services_ma,services_mw,services_bd,discription FROM wp_custmoreinformation ORDER BY id DESC";
	$result2 = mysql_query($query);
	$row3=mysql_num_rows($result2);

	//print_r($row3);
	  echo '
<h1 style="padding-left:15px;">Quote Inquiries</h1>

<form id="myform" name="form10" method="post" action="'.$dsx.'/site4/wp-admin/options-general.php?page=my-unique-identifier951753">


	<table id="report" style="margin-left:15px;" cellpadding="5" border="1">
        <tr>
            <th>Client Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Budget for the Project</th>
            <th></th>

        </tr>




';
	while($row = mysql_fetch_array($result2, MYSQL_ASSOC))
{


?>


<?php




			echo '   <tr>

		<td bgcolor="#FFFFFF" ><input name="checkbox['.$row['id'].']" type="checkbox" id="checkbox[]" value='.$row['id'].' style="margin-right:5px;">'.$row['name'].'</td>
            <td>'.$row['email_id'].'</td>
            <td>'.$row['contact'].'</td>
            <td>'.$row['budget'].'</td>
            <td><div class="arrow"></div></td>
			</tr>

        <tr>
            <td vAlign="top"  style="margin-top:0px; text-align:left;">

                <h4>Services Required</h4>
                <ul style="margin-left:0px;">
                    <li>'.$row['services_wd'].'</li>
                    <li>'.$row['services_seo'].'</li>
                    <li>'.$row['services_wa'].'</li>
					<li>'.$row['services_ma'].'</li>
                    <li>'.$row['services_mw'].'</li>
					<li>'.$row['services_bd'].'</li>
                 </ul>
            </td>

			<td vAlign="top"  style="margin-top:0px;text-align:left;">
			<h4>Project Overview</h4>
                 <div style="float:left;">'.$row['discription'].' </div>
</td>
                 <td vAlign="top" colspan="2" style="margin-top:0px;text-align:left;">
                <h4>current website address</h4>
                  <div style="float:left;">'.$row['cwebsite'].' </div>
            </td>

			<td vAlign="top" colspan="1" style="margin-top:0px;text-align:left;">
			<div>



			'?>

		<a  href="<?php echo $urls ?>/site4/wp-admin/options-general.php?page=my-unique-identifier951753&approve=<?php echo $row['id'] ?>"><img src="../wp-content/themes/DesignersX/image/del.png">delete</a>
	<?Php echo '</div>

            </td>
        </tr>



		';

}

		echo '</table>';

		echo '</form>';
}
//print_r($_POST['checkbox']);
if(isset($_POST['delete']))
{
//print_r($_POST);
foreach ($_POST['checkbox'] as $id => $value){

$sql = "DELETE FROM wp_custmoreinformation WHERE id=".(int)$id;
$result = mysql_query($sql);
}

}


















add_action('admin_menu', 'my_plugin_menus');

function my_plugin_menus() {
	add_options_page('My Plugin Options', 'Letter Inquiries', 'manage_options', 'my-unique-identifier9517534', 'my_plugi_options');
}

function my_plugi_options() {

$dsx = "http://".$_SERVER['SERVER_NAME'];
	$query  = "SELECT * FROM wp_customerquestion ORDER BY id DESC";
	$result = mysql_query($query);
	  echo '
<h1 style="padding-left:15px;">Letter/Contact Inquiries</h1>
<form id="myform" name="form11" method="post" action="'.$dsx.'/designersx4/wp-admin/options-general.php?page=my-unique-identifier9517534">


	<table id="report" style="margin-left:15px;" cellpadding="5" border="1">
        <tr>
            <th>Client Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Department</th>

            <th></th>

        </tr>




';
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{

			echo '    <tr>
            <td bgcolor="#FFFFFF" ><input name="checkbox['.$row['id'].']" type="checkbox" id="checkbox[]" value='.$row['id'].' style="margin-right:5px; ">'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['department'].'</td>

            <td><div class="arrow"></div></td>
			</tr>

        <tr>


			<td vAlign="top" colspan="4" style="margin-top:0px;text-align:left;">
			<h4>Project Overview</h4>
                 <div style="float:left;">'.$row['comment'].' </div>

            </td>
			<td vAlign="top" colspan="1" style="margin-top:0px;text-align:left;">
			<div>'?>

		<a  href="<?php echo $urls ?>options-general.php?page=my-unique-identifier9517534&del=<?php echo $row['id'] ?>"><img src="../wp-content/themes/DesignersX/image/del.png">delete</a>
	<?Php echo '</div>

            </td>
        </tr>';

}
		echo '</table>';

		echo '</form>';
}
if(isset($_POST['delete2']))
{
//print_r($_POST);
foreach ($_POST['checkbox'] as $id => $value){

$sql = "DELETE FROM wp_customerquestion WHERE id=".(int)$id;
$result = mysql_query($sql);
}

}



 if (is_admin() ) {

  $temp =get_page_template_slug($_GET['post'] );

 if ($temp  != 'custom_service_stemplate.php' || $temp == "") {

	 echo "<style>#_custom_meta_metabox{  display:none;      }</style>";

 }

 }
 function register_my_menus() {
  register_nav_menus(
    array(
      'mobile-menu' => __( 'Mobile Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

include_once 'metaboxes/setup.php';

include_once 'metaboxes/simple-spec.php';
