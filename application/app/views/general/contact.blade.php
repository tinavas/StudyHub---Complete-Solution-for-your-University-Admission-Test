@extends('layouts.general')

@section('title-meta')

	<title>Contact-us-AdmissionTestHub-A complete solution for your admission preparation</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

@stop


@section('content')

	
	<!-- page-banner-section================================================== -->
		<div class="section-content page-banner-section2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>

		<!-- contact-section================================================== -->
		<div class="section-content contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<form id="contact-form">
							<h2>Send us a message</h2>
							<div class="row">
								<div class="col-md-6">
									<input name="name" id="name" type="text" placeholder="Name">
								</div>
								<div class="col-md-6">
									<input name="mail" id="mail" type="text" placeholder="Email">
								</div>
							</div>
							<textarea name="comment" id="comment" placeholder="Message"></textarea>
							<div class="submit-area">
								<input type="submit" id="submit_contact" value="Send Message">
								<div id="msg" class="message"></div>								
							</div>
						</form>
					</div>
					<div class="col-md-3">
						<div class="contact-information">
							<h2>Contact Info</h2>
							<ul class="information-list">
								<li><i class="fa fa-map-marker"></i><span>1400 Defense Pentagon, Arlington County, Virginia, United States</span></li>
								<li><i class="fa fa-phone"></i><span>+1 703-697-1776</span><span>+1 605-315-8544</span></li>
								<li><i class="fa fa-envelope-o"></i><a href="#">nunforest@gmail.com</a></li>
							</ul>
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

				</div>
			</div>
		</div>

@stop