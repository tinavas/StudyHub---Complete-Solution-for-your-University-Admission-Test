<?php

get_header(); ?>

<div id="content">

	<div class="section-content page-banner-section2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Registration</h1>
						</div>
					</div>
				</div>
			</div>


<div class="section-content services-section">
				<div class="title-section">
<div class="container">

	<div class="user-registartion">
		
		<div id="status"></div> 

		<?php if ( !is_user_logged_in() ) { ?> 
		
		<form method="post" id="rego-form">

			<?php
				// to make our script safe, it's a best practice to use nonce on our form to check things out
				if ( function_exists( 'wp_nonce_field' ) )
				wp_nonce_field( 'rs_user_registration_action', 'rs_user_registration_nonce' );
			?>
		    <p>
		    <label for="username">Username <span class="redstar">*</span></label>
		    <input type="text" id="username" name="username" />
		    </p>
		     
		    <p>
		    <label for="email">Email <span class="redstar">*</span></label>
		    <input type="text" id="email" name="email"  />
		    </p>
		     
		    
		    <p>
		    <label for="fname">First Name</label>
		    <input type="text" id="fname" name="fname" />
		    </p>
		     
		    <p>
		    <label for="lname">Last Name</label>
		    <input type="text" id="lname" name="lname" />
		    </p>

 
    		<div class="g-recaptcha" data-sitekey="6LeaGwATAAAAAI4o0MepK0rLsCqvICWpEzrz638j"></div>
    		<div id="gcap"></div>

  
     		<p>
    			<input type="submit" name="submit" id="submit" value="Register" />
    			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" id="preloader" alt="Preloader" />
    		</p>
    	</form>
<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('gcap', {
          'sitekey' : '6LeaGwATAAAAAI4o0MepK0rLsCqvICWpEzrz638j'
        });
      };
    </script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>		

		<?php }else{ ?>
			<p>You are already logged in !!! Why are you trying to register !!!</p>
	<?php } ?>

	</div>


</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php

get_footer();
