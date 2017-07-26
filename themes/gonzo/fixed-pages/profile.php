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
							<a href="/video/">
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
					<a href="/events/">
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
	<section style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/profile/bg_profile.jpg);" class="biography padding background-properties" id="content">
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
	                <li>アーティストGONZO ></li>
	                <li>プロデューサー 野澤孝智 ></li>
	                <li>富山県南砺市 婚活大使 ></li>
	            </ul>
				</div>
				<div class="col-sm-9">
					<div class="resp-tabs-container hor_1">
							<div>
								<p>
									<h4>アーティスト GONZO</h4><br>
									1960年、東京都出身<br>
									プロデューサー、アレンジャー、作曲家<br>
									武蔵野音楽大学 声楽科卒業後、ビクターエンタテインメント株式会社入社。<br>
									プロデューサーとしてデビュー作から10年、SMAPを担当したほか、川原亜矢子、小日向しえ などをはじめ、<br>
									多数のアーティストを手掛ける。2007年、独立しoffice727を設立。<br>
									関ジャニ∞をプロデュースするほか、高知県出身の女性デュオ「スーパーバンド」などのサウンドプロデュースも手がける。<br>
									また、CMや映画音楽なども制作プロデュース。<br>
									<br>
									2016年よりGONZOでアーティスト活動を展開。<br>
									17年10月に「The Barcony Cruise」を発売予定。<br>
									都内を中心にLive活動中。
								</p>
							</div>
							<div>
								<p>
									<h4>プロデューサー 野澤孝智</h4><br>
									1960年、東京都出身<br>
									プロデューサー、アレンジャー、作曲家<br>
									武蔵野音楽大学 声楽科卒業後、ビクターエンタテインメント株式会社入社。<br>
									プロデューサーとしてデビュー作から10年、SMAPを担当したほか、川原亜矢子、小日向しえ などをはじめ、<br>
									多数のアーティストを手掛ける。2007年、独立しoffice727を設立。<br>
									関ジャニ∞をプロデュースするほか、高知県出身の女性デュオ「スーパーバンド」などのサウンドプロデュースも手がける。<br>
									また、CMや映画音楽なども制作プロデュース。<br>
									2000年公開された織田裕二主演のヒット作、「ホワイトアウト」や、2002年、竹内結子、吉沢悠らが主演を務めた作品、「星に願いを。」では、<br>
									サントラに世界的ハーモニカ奏者のウィリアム・ギャルソンなどを起用し、サントラとしては異例の売り上げを記録した。<br>
									J-POP全般を得意とし、ノンジャンルで対応可能。<br>
									アーティストの歌声の良さを最大限に引き出すそのボーカルディレクションには定評がある。<br>
									面倒なプロデュース大歓迎！<br><br>

									プロデュース作品<br>
									<table class="producer-works">
										<tbody>
											<tr>
												<th>スーパーバンド</th>
												<td>シングル「赤い橋」（2005）「笑顔のゆくえ」（2006）「思いッキリ!!」（2007）<br>
												 アルバム「元気だしていこうぜ!!」（2006）「負けるな」（2006）「バルーザルーザ」（2007）</td>
											</tr>
											<tr>
											<th>関ジャニ∞</th>
											<td>シングル「大阪レイニーブルース」「好きやねん、大阪」（2005）「∞SAKAおばちゃんROCK」「関風ファイティング」（2006）「ズッコケ男道」「イッツ・マイ・ソウル」（2007）<br>
															アルバム「感謝＝∞」（2004）「F・T・O」（2006）「ズッコケ大脱走」(2007)</td>
											</tr>
											<tr>
											<th>戸田恵子</th>
											<td>アルバム「ACTRESS」（2007）収録曲「女友達」「恋のおまもりください」編曲<br>
															アルバム「Twice」（2005）</td>
											</tr>
											<tr>
											<th>NOZOMU</th>
											<td>シングル「STAY～僕の憂鬱～」（2005）</td>
											</tr>
											<tr>
											<th>川原亜矢子</th>
											<td>アルバム「グレイの風の街」（2004）</td>
											</tr>
											<tr>
											<th>小日向しえ</th>
											<td>シングル「プラム」「カナシイウタ」「花摘み」「傷跡」「ピストル」「星のタトゥー」「夏の残骸」<br>
															アルバム「恋愛マシーン～Play Me」（1997）</td>
											</tr>
											<tr>
											<th>SMAP</th>
											<td>シングル「Can’t Stop!!-LOVING-」「笑顔のゲンキ」「君色思い」「＄10」「がんばりましょう」「Hey Hey おおきに毎度あり」「たぶんオーライ」「KANSHAして」「しようよ」「SHAKE」「どんないいこと」「青いイナズマ」「セロリ」「Peace！」「夜空ノムコウ」など<br>
															アルバム「SMAP 001」から「SMAP 012 VIVA AMIGOS!」</td>
											</tr>
											<tr>
											<th>SMAPPIES</th>
											<td>アルバム「SMAPPIES Rhythm sticks」（1996）ADLIB BEST RECORD OF THE YEAR 1996受賞<br>
															アルバム「SMAPPIES II」（1999）POPULAR DISC AWARDS 1999受賞</td>
											</tr>

											<tr><th>JOHN HOON</th>
											<td> シングル 「BlueMoon」</td>
											</tr>
										</tbody>
									</table>
								</p>
							</div>
							<div>
								<div class="row">
									<div class="col-sm-9">
										<h4>富山県南砺市 婚活大使</h4><br>
								    <p>	2017年5月21日に富山県南砺市の婚活大使に任命されました。<br>
											2016年秋、とあるご縁で富山県南砺市主催の婚活セミナーに講師としてお招き頂きました。<br>
											手探りの中南砺市の男性諸氏に私なりのアドバイスを聞いて頂いた所、なんと10組のカップルが成立いたしました。<br>
											一言で婚活と言ってもアドバイスは非常に難しく、一人一人が持つ環境は千差万別です。<br>
											そこで私は「野澤孝智の男塾」と言うテーマでセミナーを展開しています。<br>
											自分自身の男を磨く事が結果素敵な伴侶を見つけられると言う内容の講義です。<br>
											「かっこいい！って何？」かっこ悪い事をしない事。<br>
											「かっこ悪い事って何？」「かっこ付けるのが一番かっこ悪い事！」<br>
											私の講義はここから始まります。<br>
											富山県南砺市は全国に先駆けて田中幹男市長の元「南砺市で暮らしません課」というユニークな課が設立され、市職員の方が数名常駐されています。<br>
											市役所の中では男性が訪ねにくいであろうと言う配慮で、近隣のショッピングモールの中に開設され、受付時間もモールに合わせて20時までと、とても行政とは思えぬ柔軟な対応がなされています。<br>
											そしてとても職員だけでは手が足りないきめ細かい対応のために、<br>
											山田由理枝さんを筆頭に市民の方々が「おせっかいさん」という名の下にボランティアがフォローするという、何とも万全な体制が組まれています。<br>
											全国の行政が「婚活課」を設置して双方で情報共有できたらどんなにすばらしい事でしょう。<br>
											<br>そうなる事を夢みて婚活大使は今日も行く。
										</p>
									</div>
									<div class="col-sm-3">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/prof_tab_3.jpg" alt="">
									</div>
								</div>
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
