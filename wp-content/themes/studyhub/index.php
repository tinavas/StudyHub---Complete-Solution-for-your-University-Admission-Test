<?php

header("Location: ./application");
exit();
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 get_header(); ?>

<div id="content">


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

	
</div><!-- #main-content -->

<?php

get_footer();
