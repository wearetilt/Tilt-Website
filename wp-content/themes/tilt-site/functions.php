<?php

$isDev = $_SERVER['SERVER_ADDR'] == '127.0.0.1' ? true : false;
define('IS_DEV', $isDev);

/**
 * Twenty Fifteen functions and definitions
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
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	add_image_size( 'team', 624, 624, true);

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
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
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {

	$cssFile = 'global.min.css';
	$jsFile = 'main.min.js';

	// if(IS_DEV) {
		$cssFile = 'global.css';
		$jsFile = 'main.js';
	// }

	// wp_enqueue_style( 'videojs', get_template_directory_uri() . '/plugins/videojs/video-js.css', false, filemtime(get_template_directory().'/plugins/videojs/video-js.css'));
	// wp_style_add_data( 'videojs');

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/'.$cssFile, false, filemtime(get_template_directory().'/css/'.$cssFile));

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );
	wp_enqueue_script( 'main-sas', get_template_directory_uri() . '/js/sas.js', array(), '20150330', true );
	wp_enqueue_script( 'main-libs', get_template_directory_uri() . '/js/libs.js', array(), '20150330', true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/'.$jsFile, array(), filemtime(get_template_directory().'/js/'.$jsFile), true );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('work', ['page', 'work'], array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Work Item Types', 'taxonomy general name' ),
      'singular_name' => _x( 'Work Item Type', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Work Item Types' ),
      'all_items' => __( 'All Work Item Types' ),
      'parent_item' => __( 'None' ),
      'parent_item_colon' => __( 'None:' ),
      'edit_item' => __( 'Edit Work Item Type' ),
      'update_item' => __( 'Update Work Item Type' ),
      'add_new_item' => __( 'Add New Work Item Type' ),
      'new_item_name' => __( 'New Work Item Name Type' ),
      'menu_name' => __( 'Work Item Types' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
	      'slug' => '', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));

  register_taxonomy('work_tags', 'page', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => false,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Work Item Tags', 'taxonomy general name' ),
      'singular_name' => _x( 'Work Item Tag', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Work Item Tags' ),
      'all_items' => __( 'All Work Item Tags' ),
      'parent_item' => __( 'None' ),
      'parent_item_colon' => __( 'None:' ),
      'edit_item' => __( 'Edit Work Item Tag' ),
      'update_item' => __( 'Update Work Item Tag' ),
      'add_new_item' => __( 'Add New Work Item Tag' ),
      'new_item_name' => __( 'New Work Item Name Tag' ),
      'menu_name' => __( 'Work Item Tags' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));

}
add_action( 'init', 'add_custom_taxonomies', 0 );

add_rewrite_rule( 'web/?$', 'index.php?work=web', 'top' );
add_rewrite_rule( 'motion/?$', 'index.php?work=motion', 'top' );
add_rewrite_rule( 'film/?$', 'index.php?work=film', 'top' );

function __custom_work_link( $link, $term, $taxonomy )
{
    if ( $taxonomy !== 'work' )
        return $link;

    return str_replace( 'work/', '', $link );
}
add_filter( 'term_link', '__custom_work_link', 10, 3 );



function work_item_post_type() {

	$labels = array(
		'name'                => 'Work Items',
		'singular_name'       => 'Work Item',
		'menu_name'           => 'Work Items',
		'name_admin_bar'      => 'Work Items',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Work Items',
		'add_new_item'        => 'Add Work Item',
		'add_new'             => 'Add New Work Item',
		'new_item'            => 'New Work Item',
		'edit_item'           => 'Edit Work Item',
		'update_item'         => 'Update Work Item',
		'view_item'           => 'View Work Item',
		'search_items'        => 'Search  Work Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'Work Item',
		'description'         => 'Work Items go here',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'work' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite' => array(
	      'slug' => false, // This controls the base slug that will display before each term
	      'with_front' => false, // Don't display the category base before "/locations/"
	      'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
	    ),
	);
	register_post_type( 'work_item', $args );

}
add_action( 'init', 'work_item_post_type', 0 );

/**
 * Remove the slug from published post permalinks. Only affect our custom post type, though.
 */
function gp_remove_cpt_slug( $post_link, $post ) {
    if ( $post->post_type === "work_item" && 'publish' === $post->post_status ) {
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    }
    return $post_link;
}
add_filter( 'post_type_link', 'gp_remove_cpt_slug', 10, 2 );
/**
 * Have WordPress match postname to any of our public post types (post, page, race).
 * All of our public post types can have /post-name/ as the slug, so they need to be unique across all posts.
 * By default, WordPress only accounts for posts and pages where the slug is /post-name/.
 *
 * @param $query The current query.
 */
