
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="robots" content="index, follow" /> 
	<title>AdmissionTestHub-A complete solution for your admission preparation</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
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

	<!-- REVOLUTION BANNER CSS SETTINGS -->
	{{ HTML::style('theme/css/settings.css') }}
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

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="{{ url('/theme/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/theme/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/theme/js/jquery.mb.YTPlayer.js') }}"></script>
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
								<span class="rego"><i class="fa fa-gift main-color"></i> <a href="register.html"><b>FREE REGISTRATION</b></a> </span>
							</div>
							<div class="col-md-6 col-sm-5">
								<div class="right">
									<span class="rego"><i class="fa fa-user main-color"></i><a href="register.html"> <b>LOGIN NOW</b> </a>
										</span>		
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
							<li class="megadrop"><a href="index.html">Study and Practice</a>
								<div class="megadrop-down">
									<div class="container">
										<div class="dropdown">
											<div class="row">
												<div class="col-md-3 col-sm-6">
													<ul>
														<li>Medical Admission Test</li>
														<li><a href="#">General Issues</a></li>
														<li><a href="#">Biology</a></li>
														<li><a href="#">Physics</a></li>
														<li><a href="#">Chemistry</a></li>
														<li><a href="#">Mathematics</a></li>
														<li><a href="#">General Knowledge</a></li>
														<li><a href="#">Bengli</a></li>
														<li><a href="#">English</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-6">
													<ul>
														<li>Engineering Admission Test</li>
														<li><a href="#">General Issues</a></li>
														<li><a href="#">Biology</a></li>
														<li><a href="#">Physics</a></li>
														<li><a href="#">Chemistry</a></li>
														<li><a href="#">Mathematics</a></li>
														<li><a href="#">General Knowledge</a></li>
														<li><a href="#">Bengli</a></li>
														<li><a href="#">English</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-6">
													<ul>
														<li>DU Admission Test</li>
														<li><a href="#">General Issues</a></li>
														<li><a href="#">Biology</a></li>
														<li><a href="#">Physics</a></li>
														<li><a href="#">Chemistry</a></li>
														<li><a href="#">Mathematics</a></li>
														<li><a href="#">General Knowledge</a></li>
														<li><a href="#">Bengli</a></li>
														<li><a href="#">English</a></li>
													</ul>
												</div>
												<div class="col-md-3 col-sm-6">
													<ul class="last-child">
														<li>NU Admission Test</li>
														<li><a href="#">General Issues</a></li>
														<li><a href="#">Biology</a></li>
														<li><a href="#">Physics</a></li>
														<li><a href="#">Chemistry</a></li>
														<li><a href="#">Mathematics</a></li>
														<li><a href="#">General Knowledge</a></li>
														<li><a href="#">Bengli</a></li>
														<li><a href="#">English</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="drop"><a href="#">Model Test</a>
								<ul class="drop-down">
									<li><a href="#">Medical Admission Test</a></li>
									<li><a href="#">Engineering Admission Test</a></li>
									<li><a href="#">DU Admission Test</a></li>
									<li><a href="#">Others</a></li>
								</ul>
							</li>
							<li><a href="forum/forums">Discussion Forums</a></li>
							</ul>
						</div>
				</div>
			</nav>
		</header>
		<!-- End Header -->


