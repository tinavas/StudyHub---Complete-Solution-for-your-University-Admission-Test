
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

	{{ HTML::style('theme/css/style.css') }}

	<script type="text/javascript" src="{{ url('/theme/js/jquery.min.js') }}"></script>
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
		<h2>Study Hub <img alt="" src="{{ url('/theme/images/loader.gif') }} "></h2>
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
							<div class="col-md-6 col-sm-7">

								<?php if ( !is_user_logged_in() ) { ?>
									<span class="rego"><i class="fa fa-gift main-color"></i> <a href="<?php echo get_site_url() ."/wp-login.php?action=register"; ?>">FREE REGISTRATION</a> </span>
								<?php } ?>
							</div>
							<div class="col-md-6 col-sm-5">
								<div class="right">
									<?php if ( !is_user_logged_in() ) { ?>
									<span class="rego"><i class="fa fa-user main-color"></i><a href="<?php echo get_site_url() . "/login"; ?>">LOGIN NOW</a>
										</span>

									<?php }else{ ?>

									<span class="rego">
										<i class="fa fa-user main-color"></i>
											<a href="<?php echo wp_logout_url( home_url() ); ?>"> 
											LOGOUT</a>	
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
								<li><a href="{{ url('/') }}">Home</a></li>
							<li class="drop"><a  class=" <?php $uri = $_SERVER['REQUEST_URI'];

	if( substr($uri,0,8) === '/biology' or substr($uri,0,10) === '/chemistry' or substr($uri,0,8) === '/physics' or substr($uri,0,8) === '/english' or substr($uri,0,10) === '/knowledge' ){

	echo 'active';} ?> " href="#">Study and Practice</a>
								<ul class="drop-down">
									<li><a href="{{ url('/biology') }}">Biology</a></li>
									<li><a href="{{ url('/chemistry') }}">Chemistry</a></li>
									<li><a href="{{ url('/physics') }}">Physics</a></li>
									<li><a href="{{ url('/english') }}">English</a></li>
									<li><a href="{{ url('/knowledge') }}">General Knowledge</a></li>
								</ul>
							</li>
							<li><a class= "<?php $uri = $_SERVER['REQUEST_URI'];

	if( substr($uri,0,12) === '/model-tests' ){

	echo 'active';} ?>" href="{{ url('/model-tests') }}">Model Tests</a></li>
							<li><a href="http://localhost/admissiontesthub/forums">Discussion Forums</a></li>
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

						<div class="col-md-3 col-sm-6">
							<div class="widget footer-widget text-widget">
								<h2>About Us</h2>
								<p>Vestibulum orci turpis, dignissim a ipsum at, pharetra interdum erat. Aliquam eget mpus augue. Etiam placerat blandit turpi. </p>
								<ul class="social-list">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="widget footer-widget blog-footer recent-widget">
								<h2>Recent Blog Posts</h2>
								<ul>
									<li>
										<h2><a href="#">Aenean sed justo tincidunt, vulputate nisi</a></h2>
										<span>12 December 2014</span>
									</li>
									<li>
										<h2><a href="#">Aenean sed justo tincidunt, vulputate nisi</a></h2>
										<span>12 December 2014</span>
									</li>
									<li>
										<h2><a href="#">Aenean sed justo tincidunt, vulputate nisi</a></h2>
										<span>12 December 2014</span>
									</li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-sm-block"></div>

						<div class="col-md-3 col-sm-6">
							<div class="widget footer-widget blog-footer recent-widget">
								<h2>Popular Forum Posts</h2>
								<ul>
									<li>
										<h2><a href="single-post.html">Aenean sed justo tincidunt, vulputate nisi</a></h2>
										<span>12 December 2014</span>
									</li>
									<li>
										<h2><a href="single-post.html">Aenean sed justo tincidunt, vulputate nisi</a></h2>
										<span>12 December 2014</span>
									</li>
									<li>
										<h2><a href="single-post.html">Aenean sed justo tincidunt, vulputate nisi</a></h2>
										<span>12 December 2014</span>
									</li>
								</ul>
							</div>							
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="widget footer-widget more-links-widget">
								<h2>More links</h2>
								<ul>
									<li><a href="#">Portfolio Items</a></li>
									<li><a href="#">Full Width Portfolio</a></li>
									<li><a href="#">Product Presentation</a></li>
									<li><a href="#">Blog Archives</a></li>
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
							<p>&copy; Study Hub @2014. All Rights Reserved</p>
						</div>
						<div class="col-md-6">
							<ul class="footer-menu">
								<li><a href=" {{ url('/') }} ">Home</a></li>
								<li><a href="{{ url('/about') }}">About</a></li>
								<li><a href="{{ url('/faq') }}">FAQ</a></li>
								<li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
								<li><a href="{{ url('/terms-and-conditions') }}">Terms and Conditions</a></li>
								<li><a href="{{ url('/contact-us') }}">Contact</a></li>
							</ul>
						</div>						
					</div>					
				</div>
			</div>

		</footer>
		<!-- End footer -->
	</div>
	<!-- End Container -->
	

</body>

</html>