<?php
/**
 * FollowSport functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FollowSport
 */


	// setups
	function followsport_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', [
			'height'      => 100,
			'width'       => 100,
			'unlink-homepage-logo' => false, // WP 5.5
		] );

		register_nav_menus([
			'header_menu' => 'Меню в шапке',
			'footer_menu' => 'Меню в подвале',
			'footer_menu' => 'Соц ссылки'
		]);

		add_image_size('max-size', 1140, 600, true);
		add_image_size('portrait', 350, 724, true);
		add_image_size('box', 400, 400, true);
		add_image_size('mediumSize', 600, 320, true);
		add_image_size('blog', 824, 560, true);
		add_image_size('sidebar', 270, 180, true);
	}

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg';

	return $mimes;
}

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}

# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library( $response ) {
	if ( $response['mime'] === 'image/svg+xml' ) {
		// Без вывода названия файла
		$response['sizes'] = [
			'medium' => [
				'url' => $response['url'],
			],
		];
	}

	return $response;
}

function followsport_widgets() {
register_sidebar(array(
	'name' => 'Sidebar',
	'id' => 'sidebar',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'

));
}
add_action('widgets_init', 'followsport_widgets');

//Enqueue scripts and styles.
function followsport_scripts() {
	// register styles and scripts
	wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Jura:wght@300;400&family=Keania+One&family=Roboto:wght@100;300;400;500;700;900&display=swap', array(), null);
	wp_register_style('normalizeCss', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0');
	wp_register_style('slickCss', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array());
	wp_register_style('styleCss', get_stylesheet_uri(), array('slickCss', 'normalizeCss'), '1.0.0');
	wp_register_script('slickJs', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), true);
	wp_register_script('mainScript', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'slickJs'), '1.0.0', true);

	// enqueue styles and scripts
	wp_enqueue_style('fonts');
	wp_enqueue_style('normalizeCss');
	wp_enqueue_style('slickCss');
	wp_enqueue_style('styleCss');
	wp_enqueue_script('jquery');
	wp_enqueue_script('slickJs');
	wp_enqueue_script('mainScript');
}

add_action( 'wp_enqueue_scripts', 'followsport_scripts' );
add_action( 'after_setup_theme', 'followsport_setup' );

add_filter( 'upload_mimes', 'svg_upload_allow' );
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );
add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );




