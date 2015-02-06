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
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/main-slider.css" media="screen">
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
		<h2><img alt="" src="<?php echo get_template_directory_uri() ?>/images/loader.gif"></h2>
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
						<a href="<?php echo get_site_url(); ?>"><img  alt="" src="<?php echo get_template_directory_uri() ?>/images/logo.png"></a>
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
								<li><a href="<?php echo site_url(); ?>/application/">প্রথম পাতা</a></li>
							<li class="drop"><a href="#">আলোচনা ও অনুশীলন</a>
								<ul class="drop-down">
									<li><a href="<?php echo site_url(); ?>/application/biology-first-part">জীববিজ্ঞান - প্রথম পত্র</a></li>
									<li><a href="<?php echo site_url(); ?>/application/biology-second-part">জীববিজ্ঞান - দ্বিতীয় পত্র</a></li>
									<li><a href="<?php echo site_url(); ?>/application/chemistry-first-part">রসায়ন - প্রথম পত্র</a></li>
									<li><a href="<?php echo site_url(); ?>/application/chemistry-second-part">রসায়ন - দ্বিতীয় পত্র</a></li>
									<li><a href="<?php echo site_url(); ?>/application/physics-first-part">পদার্থ বিজ্ঞান-প্রথম পত্র</a></li>
									<li><a href="<?php echo site_url(); ?>/application/physics-second-part">পদার্থ বিজ্ঞান-দ্বিতীয় পত্র</a></li>
									<li><a href="<?php echo site_url(); ?>/application/english">ইংরেজী</a></li>
									<li><a href="<?php echo site_url(); ?>/application/knowledge">সাধারন জ্ঞান</a></li>
								</ul>
							</li>
							<li><a href="<?php echo site_url(); ?>/application/model-tests">মডেল টেস্ট</a></li>
							<li><a 

								class=" <?php $uri = $_SERVER['REQUEST_URI'];
							if (preg_match("/forums/",$uri))
								{ echo 'active';} ?> " 

								href="<?php echo site_url(); ?>/forums">ফোরাম</a></li>
							</ul>
						</div>
				</div>
			</nav>
		</header>
		<!-- End Header -->
