<?php
/**
 * Twenty Fourteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see twentyfourteen_content_width()
 *
 * @since Twenty Fourteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

/**
 * Twenty Fourteen only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfourteen_setup' ) ) :
/**
 * Twenty Fourteen setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_setup() {

	/*
	 * Make Twenty Fourteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Fourteen, use a find and
	 * replace to change 'twentyfourteen' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', twentyfourteen_font_url(), 'genericons/genericons.css' ) );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array(
		'default-color' => 'f5f5f5',
	) ) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'twentyfourteen_get_featured_posts',
		'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
endif; // twentyfourteen_setup
add_action( 'after_setup_theme', 'twentyfourteen_setup' );

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_content_width() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action( 'template_redirect', 'twentyfourteen_content_width' );

/**
 * Getter function for Featured Content Plugin.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return array An array of WP_Post objects.
 */
function twentyfourteen_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'twentyfourteen_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return bool Whether there are featured posts.
 */
function twentyfourteen_has_featured_posts() {
	return ! is_paged() && (bool) twentyfourteen_get_featured_posts();
}

/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_widgets_init() {
	require get_template_directory() . '/inc/widgets.php';
	register_widget( 'Twenty_Fourteen_Ephemera_Widget' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'twentyfourteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'twentyfourteen_widgets_init' );

/**
 * Register Lato Google font for Twenty Fourteen.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return string
 */
function twentyfourteen_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'twentyfourteen' ) ) {
		$query_args = array(
			'family' => urlencode( 'Lato:300,400,700,900,300italic,400italic,700italic' ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$font_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	}

	return $font_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_scripts() {
	// Add Lato font, used in the main stylesheet.
	wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfourteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfourteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfourteen-style' ), '20131205' );
	wp_style_add_data( 'twentyfourteen-ie', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfourteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20130402' );
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		wp_enqueue_script( 'jquery-masonry' );
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		wp_enqueue_script( 'twentyfourteen-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
		wp_localize_script( 'twentyfourteen-slider', 'featuredSliderDefaults', array(
			'prevText' => __( 'Previous', 'twentyfourteen' ),
			'nextText' => __( 'Next', 'twentyfourteen' )
		) );
	}

	wp_enqueue_script( 'twentyfourteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20140616', true );
}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );

/**
 * Enqueue Google fonts style to admin screen for custom header display.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_admin_fonts() {
	wp_enqueue_style( 'twentyfourteen-lato', twentyfourteen_font_url(), array(), null );
}
add_action( 'admin_print_scripts-appearance_page_custom-header', 'twentyfourteen_admin_fonts' );

if ( ! function_exists( 'twentyfourteen_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_the_attached_image() {
	$post                = get_post();
	/**
	 * Filter the default Twenty Fourteen attachment size.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'twentyfourteen_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

if ( ! function_exists( 'twentyfourteen_list_authors' ) ) :
/**
 * Print a list of all site contributors who published at least one post.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_list_authors() {
	$contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	) );

	foreach ( $contributor_ids as $contributor_id ) :
		$post_count = count_user_posts( $contributor_id );

		// Move on if user has not published a post (yet).
		if ( ! $post_count ) {
			continue;
		}
	?>

	<div class="contributor">
		<div class="contributor-info">
			<div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
			<div class="contributor-summary">
				<h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
				<p class="contributor-bio">
					<?php echo get_the_author_meta( 'description', $contributor_id ); ?>
				</p>
				<a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
					<?php printf( _n( '%d Article', '%d Articles', $post_count, 'twentyfourteen' ), $post_count ); ?>
				</a>
			</div><!-- .contributor-summary -->
		</div><!-- .contributor-info -->
	</div><!-- .contributor -->

	<?php
	endforeach;
}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image except in Multisite signup and activate pages.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentyfourteen_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} elseif ( ! in_array( $GLOBALS['pagenow'], array( 'wp-activate.php', 'wp-signup.php' ) ) ) {
		$classes[] = 'masthead-fixed';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( ( ! is_active_sidebar( 'sidebar-2' ) )
		|| is_page_template( 'page-templates/full-width.php' )
		|| is_page_template( 'page-templates/contributors.php' )
		|| is_attachment() ) {
		$classes[] = 'full-width';
	}

	if ( is_active_sidebar( 'sidebar-3' ) ) {
		$classes[] = 'footer-widgets';
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		$classes[] = 'slider';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid';
	}

	return $classes;
}
add_filter( 'body_class', 'twentyfourteen_body_classes' );

/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function twentyfourteen_post_classes( $classes ) {
	if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'twentyfourteen_post_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global int $paged WordPress archive pagination page count.
 * @global int $page  WordPress paginated post page count.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function twentyfourteen_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentyfourteen' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'twentyfourteen_wp_title', 10, 2 );

// Implement Custom Header features.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Add Customizer functionality.
require get_template_directory() . '/inc/customizer.php';

/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) {
	require get_template_directory() . '/inc/featured-content.php';
}


/* Redirect after logout */

add_filter('logout_url', 'my_logout_url');
function my_logout_url( $logout_url, $redirect = null ) {
	return $logout_url . '&amp;redirect_to=' . urlencode( get_bloginfo('url') );
}



/* Redirect to custom login page */
function redirect_login_page() {  
    $login_page  = home_url( '/login/' );  
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
  
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {  
        wp_redirect($login_page);  
        exit;  
    }  
}  
add_action('init','redirect_login_page');

  
/* Redirect to custom password reset page */
function redirect_reset_page() {  
    $reset_page  = home_url( '/reset/' );  
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
  
    if( $page_viewed == "wp-login.php?action=lostpassword" && $_SERVER['REQUEST_METHOD'] == 'GET') {  
        wp_redirect($reset_page);  
        exit;  
    }  
}  
add_action('init','redirect_reset_page');


/* Redirect to custom registration page */
function redirect_register_page() {  
    $register_page  = home_url( '/registration/' );  
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
  
    if( $page_viewed == "wp-login.php?action=register" && $_SERVER['REQUEST_METHOD'] == 'GET') {  
        wp_redirect($register_page);  
        exit;  
    }  
}  
add_action('init','redirect_register_page');


/* Hide admin tool bar at top */

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}

/* Ajax functions for login page */

function ajax_login_init(){

    wp_register_script('ajax-login-script', get_template_directory_uri() . '/js/ajax-login-script.js', array('jquery') ); 
    wp_enqueue_script('ajax-login-script');

    wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => $_SERVER['HTTP_REFERER'],
        'loadingmessage' => __('<div class="alert alert-green"><p>Checking your creadentials, please wait...</p></div>')
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_login_init');
}

function ajax_login(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-login-nonce', 'security' );

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_login'] = sanitize_user( $_POST['username'] );
    $info['user_password'] = esc_attr( $_POST['password'] );
    //$info['remember'] = true;

    // Check the user is active
    //$u = get_user_by( 'login', $info['user_login'] );
	//$id = $u->ID;
	//$active = get_user_meta( $id, 'active', true ); 

	$user_signon = wp_signon( $info, false );
	if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 
			'message'=>__('<div class="alert alert-red">
				<p>
					Your username and password combination is incorrect.
				</p>
				</div>')));
		} else{
    	echo json_encode(array('loggedin'=>true, 
    		'message'=>__('<div class="alert alert-green">
    			<p>
    				You logged in successfully. Now redirecting ....
    			</p>
    			</div>')));	
			}
    die();
}

/* Ajax Function for Registration page */

function ajax_registration_init(){
	// localize wp-ajax, notice the path to our theme-ajax.js file
	wp_enqueue_script( 'ajax-registration-script', get_stylesheet_directory_uri() . '/js/ajax-registration-script.js', array( 'jquery' ) );
	wp_enqueue_script('ajax-registration-script');

	wp_localize_script( 'ajax-registration-script', 'ajax_registration_object', array(
	'registration_url'	=> admin_url( 'admin-ajax.php' ),
	'site_url' => get_bloginfo('url'),
	'theme_url' => get_bloginfo('template_directory')
	) );

	add_action( 'wp_ajax_nopriv_user_registration', 'rs_user_registration_callback' );
	add_action( 'wp_ajax_user_registration', 'rs_user_registration_callback' );

}

if (!is_user_logged_in()) {
    add_action('init', 'ajax_registration_init');
}

 
/*
* @desc Register user
*/
function rs_user_registration_callback() {
global $wpdb;
global $reg_errors;
$reg_errors = new WP_Error;

$nonce = esc_attr($_POST['nonce']);
if ( ! wp_verify_nonce( $nonce, 'rs_user_registration_action' ) )
        die ( '<p class="error">Security checked!, Cheating huh?</p>' );

$username = esc_attr( $_POST['username'] );
$email = esc_attr( $_POST['email'] );
$fname = esc_attr( $_POST['fname'] );
$lname = esc_attr( $_POST['lname'] );
$gcap = esc_attr( $_POST['gcap'] );


if ( empty( $username ) || empty( $email ) ) {
    $reg_errors->add('field', 'Required form field is missing');
}

if ( 4 > strlen( $username ) ) {
    $reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
}

if ( username_exists( $username ) )
    $reg_errors->add('user_name', 'Sorry, that username already exists!');

if ( ! validate_username( $username ) ) {
    $reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
}

if ( !is_email( $email ) ) {
    $reg_errors->add( 'email_invalid', 'Email is not valid' );
}

if ( email_exists( $email ) ) {
    $reg_errors->add( 'email', 'Email Already in use' );
}

if ( !$gcap ) {
    $reg_errors->add( 'gcaptcha', 'You did not solve the reCAPTCHA. You are a robot.' );
}


if ( 1 > count( $reg_errors->get_error_messages() ) ) {

        $random_password = wp_generate_password( 12, false );
        $userdata = array(
        'user_login'    =>   $username,
        'user_email'    =>   $email,
        'user_pass'     =>   $random_password,
        'first_name'    =>   $first_name,
        'last_name'     =>   $last_name,
        );

        if(wp_insert_user( $userdata )){
           
            $to = $email;
            $subject = 'New Member Registration'; 
            $message = 'Hello,';
            $message .= "\n\n";
            $message .= 'Please find below your account login info:';
            $message .= "\n\n";
            $message .= 'Username: '.$username;
            $message .= "\n";
            $message .= 'Password: '.$random_password;
            $message .= "\n\n";
            $message .= 'Please do not forget to change your password at your profile page after you logged in';
            $headers = 'From: noreply@test.com' . "\r\n";           

            $mail = wp_mail( $to, $subject, $message, $headers );

            if( $mail ){
 
            echo json_encode(array('loggedin'=>true, 
	        		'message'=>__('<div class="alert alert-green">
	        			<p>
	        				Registration complete. 
            You will get an email to your email address with your account login creadentials.
	        			</p>
	        			</div>')));
            } else {

                 echo json_encode(array('loggedin'=>true, 
	        		'message'=>__('<div class="alert alert-green">
	        			<p>
	        				Registration complete. 
                If you do not get an avtivation email, please contact us.
	        			</p>
	        			</div>')));
            }

           }else{

            echo json_encode(array('loggedin'=>false, 
	        		'message'=>__('<div class="alert alert-red">
	        			<p>
	        				Something wrong has been happened 
            while creating account. Please try again later.
	        			</p>
	        			</div>')));

           } 
    }else{

    	$e='';

		foreach ( $reg_errors->get_error_messages() as $error ) {
			$e .= $error . '<br/>';   
		}

		$error_message = '<div class="alert alert-red"><p>'. $e .'</p></div>'; 

    	echo json_encode(array('loggedin'=>false, 'message'=>$error_message));
    }

die();
}

/* Ajax functions for login page */

function ajax_profile_init(){

    wp_register_script('ajax-profile-update-script', get_template_directory_uri() . '/js/ajax-profile-update-script.js', array('jquery') ); 
    wp_enqueue_script('ajax-profile-update-script');

    wp_localize_script( 'ajax-profile-update-script', 'ajax_profile_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'redirecturl' => $_SERVER['HTTP_REFERER']
     ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_ajaxupdate', 'ajax_update' );
}

// Execute the action only if the user isn't logged in
if (is_user_logged_in()) {
    add_action('init', 'ajax_profile_init');
}

function ajax_update(){

	/* Get user info. */
	global $current_user;
	get_currentuserinfo();

	$current_username = $current_user->user_login;

	$current_email = $current_user->user_email;

	$error = array(); 

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'profile-nonce', 'hcheck' );

    $username   =   sanitize_user( $_POST['username'] );
    $password   =   esc_attr( $_POST['pass1'] );
    $cpassword   =   esc_attr( $_POST['pass2'] );
    $email      =   esc_attr( $_POST['email'] );
    $fname =   sanitize_text_field( $_POST['fname'] );
    $lname  =   sanitize_text_field( $_POST['lname'] );

    if ( empty( $username ) ) {
    	$error[] = __('Username field can not be empty.', 'profile');
	}elseif( 4 > strlen( $username ) ) {
    	$error[] = __('Username too short. At least 4 characters is required.', 'profile');
	}else{
		if ( username_exists( $username ) && ($username !=$current_username) ){
	    	$error[] = __('This Username is already used by another user. Try a different one.', 'profile');
		  }

		if ( ! validate_username( $username ) ) {
		    $error[] = __('Sorry, the username you entered is not valid.', 'profile');
		}
	}

	if(!empty($email)){

		if(!is_email($email)){
		$error[] = __('The E-mail you entered is not valid.', 'profile');
		}

		if(email_exists($email) && ($email != $current_email)){
			$error[] = __('This email is already used by another user.  Try a different one.', 'profile');
		}
		
	}else{

		$error[] = __('Email field can not be empty.', 'profile');
	}


	if ( empty($password ) or empty( $cpassword ) ){
		$error[] = __('Password and/or Confirm Password Fields can not be empty.', 'profile');
	}else{
		if (5 > strlen( $password )) {
			$error[] = __('Password must be more than 5 characters.', 'profile');
		}
		if ($password !== $cpassword) {
			$error[] = __('Password and Confirm Password fields do not match.', 'profile');
		}
	}

	
    if ( count($error) == 0 ) {
    	$user_id = wp_update_user( array ('ID' => $current_user->ID, 'user_login' => $username, 'user_pass' => $password, 'user_email' => $email  ));

    	if ( !empty( $fname ) ){
	    update_user_meta( $current_user->ID, 'first_name', $fname );
	    }

	    if ( !empty( $lname ) ){
	        update_user_meta($current_user->ID, 'last_name', $lname );
	    }

	    if($user_id){
	    	echo json_encode(array('update'=>true, 
			'message'=>__('<div class="alert alert-green">
				<p>
					Your profile have been updated successfully.
				</p>
				</div>')));
	    }else{
	    	echo json_encode(array('update'=>true, 
			'message'=>__('<div class="alert alert-green">
				<p>
					Updating your profile failed. Please try again.
				</p>
				</div>')));
	    }

    }else{

    	$error_message = '<div class="alert alert-red"><p>' . implode("<br />", $error) . '</p></div>';
    	echo json_encode(array('update'=>false, 
			'message'=>$error_message));
    }
 
    die();
}


/* Ajax functions for password reset page */

function ajax_reset_init(){

    wp_register_script('ajax-reset-script', get_template_directory_uri() . '/js/ajax-reset-script.js', array('jquery') ); 
    wp_enqueue_script('ajax-reset-script');

    wp_localize_script( 'ajax-reset-script', 'ajax_reset_object', array( 
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));

    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_nopriv_ajaxreset', 'ajax_reset' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
    add_action('init', 'ajax_reset_init');
}

function ajax_reset(){

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-reset-nonce', 'security' );

    $email = trim($_POST['email']);

    if( empty( $email ) ) {
	echo json_encode(array('loggedin'=>false, 
			'message'=>__('<div class="alert alert-red">
				<p>
					Enter an e-mail address..
				</p>
				</div>')));
	} else if( ! is_email( $email )) {
	echo json_encode(array('loggedin'=>false, 
			'message'=>__('<div class="alert alert-red">
				<p>
					Invalid e-mail address.
				</p>
				</div>')));
	} else if( ! email_exists( $email ) ) {

	echo json_encode(array('loggedin'=>false, 
			'message'=>__('<div class="alert alert-red">
				<p>
					There is no user registered with that email address.
				</p>
				</div>')));
	} else {
	$random_password = wp_generate_password( 12, false );
	$user = get_user_by( 'email', $email );
	$update_user = wp_update_user( array (
	'ID' => $user->ID,
	'user_pass' => $random_password
	)
	);
	// if  update user return true then lets send user an email containing the new password
	if( $update_user ) {
	$to = $email;
	$subject = 'Your new password';
	$sender = get_option('name');
	$message = 'Your new password is: '.$random_password;
	$headers[] = 'MIME-Version: 1.0' . "\r\n";
	$headers[] = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers[] = "X-Mailer: PHP \r\n";
	$headers[] = 'From: '.$sender.' < '.$email.'>' . "\r\n";
	$mail = wp_mail( $to, $subject, $message, $headers );
	if( $mail )
	echo json_encode(array('loggedin'=>true, 
    		'message'=>__('<div class="alert alert-green">
    			<p>
    				Your password has been reset. Check your email address for you new password. 
	Do not forget to change the password after logged in.
    			</p>
    			</div>')));	
	} else {

	echo json_encode(array('loggedin'=>false, 
			'message'=>__('<div class="alert alert-red">
				<p>
					Oops something went wrong updaing your account.
				</p>
				</div>')));
	}
	}

    die();
}

/* Lecture - Custom post type */

include 'inc/lecture-custom-post.php';


/* Question - Custom post type */

include 'inc/question-custom-post.php';

function wpb_change_title_text( $title ){
     $screen = get_current_screen();
 
     if  ( 'question' == $screen->post_type ) {
          $title = 'Enter Question Here';
     }
 
     return $title;
}
 
add_filter( 'enter_title_here', 'wpb_change_title_text' );