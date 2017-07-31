<?php get_header(); ?>

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
									<a href="/shop/">
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
								<h1><a href="<?php the_permalink(); ?>">GONZO <span class=sm_h1>(ゴンゾ)</span></a></h1>
							</div>
							<div class="blogParagraph">
								<p><b>プロフィール</b><br>本名 野澤孝智 Nozawa Takatomo<br>
									1960年 東京生まれ<br>
									武蔵野音楽大学 声楽家を卒業後 VictorEntertainment 入社。<br>
									音楽プロデューサーとして松本伊代、荻野目洋子、川原亜矢子、SMAP等<br>
									2007年 Office727.incを立ち上げ、関ジャニ8、John Hoon、Br.KORN、フェアリーズ他多数をプロデュース。
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
	<section class="padding hide-section blogHomeSection" style="background-image: url(assets/img/blog/homeBlog.png);">
		<div class="container">
			<div class="row">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="blogGrid.html">News&Blog</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->

				<?php query_posts('posts_per_page=3'); ?>
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
					<div class="col-md-4">
					<div class="blogBox">
						<div class="imgBox">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="<?php the_permalink(); ?>"><?php the_time('Y/m/d'); ?></a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p><?php the_excerpt(); ?></p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="<?php the_permalink(); ?>">詳しくみる</a>
							</div>
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->
				<?php endwhile; endif; ?>

			</div><!-- end container -->
		</div><!-- end row -->
	</section>
	<!-- =============== END HOME-NLOG SECTION ================ -->

	<!-- =============== START EVENTS SECTION-1 ================ -->
	<section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/index/bg_events.jpg);" class="background-properties hide-section paddingHomeEvents">
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
								<th class="title">イベント名</th>
								<th class="location">会場</th>
								<th class="price">料金</th>
								<th></th>
							</tr>

							<!-- event list -->
							<?php global $post;
								$args = array(
										'post_type'  => 'event',
										'numberposts' => 4
								);

							$customPosts = get_posts($args);
							if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
							?>

							<tr>
								<td class="date"><a href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i></a><a href="/"><?php the_date("n月j日（l）"); ?> <?php echo get_post_meta($post->ID, "開始時間", true); ?>から</a></td>
								<td class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
								<td class="location"><a href="<?php the_permalink(); ?>"></a><?php echo get_post_meta($post->ID, "会場", true); ?></td>
								<td class="price"><a href="<?php the_permalink(); ?>">￥ <?php echo get_post_meta($post->ID, "料金", true); ?></a></td>
								<td class="aqura-vip"><a href="<?php the_permalink(); ?>">詳細</a></td>
							</tr>

						<?php endforeach; ?>
						<?php else : //記事が無い場合 ?>
						<p>Sorry, no posts matched your criteria.</p>
						<?php endif;
							wp_reset_postdata(); //クエリのリセット ?>
						<!-- event list end -->



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
				<div class="col-sm-offset-4 col-sm-4 col-xs-12">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/YqeW9_5kURI"  allowfullscreen></iframe>
				</div><!-- end col-sm-4 -->
			</div>
		</div>
	</section>
	<!-- =============== END VIDEO SECTION ================ -->

	<!-- =============== START TWITTER SECTION ================ -->
	<section class="padding hide-section background-properties" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/twitter/bg_twitter.jpg);">
		<div class="twitter">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="twitterLogo">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter/logo.png" alt="twitterLogo"></a>
							<a href="#" class="linkTwitter">@nozawatakatomo</a>
						</div>
						<p>GONZO - Singer(GONZO).MusicProducer.Composer.Arranger.<br>
							プロデュース作品 SMAP、Smappies、小日向しえ、関ジャニ∞、SeeStarsCrew、映画「ホワイトアウト」「星に願いを」他多数。<br>
							 - <a href="https://twitter.com/nozawatakatomo">https://twitter.com/nozawatakatomo</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END TWITTER SECTION ================ -->

  <?php get_footer(); ?>
