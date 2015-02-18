<?php

function model_test_custom_posttype() {
    
    $labels = array(
        'name'               => 'Model Tests',
        'singular_name'      => 'Model Test',
        'menu_name'          => 'Model Tests',
        'name_admin_bar'     => 'Model Test',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Model Test',
        'new_item'           => 'New Model Test',
        'edit_item'          => 'Edit Model Test',
        'view_item'          => 'View Model Test',
        'all_items'          => 'All Questions',
        'search_items'       => 'Search Model Tests',
        'parent_item_colon'  => 'Parent Model Tests:',
        'not_found'          => 'No Model Tests found.',
        'not_found_in_trash' => 'No Model Tests found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'model-tests' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title' )
    );
    register_post_type( 'model-test', $args );
}
add_action( 'init', 'model_test_custom_posttype' );

// Custom Taxonomies for question
function my_model_test_taxonomies() {
	
    $labels = array(
        'name'              => 'Model Test Number',
        'singular_name'     => 'Model Test Number',
        'search_items'      => 'Search Model Test Number',
        'all_items'         => 'All Model Test Number',
        'parent_item'       => 'Parent Model Test Number',
        'parent_item_colon' => 'Parent Model Test Number:',
        'edit_item'         => 'Edit Model Test Number',
        'update_item'       => 'Update Model Test Number',
        'add_new_item'      => 'Add New Model Test Number',
        'new_item_name'     => 'New Model Test Number',
        'menu_name'         =>'Model Test Number',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'model-test-number' ),
    );

    register_taxonomy( 'model-test-number', array( 'model-test' ), $args );

}

    add_action( 'init', 'my_model_test_taxonomies' );

/* custom meta box for Question post type */

// Add the Meta Box
function model_test_meta_box() {
    add_meta_box(
        'model_test_meta_box', // $id
        'model test Meta Box', // $title
        'show_model_test_meta_box', // $callback
        'model-test', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'model_test_meta_box');

// Field Array
$prefix = 'model_test_';
$model_test_meta_fields = array(
    array(
        'label'=> 'Option A',
        'desc'  => '',
        'id'    => $prefix.'option_a',
        'type'  => 'text'
    ),

    array(
        'label'=> 'Option B',
        'desc'  => '',
        'id'    => $prefix.'option_b',
        'type'  => 'text'
    ),

 	array(
        'label'=> 'Option C',
        'desc'  => '',
        'id'    => $prefix.'option_c',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Option D',
        'desc'  => '',
        'id'    => $prefix.'option_d',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Right Answer',
        'desc'  => '',
        'id'    => $prefix.'answer',
        'type'  => 'text'
    )
);

// The Callback
function show_model_test_meta_box() {
global $model_test_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="model_test_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
     
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($model_test_meta_fields as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
                switch($field['type']) {
                    case 'text':
                    echo '<input type="text" 
                    name="'.$field['id'].'" id="'.$field['id'].'" 
                    value="'.$meta.'" size="30" />';
                    break;
                } //end switch
        echo '</td></tr>';
    } // end foreach
    echo '</table>'; // end table
}

// Save the Data
function save_model_test_meta($post_id) {
    global $model_test_meta_fields;
     
    // verify nonce
    if (!wp_verify_nonce($_POST['model_test_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }
     
    // loop through fields and save the data
    foreach ($model_test_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_model_test_meta');

// for changing text of place holder in title field
function wpb_change_model_title_text( $title ){
     $screen = get_current_screen();
 
     if  ( 'model-test' == $screen->post_type ) {
          $title = 'Enter Question Here';
     }
 
     return $title;
}
 
add_filter( 'enter_title_here', 'wpb_change_model_title_text' );