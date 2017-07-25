<?php
/* Template Name: sale */
?>

<?php get_header(); ?>
    <!-- =============== START TOP HEADER ================ -->
<div class="topHeader" >
	<div class="header">
		<div class="rightTopHeader">
			<div class="cartContainer">
				<div class="myCart">
					<ul>
						<li class="cartTitle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/cart.png" alt=""><span>0</span></li>
					</ul>
				</div><!-- end myCart -->
				<div class="cartParent">
					<div class="cartItems">
						<ul>
							<li>
								<div class="priceCart">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/cartContainer.png" alt="">
									<a href="#">Hoodie T.Brothers <!-- <span><i class="fa fa-times"></i></span> --></a>
									<p>Price:&nbsp;<span>&pound;15,99</span></p>
									<p class="quantity">Quantity: <span>1</span></p>
								</div>
							</li>
							<li>
								<div class="priceCart">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/cartContainer.png" alt="">
									<a href="#">Hoodie T.Brothers <!-- <span><i class="fa fa-times"></i></span> --></a>
									<p>Price:&nbsp;<span>&pound;15,99</span></p>
									<p class="quantity">Quantity: <span>1</span></p>
								</div>
							</li>
							<li>
								<div class="total">
									<a href="#">Sub Total<span>31,98&pound;</span></a>
								</div>
							</li>
						</ul>
						<button type="submit" class="single_add_to_cart_button button alt buttonView">
											View Cart
						</button>
						<button type="submit" class="single_add_to_cart_button button alt buttonCheck">
							Checkout
						</button>
					</div><!-- end cartItems -->
				</div><!-- end cartParent -->
			</div><!--end cartContainer  -->
			<!-- Open Menu Button -->
			<a class="open-menu">
				<!-- Buttons Bars -->
				<span class="span-1"></span>
				<span class="span-2"></span>
				<span class="span-3"></span>
			</a>
		</div><!-- end rightTopHeader -->
	</div><!-- end header -->
	<!-- Menu Fixed Container -->
	<div class="menu-fixed-container">
		<!-- Menu Fixed Centred Container -->
		<nav>
			<!-- Menu Fixed Close Button -->
			<div class="x-filter">
				<span></span>
				<span></span>
			</div>
			<!-- Menu Fixed Primary List -->
			<ul>
				<!-- Menu Fixed Item -->
				<li>
					<a href="/">
						home
					</a>
					<ul class="sub-menu">
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="/">
								home star
							</a>
						</li>
						<li>
							<a href="index-royal-slider.html">
								home royal slider
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="index-video.html">
								home video
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="albumsGrid.html">
						discography
					</a>
					<ul class="sub-menu">
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="albumsFullBackground.html">
								albums full background
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="albumsGrid.html">
								albums grid
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="albumsSingle1.html">
								album description
							</a>
						</li>
					</ul>
				</li>
				<!-- Menu Fixed Item -->
				<li>
					<a href="events.html">
						events
					</a>
				</li>
				<!-- Menu Fixed Item -->
				<li>
					<a href="#">
						blog
					</a>
					<ul class="sub-menu">
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="blogGrid.html">
								blog grid
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="blogSidebarRight.html">
								blog sidebar
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="blogSingle.html">
								blog single
							</a>
						</li>
					</ul>
				</li>
				<!-- Menu Fixed Item -->
				<li>
					<a href="#">
						gallery
					</a>
					<ul class="sub-menu">
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="galleryGrid.html">
								albums grid
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="galleryScroll.html">
								albums scroll
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="gallerySingle.html">
								gallery single
							</a>
						</li>
					</ul>
				</li>
				<!-- Menu Fixed Item -->
				<li>
					<a href="#">
						Other Pages
					</a>
					<ul class="sub-menu">
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="biography.html">
								Biography
							</a>
						</li>
						<!-- Menu Fixed Sub Menu Item -->
						<li>
							<a href="video.html">
								Video
							</a>
						</li>
					</ul>
				</li>
				<!-- Menu Fixed Item -->
				<li>
					<a href="/contact/">
						contact
					</a>
				</li>
				<!-- Menu Fixed Item -->
				<li>
					<a href="shop.html">
						shop
					</a>
				</li>
			</ul>
			<!-- Menu Fixed Close Button -->
			<div class="x-filter">
				<span></span>
				<span></span>
			</div>
		</nav>
	</div><!-- end menu-fixed-container -->
	<!-- =============== STAR LOGO ================ -->
	<div class="logo-container-top">
		<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/whiteLogo.png" alt="Aqura"></a>
	</div><!-- end logo-container-top -->
	<!-- =============== END LOGO ================ -->
