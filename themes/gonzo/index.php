<?php get_header(); ?>
	<!-- =============== START BREADCRUMB ================ -->
	<section class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/header/header_test8.jpeg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div id="home" style="position: absolute;left: 0;top: 0;">
							<div class="intro-header">
								<div class="js-height-full star" style="height: 955px;">
									<div class="star-pattern-1 js-height-full" style="height: 994px;"></div>
									<div class="col-xs-12 col-sm-offset-4 col-sm-8">
										<div class="starTitle">
											<div class="grid__item">
												<h1><a class="link link-yaku" href="#"><span>G</span><span>O</span><span>N</span><span>Z</span><span>O</span></a></h1>
											</div>
											<h4>The Balcony Cruise</h4>
										</div>
										<canvas class="cover" width="1920" height="955"></canvas>
									</div>
								</div>
							</div>
	   					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

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
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/player/thumbnail.png" alt="">
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

	<!-- =============== START TOP HEADER ================ -->
	<div class="topHeader" >
		<div class="header">
			<div class="rightTopHeader">
				<div class="cartContainer">
					<div class="myCart">
						<ul>
							<li class="cartTitle"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/cart.png" alt=""></a></li>
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
						<a href="shopSingle.html">
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
						<a href="blogGrid.html">
							blog&News
						</a>
					</li>
					<li>
						<a href="/video/">
							Music Video
						</a>
					</li>
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
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/whiteLogo.png" alt="Aqura"></a>
		</div><!-- end logo-container-top -->
		<!-- =============== END LOGO ================ -->
	</div><!-- end topHeader -->
	<!-- =============== END TOP HEADER ================ -->

	<!-- =============== START ALBUM COVER SECTION ================ -->
	<section class="padding albumsHome hide-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="sectionTitle paddingBottom">
						<span class="heading-t3"></span>
						<h2><a href="#">Now On Sale</a></h2>
						<span class="heading-b3"></span>
					</div><!-- end sectionTtile -->
				</div><!-- end col-sm-12 -->
			</div>
			<div class="list-albums">
				<ul class="list-feature col-md-12 col-xs-12 col-sm-12">
						<li class="col-sm-offset-4 col-sm-4 col-xs-12">
							<div class="album-icon albumIcon3">
								<span class="thumbs-album">
									<a href="shopSingle.html">
										<img width="270" height="270" src="<?php echo get_template_directory_uri(); ?>/assets/img/albums/albumCover.png" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1">
									</a>
									</span>
								<span class="disk"></span>
							</div>
							<div class="name">
								<h3>The Balcony Cruise</h3>
								<p>powered by DaBaDa Records</p>
							</div>
						</li>
				</ul>
			</div><!-- end list-albums -->
		</div><!-- end container -->
	</section>
	<!-- =============== END ALBUM COVER SECTION ================ -->

	<!-- =============== START HOME-BLOG SECTION ================ -->
	<section class="padding hide-section blogHomeSection background-properties" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/header/header_test7.jpeg);">
		<div class="container">
			<div class="row">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="blogGrid.html">Profile</a></h2>
					<span class="heading-b3"></span>
				</div>
				<!-- end sectionTtile -->
				<div class="col-sm-12">
					<div class="blogBoxContent profileContent">
						<div class="col-sm-4">
							<div class="blogHeader">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/top_prof_artist.jpg">
							</div>
						</div>

						<div class="col-sm-8">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">GONZO <span class=sm_h1>(ゴンゾ)</span></a></h1>
							</div>
							<div class="blogParagraph">
								<p><b>プロフィール</b><br>本名 野澤孝智 Nozawa Takatomo<br>
									1960年 東京生まれ<br>
									武蔵野音楽大学 声楽家を卒業後 VictorEntertainment 入社。<br>
									音楽プロデューサーとして松本伊代、荻野目洋子、川原亜矢子、SMAP等<br>
									2007年 Office727.incを立ち上げ、関ジャニ8、John Hoon、Br.KORN、フェアリーズ他多数をプロデュース。
									特にSMAP
								</p>
							</div>
							<!--end blogParagraph  -->
						</div>

						<div class="rmButton text-right">
							<a href="/profile/">プロフィール詳細</a>
						</div>
					</div>
					<!-- end blogBoxContent -->
				</div>
				<!-- end col-sm-12 -->
			</div>
			<!-- end container -->
		</div>
		<!-- end row -->
	</section>
	<!-- =============== END HOME-NLOG SECTION ================ -->

	<!-- =============== START HOME-BLOG SECTION ================ -->
	<section class="padding hide-section blogHomeSection">
		<div class="container">
			<div class="row">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="blogGrid.html">News&Blog</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->
				<div class="col-sm-4">
					<div class="blogBox">
						<div class="imgBox"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/homeGalPost.png" alt="box-img"></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Gallery Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="blogSingle.html">Read More</a>
							</div>
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->
				<div class="col-sm-4">
					<div class="blogBox">
						<div class="videoBox"><iframe src="https://player.vimeo.com/video/145837856" width="600" height="410"  ></iframe></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Video Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">28 apr 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->
				<div class="col-sm-4">
					<div class="blogBox">
						<div class="soundcloudBox"><iframe height="203" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73595878&amp;color=bb9b69&amp;show_artwork=false&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Soundcloud Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->
			</div><!-- end container -->
		</div><!-- end row -->
	</section>
	<!-- =============== END HOME-NLOG SECTION ================ -->




	<!-- =============== START EVENTS SECTION-1 ================ -->
	<section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/blog/discography_test1.png);" class="background-properties hide-section paddingHomeEvents">
		<div class="tableEvents">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="sectionTitle paddingBottom">
							<span class="heading-t3"></span>
							<h2><a href="/events/">Event Information</a></h2>
							<span class="heading-b3"></span>
						</div><!-- end sectionTtile -->
						<table>
							<tr class="tableEventsTitle">
								<th class="date">日程</th>
								<th class="venue">イベント名</th>
								<th class="location">場所</th>
								<th class="tickets">詳細</th>
								<th></th>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Jun 7</a></td>
								<td class="aqura-location"><a href="singleEvent.html">text text</a></td>
								<td class="aqura-city"><a href="singleEvent.html">text text text text text</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">予約する</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Jun 7</a></td>
								<td class="aqura-location"><a href="singleEvent.html">text text</a></td>
								<td class="aqura-city"><a href="singleEvent.html">text text text text text</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">予約する</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Jun 7</a></td>
								<td class="aqura-location"><a href="singleEvent.html">text text</a></td>
								<td class="aqura-city"><a href="singleEvent.html">text text text text text</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">予約する</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Jun 7</a></td>
								<td class="aqura-location"><a href="singleEvent.html">text text</a></td>
								<td class="aqura-city"><a href="singleEvent.html">text text text text text</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">予約する</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Jun 7</a></td>
								<td class="aqura-location"><a href="singleEvent.html">text text</a></td>
								<td class="aqura-city"><a href="singleEvent.html">text text text text text</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">予約する</a></td>
							</tr>
						</table>
					</div><!-- end col-sm-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
	</section>
	<!-- =============== END EVENTS SECTION-1 ================ -->

	<!-- =============== START VIDEO SECTION ================ -->
	<section class="videoHome hide-section padding">
		<div class="container">
			<div class="row">
				<div class="sectionTitle">
					<span class="heading-t3"></span>
					<h2><a href="/video/">Music Video</a></h2>
					<span class="heading-b3"></span>
					<p>Check out my latest videos and follow me on <a href="#">Youtube</a> to view more.</p>
				</div><!-- end sectionTtile -->
				<div class="col-sm-4">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/YqeW9_5kURI"  allowfullscreen></iframe>
				</div><!-- end col-sm-4 -->
				<div class="col-sm-4">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/YqeW9_5kURI"  allowfullscreen></iframe>
				</div><!-- end col-sm-4 -->
				<div class="col-sm-4">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/YqeW9_5kURI"  allowfullscreen></iframe>
				</div><!-- end col-sm-4 -->
			</div>
		</div>
	</section>
	<!-- =============== END VIDEO SECTION ================ -->
  <?php get_footer(); ?>
