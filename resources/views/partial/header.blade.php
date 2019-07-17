<!-- header start -->    
<header>
	<!-- header-top-area start -->
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<!-- header-social-icon start -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-social-icon">
						<a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" title="tumblr"><i class="fa fa-tumblr"></i></a>
						<a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" title="dribbble"><i class="fa fa-dribbble"></i></a>
					</div>
					<div class="email-content">
						<span>admin@bootexperts.com</span>
					</div>
				</div>
				<!-- header-social-icon end -->
				<!-- header-top-menu start -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-top-menu">
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Wishlist</a></li>
							<li><a href="cart.html">Shopping cart</a></li>
							<li><a href="#">English <i class="fa fa-caret-down"></i></a>
								<ul>
									<li><a href="#">Spanish</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- header-top-menu end -->
			</div>
		</div>
	</div>	
	<!-- header-top-area end -->
	<!-- header-mid-area start -->
	<div class="header-mid-area">
		<div class="container">
			<div class="row">
				<!-- logo start -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="logo">
						<a href="index.html"><img src="{{ url('MNM/img/logo/logo.png') }}" alt="" /></a>
					</div>
				</div>
				<!-- logo end -->
				<!-- cat-search start -->
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<div class="cat-search">
						<div class="cart-total">
							@if(session()->has('cart'))
							<ul>
								<li><a href="cart.html"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">{{ Session::get('cart')->totalQty }}</span></a>
									<div class="mini-cart-content">
										@foreach(Session::get('cart')->items as $item )
										<div class="cart-img-details">											
											<div class="cart-img-photo">
												<a href="#"><img src="{{ url('MNM/img/product/'.$item['item']->image.'') }}" alt="" /></a>
												<span class="quantity">{{ $item['qty'] }}</span>
											</div>
											<div class="cart-img-contaent">
												<a href="#"><h4>{{ $item['item']->name }}</h4></a>
												@if($item['item']->promotion_price == 0)
												<span>{{ number_format($item['item']->unit_price) }} VND</span>
												@else
												<span>{{ number_format($item['item']->promotion_price) }} VND</span>
												@endif
											</div>
											<div class="pro-del" id="{{ $item['item']->id }}"><a href="#"><i class="fa fa-times-circle"></i></a></div>											
										</div>
										<div class="clear"></div>
										@endforeach
										<p class="total">Tổng tiền: <span class="amount">{{ number_format(Session::get('cart')->totalPrice) }} VND</span></p>
										<div class="clear"></div>
										<p class="cart-button-top"><a href="checkout.html">Giỏ hàng</a></p>
										<p class="cart-button-top"><a href="checkout.html">Thanh toán</a></p>
									</div>
								</li>
							</ul>
							@endif
						</div>						
						<div class="header-search">						
							<div class="top-category">
								<ul>
									<li><a href="#">All Categories</a>
										<ul>
											<li><a href="#">All Categories</a></li>
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Digital</a></li>
											<li><a href="#">_Camera</a></li>
											<li><a href="#">_Refrigerator</a></li>
											<li><a href="#">_Smart Phone</a></li>
											<li><a href="#">Kids</a></li>
											<li><a href="#">Shoes</a></li>
										</ul>
									</li>
									<li class="search-top">
										<form action="#">
											<input type="text" placeholder="Search product..." />
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</li>
								</ul>
							</div>
						</div>				
					</div>
				</div>
				<!-- cat-search start -->
			</div>
		</div>
	</div>
	<!-- header-mid-area end -->
	<!-- mainmenu-area start -->
	<div class="mainmenu-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="mainmenu">
						<nav>
							<ul>
								<li><a href="{{ url('index') }}">Home</a>
								</li>
								<li><a href="{{ url('shop') }}">Shop </a>							
								</li>
								<li><a href="blog-nosidebar.html">Blog </a>		
								</li>
								<li><a href="#">Buy Now</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- mobile menu start -->
			<div class="row">
				<div class="col-md-12">
					<div class="mobile-menu">
						<nav>
							<ul id="mobile-menu">
								<li><a href="index.html">Home</a>
									<ul>
										<li><a href="index-2.html">Home Shop 2</a></li>
										<li><a href="index-3.html">Home Shop 3</a></li>
										<li><a href="index-4.html">Home Shop 4</a></li>
										<li><a href="index-5.html">Home Shop 5</a></li>
										<li><a href="index-6.html">Home Shop 6</a></li>
									</ul>									
								</li>
								<li><a href="shop.html">Shop</a>
									<ul>
										<li><a href="#">Shop Layouts</a>
											<ul>
												<li><a href="#">Full Width</a></li>
												<li><a href="#">Sidebar Left</a></li>
												<li><a href="#">Sidebar Right</a></li>
												<li><a href="#">Sidebar Right</a></li>
												<li><a href="shop-list.html">List View</a></li>
											</ul>
										</li>
										<li><a href="#">Shop Pages</a>
											<ul>
												<li><a href="#">Category </a></li>
												<li><a href="#">My Account </a></li>
												<li><a href="#">Wishlist</a></li>
												<li><a href="cart.html">Shopping Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
											</ul>
										</li>
										<li><a href="#">Product Types</a>
											<ul>
												<li><a href="product.html">Simple Product</a></li>
												<li><a href="product-variable.html">Variable Product</a></li>
												<li><a href="#">Grouped Product</a></li>
												<li><a href="#">Downloadable</a></li>
												<li><a href="#">External Product</a></li>
												<li><a href="#">Virtual Product</a></li>
											</ul>
										</li>
									</ul>								
								</li>
								<li><a href="blog-nosidebar.html">Blog</a>
									<ul>
										<li><a href="#">Blog Layouts</a>
											<ul>
												<li><a href="blog-nosidebar.html">None Sidebar</a></li>
												<li><a href="blog-fullwidth.html">Full Width</a></li>
												<li><a href="blog-left-sidebar.html">Sidebar Left</a></li>
												<li><a href="blog-right-sidebar.html">Sidebar Right</a></li>
											</ul>									
										</li>
										<li><a href="#">Blog Pages</a>
											<ul>
												<li><a href="blog-author.html">Author</a></li>
												<li><a href="blog-archive.html">Archive</a>	</li>
												<li><a href="blog-category.html">Category </a></li>
												<li><a href="blog-tag.html">Blog Tag</a></li>
											</ul>									
										</li>
										<li><a href="#">Post Formats</a>
											<ul>
												<li><a href="blog-post-image.html">Image Format</a></li>
												<li><a href="blog-post-gallery.html">Gallery Format </a></li>
												<li><a href="blog-post-audio.html">Audio Format </a></li>
												<li><a href="blog-post-video.html">Video Format</a></li>
											</ul>									
										</li>
									</ul>
								</li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="product.html">Simple Product</a></li>
										<li><a href="product-variable.html">Variable Product</a></li>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-list.html">shop-list</a></li>
										<li><a href="404.html">Error 404</a></li>
									</ul>									
								</li>
								<li><a href="#">Buy Now</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- mobile menu end -->
		</div>
	</div>
	<!-- mainmenu-area end -->
</header>
<!-- header end --> 