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
		
		<div class="login-branding">
			<?php
		    	$login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;  

		    	    if ( $login === "failed" ) {  
				        echo '<div class="alert alert-red"><p><strong>ERROR:</strong> Invalid username and/or password.</p></div>';  
				    } elseif ( $login === "empty" ) {  
				        echo '<div class="alert alert-red"><p><strong>ERROR:</strong> Username and/or Password is empty.</p></div>';  
				    }elseif ( $login === "activation" ) {  
				        echo '<div class="alert alert-red"><p><strong>ERROR:</strong> Your Account has not been activated yet.</p></div>';  
				    }elseif ( $login === "false" ) {  
				        echo '<div class="alert alert-red"><p><strong>ERROR:</strong> You are logged out.</p></div>';  
				    }    
		    ?>
		</div>  

		<div class="login-form"> 

		<?php if ( !is_user_logged_in() ) { ?> 
		
		<?php 


		$args = array(  
		    'redirect' => $_SERVER['HTTP_REFERER'],
		    'label_username' => __( 'Username: ' ),
        	'label_password' => __( 'Password: ' ),
        	'label_remember' => __( 'Remember Me' ),
        	'label_log_in' => __( 'Log In' ),   
		    'id_username' => 'user',  
		    'id_password' => 'pass',  
		   );

		 wp_login_form( $args ); ?> 
		
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
