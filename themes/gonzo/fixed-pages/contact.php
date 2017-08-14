<?php
/* Template Name: contact */
?>

<?php get_header(2); ?>

	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/contact/bg_contact.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="breadTxt">
              <h1>
                  Contact
              </h1>
              <p>
              </p>
              <a href="#content" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
                  お問い合わせはこちら <i class="fa fa-angle-down"></i>
              </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START CONTACT ================ -->
	<section class="contactSingle padding background-properties" id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="contactTop">
						<h2>Contact Information</h2>
						<h4>OFFICE727.inc<br></h4>
						<p>3-3-4, Shimotakaido, Suginamiku, Tokyo</p>
						<div class="contactInfo">
							<ul>
								<li>Email: <a href="mailto:info@gonzo.style">info@gonzo.style</a></li>
							</ul>
						</div>
					</div>
				</div><!-- end col-sm-4 -->
				<div class="col-sm-7 col-sm-offset-1">
					<div class="singleBlogForm">
						<h2>Get in Touch</h2>
						<form action="#" method="post" class="comment-form">
							<input id="author" name="author" type="text" value="" aria-required="true" required="" placeholder="First Name *">
							<input id="lastName" name="email" type="text" value="" aria-required="true" required="" placeholder="Last Name">
							<input id="url" name="url" type="text" value="" placeholder="Subject* ">
							<input id="address" name="url" type="text" value="" placeholder="Email Address* ">
							<textarea name="comment" placeholder="Message..." rows="6" required=""></textarea>
							<p class="form-submit">
								<input name="submit" type="submit" id="submit" value="Send Message">
							</p>
						</form>
					</div><!-- end contactForm -->
				</div><!-- end col-sm-7 col-sm-offset-1 -->
			</div>
		</div><!-- end container -->
	</section>
	<!-- =============== END CONTACT ================ -->

<?php get_footer(); ?>
