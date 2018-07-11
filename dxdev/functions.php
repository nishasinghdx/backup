<?php

ob_start();
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
function get_the_twitter_excerpt(){
$excerpt = get_the_content();
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$the_str = substr($excerpt, 0, 130);
return $the_str;
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
				<div class="comment-author vcard function-mar">

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
					<div class="function-col-font"><?php comment_text(); ?></div>

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


if( !is_admin()){

wp_deregister_script('jquery');
wp_register_script('jquery', ("http://cdn.jquerytools.org/1.1.2/jquery.tools.min.js"), false, '1.3.2');
wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"), false, '1.3.2');
wp_enqueue_script('jquery');
}


add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');

	}
}


$wpdb->query("CREATE TABLE IF NOT EXISTS `wp_coupon` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `services` VARCHAR(255) NOT NULL, `discount` VARCHAR(255) NOT NULL , `sdate` VARCHAR(255) NOT NULL , `edate` VARCHAR(255) NOT NULL , `coupon` VARCHAR(255) NOT NULL ) ENGINE = InnoDB;");


add_action('admin_menu', 'upgateurl');

function upgateurl() {
	add_options_page('My Plugin Url', 'Coupon Setting', 'manage_options', 'my-unique-url', 'Url_options');
}


function Url_options()
{
	if (!current_user_can('manage_options'))
	{
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<hr/>';



	?>



<link rel="stylesheet"   href='http://www.designersx.com/wp-content/themes/dxdev/css/pickmeup.css' type='text/css'  />
<script type="text/javascript"  src="http://www.designersx.com/wp-content/themes/dxdev/js/jquery.js"></script>
<script type="text/javascript"  src="http://www.designersx.com/wp-content/themes/dxdev/js/jquery.pickmeup.js"></script>
<script>
$(function () {

	$('.time').pickmeup({
		position		: 'right',
		hide_on_select	: true
	});
});


function chktype(){

  if($('#per').is(':checked')) {

	$('#type').html('%');
  }else{

	$('#type').html('$');
  }




}

</script>





	<?php

	echo '<div class="wrap" style="margin-top:50px;">
  <form name="coupon" method="post" action="">

    <table width="100%" >
      <tr valign="top">
        <th scope="row" align="right"> </th>
        <td>';
		?>


		<select style="width:31.2%"  id="services" name="services" >
		<option value="" >-----Select Services -----</option>
		<?php
$childcats= get_categories('child_of=23');
foreach ($childcats as $childcat){
$cats[]=$childcat->term_id;

}
foreach($cats as $cat)
{
?>
<option value="<?php echo $cat; ?>" > <?php echo get_cat_name( $cat );  ?> </option>

<?php }  ?>
		</select>

		<?php
		echo'
        <br /></td>
      </tr>


	  <tr>
		<th scope="row" align="right"> </th>
	  	 <td>Percentage :    <input name="type" type="radio" id="per" value="percentage"  onclick="chktype();" checked /> Doller :   <input name="type" id="dlr" type="radio" value="doller" onclick="chktype();" /> </td>

	  </tr>


	   <tr valign="top">
        <th scope="row" align="right"> </th>

        <td><input name="discount" type="text" id="url" placeholder="Enter Discount" size="40" style="float:left;" /><span id="type" style="background: none repeat scroll 0 0 #9CCFE1;
    color: #FFFFFF;
    float: left;
    font-size: 17px;
    margin-left: -38px;
    margin-top: 1px;
    padding: 4px;
    text-align: center;
    width: 28px;">%</span>
        <br /></td>
      </tr>

	    <tr valign="top">
        <th scope="row" align="right"> </th>
        <td><input name="sdate" type="text" id="url" class="time" placeholder="Start Date" size="40" />
        <br /></td>
      </tr>

	   <tr valign="top">
        <th scope="row" align="right"> </th>
        <td><input name="edate" type="text" id="url" class="time" placeholder="End Date" size="40" />
        <br /></td>
      </tr>


      <tr>
	  <th></th><td><input type="submit" name="coupon" value="Add Coupon" /></td>
	  </tr>
     </table>
  </form>
</div>';


echo '<hr/>';



if(isset($_POST['coupon']) && !empty($_POST['sdate'])){

	$services = $_POST['services'];
	$sername =  get_cat_name( $services );
	if($_POST['type'] == 'doller'){
		$discount = $_POST['discount']."$";
	}else{
		$discount = $_POST['discount']."%";
	}
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$serv = substr($sername, 0, 2);
	$till = substr($edate, 0, 2);
	$dist = substr($discount, 0, 2);
	$coupon = $serv.$till.$dist;

	$date = new DateTime();
	$timestamp = strtotime($sdate);
	$timestamp1 = strtotime($edate);



	$qry = mysql_query("insert into wp_coupon values('','$services' ,'$discount' ,'$timestamp','$timestamp1','$coupon')");


}

if(isset($_GET['id']) && !empty($_GET['id'])){

$sql="delete from wp_coupon where id='".$_GET['id']."'";

if (!mysql_query($sql))
{
	die('Error: ' . mysql_error());
}else
{

}
}











	$query=mysql_query("select * from wp_coupon");
	echo '<h2 style="margin-left:10px;">Coupon Detail</h2>';
	echo '<table width="60%" style="margin:60px 0px 0px 60px;">';
	echo '<tr><th align="left">Sr.</th><th align="left">Services</th><th align="left">Discount</th><th align="left">Start Date</th><th align="left">End Date</th><th align="left">Coupon</th><th align="left">Action</th></tr>';
	$i=1;
	while($row=mysql_fetch_assoc($query))
	{
		$sername =  get_cat_name( $row['services'] );

		?>

		<tr><td><?php echo $i;?></td><td><?php echo $sername; ?></td><td><?php echo $row['discount'];"%"?></td><td><?php echo date('d/m/Y', $row['sdate']);  ?></td><td><?php  echo date('d/m/Y', $row['edate']); ?></td><td><?php echo $row['coupon']; ?></td><td><a href="?page=my-unique-url&id=<?php echo $row['id'];"%"?>" >Delete</a></td></tr>

		<?php
		$i++;
	}

	echo '</table>';


}






/*

 if (is_admin() ) {

  $temp =get_page_template_slug($_GET['post'] );

 if ($temp  != 'custom_service_stemplate.php' || $temp == "") {

	 echo "<style>#_custom_meta_metabox{  display:none;      }</style>";

 }

 }
	*/
include_once 'metaboxes/setup.php';

include_once 'metaboxes/simple-spec.php';



function filter_ptags_on_images($content)
{
$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');





function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Service Page Data', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Service Page Data', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Service Page Data', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Service Page', 'twentythirteen' ),
		'all_items'           => __( 'All Service Pages Data', 'twentythirteen' ),
		'view_item'           => __( 'View Service Pages Data', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Service Page Data', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Service Page Data', 'twentythirteen' ),
		'update_item'         => __( 'Update Service Page Data', 'twentythirteen' ),
		'search_items'        => __( 'Search Service Page Data', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'Service Page Data', 'twentythirteen' ),
		'description'         => __( 'Service Page Data news and reviews', 'twentythirteen' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',

		// This is where we add taxonomies to our CPT
		'taxonomies'          => array( 'category' ),
	);

	// Registering your Custom Post Type
	register_post_type( 'ServicePageData', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'ServicePageData'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}
function jp_search_filter( $query ) {
  if ( ! $query->is_admin && $query->is_search && $query->is_main_query() ) {
    $query->set( 'post__not_in', array( 1558 ) );
  }
}
add_action( 'pre_get_posts', 'jp_search_filter' );
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
