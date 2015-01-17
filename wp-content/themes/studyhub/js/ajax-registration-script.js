jQuery(document).ready(function($) {
 
	$('form#rego-form').on('submit', function(e){

		var submit = $(".user-registartion input[type='submit']"),
		preloader = $(".user-registartion #preloader"),
		message	= $(".user-registartion #status");
		gcapr = grecaptcha.getResponse();

    	submit.prop( "disabled", true );
    	preloader.css({'visibility':'visible'});
	    $.ajax({
	        type: 'POST',
	        dataType: 'json',
	        url: ajax_registration_object.registration_url,
	        data: { 
	            'action': 'user_registration', 
	            'nonce': this.rs_user_registration_nonce.value,
				'username':	this.username.value,
				'email':	this.email.value,
				'fname':	this.fname.value,
				'lname':	this.lname.value,
				'gcap':	gcapr },
	        success: function(data){
	        	submit.prop( "disabled", false );
				// hide pre-loader
				preloader.css({'visibility':'hidden'});
	            message.html(data.message);

	        }
	    });
        e.preventDefault();
    });

});