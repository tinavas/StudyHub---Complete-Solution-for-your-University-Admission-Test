<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		<!-- footer ================================================== -->
		<footer>
			<div class="up-footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3">
							<div class="footer-widget text-widget">
								<h2>ফেসবুকে আমরা</h2>
							</div>
						</div>

						<div class="col-md-6">
							<div class="footer-widget blog-footer recent-widget">
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
							<div class="footer-widget more-links-widget">
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
								<li><a href=" <?php echo site_url(); ?> ">প্রথম পাতা</a></li>
								<li><a href=" <?php echo site_url(); ?>/application/about">আমাদের পরিচয়</a></li>
								<li><a href=" <?php echo site_url(); ?>/application/faq">সাধারন জিজ্ঞাসা</a></li>
								<li><a href=" <?php echo site_url(); ?>/application/privacy-policy">গোপনীয়তা বিষয়ক নীতি</a></li>
								<li><a href=" <?php echo site_url(); ?>/application/terms-and-conditions">শর্তাবলী</a></li>
								<li><a href=" <?php echo site_url(); ?>/application/contact">যোগাযোগ</a></li>
							</ul>
						</div>						
					</div>					
				</div>
			</div>

		</footer>
		<!-- End footer -->
	</div>
	<!-- End Container -->
	

<?php wp_footer(); ?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bookblock.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script>
	
</body>

</html>