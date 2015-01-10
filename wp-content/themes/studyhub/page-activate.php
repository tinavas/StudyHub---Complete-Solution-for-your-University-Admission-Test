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
							<h1>Account Activation</h1>
						</div>
					</div>
				</div>
			</div>


<div class="section-content services-section">
				<div class="title-section">
<div class="container">
		
		<?php

		if(is_user_logged_in()){
			echo '<div class="alert alert-green">You are already logged in !!!</P></div>';
		}else{

		if(isset($_GET['id']) && isset($_GET['key'])){

			$username = esc_attr( $_GET['id'] );
			$key = esc_attr( $_GET['key'] );

			$u = get_user_by( 'login', $username );

			$id = $u->ID;

			$a_key = get_user_meta( $id, 'hash', true );

			if($a_key === $key){

				$active = get_user_meta( $id, 'active', true );

				if($active === 'true'){
					echo '<div class="alert alert-green"><p>Your account has already been activated. <br /> You will be able to log in at 
					<a href="'.get_site_url() . '/login"><strong>Login Page.</strong></a></P></div>';
				}elseif(update_user_meta( $id, 'active', 'true' )){
					echo '<div class="alert alert-green"><p>Your Account has been activated. To log in go to
					<a href="'.get_site_url() . '/login"><strong>Login Page.</strong></a></P></div>';
				}else{
				echo '<div class="alert alert-red">We are unable to activate your account now. Please try later or contact us.</P></div>';
			}
			}else{
				echo '<div class="alert alert-red">Your Activation key does match with our system.</P></div>';
			}

		}else{
			echo '<div class="alert alert-red">Something wrong happened with your activation key.</P></div>';
		}

	}


		?>

		

	</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php

get_footer();