</div><!-- end topHeader -->
<!-- =============== END TOP HEADER ================ -->

<!-- =============== START PLAYER ================ -->
<div class="main-music-player hide-player">
	<a class="hide-player-button">
		<i class="fa fa-plus"></i>
		<i class="fa fa-minus"></i>
	</a>
	<div id="mesh-main-player" class="jp-jplayer" data-audio-src="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" data-title="See right through ft. Fiora" data-artist="Tensnake"></div>

	<div id="mesh-main-player-content" class="mesh-main-player" role="application" aria-label="media player">
		<div class="container">
			<div class="row">
				<div class="left-player-side">
					<div class="mesh-prev">
						<i class="fa fa-step-backward"></i>
					</div>
					<div class="mesh-play">
						<i class="fa fa-play"></i>
					</div>
					<div class="mesh-pause">
						<i class="fa fa-pause"></i>
					</div>
					<div class="mesh-next">
						<i class="fa fa-step-forward"></i>
					</div>
					<button id="playlist-toggle" class="jplayerButton">
						<span class="span-1"></span>
						<span class="span-2"></span>
						<span class="span-3"></span>
					</button>
				</div>
				<div class="center-side">
					<div class="mesh-current-time">
					</div>
					<div class="mesh-seek-bar">
						<div class="mesh-play-bar">
						</div>
					</div>
					<div class="mesh-duration">
					</div>
				</div>
				<div class="right-player-side">
					<div class="mesh-thumbnail">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/player/thumbnail.jpg" alt="">
					</div>
					<div class="mesh-title">
					</div>
					<div class="mesh-artist">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- =============== END PLAYER ================ -->

<!-- =============== START PLAYLIST ================ -->
<div class="playlist-wrapper" id="playlist-wrapper">
	<div class="jp-playlist container">
		<div class="about-list clearfix">
			<span class="about-name">NAME</span>
			<span class="about-length">LENGTH</span>
			<span class="about-available">AVAILABLE ON</span>
		</div>
		<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" data-artist="Tensnake" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/player/thumbnail.png" data-id="trak-200">
			<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" title="See right through ft. Fiora"></audio>
			<div class="additional-button">
				<div class="center-y-table">
					<a href="#">
						<i class="fa fa-apple"></i>
					</a>
					<a href="#">
						<i class="fa fa-soundcloud"></i>
					</a>
				</div>
			</div>
			<div class="play-pause-button">
				<div class="center-y-table">
					<i class="fa fa-play"></i>
				</div>
			</div>
			<div class="name-artist">
				<div class="center-y-table">
					<h2>
						Tensnake - See Right Through Ft. Fiora
					</h2>
				</div>
			</div>
			<time class="trak-duration">
				00:00
			</time>
		</div>
		<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" data-artist="Jack U ft. Kiesza" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/player/thumbnail.png" data-id="trak-201">
			<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" title="Take You There"></audio>
			<div class="additional-button">
				<div class="center-y-table">
					<a href="#">
						<i class="fa fa-apple"></i>
					</a>
					<a href="#">
						<i class="fa fa-soundcloud"></i>
					</a>
				</div>
			</div>
			<div class="play-pause-button">
				<div class="center-y-table">
					<i class="fa fa-play"></i>
				</div>
			</div>
			<div class="name-artist">
				<div class="center-y-table">
					<h2>
						Jack U ft. Kiesza - Take You There
					</h2>
				</div>
			</div>
			<time class="trak-duration">
				00:00
			</time>
		</div>
		<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" data-artist="Bob Sinclair" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/player/thumbnail.png" data-id="trak-201">
			<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" title="Cinderella"></audio>
			<div class="additional-button">
				<div class="center-y-table">
					<a href="#">
						<i class="fa fa-apple"></i>
					</a>
					<a href="#">
						<i class="fa fa-soundcloud"></i>
					</a>
				</div>
			</div>
			<div class="play-pause-button">
				<div class="center-y-table">
					<i class="fa fa-play"></i>
				</div>
			</div>
			<div class="name-artist">
				<div class="center-y-table">
					<h2>
						Bob Sinclair - Cinderella
					</h2>
				</div>
			</div>
			<time class="trak-duration">
				00:00
			</time>
		</div>
		<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" data-artist="Yuna" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/player/thumbnail.png" data-id="trak-201">
			<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" title="Lullabies"></audio>
			<div class="additional-button">
				<div class="center-y-table">
					<a href="#">
						<i class="fa fa-apple"></i>
					</a>
					<a href="#">
						<i class="fa fa-soundcloud"></i>
					</a>
				</div>
			</div>
			<div class="play-pause-button">
				<div class="center-y-table">
					<i class="fa fa-play"></i>
				</div>
			</div>
			<div class="name-artist">
				<div class="center-y-table">
					<h2>
						Yuna - Lullabies
					</h2>
				</div>
			</div>
			<time class="trak-duration">
				00:00
			</time>
		</div>
	</div>
