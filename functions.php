<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
  
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_style('boostrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
    wp_enqueue_style('boostrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css');
 
   
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-1.12.0.min.js', array());
    wp_enqueue_script('ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array());
    
    wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css', array());
    wp_enqueue_style('w3', 'https://www.w3schools.com/w3css/4/w3.css', array());
    wp_enqueue_script('aosscript', 'https://unpkg.com/aos@next/dist/aos.js', array());
   
    wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array());
    wp_enqueue_style('fontawesome.min.css', get_stylesheet_directory_uri() . '/fonts/fontawesome-free-5.15.3-web/css/fontawesome.min.css', array());
    wp_enqueue_style('regular.min.css', get_stylesheet_directory_uri() . '/fonts/fontawesome-free-5.15.3-web/css/regular.min.css', array());
    wp_enqueue_style('solid.min.css', get_stylesheet_directory_uri() . '/fonts/fontawesome-free-5.15.3-web/css/solid.min.css', array());

 wp_enqueue_script('customjs', get_stylesheet_directory_uri() . '/js/custom.js', array());
    wp_enqueue_style('customcss', get_stylesheet_directory_uri() . '/css/custom.css', array());
    wp_enqueue_style('mobile_style', get_stylesheet_directory_uri() . '/css/mobile_Style.css', array());
   
  
	



}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
//menu 

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
        

        )
    );
}

//module Réalisation

function wpm_custom_post_type(){
    $RealisationLabels = array(
        'name' => _x('Réalisation', 'Post Type General Name'),
        'singular_name' => _x('Réalisation', 'Post Type Singular Name'),
        'menu_name' => __('Réalisation'),
        'all_items' => __('Toutes les Réalisations'),
        'view_item' => __('Voir les Réalisation'),
        'add_new_item' => __('Ajouter une nouvelle Réalisation'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Editer la Réalisation'),
        'update_item' => __('Modifier la Réalisation'),
        'search_items' => __('Rechercher une Réalisation'),
        'not_found' => __('Non trouvée'),
        'not_found_in_trash' => __('Non trouvée dans la corbeille'),
    );

    $RealisationArgs = array(
        'label' => __('realisation'),
        'description' => __('Tous sur realisation'),
        'labels' => $RealisationLabels,
        'menu_icon'      => 'dashicons-megaphone',
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'show_in_rest' => true,
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'realisation'),

    );

    register_post_type('realisation', $RealisationArgs);

    $labels_cat_realisation = array(
        'name'                       => _x("Catégories réalisations", 'taxonomy general name'),
        'singular_name'              => _x("Catégories réalisations", "taxonomy singular name"),
        'search_items'               => __('Rechercher une réalisationn'),
        'popular_items'              => __('Catégories populaires'),
        'all_items'                  => __('Toutes les catégories'),
        'edit_item'                  => __('Editer une catégorie'),
        'update_item'                => __('Mettre à jour une catégorie'),
        'add_new_item'               => __('Ajouter une nouvelle catégorie'),
        'new_item_name'              => __('Nom de la nouvelle catégorie'),
        'add_or_remove_items'        => __('Ajouter ou supprimer une catégorie'),
        'choose_from_most_used'      => __('Choisir parmi les catégories les plus utilisées'),
        'not_found'                  => __('Pas de catégories trouvées'),
        'menu_name'                  => __('Catégories des réalisations'),
    );

    $args_cat_realisation = array(
        // Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
        'hierarchical'          => true,
        'labels'                => $labels_cat_realisation,
        'show_ui'               => true,
        'show_in_rest'            => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'categoriesrealisation'),
    );

    register_taxonomy('categoriesrealisation', 'realisation', $args_cat_realisation);



    $PrestationLabels = array(
        'name' => _x('Préstation', 'Post Type General Name'),
        'singular_name' => _x('Préstation', 'Post Type Singular Name'),
        'menu_name' => __('Préstation'),
        'all_items' => __('Toutes les Préstations'),
        'view_item' => __('Voir les Préstation'),
        'add_new_item' => __('Ajouter une nouvelle Préstation'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Editer la Préstation'),
        'update_item' => __('Modifier la Préstation'),
        'search_items' => __('Rechercher une Préstation'),
        'not_found' => __('Non trouvée'),
        'not_found_in_trash' => __('Non trouvée dans la corbeille'),
    );

    $PrestationArgs = array(
        'label' => __('Prestation'),
        'description' => __('Tous sur Prestation'),
        'labels' => $PrestationLabels,
        'menu_icon'      => 'dashicons-megaphone',
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields',),
        'show_in_rest' => true,
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'prestation'),

    );

    register_post_type('prestation', $PrestationArgs);



   
}
add_action('init', 'wpm_custom_post_type');

function istop_classes($id){

    $terms = wp_get_post_terms(get_the_id(), 'categoriesrealisation');
    foreach ($terms as $term) {
        echo $term->name. ' ';
    }

    $catrealisations = get_the_category(get_the_id());
    foreach ($catrealisations as $category) {
        echo $category->slug. ' ';
    }
}

function realisationAll(){
    $realisation_args = array(
        'post_type' => 'realisation',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'ASC',
    );
    return new WP_Query($realisation_args);
}
function prestationAll(){
    $prestation_args = array(
        'post_type' => 'prestation',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'ASC',
    );
    return new WP_Query($prestation_args);
}

