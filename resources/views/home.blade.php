@extends('master')
@section('content')
@include("partial/slider")
<!-- promotion-area start -->
	<div class="promotion-area">
		<div class="container">
			<div class="row">
				<!-- single-promo start -->
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-promo">
						<a href="#"><img src="{{ url('MNM/img/promotion/1.jpg') }}" alt="" /></a>
					</div>
				</div>
				<!-- single-promo end -->
				<!-- single-promo start -->
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-promo">
						<a href="#"><img src="{{ url('MNM/img/promotion/2.jpg') }}" alt="" /></a>
					</div>
				</div>
				<!-- single-promo end -->
				<!-- single-promo start -->
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-promo">
						<a href="#"><img src="{{ url('MNM/img/promotion/3.jpg') }}" alt="" /></a>
					</div>
				</div>
				<!-- single-promo end -->
			</div>
		</div>
	</div>
	<!-- promotion-area end -->
	<!-- features-area start -->
	<div class="features-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="section-heading">
						<h3>Featured products</h3>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="features-curosel">
					<!-- single-features start -->
					<div class="col-md-3">
						<div class="single-features">
							<div class="product-img">
								<a href="#">								
									<img class="first-img" src="{{ url('MNM/img/product/1.jpg') }}" alt="" />
									<img class="second-img" src="{{ url('MNM/img/product/2.jpg') }}" alt="" />
								</a>
								<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
								<div class="action-buttons">
									<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
									<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
									<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<h5><a href="#">Ornare sed consequat</a></h5>
								<span class="pro-price">£515.00</span>
							</div>
						</div>
					</div>
					<!-- single-features end -->
					<!-- single-features start -->
					<div class="col-md-3">
						<div class="single-features">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="first-img" src="{{ url('MNM/img/product/3.jpg') }}" alt="" />
									<img class="second-img" src="{{ url('MNM/img/product/4.jpg') }}" alt="" />
								</a>
								<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
								<div class="action-buttons">
									<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
									<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
									<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star-o"></i></a>
								</div>
								<h5><a href="#">Etiam molestie</a></h5>
								<span class="old-price">£230.00</span>
								<span class="pro-price">£220.00</span>
							</div>
						</div>
					</div>
					<!-- single-features end -->
					<!-- single-features start -->
					<div class="col-md-3">
						<div class="single-features">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="first-img" src="{{ url('MNM/img/product/5.jpg') }}" alt="" />
									<img class="second-img" src="{{ url('MNM/img/product/6.jpg') }}" alt="" />
								</a>
								<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
								<div class="action-buttons">
									<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
									<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
									<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<h5><a href="#">Aenean eu tristique</a></h5>
								<span class="old-price">£80.00</span>
								<span class="pro-price">£70.00</span>
							</div>
						</div>
					</div>
					<!-- single-features end -->
					<!-- single-features start -->
					<div class="col-md-3">
						<div class="single-features">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="first-img" src="{{ url('MNM/img/product/7.jpg') }}" alt="" />
								</a>
								<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
								<div class="action-buttons">
									<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
									<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
									<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star-o"></i></a>
								</div>
								<h5><a href="#">Feugiat justo lacinia</a></h5>
								<span class="old-price">£80.00</span>
								<span class="pro-price">£70.00</span>
							</div>
						</div>
					</div>
					<!-- single-features end -->
					<!-- single-features start -->
					<div class="col-md-3">
						<div class="single-features">
							<div class="product-img">
								<a href="#">
									<img class="first-img" src="{{ url('MNM/img/product/8.jpg') }}" alt="" />
								</a>
								<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
								<div class="action-buttons">
									<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
									<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
									<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<h5><a href="#">Vulputate justo</a></h5>
								<span class="pro-price">£90.00</span>
							</div>
						</div>
					</div>
					<!-- single-features end -->
					<!-- single-features start -->
					<div class="col-md-3">
						<div class="single-features">
							<span class="sale-text">Sale</span>
							<div class="product-img">
								<a href="#">
									<img class="first-img" src="{{ url('MNM/img/product/10.jpg') }}" alt="" />
									<img class="second-img" src="{{ url('MNM/img/product/11.jpg') }}" alt="" />
								</a>
								<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
								<div class="action-buttons">
									<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
									<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
									<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
								<h5><a href="#">Phasellus vel hendrerit</a></h5>
								<span class="pro-price">£55.00</span>
							</div>
						</div>
					</div>
					<!-- single-features end -->
				</div>
			</div>	
		</div>
	</div>
	<!-- features-area end -->
	<!-- banner-area start -->
	<div class="banner-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-banner banner-space">
						<a href="#"><img src="{{ url('MNM/img/banner/1.jpg') }}" alt="" /></a>
					</div>
					<div class="single-banner">
						<a href="#"><img src="{{ url('MNM/img/banner/2.jpg') }}" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-banner banner-space">
						<a href="#"><img src="{{ url('MNM/img/banner/3.jpg') }}" alt="" /></a>
					</div>	
					<div class="single-banner">
						<a href="#"><img src="{{ url('MNM/img/banner/4.jpg') }}" alt="" /></a>
					</div>					
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-banner banner-space">
						<a href="#"><img src="{{ url('MNM/img/banner/5.jpg') }}" alt="" /></a>
					</div>
					<div class="single-banner">
						<a href="#"><img src="{{ url('MNM/img/banner/6.jpg') }}" alt="" /></a>
					</div>				
				</div>
			</div>
		</div>
	</div>
	<!-- banner-area end -->
	<!-- recent-post-area start -->
	<div class="recent-post-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Recent Posts</h3>
					</div>					
				</div>
				<div class="clear"></div>
				<div class="recent-post-curosel">
					<!-- recent-post start -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="recent-post">
							<div class="post-thumb">
								<a href="#"><img src="{{ url('MNM/img/blog/r1.jpg') }}" alt="" /></a>
							</div>
							<div class="post-info">
								<span class="recent-post-date">March 10,2015</span>
								<h3><a href="#">Blog image post layout</a></h3>
								<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
								<a class="read-more" href="#">read more</a>
								<span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
							</div>
						</div>
					</div>
					<!-- recent-post start -->
					<!-- recent-post start -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="recent-post">
							<div class="post-thumb">
								<a href="#"><img src="{{ url('MNM/img/blog/r2.jpg') }}" alt="" /></a>
							</div>
							<div class="post-info">
								<span class="recent-post-date">December 1,2014</span>
								<h3><a href="#">Post in Gallery format</a></h3>
								<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
								<a class="read-more" href="#">read more</a>
								<span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
							</div>
						</div>
					</div>
					<!-- recent-post start -->
					<!-- recent-post start -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="recent-post">
							<div class="post-thumb">
								<a href="#"><img src="{{ url('MNM/img/blog/r3.jpg') }}" alt="" /></a>
							</div>
							<div class="post-info">
								<span class="recent-post-date">December 1,2014</span>
								<h3><a href="#">Blog image post layout</a></h3>
								<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
								<a class="read-more" href="#">read more</a>
								<span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
							</div>
						</div>
					</div>
					<!-- recent-post start -->
					<!-- recent-post start -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="recent-post">
							<div class="post-thumb">
								<a href="#"><img src="{{ url('MNM/img/blog/r4.jpg') }}" alt="" /></a>
							</div>
							<div class="post-info">
								<span class="recent-post-date">December 1,2014</span>
								<h3><a href="#">Post in Video format</a></h3>
								<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
								<a class="read-more" href="#">read more</a>
								<span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
							</div>
						</div>
					</div>
					<!-- recent-post start -->
					<!-- recent-post start -->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="recent-post">
							<div class="post-thumb">
								<a href="#"><img src="{{ url('MNM/img/blog/r5.jpg') }}" alt="" /></a>
							</div>
							<div class="post-info">
								<span class="recent-post-date">December 1,2014</span>
								<h3><a href="#">Maecenas ultricies sed odio</a></h3>
								<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
								<a class="read-more" href="#">read more</a>
								<span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
							</div>
						</div>
					</div>
					<!-- recent-post start -->
				</div>
			</div>
		</div>
	</div>
	<!-- recent-post-area end -->
	<!-- brand-area start -->
	<div class="brand-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Logo brands</h3>
					</div>				
				</div>
				<div class="col-md-12">
					<div class="brand-curosel">
						<!-- brand-img start -->
						<div class="brand-img">
							<a href="#"><img src="{{ url('MNM/img/brand/1.jpg') }}" alt="" /></a>
						</div>
						<!-- brand-img end -->
						<!-- brand-img start -->
						<div class="brand-img">
							<a href="#"><img src="{{ url('MNM/img/brand/2.jpg') }}" alt="" /></a>
						</div>
						<!-- brand-img end -->
						<!-- brand-img start -->
						<div class="brand-img">
							<a href="#"><img src="{{ url('MNM/img/brand/3.jpg') }}" alt="" /></a>
						</div>
						<!-- brand-img end -->
						<!-- brand-img start -->
						<div class="brand-img">
							<a href="#"><img src="{{ url('MNM/img/brand/1.jpg') }}" alt="" /></a>
						</div>
						<!-- brand-img end -->
						<!-- brand-img start -->
						<div class="brand-img">
							<a href="#"><img src="{{ url('MNM/img/brand/2.jpg') }}" alt="" /></a>
						</div>
						<!-- brand-img end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- brand-area end -->
	<!-- corporate-about-area start -->
	<div class="corporate-about-area">
		<div class="container">
			<div class="row">
				<!-- single-corporate start -->
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-corporate">
						<div class="corporate-icon">
							<i class="fa fa-truck"></i>
						</div>
						<div class="corporate-text">
							<h4>FREE SHIPPING & RETURN</h4>
							<p>Free shipping on all orders over $99.</p>
						</div>
					</div>
				</div>
				<!-- single-corporate end -->
				<!-- single-corporate start -->
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-corporate">
						<div class="corporate-icon">
							<i class="fa fa-usd"></i>
						</div>
						<div class="corporate-text">
							<h4>MONEY BACK GUARANTEE</h4>
							<p>100% money back guarantee.</p>
						</div>
					</div>
				</div>
				<!-- single-corporate end -->				
				<!-- single-corporate start -->
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-corporate">
						<div class="corporate-icon">
							<i class="fa fa-life-bouy"></i>
						</div>
						<div class="corporate-text">
							<h4>ONLINE SUPPORT 24/7</h4>
							<p>Lorem ipsum dolor sit amet</p>
						</div>
					</div>
				</div>
				<!-- single-corporate end -->
			</div>
		</div>
	</div>
	<!-- corporate-about-area end -->
@endsection