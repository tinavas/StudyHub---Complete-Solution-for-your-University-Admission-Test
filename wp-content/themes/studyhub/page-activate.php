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

		if(isset($_GET['id']) && isset($_GET['key'])){

			$username = esc_attr( $_GET['id'] );
			$key = esc_attr( $_GET['key'] );

			$u = get_user_by( 'login', $username );

			$id = $u->ID;

			$a_key = get_user_meta( $id, 'hash', true );

			if($a_key === $key){

				$active = get_user_meta( $id, 'active', true );

				if($active === 'true'){
					echo "Your account has already been activated.";
					echo "You will be able to log in at "; ?>
					<a href="<?php echo get_site_url() . "/login"; ?>"><strong>Login Page.</strong></a>
					<?php 
				}elseif(update_user_meta( $id, 'active', 'true' )){
					echo 'Your Account has been activated. To log in go to'; ?>
					<a href="<?php echo get_site_url() . "/login"; ?>"><strong>Login Page.</strong></a>
					<?php
				}else{
				echo "We are unable to activate your account now. Please try later or contact us.";
			}
			}else{
				echo "Your Activation key does match with our system.";
			}

		}else{
			echo "Something wrong happened with your activation key.";
		}


		?>

		

	</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php

get_footer();
