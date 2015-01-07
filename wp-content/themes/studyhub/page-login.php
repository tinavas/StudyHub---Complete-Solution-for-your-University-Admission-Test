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
				        echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';  
				    } elseif ( $login === "empty" ) {  
				        echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';  
				    }elseif ( $login === "activation" ) {  
				        echo '<p class="login-msg"><strong>ERROR:</strong> Your Account has not been activated yet.</p>';  
				    }elseif ( $login === "false" ) {  
				        echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';  
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
		 
		 <a href="<?php echo get_site_url() . "/reset"; ?>" title="Lost Password">Forgot Password?</a>
		<a href="<?php echo get_site_url() . "/wp-login.php?action=register"; ?>">Not Registered?</a> 
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
