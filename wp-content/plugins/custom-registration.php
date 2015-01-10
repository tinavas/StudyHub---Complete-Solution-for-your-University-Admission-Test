<?php
/*
  Plugin Name: Custom Registration
  Plugin URI: http://dev-selim.com.au
  Description: Updates user rating based on number of posts.
  Version: 1.0
  Author: Selim Mahmud
  Author URI: http://dev-selim.com.au
 */

  function registration_form( $username, $password, $cpassword, $email, $first_name, $last_name ) {

    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post" id="rego-form">
    <p>
    <label for="username">Username <span class="redstar">*</span></label>
    <input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
    </p>
     
    <p>
    <label for="password">Password <span class="redstar">*</span></label>
    <input type="password" name="password" value="">
    </p>

    <p>
    <label for="cpassword">Confirm Password <span class="redstar">*</span></label>
    <input type="password" name="cpassword" value="">
    </p>
     
    <p>
    <label for="email">Email <span class="redstar">*</span></label>
    <input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
    </p>
     
    
    <p>
    <label for="firstname">First Name</label>
    <input type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
    </p>
     
    <p>
    <label for="website">Last Name</label>
    <input type="text" name="lname" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
    </p>

 
        <div class="g-recaptcha" data-sitekey="6LeaGwATAAAAAI4o0MepK0rLsCqvICWpEzrz638j"></div>
  
     
    <input type="submit" name="submit" value="Register"/>
    </form>
    ';
}


function registration_validation( $username, $password, $cpassword, $email, $first_name, $last_name, $gcaptcha)  {

	global $reg_errors;
	$reg_errors = new WP_Error;

	if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
    $reg_errors->add('field', 'Required form field is missing');
}

if ( 4 > strlen( $username ) ) {
    $reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
}

if ( username_exists( $username ) )
    $reg_errors->add('user_name', 'Sorry, that username already exists!');

if ( ! validate_username( $username ) ) {
    $reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
}

if ( 5 > strlen( $password ) ) {
        $reg_errors->add( 'password', 'Password length must be greater than 5' );
    }

if ( $password !== $cpassword ) {
        $reg_errors->add( 'cpassword', 'Two passwords do not match' );
    }    

 if ( !is_email( $email ) ) {
    $reg_errors->add( 'email_invalid', 'Email is not valid' );
}

if ( email_exists( $email ) ) {
    $reg_errors->add( 'email', 'Email Already in use' );
}

if ( !$gcaptcha ) {
    $reg_errors->add( 'gcaptcha', 'You did not check the recaptcha. You are a robot.' );
}

if ( is_wp_error( $reg_errors ) ) {

   echo '<div class="alert alert-red"><p>';
    foreach ( $reg_errors->get_error_messages() as $error ) {
        echo '<span class="redstar">ERROR</span>:';
        echo $error . '<br/>';   
    }
    echo '</div></p>';
}

 

}

function complete_registration() {
    global $reg_errors, $username, $password, $cpassword, $email, $first_name, $last_name;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {

        
        $userdata = array(
        'user_login'    =>   $username,
        'user_email'    =>   $email,
        'user_pass'     =>   $password,
        'first_name'    =>   $first_name,
        'last_name'     =>   $last_name,
        );

        if(wp_insert_user( $userdata )){
            $hash = md5( $random_number );

            $user = get_user_by( 'email', $email );
            $user_id = $user->ID;
            
            add_user_meta( $user_id, 'hash', $hash );
            add_user_meta( $user_id, 'active', 'false' );
            
            $to = $email;
            $subject = 'Member Verification'; 
            $message = 'Hello,';
            $message .= "\n\n";
            $message .= 'Welcome...';
            $message .= "\n\n";
            $message .= 'Username: '.$username;
            $message .= "\n";
            $message .= 'Password: '.$password;
            $message .= "\n\n";
            $message .= 'Please click this link to activate your account:';
            $message .= home_url('/').'activate?id='.$username.'&key='.$hash;
            $headers = 'From: noreply@test.com' . "\r\n";           

            $mail = wp_mail( $to, $subject, $message, $headers );

            $username = '';
            $email = '';
            $first_name = '';
            $last_name = '';
            $cpassword = '';

            if( $mail ){
            echo '<div class="alert alert-green"><p class="green-bg">Registration complete. 
            You will get an email to your email address with account activation link.
            Please clink the link to activate your account.</p></div>';
            } else {
                echo '<div class="alert alert-green"><p class="green-bg">Registration complete. 
                If you do not get an avtivation email, please contact us.</p></div>';
            }

           }else{

            echo '<div class="alert alert-red"><p>Something wrong has been happened 
            while creating account. Please try again later.</p></div>';

           } 
    }
}

function custom_registration_function() {

    if ( isset($_POST['submit'] ) ) {
        registration_validation(
        $_POST['username'],
        $_POST['password'],
        $_POST['cpassword'],
        $_POST['email'],
        $_POST['fname'],
        $_POST['lname'],
        $_POST['g-recaptcha-response']
        );
         
        // sanitize user form input
        global $username, $password, $cpassword, $email, $first_name, $last_name, $gcaptcha;
        $username   =   sanitize_user( $_POST['username'] );
        $password   =   esc_attr( $_POST['password'] );
        $cpassword   =   esc_attr( $_POST['cpassword'] );
        $email      =   sanitize_email( $_POST['email'] );
        $first_name =   sanitize_text_field( $_POST['fname'] );
        $last_name  =   sanitize_text_field( $_POST['lname'] );
        $gcaptcha   =   $_POST['g-recaptcha-response'];
 
        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_registration(
        $username,
        $password,
        $cpassword,
        $email,
        $first_name,
        $last_name
        );
    }
     if ( !is_user_logged_in() ){
        registration_form(
            $username,
            $password,
            $cpassword,
            $email,
            $first_name,
            $last_name
            );
        }else{
            echo '<div class="alert alert-green"><p class="green-bg">You are already logged in !!!</p></div>';

            
        }
}

// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'cr_custom_registration', 'custom_registration_shortcode' );
 
// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}	   