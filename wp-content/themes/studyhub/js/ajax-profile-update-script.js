jQuery(document).ready(function($) {

    // Perform AJAX login on form submit
    $('form#adduser').on('submit', function(e){
        $('form#adduser input[type="submit"]').prop( "disabled", true );
        var preloader = $("#preloader");
        preloader.css({'visibility':'visible'});

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_profile_object.ajaxurl,
            data: { 
                'action': 'ajaxupdate', //calls wp_ajax_ajaxupdate
                'fname': $('form#adduser #fname').val(),
                'lname': $('form#adduser #lname').val(),
                'username': $('form#adduser #username').val(),
                'email': $('form#adduser #email').val(), 
                'pass1': $('form#adduser #pass1').val(), 
                'pass2': $('form#adduser #pass2').val(),
                'hcheck': $('form#adduser #hcheck').val() },
            success: function(data){
                $('form#adduser input[type="submit"]').prop( "disabled", false );
                $('div.status').html(data.message);
                preloader.css({'visibility':'hidden'});

            }
        });
        e.preventDefault();
    });

});