<!-- slider 
			================================================== -->
		<div id="slider" class="slider1">
			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" >
							<!-- MAIN IMAGE -->
									<img src="{{ url('/theme/upload/slide/3.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption lft large_bold_white customout"
								data-x="25"
								data-y="100"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="1200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4">Preparation for admission test <br /> from home
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="tp-caption lfl medium_thin_grey"
								data-x="25"
								data-y="232"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="1600"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14">Save your travelling time to coaching center and invest it to <br /> your personal study at home.
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="tp-caption lfb medium_thin_grey"
								data-x="25"
								data-y="310"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><a href="#" class="button-two">Have a Look</a>
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption lft customout"
								data-x="772"
								data-y="102"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="2500"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev8.png') }}" alt="">
							</div>

							<!-- LAYER NR. 5 -->
							<div class="tp-caption lft customout"
								data-x="1016"
								data-y="218"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="3100"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev9.png') }}" alt="">
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" >
							<!-- MAIN IMAGE -->
							<img src="{{ url('/theme/upload/slide/5.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption lft large_bold_white customout"
								data-x="25"
								data-y="120"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="1200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4">All resources are in <br />one place
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="tp-caption lfl medium_thin_grey"
								data-x="25"
								data-y="250"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="1600"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14">Our content is very resourceful and well documented. <br /> We make sure you will not miss anything for your 100% preparation.
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption lft customout"
								data-x="500"
								data-y="47"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="2500"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev12.png') }}" alt="">
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption lfb customout"
								data-x="600"
								data-y="57"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="3100"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev13.png') }}" alt="">
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption lfr customout"
								data-x="705"
								data-y="63"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="3500"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev14.png') }}" alt="">
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" >
							<!-- MAIN IMAGE -->
							<img src="{{ url('/theme/upload/slide/4.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption lft large_bold_white customout"
								data-x="25"
								data-y="100"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="1200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4">Our forum is always ready to <br />answer your question
							</div>
							
							<!-- LAYER NR. 2 -->
							<div class="tp-caption lfl medium_thin_grey"
								data-x="25"
								data-y="232"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="1600"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14">Experts are out there to answer your questions relating your admission.
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption lfb medium_thin_grey"
								data-x="25"
								data-y="280"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><a href="#" class="button-two">Visit the forum</a>
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption lft customout"
								data-x="655"
								data-y="86"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="2500"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev10.png') }}" alt="">
							</div>

							<!-- LAYER NR. 5 -->
							<div class="tp-caption lfr customout"
								data-x="800"
								data-y="50"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="3100"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev11.png') }}" alt="">
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" >
							<!-- MAIN IMAGE -->
							<img src="{{ url('/theme/upload/slide/1.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption lft customout"
								data-x="25"
								data-y="127"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="1200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev1.png') }}" alt="">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption lft customout"
								data-x="20"
								data-y="84"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="2000"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev2.png') }}" alt="">
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption lft customout"
								data-x="10"
								data-y="44"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="2800"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 9"><img src="{{ url('/theme/images/revolution-icons/dev3.png') }}" alt="">
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption lft large_bold_white customout"
								data-x="565"
								data-y="95"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="700"
								data-start="3200"
								data-easing="Back.easeOut"
								data-endspeed="500"
								data-endeasing="Power4.easeIn"
								data-captionhidden="on"
								style="z-index: 4">Don't forget to press our <br /> facebook like button
							</div>
							
							<!-- LAYER NR. 5 -->
							<div class="tp-caption lfb medium_thin_grey"
								data-x="565"
								data-y="226"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="3600"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14">Get updated information and <br /> special tips and tricks about your admission prepation<br /> to your facebook news feed by liking us. 
							</div>

							<!-- LAYER NR. 6 -->
							<div class="tp-caption lfb medium_thin_grey"
								data-x="565"
								data-y="320"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="2000"
								data-easing="Back.easeInOut"
								data-endspeed="400"
								data-endeasing="Back.easeIn"
								style="z-index: 14"><a href="#facebook-like" class="button-two">Like Us on <span class="btnfb"><i class="fa fa-facebook"></i></span>
