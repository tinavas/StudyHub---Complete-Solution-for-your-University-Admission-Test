
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
	{{ HTML::style('theme/css/main-slider.css') }}
	
	{{ HTML::style('theme/css/style.css') }}

	<script type="text/javascript" src="{{ url('/theme/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/modernizr.js') }}"></script>
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
	
	<script type="text/javascript" src="{{ url('/theme/js/bookblock.js') }}"></script>
	<script type="text/javascript" src="{{ url('/theme/js/custom.js') }}"></script>

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
											Update Profile</a>	
									</span>

									<span class="rego">
										<i class="fa fa-user main-color"></i>
											<a href="<?php echo wp_logout_url( home_url() ); ?>"> 
											Logout</a>	
									</span>	

									<?php }else{ ?> 

										<span class="rego"><i class="fa fa-gift main-color"></i> 
											<a href="<?php echo get_site_url() . "/registration"; ?>">
											Register Now</a> 
										</span>
									
										<span class="rego"><i class="fa fa-user main-color"></i>
											<a href="<?php echo get_site_url() . "/login"; ?>"> 
											Login Now</a>
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
								<li><a class="active" href="{{ url('/') }}">Home</a></li>
							<li class="drop"><a href="#">Study and Practice</a>
								<ul class="drop-down">
									<li><a href="{{ url('/biology') }}">Biology</a></li>
									<li><a href="{{ url('/chemistry') }}">Chemistry</a></li>
									<li><a href="{{ url('/physics') }}">Physics</a></li>
									<li><a href="{{ url('/english') }}">English</a></li>
									<li><a href="{{ url('/knowledge') }}">General Knowledge</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/model-tests') }}">Model Tests</a></li>
							<li><a href="<?php echo get_site_url() . "/forums"; ?>">Discussion Forums</a></li>
							</ul>
						</div>
				</div>
			</nav>
		</header>
		<!-- End Header -->


<div class="row">
      <section class="col-md-12 slider">
        <section class="main-slider">
          <div class="bb-custom-wrapper">
            <div id="bb-bookblock" class="bb-bookblock">

              <div class="bb-item">
                <div class="bb-custom-content">
                  <div class="slide-inner">
                    <div class="col-md-4 book-holder"> <a href="book-detail.html"><img src="{{ url('/theme/images/image01.jpg') }}" alt="Book" /></a>
                    </div>
                    <div class="col-md-8 book-detail">
                      <h2>Preparation for admission test from home</h2>
                      <div class="cap-holder">
                        <p> Save your travelling time to coaching center and invest it to 
                        	your personal study at home. </p>
                        <a href="book-detail.html" class="button-two">Read More</a> </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bb-item">
                <div class="bb-custom-content">
                	<div class="slide-inner">
                    <div class="col-md-8 book-detail">
                      <h2>All resources are in one place</h2>
                      <div class="cap-holder">
                        <p>	Our content is very resourceful and well documented. 
                        	We make sure you will not miss anything for your 100% preparation. </p>
                        </div>
                    </div>
                    <div class="col-md-4 book-holder"> <a href="book-detail.html"><img src="{{ url('/theme/images/image01.jpg') }}" alt="Book" /></a></div>
                  </div>
                </div>
              </div>

              <div class="bb-item">
                <div class="bb-custom-content">
                	<div class="slide-inner">
                    <div class="col-md-4 book-holder"> <a href="book-detail.html"><img src="{{ url('/theme/images/image01.jpg') }}" alt="Book" /></a> 
                    </div>
                    <div class="col-md-8 book-detail">
                      <h2>Never Under Estimate the Power of Community</h2>
                      <div class="cap-holder">
                        <p>	Our forum is always ready to answer your question 
                        	Experts are out there to answer your questions relating your admission. </p>
                        <a href="book-detail.html" class="button-two">Visit the forum</a> </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="bb-item">
                <div class="bb-custom-content">
                	<div class="slide-inner">

                    <div class="col-md-8 book-detail">
                      <h2>Don't forget to press our facebook like button</h2>
                      <div class="cap-holder">
                        <p> Get updated information and special tips and tricks about your admission prepation 
                        	to your facebook news feed by liking us. </p>
                        <a href="#facebook-like" class="button-two">Like Us on <span class="btnfb"><i class="fa fa-facebook"></i></span>
                    </div>
                  </div>
                  <div class="col-md-4 book-holder"> <a href="book-detail.html"><img src="{{ url('/theme/images/image01.jpg') }}" alt="Book" /></a> 
                    </div>

                </div>
              </div>
            </div>

        </div>
          </div>
        </section>

        </section>
        </div>

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
					<h1>Are you ready to sit for model tests? <a href="#">
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

