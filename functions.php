<?php

// replacing submenu class with own class
function replace_submenu_class($menu) {  
    $menu = preg_replace('/ class="sub-menu"/','/ class="navigation-submenu" /',$menu);  
    return $menu;  
  }  

  add_filter('wp_nav_menu','replace_submenu_class'); 
//
// adding theme information stylesheets to website
function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css',array(), false,'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
//


// adding custom stylesheets to website
function load_custom_stylesheets(){
    wp_register_style('root_stylesheet', get_template_directory_uri() . '/css/root.css',array(), false,'all');
    wp_register_style('nav_stylesheet', get_template_directory_uri() . '/css/nav.css',array(), false,'all');
    wp_register_style('footer_stylesheet', get_template_directory_uri() . '/css/footer.css',array(), false,'all');
    wp_register_style('front_page_stylesheet', get_template_directory_uri() . '/css/front-page.css',array(), false,'all');
    wp_register_style('single_stylesheet', get_template_directory_uri() . '/css/single.css',array(), false,'all');
    wp_register_style('archive_stylesheet', get_template_directory_uri() . '/css/archive.css',array(), false,'all');
    wp_register_style('fa_stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('root_stylesheet');
    wp_enqueue_style('nav_stylesheet');
    wp_enqueue_style('footer_stylesheet');
    wp_enqueue_style('front_page_stylesheet');
    wp_enqueue_style('single_stylesheet');
    wp_enqueue_style('archive_stylesheet');
    wp_enqueue_style('fa_stylesheet');
}

add_action('wp_enqueue_scripts', 'load_custom_stylesheets');
//


// adding custom javascrit to webiste
function load_javascript(){
    wp_register_script( 'custom_javascript', get_template_directory_uri() . '/js/scripts.js', '', 1, true );
    wp_enqueue_script('custom_javascript');
}

add_action('wp_enqueue_scripts', 'load_javascript');
//


// adding theme support to admin
function blog_theme_support(){
    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'menus');
    add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'blog_theme_support' );
//

function blog_menus(){
// registering menu locations
    register_nav_menus(
        array(
            // 'top-menu' => __('Top Menu', 'theme'),
            // 'footer-menu' => __('Footer Menu', 'theme')
            'top-menu' => 'Top Menu',
            'footer-menu' => 'Footer Menu'
        )
    );
}

add_action( 'init', 'blog_menus');
//


// adding custom meta viewport tag
function blog_add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}

add_action( 'wp_head', 'blog_add_viewport_meta_tag' , '1' );
//

// No more than 6 li in menus
function blog_menu_filter($items, $args) {
    // want our MAINMENU to have MAX of 6 items
    if ( $args->theme_location == 'top-menu' ) {
        $toplinks = 0;
        foreach ( $items as $k => $v ) {
            if ( $v->menu_item_parent == 0 ) {
                // count how many top-level links we have so far...
                $toplinks++;
            }
            // if we've passed our max # ...
            if ( $toplinks > 6 ) {
                unset($items[$k]);
            }
        }
    }
    return $items;
}

add_filter( 'wp_nav_menu_objects', 'blog_menu_filter',10,2);
//

// remove p tag from img in post content
function filter_ptags_on_images($content)
{
    // do a regular expression replace...
    // find all p tags that have just
    // <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
    // replace it with just the image tag...
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}

// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');
//


// add custom image sizes
add_image_size( 'largest', 1200, 600, true );
add_image_size( 'smallest', 600, 200, true );

?>

