<?php 
/* Theme Functions FIles
*/

register_nav_menus(
    array('primary-menu' => 'Top tt Menu')
);

add_theme_support('post-thumbnails');

add_theme_support('custom-header');


















// function html2wp_theme_setup(){
//     add_theme_support('custom-logo');
//     add_theme_support('title-tag');
//     add_theme_support('post-thumbnails');
//     add_image_size( 'home-featured', 680, 400, array('center','center'));
//     add_image_size( 'single-img', 600, 550, array('center','center'));
//     add_theme_support('automatic-feed-links');

//     register_nav_menus( array(
//         'primary' => __('Primary Menu', 'html2wp')
//     ) );

// };

// add_action('after_setup_theme', 'html2wp_theme_setup' );

// function html2wp_scripts() {
//     wp_enqueue_style( 'style', get_stylesheet_uri() );
//     wp_enqueue_script('jquery');
//     wp_enqueue_script('html2wp-bootstrap', get_template_directory_uri(), '/assets/js/bootstrap.min.js');
//     wp_enqueue_script('html2wp-custom', get_template_directory_uri(), '/assets/js/custom.js');
// }

// add_action('wp_enqueue_scripts', 'html2wp_scripts');

// function html2wp_widgets_init() {

//     register_sidebar( array(
//         'name'          => __( 'Primary Sidebar', 'html2wp' ),
//         'id'            => 'main-sidebar',
//         'description'   => 'Main sidebar on right side',
//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</li>',
//         'before_title'  => '<h2 class="widgettitle">',
//         'after_title'   => '</h2>',
//     ) );

//     register_sidebar( array(
//         'name'          => __( 'Footer Widget 1', 'html2wp' ),
//         'id'            => 'footer-1',
//         'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</li>',
//         'before_title'  => '<h2 class="widgettitle">',
//         'after_title'   => '</h2>',
//     ) );

//     register_sidebar( array(
//         'name'          => __( 'Footer Widget 2', 'html2wp' ),
//         'id'            => 'footer-2',
//         'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</li>',
//         'before_title'  => '<h2 class="widgettitle">',
//         'after_title'   => '</h2>',
//     ) );

//     register_sidebar( array(
//         'name'          => __( 'Footer Widget 3', 'html2wp' ),
//         'id'            => 'footer-3',
//         'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</li>',
//         'before_title'  => '<h2 class="widgettitle">',
//         'after_title'   => '</h2>',
//     ) );
// }

// add_action( 'widgets_init','html2wp_widgets_init' );

// require get_template_directory().'/inc/portfolio.php';

?>

