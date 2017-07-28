<?php
/* Template Name: terms_of_use */
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
							<!--<a href="/video/">-->
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
	<section style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/subHeader/header.png);" class="biography padding background-properties" id="content">
		<div class="container">
			<div class="sectionTitle paddingBottom">
				<span class="heading-t3"></span>
				<h2><a href="/terms_of_use/">Terms Of Use</a></h2>
				<span class="heading-b3"></span>
			</div><!-- end sectionTtile -->
			<div class="row">
				<div id="parentVerticalTab">
				<div class="col-sm-3">
	            <ul class="resp-tabs-list hor_1">
	                <li>特定商取引法に基づく表記 ></li>
	                <li>利用規約 ></li>
	                <li>プライバシーポリシー ></li>
	            </ul>
				</div>
				<div class="col-sm-9">
					<div class="resp-tabs-container hor_1">
							<div>
								<h4>1.事業者名</h4>
								<p>野澤孝智</p>
								<h4>2.事業責任者</h4>
								<p>野澤孝智</p>
								<h4>3.事業所在地</h4>
								<p></p>
								<h4>4.連絡先等</h4>
								<p>電話番号：（電話でのサポートは行っておりません。）<br />
								e-mail：<a href="mailto:info@gonzo.style">info@gonzo.style</a></p>
								<h4>5.販売価格</h4>
								<p>商品・サービス紹介ページをご参照ください。税込価格で表示しています。</p>
								<h4>6.商品代金以外の必要費用</h4>
								<p>送料、代引き手数料</p>
								<h4>7.お支払方法</h4>
								<p>代金引換</p>
								<h4>8.お支払期限</h4>
								<p>商品と引き換えに現金にてお支払いください。</p>
								<h4>9.売買契約成立の時期</h4>
								<p>クレジットカード決済終了後および銀行振込確認後</p>
								<h4>10.不良品等について</h4>
								<p>品質管理には十分留意しておりますが万が一、お客様のご注文と異なる商品や不良品の場合は責任を持って交換させていただきますので、商品到着後10日以内にお知らせください。この場合の送料は、当社負担といたします。</p>
								<h4>11.個人情報について</h4>
								<p>ご注文書に記載していただきましたお客様の大切な個人情報は、弊社の情報及び案内をお送りする場合に付き利用させて頂く場合があります。当社にて大切に保管させていただき、第三者に提供する事はございません。</p>
							</div>
							<div>
								<h4>1.サイト運営</h4>
								<p>　本Webサイト（以下、本サイトという）は、株式会社レッドディアと株式会社マイデスク（以下、甲）が運営しています。</p>
								<h4>2.サイト利用規約適用の範囲</h4>
								<p>　この利用規約（以下「本利用規約」といいます）は、甲が本サイト上で提供するサービス（以下、本サービス）を、ユーザーが利用する際の一切の行為に適用されます。本利用規約に同意された場合のみ本サービスをご利用下さい。</p>
								<h4>3. サイト利用規約の変更と通知</h4>
								<p>　本利用規約は、ユーザーに対する事前の通知なく、甲が変更できるものとします。</p>
								<p>　本利用規約が変更された場合、当該変更後のユーザーによる本サービスの利用には変更後の本利用規約等が適用されるものとし、当該利用により、ユーザーは当該変更に同意したものとみなされます。</p>
								<h4>4. 提供するサービスの内容と利用方法</h4>
								<p>1.アカウント登録</p>
								<p>　本サービスの利用には、所定の方法によりアカウントが登録された時点でユーザーになり、ユーザーIDが付与されます。</p>
								<p>2.退会について</p>
								<p>　ユーザーが退会を希望する場合には、ユーザーは、所定の方法により、甲に退会の申出を行うものとします。</p>
								<p>　甲は、退会したユーザーの個人情報や学習記録、購入した教材の一切のデータ等を引き続き保有する義務はないものとします。</p>
								<p>　甲は、ユーザーが次の各号に掲げるいずれかの行為を行った場合には、甲の判断によって、ユーザーアカウントを強制的に削除することがあります。</p>
								<p>　・本利用規約又はその他の利用規約等に違反した場合</p>
								<p>　・その他甲が不適切と判断した場合</p>
								<p>3.有効期限について</p>
								<p>　有効期限を経過した商品・教材等は、利用および閲覧ができなくなります。有効期限の設定は、甲により変更される場合があります。</p>
								<h4>5. サービス利用に必要な機器等</h4>
								<p>　ユーザーは、本サービスを利用するために必要なあらゆる機器、ソフトウェア、通信手段、環境を自己の責任と費用において、適切に整備するものとします。</p>
								<p>　ユーザーは自己の利用環境に応じて、コンピューター・ウィルスの感染の防止、不正アクセス及び情報漏洩の防止等のセキュリティ対策を講じるものとします。</p>
								<p>　甲はユーザーの利用環境について一切関与せず、また一切の責任を負いません。</p>
								<h4>6. ユーザーIDとパスワードの管理に関する規定</h4>
								<p>　複数人が1つのユーザーIDを共同で利用することはできません。</p>
								<p>　ユーザーはいかなる場合においても、アカウントを第三者に譲渡又は貸与することはできません。</p>
								<p>　ユーザーは、自己のユーザーID及びパスワードの不正利用の防止に努めるとともに、その管理について一切の責任を持つものとします。</p>
								<p>　登録したユーザーIDとパスワードが第三者に利用されたことによって生じた損害等につきましては、甲に重過失がある場合を除き、甲はいかなる責任も負いません。</p>
								<h4>7. メールについて</h4>
								<p>　甲の判断に基づいて、ユーザーの登録メールアドレスに対して、本サービスの運営上のメールを送信する場合があります。</p>
								<p>　ユーザーは、自己の管理に属する使用可能なメールアドレスを登録メールアドレスとして登録しなければならず、当該登録メールアドレスが自己の管理に属さなくなったときには、自己の管理に属する使用可能な別のメールアドレスに変更しなければならないものとします。</p>
								<h4>8. クッキー</h4>
								<p>　本WEBサイトは、クッキー（cookie）の技術を使用しています。</p>
								<p>　ブラウザでクッキーを拒否するための設定を行った場合、本サービスの利用ができなくなります。</p>
								<h4>9. 著作権、商標権、特許権等の知的財産権について</h4>
								<p>　ユーザーは、自ら知的財産権を有するか、または必要な権利者の許諾を得た文章、画像、映像（動画）等のみ、投稿または編集することができるものとします。</p>
								<p>　前項に定めるユーザーが本サービスを利用して投稿・編集した文章、画像、映像（動画）等についての著作権を除き、本サービスおよび本サービスに関連する一切の情報についての著作権およびその他知的財産権はすべて甲または甲にその利用を許諾した権利者に帰属し、ユーザーは無断で複製、譲渡、貸与、翻訳、改変、転載、公衆送信（送信可能化を含みます）、伝送、配布、出版、営業使用等をしてはならないものとします。</p>
								<h4>10. リンクについて</h4>
								<p>　本サイトからリンクを貼っている第三者のウェブサイト（以下リンクサイトといいます）の内容およびリンクサイトの利用により生じる一切の損害について、甲はいかなる責任を負いません。</p>
								<h4>11. 禁止事項</h4>
								<p>　本サービスの利用について、ユーザーの故意・過失を問わず以下の各項に該当すると甲が判断する行為を禁止します。</p>
								<p>1.反社会的行為</p>
								<p>　・反社会的行為法令または公序良俗に違反する行為</p>
								<p>　・甲もしくは他者の著作権、商標権等の知的財産権を侵害する行為、又は侵害するおそれのある行為。</p>
								<p>　・甲もしくは他者の財産、プライバシーもしくは肖像権を侵害する行為、又は侵害するおそれのある行為。</p>
								<p>　・甲もしくは他者を不当に差別もしくは誹謗中傷し、他者への不当な差別を助長し、又はその名誉もしくは信用を毀損する行為。</p>
								<p>　・虚偽または誤解を招くような内容を含む情報等を掲載、登録する等の行為</p>
								<p>　・自分以外の人物を名乗ったり、代表権や代理権があるものと装ったり、又は他の人物や組織と提携、協力関係にあると偽って本サービスを利用する行為。</p>
								<p>　・民族・人種・性別・年齢等による差別につながる表現の掲載行為</p>
								<p>2.商業行為</p>
								<p>　・本サービスを個人的な使用の範囲を超えて営利目的で利用すること</p>
								<p>　・本サービスを通じて入手した全ての情報について、複製、販売、出版、公開その他の方法において、個人としての私的使用以外の使用をする行為</p>
								<p>　・宣伝・告知・勧誘等を目的とする同一趣旨の複数の発信や掲載行為（マルチポスト、スパムメール、チェーンメール等を含む）</p>
								<p>　・他のユーザーの個人情報を収集、蓄積する行為、またはこれらの行為をしようとすること</p>
								<p>4.その他</p>
								<p>　・無差別にメール送信・メッセージ投稿を行う行為</p>
								<p>　・複数の人物の前で、サービスを利用する行為（プロジェクターの利用、大型モニターの利用、複数スクリーンへの一斉出力等、方法の如何を問わず）</p>
								<p>　・その他、甲が、合理的な理由に基づき不適切と判断する行為</p>
								<p>　・ウィルス等の有害なコンピュータプログラム等を送信又は掲載する行為。</p>
								<p>　・サーバーに負担をかける行為、もしくは、本サービスの運営やネットワーク・システムに支障を与える行為、又はこれらのおそれのある行為。</p>
								<h4>12.反社会的勢力ないし団体の利用停止</h4>
								<p>甲は、ユーザーが反社会的勢力（反社会的活動を伴う団体を含む。）に所属し、又は当該勢力、団体と密接な関係を有する者であると判断した場合には、何ら事前の通知又は催告をすることなく本サービスの利用を停止することができるものとします。これにより、何らかの損害が生じたとしても甲は責任を一切負いません。</p>
								<h4>13. 免責事項</h4>
								<p>　・甲が必要と判断した場合には、ユーザーに通知することなくいつでも本サービスを変更、停止または中止することができるものとします。</p>
								<p>　・甲が本サービスを変更、停止または中止した場合や、事件・事故等によりやむを得ずサービスを変更、停止または中止せざるを得なかった場合にも、甲はユーザーに対して一切責任を負わないものとします。</p>
								<p>　・ユーザーは、本サービスに関連する事項に起因または関連して生じた一切の損害について、甲が賠償責任を負わないことに同意します。</p>
								<p>　・ユーザーに対して提供されるサービスのうち、「買う」「購入する」等の表示がなされている場合でも、ユーザーは本サービスの利用権を有するのみであって、所有権、知的財産権等の権利を取得するものではありません。</p>
								<p>　・ユーザーが本サービスにおいて投稿・編集した文章、画像、映像（動画）等、本利用規約への違反もしくはユーザーによる第三者の権利侵害に起因または関連して生じたすべてのクレームや請求については、ユーザーの責任と費用負担の下で解決するものとします。</p>
								<p>　・ユーザーにより第三者の権利の侵害があったときに、第三者からのクレームや請求への対応に関連して甲に賠償金、その他の費用が発生した場合、紛争の当事者である当該ユーザーは当該賠償金その他の費用等（甲が支払った弁護士費用を含みます）を負担するものとします。</p>
								<p>　・ユーザーは、ユーザー自身の自己責任において本サービスを利用するものとし、本サービスを利用してなされた一切の行為及びその結果について一切の責任を負います。</p>
								<p>　・甲は、本サービスの利用記録等の情報について保存義務がないこととします。</p>
								<p>　・甲は、アクセス過多、その他予期せぬ要因で表示速度の低下や障害等がユーザーに生じても、一切責任を負いません。</p>
								<p>　・甲は、ユーザーによって投稿される情報を監視したり、保存する義務を負いません。</p>
								<p>　・甲は、本利用規約に違反する行為又はそのおそれのある行為が行われた場合には、当該行為を行ったユーザーの強制退会処分、情報の全部もしくは一部の削除、及び公開範囲の変更等を行う場合がありますが、それによって生じたいかなる損害についても、一切責任を負いません。</p>
								<p>　・甲以外のサービス提供者に関する情報、取引内容、取扱商品・サービス、Webページ上の記載内容および個人情報の取扱いなどについては、当該サービス提供者に直接お問い合わせください。これらに関する内容の真偽、正確性、最新性、有用性、信頼性、適法性、第三者の権利を侵害していないことなどについて、甲は一切保証いたしません。</p>
								<p>　・通信回線やコンピュータなどの障害によるシステムの中断・遅滞・中止・データの消失、データへの不正アクセスにより生じた損害、その他本サービスに関してユーザーに生じた損害について、甲は一切責任を負わないものとします。</p>
								<h4>14. 本利用規約及びその他の利用規約等の有効性</h4>
								<p>　・本利用規約及びその他の利用規約等の規定の一部が法令に基づいて無効と判断されても、本利用規約及びその他の利用規約等のその他の規定は有効とします。</p>
								<p>　・利用規約等の規定の一部があるユーザーとの関係で無効とされ、又は取り消された場合でも、利用規約等はその他のユーザーとの関係では有効とします。</p>
								<h4>15. 準拠法と管轄裁判所</h4>
								<p>　この規約は日本法に基づき解釈されるものとします。万一、ユーザーと甲の間に紛争が生じた場合、東京地方裁判所を第一審の専属管轄裁判所と致します。</p>
								<h4>16. 制定日と改訂日</h4>
								<p>　本利用規約は平成24年5月1日から施行します。</p>
							</div>
							<div>
								<h4>1.サイト運営</h4>
								<p>「株式会社レッドディア」（以下、「弊社」といいます）では、本サイトをご利用して頂く際に、ユーザーのe-mailアドレスや氏名など必要な情報（以下「個人情報」といいます）を開示していただきます。
									弊社は、個人情報保護法の趣旨のもと、このプライバシーポリシーに則って個人情報を取り扱います。このプライバシーポリシーは、弊社が開示いただいた個人情報の取扱いに関するお客様と弊社との間のお約束です。</p>
								<h4>2. 個人情報の利用目的について</h4>
								<p>弊社は個人情報を以下の目的で利用させていただきます。</p>
								<p>　ユーザーへの各種連絡のためにメールアドレス等の連絡先情報を利用します。</p>
								<p>　代金の請求に関連してご指定いただいたクレジットカード番号などのお支払情報を利用する場合があります。</p>
								<p>　商品購入の内容を連絡し確認するために、氏名、メールアドレスなどの連絡先情報、ご注文いただいた商品の種類や数量、ご請求金額などの情報を利用します。</p>
								<p>　ユーザーに弊社が行うキャンペーンや商品・サービスのご案内をするために、ご利用履歴や、お客様の氏名、メールアドレスなどの連絡先情報を利用します。</p>
								<p>　弊社のサービス改善を行うために、ユーザーから寄せられたご意見やアンケートの結果、ご利用履歴などを利用します。</p>
								<p>　ユーザーからのご要望、お問い合わせに対する回答をするために、氏名、メールアドレスなどの連絡先情報を利用します。</p>
								<p>　ユーザーからのご注文状況を閲覧いただけるよう、ご注文いただいた商品の種類や数量、ご請求金額などの情報を決済サービス会社及び弊社に対して提供します。</p>
								<h4>3. 個人情報の管理について</h4>
								<p>弊社は以下の体制で個人情報を管理します。</p>
								<p>　個人情報保護法やガイドラインに従って必要な社内体制を整備し、従業員から個人情報の取扱を適正に行う旨の誓約書を取得します。</p>
								<p>　個人情報の利用を業務上必要な社員だけに制限し、個人情報が含まれる媒体などの保管・管理などに関する規則を作り、個人情報保護のための予防措置を講じます。</p>
								<p>　システムに保存されている個人情報については、業務上必要な社員だけが利用できるようアカウントとパスワードを用意し、アクセス権限管理を実施します。　なお、アカウントとパスワードは漏えい、滅失のないよう厳重に管理します。</p>
								<p>　インターネットによる個人情報にかかわるデータ伝送時のセキュリティのため、必要なWebページに業界標準の暗号化通信であるSSLを使用します。</p>
								<h4>4.個人情報の開示について</h4>
								<p>弊社は、お客様の同意がない限り、個人情報を第三者に開示することはありません。ただし、以下の事例に該当する場合はその限りではありません。</p>
								<p>　法令に基づき裁判所や警察等の公的機関から要請があった場合</p>
								<p>　法令に特別の規定がある場合</p>
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
