<?php

//define('WP_USE_THEMES', false);
require __DIR__.'/../../wp-load.php';

$subject=sanitize_text_field($_POST['subject']);
$chapter=sanitize_text_field($_POST['chapter']);
$topic=sanitize_text_field($_POST['topic']);
$category=sanitize_text_field($_POST['category']);

if($category == 'lecture'){
$args = array(
	'post_type' => $category,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'subject',
			'field'    => 'slug',
			'terms'    => array($subject),
		),
		array(
			'taxonomy' => 'Chapter',
			'field'    => 'slug',
			'terms'    => array($chapter),
		),
		array(
			'taxonomy' => 'Topic',
			'field'    => 'slug',
			'terms'    => array($topic),
		),
	),
	);
}else{
	$args = array(
	'post_type' => $category,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'subject-of-question',
			'field'    => 'slug',
			'terms'    => array($subject),
		),
		array(
			'taxonomy' => 'chapter-of-question',
			'field'    => 'slug',
			'terms'    => array($chapter),
		),
		array(
			'taxonomy' => 'topic-of-question',
			'field'    => 'slug',
			'terms'    => array($topic),
		),
	),
	);
}
$query = new WP_Query( $args );

// The Loop
if($category == 'lecture'){
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();

			echo '<h4>'.get_the_title(). '</h4><br />'.get_the_content();
			
		}
	} else {
		echo 'No Result Found.';
	}
}else{
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();

			echo '<h4>'.get_the_title(). '</h4>';
			echo '<p>'.get_post_meta( get_the_ID(), 'question_option_a', true).'</p>';
			echo '<p>'.get_post_meta( get_the_ID(), 'question_option_b', true).'</p>';
			echo '<p>'.get_post_meta( get_the_ID(), 'question_option_c', true).'</p>';
			echo '<p>'.get_post_meta( get_the_ID(), 'question_option_d', true).'</p>';
			echo '<p>'.get_post_meta( get_the_ID(), 'question_answer', true).'</p>';

		}
	} else {
		echo 'No Result Found.';
	}
}


?>