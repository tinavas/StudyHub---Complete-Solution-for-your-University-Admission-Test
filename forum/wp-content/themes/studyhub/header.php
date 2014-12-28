<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shortcut icon" href="images/shortcut-icon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/magnific-popup.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/owl.theme.css" media="screen">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/animate.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css" media="screen">
	
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.migrate.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.countTo.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/plugins-scroll.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/waypoint.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.flexslider.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.mb.YTPlayer.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/YTPlayer.css" media="screen">
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body <?php body_class(); ?>>
	<!--[if lte IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Preloader-->
	<div class="preloader">
		<h2>Study Hub <img alt="" src="images/loader.gif"></h2>
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
						<a href="http://site1/"><img  alt="" src="<?php echo get_template_directory_uri() ?>/images/logo.png"></a>
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
								<li><a href="http://site1/">Home</a></li>
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
							<li><a class=" <?php if(substr($_SERVER['REQUEST_URI'],0,14)==='/forum/forums/'){ echo 'active'; } ?> " href="<?php echo site_url(); ?>/forums">Discussion Forums</a></li>
							</ul>
						</div>
				</div>
			</nav>
		</header>
		<!-- End Header -->
