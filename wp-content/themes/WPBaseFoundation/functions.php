<?php


//Enquing all Scripts here, Stylesheets, Foundation, Mean-Menu. You can place all jQuery in scripts.js or enque your own file.

function require_scripts() {  
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/stylesheets/app.css', true );
    wp_enqueue_style( 'icon-font', get_template_directory_uri() . '/fonts/icons-stylesheet.css', true ); 
    wp_register_script('jquery', get_template_directory_uri() . '/javascripts/vendor/jquery.js', true ); 
    wp_register_script('jquery2', get_template_directory_uri() . '/javascripts/vendor/jquery.js', true );
    wp_register_script('cycle2', get_template_directory_uri() . '/javascripts/vendor/cycle2.min.js', true ); 
    wp_register_script('modernizr', get_template_directory_uri() . '/javascripts/vendor/modernizr.js', true );   
    wp_register_script('foundation', get_template_directory_uri() . '/javascripts/foundation/foundation.min.js', true ); 
    wp_register_script('mean-menu', get_template_directory_uri() . '/javascripts/mean-menu/jquery.meanmenu.2.0.min.js', true );
    wp_register_script('scripts', get_template_directory_uri() . '/javascripts/scripts.js', true );
    wp_enqueue_script( 'stylesheet' );  
    wp_enqueue_script( 'icon-font' ); 
    wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'jquery2' ); 
    wp_enqueue_script( 'cycle2' ); 
    wp_enqueue_script( 'modernizr' );   
    wp_enqueue_script( 'foundation' );
    wp_enqueue_script( 'mean-menu' );
    wp_enqueue_script( 'scripts' );

}  

add_action( 'wp_enqueue_scripts', 'require_scripts', 5 );  

//Registering a Main Menu and an Extra

function wpbf_register_my_menus() {
  register_nav_menus(
    array(
      'menu' => __( 'Main Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}

add_action( 'init', 'wpbf_register_my_menus' );

// Sidebars & Widgetizes Areas. There's 3 here, it's pretty simple to add another or remove.
function wpbf_register_sidebars() {

    register_sidebar(array(
        'id' => 'sidebar-1',
        'name' => __( 'Sidebar One' ),
        'description' => 'The first (primary) sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'id' => 'sidebar-2',
        'name' => __( 'Sidebar Two' ),
        'description' => 'The second (primary) sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
        register_sidebar(array(
        'id' => 'sidebar-3',
        'name' => __( 'Sidebar Three' ),
        'description' => 'The third (primary) sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
} 

add_action( 'widgets_init', 'wpbf_register_sidebars' );

//Adding Support for Post Thumbnails, because, you'll probally want them

add_theme_support( 'post-thumbnails' ); 

//ADDITIONAL FEATURES! Handy little things I use.


//Adding Custom Image Sizes. Uncomment code to use.

//add_image_size('featured', 1024, 350 , true);
add_image_size('work', 900, 600, crop );
add_image_size('work-2', 500, 300, crop );
add_image_size('slider-work', 800, 604, crop );

// Class for pagination buttons - chris
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');
 
function post_link_attributes($output) {
    $code = 'class="button primary"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}

function my_page_css_class( $css_class, $page ) {
    global $post;
    if ( $post->ID == $page->ID ) {
        $css_class[] = 'current_page_item';
    }
    return $css_class;
}
add_filter( 'page_css_class', 'my_page_css_class', 10, 2 );

class Walker_CPT extends Walker_Page {
    function start_el($output, $page, $depth, $args, $current_page) {
        global $post;
 
        // The $current_page variable doesn't get set if we're not
        //   on a standard page, so we'll set it here before 
        //   generating the list.
        // Check is_singular() first so it doesn't give false
        //   positives on archive pages.
        if (is_singular()) $current_page = $post->ID;
 
        // Run the original start_el() function after setting the
        //   $current_page variable
        parent::start_el($output, $page, $depth, $args, $current_page);
    }
}

/***************************************************** 
//Custom Exceprt Length. Uncomment code to use.

function wpbf_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'wpbf_excerpt_length', 999 );

*****************************************************/


/***************************************************** 
// Add Readmore to end of excerpts

function wpbf_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}

add_filter( 'excerpt_more', 'wpbf_excerpt_more' );

*****************************************************/

?>