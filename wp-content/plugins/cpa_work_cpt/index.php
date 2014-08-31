<?php
/*
Plugin Name: Project Post Type
Version: 1.0
Description: Creates custom post type for Projects
Author: Chris Allen
License: GNU General Public License v2 or later
*/

//----------------------------------------------
//----------register and label gallery post type
//----------------------------------------------
function cpa_post_type(){
$cpa_labels = array(
    'name' => _x('Projects', 'post type general name'),
    'singular_name' => _x('Project', 'post type singular name'),
    'add_new' => _x('Add New', 'project'),
    'add_new_item' => __("Add New Project"),
    'edit_item' => __("Edit Project"),
    'new_item' => __("New Project"),
    'view_item' => __("View Project"),
    'search_items' => __("Search Project"),
    'not_found' =>  __('No projects found'),
    'not_found_in_trash' => __('No projects found in Trash'), 
    'parent_item_colon' => '',
    'menu_name'          => 'Projects'
        
);
$cpa_args = array(
    'labels' => $cpa_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite'   => array( 'slug' => 'work' ),
    'hierarchical' => true,
    'menu_position' => 5,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
    'has_archive' => true,
    'menu_icon'=>'dashicons-format-gallery'
); 
register_post_type('project', $cpa_args);
}
add_action( 'init', 'cpa_post_type', 0);

//----------------------------------------------
//----------register and label custom taxonomy
//----------------------------------------------
function cpa_taxonomies_projects() {
  $labels = array(
    'name'              => _x( 'Project Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Project Categories' ),
    'all_items'         => __( 'All Project Categories' ),
    'parent_item'       => __( 'Parent Project Category' ),
    'parent_item_colon' => __( 'Parent Project Category:' ),
    'edit_item'         => __( 'Edit Project Category' ), 
    'update_item'       => __( 'Update Project Category' ),
    'add_new_item'      => __( 'Add New Project Category' ),
    'new_item_name'     => __( 'New Project Category' ),
    'menu_name'         => __( 'Project Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'project_category', 'project', $args );
}
add_action( 'init', 'cpa_taxonomies_projects', 0 );


//----------------------------------------------
//----------register custom post meta box
//----------------------------------------------
add_action( 'load-post.php', 'cpa_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'cpa_post_meta_boxes_setup' );

/* Meta box setup function. */
function cpa_post_meta_boxes_setup() {

  /* Add meta boxes on the 'add_meta_boxes' hook. */
  add_action( 'add_meta_boxes', 'cpa_add_post_meta_boxes' );
   /* Save post meta on the 'save_post' hook. */
  add_action( 'save_post', 'cpa_save_post_class_meta', 10, 2 );
}

/* Create one or more meta boxes to be displayed on the post editor screen. */
function cpa_add_post_meta_boxes() {

  add_meta_box(
    'cpa-post-class',      // Unique ID
    esc_html__( 'Brand Color', 'example' ),    // Title
    'cpa_post_class_meta_box',   // Callback function
    'project',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
}


/* Display the post meta box. */
function cpa_post_class_meta_box( $object, $box ) { ?>

  <?php wp_nonce_field( basename( __FILE__ ), 'cpa_post_class_nonce' ); ?>

  <p>
    <label for="cpa-post-class"><?php _e( "Enter in a hex value for the companies brand.", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="cpa-post-class" id="cpa-post-class" value="<?php echo esc_attr( get_post_meta( $object->ID, 'cpa_post_class', true ) ); ?>" size="30" />
  </p>
<?php }

/* Save the meta box's post metadata. */
function cpa_save_post_class_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['cpa_post_class_nonce'] ) || !wp_verify_nonce( $_POST['cpa_post_class_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['cpa-post-class'] ) ? sanitize_html_class( $_POST['cpa-post-class'] ) : '' );

  /* Get the meta key. */
  $meta_key = 'cpa_post_class';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $meta_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $meta_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $meta_key, $meta_value );
}
