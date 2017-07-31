<?php
/* Template Name: events */
?>

<?php get_header(2); ?>

<!-- =============== START BREADCRUMB ================ -->
<section class="no-mb">
	<div class="row">
		<div class="col-sm-12">
			<div class="before-FullscreenSlider"></div>
			<div class="breadcrumb-fullscreen-parent phone-menu-bg">
				<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/events/bg_events.jpg');" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					<div class="breadTxt">
						<h1>
								Live Information
						</h1>
						<p>
						</p>
						<a href="#lists" data-easing="easeInOutQuint" data-scroll="" data-speed="900" data-url="false">
								一覧はこちら <i class="fa fa-angle-down"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START EVENTS SECTION-1 ================ -->
	<section class="background-properties padding" id="lists">
		<div class="tableEvents">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="sectionTitle paddingBottom">
							<span class="heading-t3"></span>
							<h2><a href="albums.html">Events</a></h2>
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
										'numberposts' => 8
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
<?php get_footer(); ?>
