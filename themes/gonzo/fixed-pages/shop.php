<?php
/* Template Name: shop */
?>

<?php get_header(2); ?>

	<!-- =============== START BREADCRUMB ================ -->
	<!-- <section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/shop/bg_shop.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START ALBUM SINGLE ================ -->
	<section class="albumSingle padding background-properties" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/shop/bg_shop.jpg');">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2 style="color:#fff;">The Balcony Cruise</h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">

				<div class="col-sm-3">
					<div class="sidebarAlbum">
						<div class="widget">
							<h3 style="color:#fff;">Jacket</h3>
							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png" class="img-responsibe">
								</li>
							</ul>
						</div><!-- end widget -->
						<div class="widget">
							<h3 style="color:#fff;">Details</h3>
							<ul>
								<li style="color:#fff;">Title:<span style="color:#fff;">The Balcony Cruise </span></li><br><br>
								<li style="color:#fff;">Realease:<span style="color:#fff;">August 20, 2017 </span></li><br><br>
								<li style="color:#fff;">Powered by:<span style="color:#fff;">DaBaDa Records </span></li><br><br>
								<li style="color:#fff;">Label:<span style="color:#fff;">OFFICE727.inc </span></li>
							</ul>
						</div><!-- end widget -->

						<div class="widget">
							<h3 style="color:#fff;">Available On</h3>
							<section>
							  <ul id='services'>
							    <li>
							    	<a href="#"><div><i class="fa fa-soundcloud"></i></div></a>
							    </li>
							    <li>
							    	<a href="#"><div><i class="fa fa-twitter"></i></div></a>
							    </li>
									<li>
							    	<a href="#"><div><i class="fa fa-facebook"></i></div></a>
							    </li>
									<li>
							    	<a href="#"><div><i class="fa fa-youtube"></i></div></a>
							    </li>
							    <!-- <li>
							    	<a href="#"><div><i class="fa fa-amazon"></i></div></a>
							    </li> -->
							  </ul>
							</section>
						</div><!-- end widget -->
						<div class="widget">
							<a href="#" class="btn btn-buy">このアルバムを購入する</a>
						</div>
					</div><!-- end sidebarAlbum -->
				</div><!-- end col-sm-3 col-sm-offset-1 -->


				<br class="visible-xs">
				<br class="visible-xs">
				<div class="col-sm-offset-1 col-sm-8">
					<div class="jp-playlist">
						<div class="about-list clearfix">
							<span class="about-name" style="color:#fff;">NAME</span>
							<span class="about-length" style="color:#fff;">LENGTH</span>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/1.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/1.mp3" title="Sabor A mi"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										Sabor A mi
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" title="La Paloma"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										La Paloma
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" title="Cinema"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										Cinema
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" title="Sou Voce"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										Sou Voce
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>

						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/5.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/5.mp3" title="L'appuntamento"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										L'appuntamento
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/6.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/6.mp3" title="When I Fall in Love"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										When I Fall in Love
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/7.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/7.mp3" title="Canaria Island"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										Canaria Island
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/8.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/8.mp3" title="Manma"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										Manma
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>

						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/9.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/9.mp3" title="ESTATE"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										ESTATE
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/10.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/10.mp3" title="Be my Love"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										Be my Love
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/11.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/11.mp3" title="Brucia Ia Terra"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										Brucia Ia Terra
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/12.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/12.mp3" title="All I am"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										All I am
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/13.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/13.mp3" title="I Pagliacci"></audio>
							<div class="play-pause-button">
								<div class="center-y-table" style="color:#fff;">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2 style="color:#fff;">
										I Pagliacci
									</h2>
								</div>
							</div>
							<time class="trak-duration" style="color:#fff;">
								00:00
							</time>
						</div>
					</div>
				</div><!-- end-col-sm-8 -->

			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END ALBUM SINGLE ================ -->

	<!-- =============== START PAGINATION ================ -->
	<!-- <div class="section-block  bkg-grey-ultralight pagination-2">
		<div class="row full-width ">
			<div class="col-sm-6 leftHover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/albums/albFooter.jpg');">
				<a href="albumsSingle3.html" class="pagination-previous">
					<small>Prev</small>
					<span>Strange Clouds</span>
				</a>
			</div>
			<div class="col-sm-6 rightHover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/albums/albFooter.jpg');">
				<a href="albumsSingle1.html" class="pagination-next ">
					<small>Next</small>
					<span>Noon XOXO</span>
				</a>
			</div>
		</div>
	</div> -->
	<!-- =============== END PAGINATION ================ -->
<?php get_footer(1); ?>
