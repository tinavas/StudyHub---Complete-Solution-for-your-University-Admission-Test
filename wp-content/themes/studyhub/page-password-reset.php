<?php  
get_header()
?>
<div id="content">

	<div class="section-content page-banner-section2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Password Reset</h1>
						</div>
					</div>
				</div>
			</div>


<div class="section-content services-section">
				<div class="title-section">
<div class="container">

<div class="wrapper">
<?php if ( !is_user_logged_in() ) { ?> 

<div class="status"></div>
 
<!--html code-->
<form method="post" id="reset">

<fieldset>
	<p>Please enter the email address which you used during registration.</p>
<p><label for="email">E-mail:</label>
<input type="text" name="email" id="email" /></p>
<?php wp_nonce_field( 'ajax-reset-nonce', 'security' ); ?>
<p>
<input type="submit" value="Get New Password" class="reset-button" id="submit" />
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif" id="preloader" alt="Preloader" />
</p>
</fieldset>
</form>

<?php }else{ ?>
			<p>You are already logged in !!!</p>
	<?php } ?>

</div>

</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->
 
<?php get_footer() ?>