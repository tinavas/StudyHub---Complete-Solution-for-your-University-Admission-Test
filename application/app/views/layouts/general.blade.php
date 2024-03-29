
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index, follow" /> 
	@yield('title-meta')
	<link rel="canonical" href="{{URL::current()}}" />
	<link rel="shortcut icon" href="{{ url('theme/images/shortcut-icon.png') }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

	{{ HTML::style('theme/css/bootstrap.css') }}
	{{ HTML::style('theme/css/magnific-popup.css') }}
	{{ HTML::style('theme/css/jquery.bxslider.css') }}	
	{{ HTML::style('theme/css/flexslider.css') }}
	{{ HTML::style('theme/css/owl.carousel.css') }}
	{{ HTML::style('theme/css/owl.theme.css') }}
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	{{ HTML::style('theme/css/animate.css') }}
	{{ HTML::style('theme/css/jquery.countdownTimer.css') }}
	{{ HTML::style('theme/css/layout.css') }}

	{{ HTML::style('theme/css/style.css') }}

	<script type="text/javascript" src="{{ url('/theme/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.countdownTimer.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.migrate.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.bxslider.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.appear.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.countTo.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.imagesloaded.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/retina-1.1.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/plugins-scroll.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/waypoint.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/jquery.flexslider.js') }}"></script>


    <link href="{{ url('/theme/css/YTPlayer.css.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ url('/theme/js/script.js') }}"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body>
	<!--[if lte IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Preloader-->
	<div class="preloader">
		<h2><img alt="" src="{{ url('/theme/images/loader.gif') }} "></h2>
	</div>

	<!-- Container -->
	<div id="container" class="header4">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Static navbar -->
			<nav class="navbar navbar-default navbar-static-top">
				<div class="header-top-line">
					<div class="top-margin">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="right">

									<?php if ( is_user_logged_in() ) { ?>

									<span class="rego">
										<i class="fa fa-pencil-square-o main-color"></i>
											<a href="<?php echo get_site_url(). "/update-profile"; ?>"> 
											আপনার প্রোফাইল</a>	
									</span>

									<span class="rego">
										<i class="fa fa-user main-color"></i>
											<a href="<?php echo wp_logout_url( home_url() ); ?>"> 
											লগ আউট</a>	
									</span>	

									<?php }else{ ?> 

										<span class="rego"><i class="fa fa-gift main-color"></i> 
											<a href="<?php echo get_site_url() . "/registration"; ?>">
											নিবন্ধণ</a> 
										</span>
									
										<span class="rego"><i class="fa fa-user main-color"></i>
											<a href="<?php echo get_site_url() . "/login"; ?>"> 
											লগইন</a>
									</span>
										
									<?php } ?>
								</div>					
							</div>
						</div>
					</div>
					</div>
					<div class="logo">
						<a href="{{ url('/') }}"><img  alt="Logo" src=" {{ url('/theme/images/logo.png') }} "></a>
					</div>
				</div>	

				<div class="container">

					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						</div>
				    </div>
				<div class="bottom-menu">
						<div class="navbar-collapse collapse">
							<ul class="nav container navbar-nav navbar-left">
								<li><a href="{{ url('/') }}">প্রথম পাতা</a></li>
							<li class="drop"><a  

							class=" <?php $uri = $_SERVER['REQUEST_URI'];
							if (preg_match("/biology/",$uri) or 
								preg_match("/chemistry/",$uri) or 
								preg_match("/physics/",$uri) or
								preg_match("/english/",$uri) or
								preg_match("/knowledge/",$uri))
								{ echo 'active';} ?> " 

								href="#">আলোচনা ও অনুশীলন</a>
								<ul class="drop-down">
									<li><a href="{{ url('/biology-first-part') }}">জীববিজ্ঞান - প্রথম পত্র</a></li>
									<li><a href="{{ url('/biology-second-part') }}">জীববিজ্ঞান - দ্বিতীয় পত্র</a></li>
									<li><a href="{{ url('/chemistry-first-part') }}">রসায়ন - প্রথম পত্র</a></li>
									<li><a href="{{ url('/chemistry-second-part') }}">রসায়ন - দ্বিতীয় পত্র</a></li>
									<li><a href="{{ url('/physics-first-part') }}">পদার্থ বিজ্ঞান-প্রথম পত্র</a></li>
									<li><a href="{{ url('/physics-second-part') }}">পদার্থ বিজ্ঞান-দ্বিতীয় পত্র</a></li>
									<li><a href="{{ url('/english') }}">ইংরেজী</a></li>
									<li><a href="{{ url('/knowledge') }}">সাধারন জ্ঞান</a></li>
								</ul>
							</li>
							<li><a 

								class=" <?php $uri = $_SERVER['REQUEST_URI'];
								if (preg_match("/model-tests/",$uri) ){ echo 'active';} ?> "

								href="{{ url('/model-tests') }}">মডেল টেস্ট</a></li>
							<li><a href="<?php echo get_site_url() . "/forum"; ?>">ফোরাম</a></li>
							</ul>
						</div>
				</div>
			</nav>
		</header>
		<!-- End Header -->

		<!-- content ================================================== -->
		<div id="content">
			@yield('content')
		</div>
		<!-- End content -->

		<!-- footer 
			================================================== -->
		<footer>
			<div class="up-footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3">
							<div class="widget footer-widget text-widget">
								<h2>ফেসবুকে আমরা</h2>
							</div>
						</div>

						<div class="col-md-6">
							<div class="widget footer-widget blog-footer recent-widget">
								<h2>ফোরাম থেকে সাম্প্রতিক</h2>
								<ul>
									<li>
										<a href="#">Aenean sed justo tincidunt, vulputate nisi</a> <span>(12 December 2014)</span>
									</li>
									<li>
										<a href="#">Aenean sed justo tincidunt, vulputate nisi</a> <span>(12 December 2014)</span>
									</li>
									<li>
										<a href="#">Aenean sed justo tincidunt, vulputate nisi</a> <span>(12 December 2014)</span>
									</li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-3">
							<div class="widget footer-widget more-links-widget">
								<h2>গুরুত্বপূর্ণ লিঙ্ক</h2>
								<ul>
									<li><a href="#">Portfolio Items</a></li>
									<li><a href="#">Full Width Portfolio</a></li>
									<li><a href="#">Product Presentation</a></li>
								</ul>
							</div>							
						</div>

					</div>
				</div>
					
			</div>
			<div class="footer-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>&copy; Study Hub @২০১৫. সর্বস্বত্ব সংরক্ষিত</p>
						</div>
						<div class="col-md-6">
							<ul class="footer-menu">
								<li><a href=" {{ url('/') }} ">প্রথম পাতা</a></li>
								<li><a href="{{ url('/about') }}">আমাদের পরিচয়</a></li>
								<li><a href="{{ url('/faq') }}">সাধারন জিজ্ঞাসা</a></li>
								<li><a href="{{ url('/privacy-policy') }}">গোপনীয়তা বিষয়ক নীতি</a></li>
								<li><a href="{{ url('/terms-and-conditions') }}">শর্তাবলী</a></li>
								<li><a href="{{ url('/contact-us') }}">যোগাযোগ</a></li>
							</ul>
						</div>						
					</div>					
				</div>
			</div>

		</footer>
		<!-- End footer -->
	</div>
	<!-- End Container -->

	<script type="text/javascript" src="{{ url('/theme/js/smk-accordion.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/custom-tabs.js') }}"></script>



	<script>
		/*Ajax Request for Side bar menu */
		$(document).ready(function(e) {

			$('body a.ajax').on('click', function(e){
				e.preventDefault();
				
				var data = $(this).attr('href');

				var post_data = data.split("/");


				$('#display-window .content-window').html('');

				$('#display-window .loader').css({'visibility':'visible'});
				$.ajax({
					type: "POST",
					url: "{{ url('/app/ajax.php') }}",
					data: {
						'subject' : post_data[0],
						'chapter' : post_data[1],
						'topic' : post_data[2],
						'category' : post_data[3],
					},
					cache: false,
					success: function(data){
						$('#display-window .loader').css({'visibility':'hidden'});
						$('#display-window .content-window').css({'opacity':'0'}).html(data).animate({opacity: 1}, 300);
					},
					 error: function() {
					 	$('#display-window .loader').css({'visibility':'hidden'});
						$('#display-window .content-window').html('<h5>An error has occurred</h5>');
						}
				});

			});


		});

		/*Ajax Request for loading skill test questions */

		$(document).ready(function(e) {

			$('body').on('click', '#load-test', function(e){
				e.preventDefault();
				var data = $(this).attr('href');
				var post_data = data.split("/");

				//getting total allowed time
				var time = Number($('span.time').text());
				var hours = Math.floor( time / 60);
				var minutes = time % 60;

				$('#display-window .content-window').html('');

				$('#display-window .loader').css({'visibility':'visible'});
				$.ajax({
					type: "POST",
					url: "{{ url('/app/ajax.php') }}",
					data: {
						'subject' : post_data[0],
						'chapter' : post_data[1],
						'topic' : post_data[2],
						'category' : post_data[3],
						'test' : post_data[4]
					},
					cache: false,
					success: function(data){
						$('#display-window .loader').css({'visibility':'hidden'});
						$('#display-window .content-window').css({'opacity':'0'}).html(data).animate({opacity: 1}, 300);

						// counter for time required
						$(function(){
							$("#hms_timer").countdowntimer({
						                hours : hours,
										minutes : minutes,
						                seconds : 0,
						                size : "lg",
						                timeUp : get_result
							});

							// get result on timeout
							function get_result() {

								var skill_button_click = $('#skill-test').data('clicked');

								if(typeof skill_button_click === 'undefined'){
									alert('তোমার নির্ধারিত সময় শেষ। ফলাফল জানতে "OK" চাপো।');
	        						var count = $('#count').val();
							        var subject = $('#subject').val();
							        var chapter = $('#chapter').val();
							        var topic = $('#topic').val();


							        var answer_paper = [];
							        for (i = 1; i <= count; i++) {
										    var id = $('input[name='+i+']').attr('id');
							        		var question_id = id.substring(1);
							        		var answer = $('input[name='+i+']:checked').val();

							        		if(answer === undefined){
							        			answer_paper[question_id] = 'unanswered';
							        		}else{
							        			answer_paper[question_id] = answer;
							        		}
											
										}

							        $('#display-window .loader').css({'visibility':'visible'});
							        //$('#display-window .content-window').animate({opacity: 0}, 500);
							        //alert(answer_paper[54]);
							        //throw new Error();

							        $.ajax({
												type: "POST",
												url: "{{ url('/app/ajax.php') }}",
												data: {
													'subject' : subject,
													'chapter' : chapter,
													'topic' : topic,
													'category' : 'question',
													'count' : count,
													'answer_paper' : answer_paper
												},
												cache: false,
												success: function(data){
													$('#display-window .content-window').css({'opacity':'0'});
													$('#display-window .loader').css({'visibility':'hidden'});
													$('#display-window .content-window').html(data).animate({opacity: 1}, 300);
												},
												 error: function() {
												 	$('#display-window .loader').css({'visibility':'hidden'});
													$('#display-window .content-window').html('<h5>An error has occurred.</h5>');
													}
									});

						    }

        					}
						});
					 

					},
					 error: function() {
					 	$('#display-window .loader').css({'visibility':'hidden'});
						$('#display-window .content-window').html('<h5>An error has occurred</h5>');
						}
				});

			});


		});

		/* for display right answer */

		$('body').on('click','div#question_answer',function(){
	    	$(this).next().css({'opacity': '0','display':'block'}).animate({opacity: 1}, 500);
		}); 

		/* For Question Pagination */

		jQuery(function($) {
		    $('body').on('click', '#pagination a', function(e){
		        e.preventDefault();
		        var link = $(this).attr('href').split("/");
		        var element = link.length-2;
		        var page = link[element];
		        var subject = $('#subject').val();
		        var chapter = $('#chapter').val();
		        var topic = $('#topic').val();

		        $('#display-window .loader').css({'visibility':'visible'});
		        //$('#display-window .content-window').animate({opacity: 0}, 500);
		        //alert(page);

		        $.ajax({
							type: "POST",
							url: "{{ url('/app/ajax.php') }}",
							data: {
								'subject' : subject,
								'chapter' : chapter,
								'topic' : topic,
								'category' : 'question',
								'page' : page
							},
							cache: false,
							success: function(data){
								$('#display-window .content-window').css({'opacity':'0'});
								$('#display-window .loader').css({'visibility':'hidden'});
								$('#display-window .content-window').html(data).animate({opacity: 1}, 300);
							},
							 error: function() {
							 	$('#display-window .loader').css({'visibility':'hidden'});
								$('#display-window .content-window').html('<h5>An error has occurred.</h5>');
								}
				});

		    });
		});

		/* getting test result */
		jQuery(function($) {

			//get result on click
		    $('body').on('click', '#skill-test', function(e){

			    $(this).data('clicked', true);

			    //alert($('#skill-test').data('clicked'));

		        e.preventDefault();
		        var count = $('#count').val();
		        var subject = $('#subject').val();
		        var chapter = $('#chapter').val();
		        var topic = $('#topic').val();


		        var answer_paper = [];
		        for (i = 1; i <= count; i++) {
					    var id = $('input[name='+i+']').attr('id');
		        		var question_id = id.substring(1);
		        		var answer = $('input[name='+i+']:checked').val();

		        		if(answer === undefined){
		        			answer_paper[question_id] = 'unanswered';
		        		}else{
		        			answer_paper[question_id] = answer;
		        		}
						
					}

		        $('#display-window .loader').css({'visibility':'visible'});
		        //$('#display-window .content-window').animate({opacity: 0}, 500);
		        //alert(answer_paper[54]);
		        //throw new Error();

		        $.ajax({
							type: "POST",
							url: "{{ url('/app/ajax.php') }}",
							data: {
								'subject' : subject,
								'chapter' : chapter,
								'topic' : topic,
								'category' : 'question',
								'count' : count,
								'answer_paper' : answer_paper
							},
							cache: false,
							success: function(data){
								$('#display-window .content-window').css({'opacity':'0'});
								$('#display-window .loader').css({'visibility':'hidden'});
								$('#display-window .content-window').html(data).animate({opacity: 1}, 300);
							},
							 error: function() {
							 	$('#display-window .loader').css({'visibility':'hidden'});
								$('#display-window .content-window').html('<h5>An error has occurred.</h5>');
								}
				});


		    });
		});


		/*Ajax Request for loading model test questions */

		$(document).ready(function(e) {

			$('body').on('click', '#load-model-test', function(e){
				e.preventDefault();
				var data = $(this).attr('href');
				var post_data = data.split("/");

				//getting total allowed time
				var time = Number($('span.time').text());
				var hours = Math.floor( time / 60);
				var minutes = time % 60;

				$('#display-window .content-window').html('');

				$('#display-window .loader').css({'visibility':'visible'});
				$.ajax({
					type: "POST",
					url: "{{ url('/app/ajax.php') }}",
					data: {
						'subject' : post_data[0],
						'chapter' : post_data[1],
						'topic' : post_data[2],
					},
					cache: false,
					success: function(data){
						$('#display-window .loader').css({'visibility':'hidden'});
						$('#display-window .content-window').css({'opacity':'0'}).html(data).animate({opacity: 1}, 300);

						// counter for time required
						$(function(){
							$("#hms_timer").countdowntimer({
						                hours : hours,
										minutes : minutes,
						                seconds : 0,
						                size : "lg",
						                timeUp : get_result
							});

							// get result on timeout
							function get_result() {

								var model_button_click = $('#model-test').data('clicked');

								if(typeof model_button_click === 'undefined'){
									alert('তোমার নির্ধারিত সময় শেষ। ফলাফল জানতে "OK" চাপো।');
	        						var count = $('#count').val();
							        var subject = $('#subject').val();
							        var chapter = $('#chapter').val();


							        var answer_paper = [];
							        for (i = 1; i <= count; i++) {
										    var id = $('input[name='+i+']').attr('id');
							        		var question_id = id.substring(1);
							        		var answer = $('input[name='+i+']:checked').val();

							        		if(answer === undefined){
							        			answer_paper[question_id] = 'unanswered';
							        		}else{
							        			answer_paper[question_id] = answer;
							        		}
											
										}

							        $('#display-window .loader').css({'visibility':'visible'});
							        //$('#display-window .content-window').animate({opacity: 0}, 500);
							        //alert(answer_paper[54]);
							        //throw new Error();

							        $.ajax({
												type: "POST",
												url: "{{ url('/app/ajax.php') }}",
												data: {
													'subject' : subject,
													'chapter' : chapter,
													'count' : count,
													'answer_paper' : answer_paper
												},
												cache: false,
												success: function(data){
													$('#display-window .content-window').css({'opacity':'0'});
													$('#display-window .loader').css({'visibility':'hidden'});
													$('#display-window .content-window').html(data).animate({opacity: 1}, 300);
												},
												 error: function() {
												 	$('#display-window .loader').css({'visibility':'hidden'});
													$('#display-window .content-window').html('<h5>An error has occurred.</h5>');
													}
									});

						    }

        					}
						});
					 

					},
					 error: function() {
					 	$('#display-window .loader').css({'visibility':'hidden'});
						$('#display-window .content-window').html('<h5>An error has occurred</h5>');
						}
				});

			});


		});

		
		/* getting model test result */
		jQuery(function($) {

			//get result on click
		    $('body').on('click', '#model-test', function(e){

			    $(this).data('clicked', true);

			    //alert($('#skill-test').data('clicked'));

		        e.preventDefault();
		        var count = $('#count').val();
		        var subject = $('#subject').val();
		        var chapter = $('#chapter').val();


		        var answer_paper = [];
		        for (i = 1; i <= count; i++) {
					    var id = $('input[name='+i+']').attr('id');
		        		var question_id = id.substring(1);
		        		var answer = $('input[name='+i+']:checked').val();

		        		if(answer === undefined){
		        			answer_paper[question_id] = 'unanswered';
		        		}else{
		        			answer_paper[question_id] = answer;
		        		}
						
					}

		        $('#display-window .loader').css({'visibility':'visible'});
		        //$('#display-window .content-window').animate({opacity: 0}, 500);
		        //alert(answer_paper[54]);
		        //throw new Error();

		        $.ajax({
							type: "POST",
							url: "{{ url('/app/ajax.php') }}",
							data: {
								'subject' : subject,
								'chapter' : chapter,
								'count' : count,
								'answer_paper' : answer_paper
							},
							cache: false,
							success: function(data){
								$('#display-window .content-window').css({'opacity':'0'});
								$('#display-window .loader').css({'visibility':'hidden'});
								$('#display-window .content-window').html(data).animate({opacity: 1}, 300);
							},
							 error: function() {
							 	$('#display-window .loader').css({'visibility':'hidden'});
								$('#display-window .content-window').html('<h5>An error has occurred.</h5>');
								}
				});


		    });
		});

	</script>
	
</body>

</html>