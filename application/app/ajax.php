<?php

//define('WP_USE_THEMES', false);
require __DIR__.'/../../wp-load.php';

$subject=sanitize_text_field($_POST['subject']);
$chapter=sanitize_text_field($_POST['chapter']);
$topic=sanitize_text_field($_POST['topic']);

$args = array(
	'post_type' => 'lecture',
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
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();

		echo '<h4>'.get_the_title(). '</h4><br />'.get_the_content();
		
	}
} else {
	echo 'No Result Found.';
}
/* Restore original Post Data */
//wp_reset_postdata();


?>