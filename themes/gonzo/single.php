<?php get_header(1); ?>

	<!-- =============== START BLOG SINGLE ================ -->
	<section class="blogSingle padding" id="content">
		<div class="container">
			<div class="row">
				<div class="blog-left">

					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-8">
						 <div class="item">
							 <?php the_post_thumbnail('full'); ?>
						 </div>
						<div class="admin-list clearfix">
							<ul>
								<li><a href="<?php the_permalink(); ?>"><?php the_time('Y/m/d'); ?></a>&nbsp;/&nbsp;</li>
								<li><?php the_category(' '); ?></li>
							</ul>
						</div>
						<div class="title">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="paragraph">
							<?php the_content(); ?>
						</div>
						<div class="tagBlogSingle">
							<div class="content">
								<p>Tag :</p>
								<?php the_tags('&nbsp;/&nbsp;'); ?>
							</div>
						</div>

						<!-- /.portfolio-details -->
						<div class="portfolia-nav">
								<div class="prev"><icon class="icon-angle-left"></icon><?php previous_post_link('« %link', '前の記事へ', TRUE); ?></div>
								<div class="next"><?php next_post_link('%link »', '次の記事へ', TRUE); ?><icon class="icon-angle-right"></icon></div>
						</div>
						<!-- /.portfolia-nav -->

						<?php comments_template(); ?>

					</div><!-- end col-sm-8 -->
					<?php endwhile; ?>
					<?php endif; ?>

				</div><!-- end blog-left -->
			  <?php get_sidebar(); ?>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>
	<!-- =============== END BLOG SINGLE ================ -->

<?php get_footer(); ?>
