<?php get_header(1); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
			<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg ">

					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/header/header.png');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="singleCounter">
							<div class="sm-countdown sm_content_element sm-style2" id="sm_countdown-19" data-date="<?php the_date("Y/m/d"); ?>">
								<div class="displayCounter">
									<div class="column">
										<div class="sm_countdown_inner">
											<input class="element days" readonly="readonly" data-min="0" data-max="365" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
											<span class="unit days-title">days</span>
										</div>
									</div>
									<div class="column">
										<div class="sm_countdown_inner">
											<input class="element hour" readonly="readonly" data-min="0" data-max="24" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
											<span class="unit hours-title">hrs</span>
										</div>
									</div>
									<div class="column">
										<div class="sm_countdown_inner">
											<input class="element minute" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
											<span class="unit mins-title">min</span>
										</div>
									</div>
									<div class="column">
										<div class="sm_countdown_inner">
											<input class="element second" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
											<span class="unit secs-title">sec</span>
										</div>
									</div>
								</div>
							</div><!-- end sm-countdown -->
						</div><!-- end homeCounter -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START EVENT SINGLE ================ -->
	<div class="singleEvent padding background-properties" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/events/home-events-1.jpg);">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="https://electriccastle.ro/info/overview" target="_blank">イベント詳細</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->

			<div class="row">
				<div class="col-sm-7">
					<div class="descriptionEvent">
						<?php the_content(); ?>
					</div><!-- end descriptionEvent -->
					<br><br>
          <div class="ticket">
          	<h4>Get Your Ticket Now</h4>
            <a href="<?php echo get_post_meta($post->ID, "URL", true); ?>" target="_blank">Buy Ticket</a>
          </div><!-- end ticket -->
				</div><!-- end col-sm-8 -->
				<div class="col-sm-4 col-sm-offset-1">
					<div class="sidebarAlbum">
						<div class="widget">
							<h3>Details</h3>
							<ul>
								<li>Price:<span>￥<?php echo get_post_meta($post->ID, "料金", true); ?> </span></li>
								<li>Date:<span><?php echo get_post_meta($post->ID, "開催日", true); ?> </span></li>
								<li>Time:<span><?php echo get_post_meta($post->ID, "開始時間", true); ?> </span></li>
								<li>Place:<span><?php echo get_post_meta($post->ID, "会場", true); ?> </span></li>
								<li>Location:<span><?php echo get_post_meta($post->ID, "住所", true); ?> </span></li>
							</ul>
						</div><!-- end widget -->

						<div class="widget">
							<h3>Twitter</h3>
							<a class="twitter-timeline" href="https://twitter.com/nozawatakatomo" data-tweet-limit="2">Tweets by nozawatakatomo</a>
							<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div><!-- end widget -->

						<div class="widget">
							<h3>Follow On</h3>
							<section>
							  <ul id='services'>
							    <li>
							      <div><a href="/"><i class="fa fa-facebook"></i></a></div>
							    </li>
							    <li>
							    	<div><a href="/"><i class="fa fa-twitter"></i></a></div>
							    </li>
							    <li>
							    	<div><a href="/"><i class="fa fa-youtube"></i></a></div>
							    </li>
							  </ul>
							</section>
						</div><!-- end widget -->
					</div><!-- end sidebarAlbum -->
				</div><!-- end col-sm-3 col-sm-offset-1 -->
			</div><!-- end row -->

		</div><!-- end container -->
	</div>
	<!-- =============== END EVENT SINGLE ================ -->

	<!-- =============== START PAGINATION ================ -->
	<section class="paginationFooter ">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<a href="#" class="pagination-previous">
							<small>Preview Event</small>
						</a>
					</div>
					<div class="col-sm-6">
						<a href="#" class="pagination-next">
							<small>Next Event</small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END PAGINATION ================ -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/counter.js"></script>
