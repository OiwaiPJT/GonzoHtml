<?php
/* Template Name: profile */
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
	<!-- =============== START BIOGRAPHY SECTION ================ -->
	<section style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/subHeader/header.png);" class="biography padding background-properties" id="content">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="albums.html">Profile</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">
				<div id="parentVerticalTab">
				<div class="col-sm-3">
	            <ul class="resp-tabs-list hor_1">
	                <li>Vertical 1 ></li>
	                <li>Vertical 2 ></li>
	                <li>Vertical 3 ></li>
	            </ul>
				</div>
				<div class="col-sm-9">
					<div class="resp-tabs-container hor_1">
							<div>
								<p>I currently work as freelance and in the last years I focused on personal projects and creations in order to build,
								my own wide portfolio that could distinguish me both in style, technique and creativity.
								In my first works i focused on a graphic style based on construction and deconstruction of the human body
								using various tools and graphic effects that render it almost a sketch.
								In my recent works I tried to merge the human body with nature or rather with the four elements of fire,
								air, water and earth, and even with a fifth esoteric element: the Aristotelian ether, that includes all the others,
								the essence of celestial bodies, eternal and unchangeable in comparison with the earth as a place of change.
								The result is the vision of my imaginative world hanging between reality and fantasy, dream and utopia
								and in which color and sensitivity have the predominant role.</p>
									<br>
									<br>
									<p>Tab 1 Container</p>
							</div>
							<div>
								<p>Photoshop is the software I prefer to conceive my works, in which I also include the digital version of hand-made elements,
								such as scratches and ink marks, acrylic or watercolor stains. The outcome is technically always appealing and intriguing.
								Music is the key of this creative process. I could mention Sigur Rós, Radiohead, Bloc Party, Coldplay, Bjork etc.
								I’m also fond of movies, I love every kind cinema, especially indie movies and art movies.</p>
									<br>
									<br>
									<p>Tab 2 Container</p>
							</div>
							<div>
								<p>Emi Haze graduated from the Institute
								of Design in Verona with
								a degree in Graphic Design
								and Advertising Design.I live in the north-east of Italy and my huge passion is digital art.
								Art and painting connected to technology have always been my strongest passions. People think I am calm, quiet, sometimes introvert, really creative, inspired and perfectionist.
								In my opinion everything in every moment has an artistic side, the aesthetics of things, people around me...
								for me everything has its own importance, images, textures, sounds, fragrances, my creativity is costantly stimulated.</p>
									<br>
									<br>
									<p>Tab 3 Container</p>
							</div>
					</div>
					<div class="signature">
						<a href="http://www.emihaze.com/showcase">Emili Haze:</a>
						<div class="imgSignuature">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/signature.png" alt="">
						</div>
					</div>
				</div>
			</div>
			</div>
		</div><!-- end container -->
	</section>
	<!-- =============== END BIOGRAPHY SECTION ================ -->
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      //Vertical Tab
      $('#parentVerticalTab').easyResponsiveTabs({
          type: 'vertical', //Types: default, vertical, accordion
          width: 'auto', //auto or any width like 600px
          fit: true, // 100% fit in a container
          closed: 'accordion', // Start closed if in accordion view
          tabidentify: 'hor_1', // The tab groups identifier
          activate: function(event) { // Callback function if tab is switched
              var $tab = $(this);
              var $info = $('#nested-tabInfo2');
              var $name = $('span', $info);
              $name.text($tab.text());
              $info.show();
          }
      });
  });
</script>
