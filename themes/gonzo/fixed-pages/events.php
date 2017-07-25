<?php
/* Template Name: events */
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

	<!-- =============== START EVENTS SECTION-1 ================ -->
	<section style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/subHeader/header.png);" class="background-properties padding">
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
								<th class="date">Date</th>
								<th class="venue">Venue</th>
								<th class="location">Location</th>
								<th class="tickets">Tickets</th>
								<th></th>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
							<tr>
								<td class="aqura-date"><a href="singleEvent.html"><i class="fa fa-plus"></i></a><a href="singleEvent.html">Mar 06</a></td>
								<td class="aqura-location"><a href="singleEvent.html">Central Park</a></td>
								<td class="aqura-city"><a href="singleEvent.html">Cluj Napoca, Bontida Romania</a></td>
								<td class="aqura-tickets"><a href="singleEvent.html">Tickets</a></td>
								<td class="aqura-vip"><a href="singleEvent.html">RSVP</a></td>
							</tr>
						</table>
					</div><!-- end col-sm-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
	</section>
	<!-- =============== END EVENTS SECTION-1 ================ -->
<?php get_footer(); ?>
