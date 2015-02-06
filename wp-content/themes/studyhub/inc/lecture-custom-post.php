<?php
function lecture_custom_posttype() {
    
    $labels = array(
        'name'               => 'Lectures',
        'singular_name'      => 'Lecture',
        'menu_name'          => 'Lectures',
        'name_admin_bar'     => 'Lecture',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Lecture',
        'new_item'           => 'New Lecture',
        'edit_item'          => 'Edit Lecture',
        'view_item'          => 'View Lecture',
        'all_items'          => 'All Lectures',
        'search_items'       => 'Search Lectures',
        'parent_item_colon'  => 'Parent Lectures:',
        'not_found'          => 'No lectures found.',
        'not_found_in_trash' => 'No lectures found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lectures' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'lecture', $args );
}
add_action( 'init', 'lecture_custom_posttype' );

// Custom Taxonomies for lecture
function my_lecture_taxonomies() {
	
    $labels = array(
        'name'              => 'Subjects',
        'singular_name'     => 'Subject',
        'search_items'      => 'Search Subjects',
        'all_items'         => 'All Subjects',
        'parent_item'       => 'Parent Subject',
        'parent_item_colon' => 'Parent Subject:',
        'edit_item'         => 'Edit Subject',
        'update_item'       => 'Update Subject',
        'add_new_item'      => 'Add New Subject',
        'new_item_name'     => 'New Subject Name',
        'menu_name'         => 'Subject',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'subject' ),
    );

    register_taxonomy( 'subject', array( 'lecture' ), $args );

    $labels = array(
        'name'              => 'Chapters',
        'singular_name'     => 'Chapter',
        'search_items'      => 'Search Chapters',
        'all_items'         => 'All Chapters',
        'parent_item'       => 'Parent Chapter',
        'parent_item_colon' => 'Parent Chapter:',
        'edit_item'         => 'Edit Chapter',
        'update_item'       => 'Update Chapter',
        'add_new_item'      => 'Add New Chapter',
        'new_item_name'     => 'New Chapter Name',
        'menu_name'         => 'Chapter',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'Chapter' ),
    );

    register_taxonomy( 'Chapter', array( 'lecture' ), $args );

    $labels = array(
        'name'              => 'Topics',
        'singular_name'     => 'Topic',
        'search_items'      => 'Search Topics',
        'all_items'         => 'All Topics',
        'parent_item'       => 'Parent Topic',
        'parent_item_colon' => 'Parent Topic:',
        'edit_item'         => 'Edit Topic',
        'update_item'       => 'Update Topic',
        'add_new_item'      => 'Add New Topic',
        'new_item_name'     => 'New Topic Name',
        'menu_name'         => 'Topic',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'Topic' ),
    );

    register_taxonomy( 'Topic', array( 'lecture' ), $args );
}

    add_action( 'init', 'my_lecture_taxonomies' );
