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


<?php if ( !is_user_logged_in() ){ ?>
        <div class="alert alert-red">
            <?php _e('<p>You must be logged in to edit your profile.</p>', 'profile'); ?>
        </div><!-- .warning -->

<?php }else{?>
    <div class="status"></div>
    <form method="post" id="adduser">
        <p class="form-fname">
            <label for="fname"><?php _e('First Name', 'profile'); ?></label>
            <input class="text-input" name="fname" type="text" id="fname" value="<?php the_author_meta( 'first_name', $current_user->ID ); ?>" />
        </p><!-- .form-username -->
        <p class="form-lname">
            <label for="lname"><?php _e('Last Name', 'profile'); ?></label>
            <input class="text-input" name="lname" type="text" id="lname" value="<?php the_author_meta( 'last_name', $current_user->ID ); ?>" />
        </p><!-- .form-username -->
        <p class="form-username">
            <label for="username"><?php _e('User Name <span class="redstar">*</span>', 'profile'); ?></label>
            <input class="text-input" name="username" type="text" id="username" value="<?php the_author_meta( 'user_login', $current_user->ID ); ?>" />
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

        </p>
        	<?php wp_nonce_field( 'profile-nonce', 'hcheck' ); ?>
    	<p>

        <p class="form-submit">
            <input name="updateuser" type="submit" id="updateuser" class="submit button" value="<?php _e('Update', 'profile'); ?>" />
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" id="preloader" alt="Preloader" />
         </p><!-- .form-submit -->
    </form><!-- #adduser -->
<?php } ?>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>
<?php get_footer();

