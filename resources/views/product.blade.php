@extends('master')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area product-breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<ul>
				<li><a href="index-7.html">home <i class="fa fa-angle-right"></i></a></li>
				<li><a href="shop-2.html">shop <i class="fa fa-angle-right"></i></a></li>
				<li><a href="#"> Accessories <i class="fa fa-angle-right"></i></a></li>
				<li>Feugiat justo lacinia </li>
			</ul>
		</div>
	</div>
</div>
<!-- breadcrumb-area end -->
<!-- blog-main-area start -->
<div class="product-main-area">
	<div class="container">
		<div class="row">
			<!-- product-page-photo start -->
			<div class="col-lg-7 col-md-7 col-sm-5">
				<div class="product-page-photo">
					<a href="#"><img src="{{ url('MNM/img/product/'.$product->image.'') }}" alt="" /></a>
				</div>
			</div>
			<!-- product-page-photo end -->
			<div class="col-lg-5 col-md-5 col-sm-7">
				<div class="product-page-content">
					<div class="pro-page-title">
						<h1>{{ $product->name }}</h1>
						<div class="product-nav">
							<a href="#"><i class="fa fa-angle-left"></i></a>
							<a href="#"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					<div class="product-page-rating">
						<a href="#"><i class="fa fa-star"></i></a>
						<a href="#"><i class="fa fa-star"></i></a>
						<a href="#"><i class="fa fa-star"></i></a>
						<a href="#"><i class="fa fa-star"></i></a>
						<a href="#"><i class="fa fa-star"></i></a>
					</div>
					<div class="stock-status">
						<p>In stock</p>
					</div>
					<div class="product-page-price">
						@if($product->promotion_price != 0)
						<span class="old-price">{{ number_format($product->promotion_price) }} </span>
						<span class="pro-price">{{ number_format($product->unit_price) }} VND</span>
						@else
						<span class="pro-price">{{ number_format($product->unit_price) }} VND</span>
						@endif
					</div>
					<div class="pro-shor-desc">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
					</div>
					<div class="product-total-cart">
						<form action="#">
							<input type="number" value="1" />
							<button type="submit">Add to cart</button>
						</form>
					</div>
					<div class="product-wishlist">
						<a href="#"><i class="fa fa-heart-o"></i></a>
						<a href="#"><i class="fa fa-toggle-off"></i></a>
					</div>
					<div class="product-meta">
						<span class="posted-in">Categories:
							<a href="#"> Accessories</a>,
							<a href="#"> Kids</a>,
							<a href="#"> Shoes</a>.
						</span>
						<span class="tag-in">Tags:
							<a href="#"> electronic</a>,
							<a href="#"> laptop</a>.
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="product-share-icon">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
					<a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="product-tab">
					<div>
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews (1)</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="product-page-tab-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
									<p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="profile">
								<div class="product-page-comments">
									<h2>1 review for Feugiat justo lacinia</h2>
									<ul>
										<li>
											<div class="product-comments">
												<img src="{{ url('MNM/img/blog/comments/2.jpg') }}" alt="" />
												<div class="product-comments-content">
													<p><strong>admin</strong> -
														<span>February 17, 2015:</span>
														<span class="pro-comments-rating">
															<i class="fa fa-star"></i>								
															<i class="fa fa-star"></i>								
															<i class="fa fa-star"></i>								
															<i class="fa fa-star"></i>								
														</span>
													</p>
													<div class="desc">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
													</div>
												</div>
											</div>
										</li>
									</ul>
									<div class="review-form-wrapper">
										<h3>Add a review</h3>
										<form action="#">
											<input type="text" placeholder="your name"/>
											<input type="email" placeholder="your email"/>
											<div class="your-rating">
												<h5>Your Rating</h5>
												<span>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</span>
												<span>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</span>
												<span>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</span>
												<span>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
												</span>
											</div>
											<textarea id="product-message" cols="30" rows="10" placeholder="Your Rating"></textarea>
											<input type="submit" value="submit" />
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog-main-area end -->
<!-- features-area start -->
<div class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-heading">
					<h3>Related Products</h3>
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
@endsection