</a>
							</div>
						</li>
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</div>
		<!-- End slider -->



		<!-- content 
			================================================== -->
		<div id="content">

			<!-- services-section
				================================================== -->
			<div class="section-content services-section">
				

				<div class="services-box3">
					<div class="container">
						<div class="row">

							<div class="col-md-3">
								<div class="services-post triggerAnimation animated" data-animate="fadeInLeft">
									<span><i class="fa fa-university"></i></span>
									<div class="services-content">
										<h2><a name="facebook-like"></a>Materials prepaped by academic experts</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi si amet, rutrum ligula. Pellentesque dictum uam ornare. Sed elit le rut.</p>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="services-post triggerAnimation animated" data-animate="fadeInUp">
									<span><i class="fa fa-database"></i></span>
									<div class="services-content">
										<h2>Huge questions bank with solution</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi si amet, rutrum ligula. Pellentesque dictum uam ornare. Sed elit le rut.</p>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="services-post triggerAnimation animated" data-animate="fadeInUp">
									<span><i class="fa fa-th-list"></i></span>
									<div class="services-content">
										<h2>Every charter of every subjects covered</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi si amet, rutrum ligula. Pellentesque dictum uam ornare. Sed elit le rut.</p>
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="services-post triggerAnimation animated" data-animate="fadeInRight">
									<span><i class="fa fa-rocket"></i></span>
									<div class="services-content">
										<h2>Model tests are like real tests</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi si amet, rutrum ligula. Pellentesque dictum uam ornare. Sed elit le rut.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>


			<div class="article-box section-content">
				<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="article-content title-section triggerAnimation animated" data-animate="fadeInLeft">
									<h1>Stay tuned with us though your facebook</h1>
									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Prae sent non sem eu mi malesuada viverra volutpat ut libero. Nullam a venenatis tellus. Nam fen convallis tristique. In imperdiet est sed aliquet imperdiet. Nulla libero orci, cursus ut consecr ac, tempus a odio. Etiam quis massa ac ante adipiscing consectetur. Duis dui turpis, porttitor sit amet metus sed, interdum tempus ipsum. Integer aliquam sem elementum pellentesque . </p>
									</div>
							</div>
							<div class="col-md-6">
								<div class="article-image triggerAnimation animated" data-animate="fadeInRight">

								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- services-section
				================================================== -->
			<div class="section-content services-section">
				<div class="title-section">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Creating Great Opportunity for You</h1>
						<p>We are updating our resource and adding new features continously so that you feel confidence on your future admission and feel comfortable while you are here.</p>				
					</div>
				</div>

				<div class="services-box1 icon-distance">
					<div class="container">
						<div class="row">

							<div class="col-md-4">
								<div class="services-post triggerAnimation animated" data-animate="fadeInLeft">
									<span><i class="fa fa-th-list"></i></span>
									<div class="services-content">
										<h2>Unlimited free subject wise study and practice</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum.  </p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="services-post triggerAnimation animated" data-animate="fadeInUp">
									<span><i class="fa fa-rocket"></i></span>
									<div class="services-content">
										<h2>Realistic model tests at minimum cost</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum.  </p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="services-post triggerAnimation animated" data-animate="fadeInRight">
									<span><i class="fa fa-trophy"></i></span>
									<div class="services-content">
										<h2>Find your result and mistakes instantly</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum.  </p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="services-box1 icon-distance">
					<div class="container">
						<div class="row">

							<div class="col-md-4">
								<div class="services-post triggerAnimation animated" data-animate="fadeInLeft">
									<span><i class="fa fa-check-square-o"></i></span>
									<div class="services-content">
										<h2>Track your improvement</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum.  </p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="services-post triggerAnimation animated" data-animate="fadeInUp">
									<span><i class="fa fa-bars"></i></span>
									<div class="services-content">
										<h2>Find your position among other participants</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum.  </p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="services-post triggerAnimation animated" data-animate="fadeInRight">
									<span><i class="fa fa-heart-o"></i></span>
									<div class="services-content">
										<h2>Take community help</h2>
										<p>Aenean sed justo tincidunt, vulputate nisi sit amet, rutrum ligula. Pellentesque dictum.  </p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

			<!-- banner-text1-section
				================================================== -->
			<div class="section-content banner-text1-section">
				<div class="container">
					<h1>Are you ready to sit for model tests? <a href="#"></i>
 Buy Points for Model Test Now and get started</a></h1>					
				</div>
			</div>

			<!-- testimonial-section
				================================================== -->
			<div class="section-content testimonial-section">
				<div class="title-section title2">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>What people say About us</h1>
						<p>Vestibulum vitae molestie ligula, sit amet malesuada elit. Praesent eu mi libero.</p>
					</div>
				</div>
				<div class="testimonial-box1">
					<div class="container triggerAnimation animated" data-animate="fadeIn">
						<ul class="bxslider">
							<li>
								<p> Proin dapibus, quam eget sodales dignissim, elit leo scelerisque tortor, sit amet ultricies nisi nisi id nulla. Nullam quis sapien non augue eleifend ultrices. Nulla facilisi. Proin malesuada tortor ac nulla lobortis, ut dapibus est malesuada. ”</p>
								<h2>Bred Cooper, Microsoft</h2>
							</li>
							<li>
								<p> Proin dapibus, quam eget sodales dignissim, elit leo scelerisque tortor, sit amet ultricies nisi nisi id nulla. Nullam quis sapien non augue eleifend ultrices. Nulla facilisi. Proin malesuada tortor ac nulla lobortis, ut dapibus est malesuada. ”</p>
								<h2>Bred Cooper, Microsoft</h2>
							</li>
							<li>
								<p> Proin dapibus, quam eget sodales dignissim, elit leo scelerisque tortor, sit amet ultricies nisi nisi id nulla. Nullam quis sapien non augue eleifend ultrices. Nulla facilisi. Proin malesuada tortor ac nulla lobortis, ut dapibus est malesuada. ”</p>
								<h2>Bred Cooper, Microsoft</h2>
							</li>
							<li>
								<p> Proin dapibus, quam eget sodales dignissim, elit leo scelerisque tortor, sit amet ultricies nisi nisi id nulla. Nullam quis sapien non augue eleifend ultrices. Nulla facilisi. Proin malesuada tortor ac nulla lobortis, ut dapibus est malesuada. ”</p>
								<h2>Bred Cooper, Microsoft</h2>
							</li>
						</ul>
					</div>
				</div>

			</div>

			<!-- statistic-section
				================================================== -->
			<div class="section-content statistic-section">
				<div class="statistic-box">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="statistic-post">
									<h2><span class="timer" data-from="0" data-to="1255"></span></h2>
									<p>Your Title Goes Here</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="statistic-post">
									<h2><span class="timer" data-from="0" data-to="290"></span>+</h2>
									<p>Your Title Goes Here</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="statistic-post">
									<h2><span class="timer" data-from="0" data-to="88.5"></span>%</h2>
									<p>Your Title Goes Here</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="statistic-post">
									<h2><span class="timer" data-from="0" data-to="2690"></span></h2>
									<p>Your Title Goes Here</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

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
								<li><a href="#">About</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>						
					</div>					
				</div>
			</div>

		</footer>
		<!-- End footer -->
	</div>
	<!-- End Container -->
	
	<!-- THE Revolution Slider SCRIPT INITIALISATION -->
	<script type="text/javascript">

		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:6000,
					startwidth:1140,
					startheight:480,
					hideThumbs:10,
					onHoverStop:"on",
					navigationType:"none",
					soloArrowLeftHOffset:30,
					soloArrowRightHOffset:30
				});

		});

		$(document).ready(function() {
    $("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
    });
});

	</script>


</body>

</html>