</div>
<!-- =============== END PLAYLIST ================ -->

	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="before-FullscreenSlider"></div>
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/header/header.png');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START ALBUM SINGLE ================ -->
	<section class="albumSingle padding background-properties" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/subHeader/header.png);">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="albumsSingle1.html">Stunt Vibe</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">
				<div class="col-sm-8">
					<div class="jp-playlist">
						<div class="about-list clearfix">
							<span class="about-name">NAME</span>
							<span class="about-length">LENGTH</span>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" data-artist="Tensnake" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" title="See Right Through ft. Fiora"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Tensnake - See Right Through ft. Fiora
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" data-artist="Jack U ft. Kiesza" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" title="Take You There"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Jack U ft. Kiesza - Take You There
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" data-artist="Bob Sinclair" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" title="Ciderella"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Bob Sinclair - Cinderella
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" data-artist="Yuna" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" title="Lullabies"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Yuna - Lullabies
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>

						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" data-artist="Tensnake" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" title="See Right Through ft. Fiora"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Tensnake - See Right Through ft. Fiora
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" data-artist="Jack U ft. Kiesza" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" title="Take You There"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Jack U ft. Kiesza - Take You There
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" data-artist="Bob Sinclair" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" title="Ciderella"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Bob Sinclair - Cinderella
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" data-artist="Yuna" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" title="Lullabies"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Yuna - Lullabies
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>

						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" data-artist="Tensnake" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/flute.mp3" title="See Right Through ft. Fiora"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Tensnake - See Right Through ft. Fiora
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" data-artist="Jack U ft. Kiesza" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" title="Take You There"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Jack U ft. Kiesza - Take You There
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" data-artist="Bob Sinclair" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" title="Ciderella"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Bob Sinclair - Cinderella
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
						<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" data-artist="Yuna" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/thumbnail.png">
							<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" title="Lullabies"></audio>
							<div class="play-pause-button">
								<div class="center-y-table">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<div class="name-artist">
								<div class="center-y-table">
									<h2>
										Yuna - Lullabies
									</h2>
								</div>
							</div>
							<time class="trak-duration">
								00:00
							</time>
						</div>
					</div>
				</div><!-- end-col-sm-8 -->
				<div class="col-sm-3 col-sm-offset-1">
					<div class="sidebarAlbum">
						<div class="widget">
							<h3>Details</h3>
							<ul>
								<li>Realease Date:<span>december 15, 2015 </span></li>
								<li>Catalog:<span>aqura 0150813 </span></li>
								<li>Label:<span>aqura sound </span></li>
								<li>Fomat:<span>vinyl,cd </span></li>
							</ul>
						</div><!-- end widget -->
						<div class="widget">
							<h3>Instagram</h3>
							<div class="instagram-widget">
								<ul id="instagram-sidebar-widget" class="clearfix"></ul>
							</div>
						</div><!-- end widget -->
						<div class="widget">
							<h3>Available On</h3>
							<section>
							  <ul id='services'>
							    <li>
							      <a href="#"><div><i class="fa fa-lastfm"></i></div></a>
							    </li>
							    <li>
							    	<a href="#"><div><i class="fa fa-soundcloud"></i></div></a>
							    </li>
							    <li>
							    	<a href="#"><div><i class="fa fa-apple"></i></div></a>
							    </li>
							    <li>
							    	<a href="#"><div><i class="fa fa-spotify"></i></div></a>
							    </li>
							    <li>
							    	<a href="#"><div><i class="fa fa-amazon"></i></div></a>
							    </li>
							  </ul>
							</section>
						</div><!-- end widget -->
					</div><!-- end sidebarAlbum -->
				</div><!-- end col-sm-3 col-sm-offset-1 -->
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
<?php get_footer(); ?>
