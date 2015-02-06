<?php

function question_custom_posttype() {
    
    $labels = array(
        'name'               => 'Questions',
        'singular_name'      => 'Question',
        'menu_name'          => 'Questions',
        'name_admin_bar'     => 'Question',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Question',
        'new_item'           => 'New Question',
        'edit_item'          => 'Edit Question',
        'view_item'          => 'View Question',
        'all_items'          => 'All Questions',
        'search_items'       => 'Search Questions',
        'parent_item_colon'  => 'Parent Questions:',
        'not_found'          => 'No questions found.',
        'not_found_in_trash' => 'No questions found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'questions' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title' )
    );
    register_post_type( 'question', $args );
}
add_action( 'init', 'question_custom_posttype' );

// Custom Taxonomies for question
function my_question_taxonomies() {
	
    $labels = array(
        'name'              => 'Subject of Question',
        'singular_name'     => 'Subject of Question',
        'search_items'      => 'Search Subjects of Question',
        'all_items'         => 'All Subjects of Question',
        'parent_item'       => 'Parent Subject of Question',
        'parent_item_colon' => 'Parent Subject of Question:',
        'edit_item'         => 'Edit Subject of Question',
        'update_item'       => 'Update Subject of Question',
        'add_new_item'      => 'Add New Subject of Question',
        'new_item_name'     => 'New Subject of Question Name',
        'menu_name'         => 'Subject of Question',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'subject-of-question' ),
    );

    register_taxonomy( 'subject-of-question', array( 'question' ), $args );

    $labels = array(
        'name'              => 'Chapter of Question',
        'singular_name'     => 'Chapter of Question',
        'search_items'      => 'Search Chapters of Question',
        'all_items'         => 'All Chapters of Question',
        'parent_item'       => 'Parent Chapter of Question',
        'parent_item_colon' => 'Parent Chapter of Question:',
        'edit_item'         => 'Edit Chapter of Question',
        'update_item'       => 'Update Chapter of Question',
        'add_new_item'      => 'Add New Chapter of Question',
        'new_item_name'     => 'New Chapter of Question Name',
        'menu_name'         => 'Chapter of Question',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'chapter-of-question' ),
    );

    register_taxonomy( 'chapter-of-question', array( 'question' ), $args );

    $labels = array(
        'name'              => 'Topic of Question',
        'singular_name'     => 'Topic of Question',
        'search_items'      => 'Search Topics of Question',
        'all_items'         => 'All Topics of Question',
        'parent_item'       => 'Parent Topic of Question',
        'parent_item_colon' => 'Parent Topic of Question:',
        'edit_item'         => 'Edit Topic of Question',
        'update_item'       => 'Update Topic of Question',
        'add_new_item'      => 'Add New Topic of Question',
        'new_item_name'     => 'New Topic of Question Name',
        'menu_name'         => 'Topic of Question',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'topic-of-question' ),
    );

    register_taxonomy( 'topic-of-question', array( 'question' ), $args );
}

    add_action( 'init', 'my_question_taxonomies' );

/* custom meta box for Question post type */

// Add the Meta Box
function question_meta_box() {
    add_meta_box(
        'question_meta_box', // $id
        'question Meta Box', // $title
        'show_question_meta_box', // $callback
        'question', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'question_meta_box');

// Field Array
$prefix = 'question_';
$question_meta_fields = array(
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
function show_question_meta_box() {
global $question_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="question_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
     
    // Begin the field table and loop
    echo '<table class="form-table">';
    foreach ($question_meta_fields as $field) {
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
function save_question_meta($post_id) {
    global $question_meta_fields;
     
    // verify nonce
    if (!wp_verify_nonce($_POST['question_meta_box_nonce'], basename(__FILE__)))
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
    foreach ($question_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_question_meta');