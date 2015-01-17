jQuery(document).ready(function($) {

    // Perform AJAX login on form submit
    $('form#reset').on('submit', function(e){
        $('form#reset input[type="submit"]').prop( "disabled", true );
        var preloader = $("#preloader");
        preloader.css({'visibility':'visible'});
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxreset', //calls wp_ajax_nopriv_ajaxlogin
                'email': $('form#reset #email').val(), 
                'security': $('form#reset #security').val() },
            success: function(data){
                $('form#reset input[type="submit"]').prop( "disabled", false );
                $('div.status').html(data.message);
                preloader.css({'visibility':'hidden'});
            }
        });
        e.preventDefault();
    });

});