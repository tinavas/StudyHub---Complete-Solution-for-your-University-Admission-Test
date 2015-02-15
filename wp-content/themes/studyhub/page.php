<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 


if ( is_single() ) :

	the_title( '<div class="section-content page-banner-section2">
		<div class="container"><div class="row">
			<div class="col-sm-12"><h1>', 
			'</h1></div></div></div></div>' );
else :
	the_title( '<div class="section-content page-banner-section2">
		<div class="row">
			<div class="col-sm-12"><h1>', '</h1></div></div></div>' );
endif;

?>

<div class="section-content services-section">
				<div class="title-section">
<div class="container">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
	</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php

get_footer();
