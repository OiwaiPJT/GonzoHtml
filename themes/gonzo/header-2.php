<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/content/icon.png">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<!-- google analytics -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103579616-1', 'auto');
  ga('send', 'pageview');
	</script>
	<!-- google analytics end -->
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" );
  wp_head(); ?>
</head>
<body>
	<!-- <div class="page-loader">
		 <div class="vertical-align align-center">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/loader/loader.gif" alt="" class="loader-img">
		 </div>
	</div> -->

	<!-- =============== START PLAYER ================ -->
	<div class="main-music-player">
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
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png" alt="">
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
			<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/1.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png" data-id="trak-200">
				<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/1.mp3" title="Sabor A mi"></audio>
				<div class="additional-button">
					<div class="center-y-table">
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
							Sabor A mi
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png" data-id="trak-201">
				<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/2.mp3" title="La Paloma"></audio>
				<div class="additional-button">
					<div class="center-y-table">
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
							La Paloma
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" data-artist="Cinema" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png" data-id="trak-201">
				<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/3.mp3" title="GONZO"></audio>
				<div class="additional-button">
					<div class="center-y-table">
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
							Cinema
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			<div class="trak-item" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" data-artist="GONZO" data-thumbnail="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png" data-id="trak-201">
				<audio preload="metadata" src="<?php echo get_template_directory_uri(); ?>/assets/audio/4.mp3" title="Sou Voce"></audio>
				<div class="additional-button">
					<div class="center-y-table">
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
							Sou Voce
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

	<!-- =============== START TOP HEADER ================ -->
	<div class="topHeader" >
		<div class="header">
			<div class="rightTopHeader">
				<div class="cartContainer">
					<div class="myCart">
						<ul>
							<li class="cartTitle">
									<a href="/shop/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/cart.png" alt=""></a>
							</li>
						</ul>
					</div><!-- end myCart -->
				</div><!--end cartContainer  -->
				<!-- Open Menu Button -->
				<a class="open-menu">
					<!-- Buttons Bars -->
					<span>MENU</span>
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
				<ul>
					<li>
						<a href="/">
							home
						</a>
					</li>
					<li>
						<a href="/shop/">
							Now On Sale
						</a>
					</li>
					<li>
						<a href="/profile/">
							Profile
						</a>
						<ul class="sub-menu">
							<li>
								<a href="/profile/">
									アーティストGONZO
								</a>
							</li>
							<li>
								<a href="/profile/#parentVerticalTab2">
									プロデューサー野澤孝智
								</a>
							</li>
							<li>
								<a href="/profile/#parentVerticalTab3">
									婚活大使
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="/events/">
							events
						</a>
					</li>
					<li>
						<a href="/blog/">
							blog&News
						</a>
					</li>
					<!-- <li>
						<a href="/video/">
							Music Video
						</a>
					</li> -->
					<li>
						<a href="/contact/">
							contact
						</a>
					</li>
					<li>
						<a href="/terms_of_use/">
							Terms of use
						</a>
						<ul class="sub-menu">
							<li>
								<a href="/terms_of_use/">
									特定商取引法に基づく表記
								</a>
							</li>
							<li>
								<a href="/terms_of_use/#parentVerticalTab2">
									利用規約
								</a>
							</li>
							<li>
								<a href="/terms_of_use/#parentVerticalTab3">
									プライバシーポリシー
								</a>
							</li>
						</ul>
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
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/whiteLogo.png" ></a>
		</div><!-- end logo-container-top -->
		<!-- =============== END LOGO ================ -->
	</div><!-- end topHeader -->
	<!-- =============== END TOP HEADER ================ -->
