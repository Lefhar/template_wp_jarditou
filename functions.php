<?php
/**
 * Functions and definitions
 *
 * 
 *
 * @package WordPress
 * @subpackage jarditou
 * @since jarditou 1.0
 */

// This theme requires WordPress 5.3 or later.
add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
function gkp_insert_css_in_head() {
    // On ajoute le css general du theme
    wp_register_style('font-awesome.min', get_bloginfo('template_directory' ).'/assets/css/font-awesome.min.css' ,'',false,'screen');
    wp_enqueue_style( 'font-awesome.min' );
    wp_register_style('style', get_bloginfo( 'template_directory' ).'/assets/css/style.css?id=8' ,'',false,'screen');
    wp_enqueue_style( 'style' );
}

add_action('init', 'gkp_insert_js_in_footer');
function gkp_insert_js_in_footer() {

// On verifie si on est pas dans l'admin
if( !is_admin() ) :

    // On annule jQuery installer par WordPress (version 1.4.4
    wp_deregister_script( 'jquery' );

    // On declare un nouveau jQuery dernière version grace au CDN de Google
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js','',false,true);
    wp_enqueue_script( 'jquery' );

    // On insere le fichier de ses propres fonctions javascript
    wp_register_script('script', get_bloginfo( 'template_directory' ).'/assets/js/script.js','',false,true);
    wp_enqueue_script( 'script' );


    // On insere le fichier de ses propres fonctions javascript
    wp_register_script('popper.min', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','',false,true);
    wp_enqueue_script( 'popper.min' );


    // On insere le fichier de ses propres fonctions javascript
    wp_register_script('bootstrap.min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js','',false,true);
    wp_enqueue_script( 'bootstrap.min' );

endif;
}



function wpbootstrap_after_setup_theme() {
    // On ajoute un menu
    register_nav_menu('header_menu', "Menu du header");
    // On ajoute une classe php permettant de gérer les menus Bootstrap
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
            // On ajoute le support du html5 pour les listes de commentaires
            add_theme_support('html5', array('comment-list'));
}
add_action('after_setup_theme', 'wpbootstrap_after_setup_theme');

// On ajoute une sidebar
function wpbootstrap_sidebar() {
    register_sidebar([
        'name'          => "Sidebar principale",
        'id'            => 'main-sidebar',
        'description'   => "La sidebar principale",
        'before_widget' => '<div id="%1$s" class="widget %2$s p-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title font-italic">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'wpbootstrap_sidebar');


add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
function add_search_form($items, $args) {
if( $args->theme_location == 'MENU-NAME' )
        $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'">
        <input type="text" value="search" name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
        return $items;
}

function jarditou_custom_logo_setup() 
{
   $aParams = array(
    'width'                  => 300,
    'height'                 => 90,
    'default-image' => get_template_directory_uri() . '/assets/src/img/jarditou_logo.jpg',
      'header-text' => array( 'site-title', 'site-description' ),
   );

   // Ajout du support 
   add_theme_support('custom-logo', $aParams );

}

add_action( 'after_setup_theme', 'jarditou_custom_logo_setup' );

function jarditou_custom_ban_setup() 
{
   $aParams = array(
    'width'                  => 1110,
    'height'                 => 214,
    'default-image' => get_template_directory_uri() . '/assets/src/img/promotion.jpg',
      'header-text' => array( 'site-title', 'site-description' ),
   );

   // Ajout du support 
   add_theme_support('custom-header', $aParams );
}

add_action( 'after_setup_theme', 'jarditou_custom_ban_setup' );