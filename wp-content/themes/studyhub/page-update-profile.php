<?php
ob_start();
/**
 * The template for displaying profile update page
 *
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
 

/* Get user info. */
global $current_user;
get_currentuserinfo();

$error = array(); 

   
/* If profile was saved, update profile. */
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {

	$username   =   sanitize_user( $_POST['user-name'] );
    $password   =   esc_attr( $_POST['pass1'] );
    $cpassword   =   esc_attr( $_POST['pass2'] );
    $email      =   sanitize_email( $_POST['email'] );
    $first_name =   sanitize_text_field( $_POST['first-name'] );
    $last_name  =   sanitize_text_field( $_POST['last-name'] );

    if ( empty( $username ) ) {
    	$error[] = __('Username field can not be empty.', 'profile');
	}elseif( 4 > strlen( $username ) ) {
    	$error[] = __('Username too short. At least 4 characters is required.', 'profile');
	}else{
		if ( username_exists( $username ) != $current_user->ID ){
	    	$error[] = __('This Username is already used by another user. Try a different one.', 'profile');
		  }

		if ( ! validate_username( $username ) ) {
		    $error[] = __('Sorry, the username you entered is not valid.', 'profile');
		}
	}
	
	if(!is_email($email)){
	$error[] = __('The E-mail you entered is not valid.', 'profile');
	}

	if(email_exists($email) != $current_user->id){
		$error[] = __('This email is already used by another user.  Try a different one.', 'profile');
	}


	

	if ( empty($password ) or empty( $cpassword ) ){
		$error[] = __('Password and/or Confirm Password Fields can not be empty.', 'profile');
	}else{
		if (5 > strlen( $password )) {
			$error[] = __('Password must be more than 5 characters.', 'profile');
		}
		if ($password !== $cpassword) {
			$error[] = __('Password and Confirm Password fields do not match.', 'profile');
		}
	}

	
    if ( count($error) == 0 ) {
    	$user_id = wp_update_user( array ('ID' => $current_user->ID, 'user_login' => $username, 'user_pass' => $password, 'user_email' => $email  ));

    	if ( !empty( $first_name ) ){
	    update_user_meta( $current_user->ID, 'first_name', $first_name );
	    }

	    if ( !empty( $last_name ) ){
	        update_user_meta($current_user->ID, 'last_name', $last_name );
	    }

	 
    	$update_page  = home_url( '/update-profile/' ); 
    	wp_redirect( $update_page . "?update=success" );  
    	exit; 

    }
}
?>

<div id="content">

	<div class="section-content page-banner-section2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Profile Update</h1>
						</div>
					</div>
				</div>
			</div>

<div class="section-content services-section">
	<div class="title-section">
		<div class="container">

<?php

$update  = (isset($_GET['update']) ) ? $_GET['update'] : 0;

if($update === 'success') {
	_e('<div class="alert alert-green"><p>Your profile have been updated successfully.</p></div>', 'profile');
}elseif($update === 'failed'){
	_e('<div class="alert alert-red"><p>Updating your profile failed. Please try again.</p></div>', 'profile');
}

?>


<?php if ( !is_user_logged_in() ){ ?>
        <div class="alert alert-red">
            <?php _e('<p>You must be logged in to edit your profile.</p>', 'profile'); ?>
        </div><!-- .warning -->

<?php }else{?>
    <?php if ( count($error) > 0 ) echo '<div class="alert alert-red"><p>' . implode("<br />", $error) . '</p></div>'; ?>
    <form method="post" id="adduser" action="<?php the_permalink(); ?>">
        <p class="form-username">
            <label for="first-name"><?php _e('First Name', 'profile'); ?></label>
            <input class="text-input" name="first-name" type="text" id="first-name" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>" />
        </p><!-- .form-username -->
        <p class="form-username">
            <label for="last-name"><?php _e('Last Name', 'profile'); ?></label>
            <input class="text-input" name="last-name" type="text" id="last-name" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>" />
        </p><!-- .form-username -->
        <p class="form-username">
            <label for="user-name"><?php _e('User Name <span class="redstar">*</span>', 'profile'); ?></label>
            <input class="text-input" name="user-name" type="text" id="user-name" value="<?php the_author_meta( 'user_login', $current_user->ID ); ?>" />
        </p><!-- .form-username -->
        <p class="form-email">
            <label for="email"><?php _e('E-mail <span class="redstar">*</span>', 'profile'); ?></label>
            <input class="text-input" name="email" type="text" id="email" value="<?php the_author_meta( 'user_email', $current_user->ID ); ?>" />
        </p><!-- .form-email -->
        <p class="form-password">
            <label for="pass1"><?php _e('Password <span class="redstar">*</span>', 'profile'); ?> </label>
            <input class="text-input" name="pass1" type="password" id="pass1" />
        </p><!-- .form-password -->
        <p class="form-password">
            <label for="pass2"><?php _e('Confirm Password <span class="redstar"><span class="redstar"><span class="redstar">*</span></span></span>', 'profile'); ?></label>
            <input class="text-input" name="pass2" type="password" id="pass2" />
        </p><!-- .form-password -->

        <p class="form-submit">
            <?php echo $referer; ?>
            <input name="updateuser" type="submit" id="updateuser" class="submit button" value="<?php _e('Update', 'profile'); ?>" />
            <?php wp_nonce_field( 'update-user' ) ?>
            <input name="action" type="hidden" id="action" value="update-user" />
        </p><!-- .form-submit -->
    </form><!-- #adduser -->
<?php } ?>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>
<?php get_footer();