function gp_add_cpt_post_names_to_main_query( $query ) {
	// Bail if this is not the main query.
	if ( ! $query->is_main_query() ) {
		return;
	}
	// Bail if this query doesn't match our very specific rewrite rule.
	if ( ! isset( $query->query['page'] ) || 2 !== count( $query->query ) ) {
		return;
	}
	// Bail if we're not querying based on the post name.
	if ( empty( $query->query['name'] ) ) {
		return;
	}
	// Add CPT to the list of post types WP will include when it queries based on the post name.
	$query->set( 'post_type', array( 'post', 'page', 'work_item' ) );
}
add_action( 'pre_get_posts', 'gp_add_cpt_post_names_to_main_query' );






function team_post_type() {

	$labels = array(
		'name'                => 'Team',
		'singular_name'       => 'Team Item',
		'menu_name'           => 'Team',
		'name_admin_bar'      => 'Team',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'All Team Items',
		'add_new_item'        => 'Add Team Item',
		'add_new'             => 'Add New Team Item',
		'new_item'            => 'New Team Item',
		'edit_item'           => 'Edit Team Item',
		'update_item'         => 'Update Team Item',
		'view_item'           => 'View Team Item',
		'search_items'        => 'Search  Team Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'Team Item',
		'description'         => 'Team Items go here',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		// 'taxonomies'          => array( 'work' ),
		'hierarchical'        => true,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'capability_type'     => 'page',
		'rewrite' => array(
	      'slug' => 'team', // This controls the base slug that will display before each term
	      'with_front' => false, // Don't display the category base before "/locations/"
	      'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
	    ),
	);
	register_post_type( 'team_item', $args );

}
add_action( 'init', 'team_post_type', 0 );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';
//
// function footer_scripts(){
// 	$directoryURI = get_template_directory_uri();
// 	echo '<script src="' . $directoryURI . '/js/main.js' . '"></script>';
// }
//
// add_action( 'wp_footer', 'footer_scripts', 20);


function getPageSibling($link) {
    global $post;
    $siblings = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent);
    foreach ($siblings as $key=>$sibling){
        if ($post->ID == $sibling->ID){
            $ID = $key;
        }
    }
	$closest = array('prev'=>get_permalink($siblings[$ID-1]->ID),'next'=>get_permalink($siblings[$ID+1]->ID));

	$link = $closest[$link];

	if(!$link) {
		return '';
	}

	$currentUrl = get_permalink($post->ID);

	if($link == $currentUrl) {
		return '';
	}

	return $link;

    // if ($link == 'prev' || $link == 'next') { return ; } else { return $closest; }
}


function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<div class="container area-dark contact--page pw-protect-login-form">
    		<div class="container container-headline-text area-dark"> 
            <section class="text-section">
              <h2>Client area</h2>
              <div class="text-section__para">
              <p>To view this post, please enter your password</p>
              <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
   				<input class="password_entry" placeholder="Password" name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" />
   				<button id="password_button" type="submit" class="input-btn" name="Submit">Go</button>
   				</div>
    		  </form>
    		  </div>
            </section>
            </div>
          </div>
    ';
    return $o;

}
add_filter( 'the_password_form', 'my_password_form' );

add_filter( 'the_password_form', 'wpse_71284_custom_post_password_msg' );

/**
 * Add a message to the password form.
 */
function wpse_71284_custom_post_password_msg( $o )
{
    // No cookie, the user has not sent anything until now.
    if ( ! isset ( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) )
        return $o;

$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    // We have a cookie, but it doesn’t match the password.
    $msg = '<div class="container area-dark contact--page pw-protect-login-form">
        <div class="container container-headline-text area-dark"> 
            <section class="text-section">
              <h2>Client area</h2>
              <div class="text-section__para">
              <p>To view this post, please enter your password</p>
              <form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
          <input class="password_entry" placeholder="Password" name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" />
          <button id="password_button" type="submit" class="input-btn" name="Submit">Go</button>
          </div>
          </form>
          <p class="custom-password-message"> Sorry, your password is incorrect. </p>
          </div>
            </section>
            </div>
          </div>';

    return $msg;

}

function wpb_password_post_filter( $where = '' ) {
    if (!is_single() && !is_admin()) {
        $where .= " AND post_password = ''";
    }
    return $where;
}
add_filter( 'posts_where', 'wpb_password_post_filter' );


/// oembed skip function to use og tags for linkedin sharing

remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wp_oembed_add_host_js');
