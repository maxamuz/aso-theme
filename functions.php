<?php

/**
 * aso-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aso-theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aso_theme_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on aso-theme, use a find and replace
	 * to change 'aso-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('aso-theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'aso-theme'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'aso_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'aso_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aso_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('aso_theme_content_width', 640);
}
add_action('after_setup_theme', 'aso_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aso_theme_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'aso-theme'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'aso-theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'aso_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function aso_theme_scripts()
{
	wp_enqueue_style('aso-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('aso-bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

	wp_enqueue_style('aso-main-style', get_template_directory_uri() . '/assets/css/main.css');
	wp_style_add_data('aso-theme-style', 'rtl', 'replace');

	wp_enqueue_script('aso-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script(
		'aso-theme-bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
		array(),
		_S_VERSION,
		true
	);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'aso_theme_scripts');

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

function woocommerce_template_loop_product_link_open()
{
	global $product;

	$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

	echo '<a href="' . esc_url($link) . '" class="product_block_image woocommerce-LoopProduct-link woocommerce-loop-product__link">';
}

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

add_action('woocommerce_before_shop_loop_item_title', 'add_woocommerce_template_loop_product_thumbnail', 10);

function add_woocommerce_template_loop_product_thumbnail()
{
	echo get_the_post_thumbnail();
}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

function woocommerce_template_loop_product_title()
{
	echo the_title('<span href="/product/kompressor-aso-vk-37-8-2/" class="product_block_name">', '</span>');
}

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_product_block_props', 7);

function woocommerce_product_block_props()
{
	echo '<ul class="product_block_props">
	<li>Производительность: 6.5 м³/мин</li
	<li>Давление: 8 бар</li>
	<li>Мощность: 37 кВт</li>	
    </ul>';
}

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}


add_filter('get_search_form', 'my_search_form');
function my_search_form($form)
{

	$form = '
	<form method="get" action="' . home_url('/') . '" class="header_search d-none d-sm-block">
		<input class="header_search_input" type="text" name="s" placeholder="Поиск по каталогу:"
			value="">
		<button class="header_search_btn">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0e1e58" class="bi bi-search" viewBox="0 0 16 16">
		<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
	  </svg>
		</button>
	</form>';

	return $form;
}

/*--- Вывод иконки в главном меню ----*/

add_filter('wp_nav_menu_items', 'add_new_menu_item', 10, 2);
function add_new_menu_item($nav, $args)
{
	if ($args->theme_location == 'menu-1')
		$newmenuitem = '<li class="home-link"><a href="' . home_url() . '"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
		<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
	  </svg></li>';
	$nav = $newmenuitem . $nav;
	return $nav;
}
