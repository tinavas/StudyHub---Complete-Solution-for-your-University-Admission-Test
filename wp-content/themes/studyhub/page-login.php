<?php
/**
 * The template for displaying login page
 *
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="content">

	<div class="section-content page-banner-section2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Log In</h1>
						</div>
					</div>
				</div>
			</div>


<div class="section-content services-section">
				<div class="title-section">
<div class="container">
		
		<div class="status"></div> 

		<div class="login-form"> 

		<?php if ( !is_user_logged_in() ) { ?> 
		
		<form id="login" action="login" method="post">
			<p>
        		<label for="username">Username </label>
        		<input id="username" type="text" name="username">
        	</p>
        	<p>
        		<label for="password">Password </label>
        		<input id="password" type="password" name="password">
        	</p>
        	<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
        	<p>
        		<input class="submit_button" type="submit" value="Login" name="submit">
    		</p
        	
   	 	</form>
		
		<div class="button-shortcodes text-size-4 text-padding-4 version-1"><span></span> 
			<a href="<?php echo get_site_url() . "/reset"; ?>" title="Lost Password">
			Forgot Password?</a>
		</div>
		<div class="button-shortcodes text-size-4 text-padding-4 version-1"><span></span> 
			<a href="<?php echo get_site_url() . "/wp-login.php?action=register"; ?>">
			Not Registered?</a> 
		</div>
		

		<?php }else{ ?>
			<p>You are already logged in !!!</p>
	<?php } ?>
		</div> 

		

	</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php

get_footer();
