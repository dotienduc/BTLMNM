@extends('master')
@section('css')
<style type="text/css">
	
</style>
@endsection
@section('content')

	<!-- blog-header-area start -->	
	<div class="shop-header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="shop-header-title">
						<h1>Shop All Products</h1>
						<div class="shop-menu">
							<ul>
								<li><a href="#">All</a></li>
								<li><a href="#">Accessories</a></li>
								<li><a href="#">Digital</a></li>
								<li><a href="#">Kids</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- blog-header-area end -->
	<!-- breadcrumb-area start -->
	<div class="breadcrumb-area shop-breadcrumb">
		<div class="container">
			<div class="breadcrumb">
				<ul>
					<li><a href="index-7.html">home <i class="fa fa-angle-right"></i></a></li>
					<li>shop</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area end -->
	<!-- blog-main-area start -->
	<div class="blog-main-area">
		<div class="container">
			<div class="row">
				<!-- sidebar start -->
				<div class="col-lg-3 col-md-3 col-sm-12">
					<!-- shop-categories start -->
					<div class="shop-categories shop-space">
						<h2 class="shop-sidebar-title"><span>Recent Posts</span></h2>
						<ul class="sidebar-menu">
							<li><a href="#">Accessories</a> <span> (17)</span></li>
							<li><a href="#">Digital</a> <span> (5)</span></li>
							<li><a href="#">Kids</a> <span> (15)</span></li>
							<li><a href="#">Shoes</a> <span> (10)</span></li>
						</ul>
					</div>
					<!-- shop-categories end -->
					<!-- shop-filter start -->
					<div class="shop-filter shop-space">
						<h2 class="shop-sidebar-title"><span>Filter By Price</span></h2>
						<div class="info_widget">
							<div class="price_filter">
								<div id="slider-range"></div>
								<div class="price_slider_amount">
									<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
									<input type="submit"  value="Filter"/>  
								</div>
							</div>
						</div>						
					</div>
					<!-- shop-filter end -->
					<!-- shop-categories start -->
					<div class="shop-categories shop-space">
						<h2 class="shop-sidebar-title"><span>Size</span></h2>
						<ul class="sidebar-menu">
							<li><a href="#">L</a> <span> (1)</span></li>
							<li><a href="#">M</a> <span> (1)</span></li>
							<li><a href="#">S</a> <span> (1)</span></li>
							<li><a href="#">XL</a> <span> (1)</span></li>
						</ul>
					</div>
					<!-- shop-categories end -->
					<!-- shop-categories start -->
					<div class="shop-categories shop-space">
						<h2 class="shop-sidebar-title"><span>Size</span></h2>
						<ul class="tag-list">
							<li><a href="#">asian</a></li>
							<li><a href="#">brown</a></li>
							<li><a href="#">euro</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">france</a></li>
							<li><a href="#">t-shirt</a></li>
							<li><a href="#">teen</a></li>
							<li><a href="#">white</a></li>
						</ul>
					</div>
					<!-- shop-categories end -->
					<!-- shop-featured start -->
					<div class="shop-featured shop-space">
						<h2 class="shop-sidebar-title"><span>featured</span></h2>
						<div class="shop-product">
							<div class="shop-pro-img">
								<a href="#"><img src="{{ url('MNM/img/product/shop/1.jpg') }}" alt="" /></a>
							</div>
							<div class="shop-pro-content">
								<h3 class="shop-pro-name"><a href="#">Ornare sed consequat</a></h3>
								<div class="shop-price">
									<span class="shop-new">£515.00</span>
								</div>
								<div class="shop-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
							</div>
						</div>
						<div class="shop-product">
							<div class="shop-pro-img">
								<a href="#"><img src="{{ url('MNM/img/product/shop/2.jpg') }}" alt="" /></a>
							</div>
							<div class="shop-pro-content">
								<h3 class="shop-pro-name"><a href="#">Etiam molestie</a></h3>
								<div class="shop-price">
									<span class="shop-old">£230.00</span>
									<span class="shop-new">£220.00</span>
								</div>
								<div class="shop-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
							</div>
						</div>
						<div class="shop-product">
							<div class="shop-pro-img">
								<a href="#"><img src="{{ url('MNM/img/product/shop/3.jpg') }}" alt="" /></a>
							</div>
							<div class="shop-pro-content">
								<h3 class="shop-pro-name"><a href="#">Aenean eu tristique</a></h3>
								<div class="shop-price">
									<span class="shop-old">£80.00</span>
									<span class="shop-new">£70.00</span>
								</div>
								<div class="shop-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- shop-featured end -->										
				</div>
				<!-- sidebar end -->
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="row">
						<!-- toolbar start -->
						<div class="col-md-12 col-sm-12">
							<div class="toolbar">
								<div class="view-mode">
									<a class="grid active" href="shop.html"><i class="fa fa-th-large"></i></a>
									<a class="list" href="shop-list.html"><i class="fa fa-th-list"></i></a>
								</div>
								<div class="page-number">
									<ul>
										@for($i = 1; $i <= $totalPage; $i++)
										<li ><a href="#" id="{{ $i }}" class="page">{{ $i }}</a></li>
										@endfor
										<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									</ul>
								</div>
								<div class="show-result">
									<p>Showing 1–12 of 20 results</p>
								</div>
								<div class="toolbar-form">
									<form action="#">
										<div class="tolbar-select">
											<p>Sort by</p>
											<select>
											  <option value="volvo">Default sorting</option>
											  <option value="saab">Sort by popularity</option>
											  <option value="mercedes">Sort by popularity</option>
											  <option value="audi">Sort by newness</option>
											  <option value="audi">Sort by price: low to high</option>
											  <option value="audi">Sort by price: high to low</option>
											</select> 
										</div>
									</form>								
								</div>
							</div>
						</div>
						<!-- toolbar end -->
						<!-- shop-product-details start -->
						<div class="shop-product-details" id="data-product">
							@foreach( $products as $keys => $product )
							<!-- single-features start -->
							<div class="col-md-4 col-sm-4">
								<div class="single-features">
									@if( $product->promotion_price != 0 )
									<span class="sale-text">Sale</span>
									@endif
									<div class="product-img">
										<a href="{{ url('shop', ['id' => $product->id]) }}">
											<img class="first-img" src="{{ url('MNM/img/product/'.$product->image.'') }}" alt="" />
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
										<h5><a href="{{ url('shop', ['id' => $product->id]) }}">{{ $product->name }}</a></h5>
										@if( $product->promotion_price != 0 )
										<span class="old-price">{{ number_format($product->unit_price) }} VNĐ</span>
										<span class="pro-price">{{ number_format($product->promotion_price) }} VNĐ</span>
										@else
										<span class="pro-price">{{ number_format($product->unit_price) }} VNĐ</span>
										@endif
									</div>
								</div>
							</div>
							<!-- single-features end -->	
							@endforeach					
						</div>
						<!-- shop-product-details end -->
						<!-- toolbar start -->
						<div class="col-md-12 col-sm-12">
							<div class="toolbar toolbar-border">
								<div class="view-mode">
									<a class="grid active" href="shop.html"><i class="fa fa-th-large"></i></a>
									<a class="list" href="shop-list.html"><i class="fa fa-th-list"></i></a>
								</div>
								<div class="page-number">
									<ul>
										@for($i = 1; $i <= $totalPage; $i++)
										<li ><a href="#" id="{{ $i }}" class="page">{{ $i }}</a></li>
										@endfor
										<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									</ul>
								</div>
								<div class="show-result">
									<p>Showing 1–12 of 20 results</p>
								</div>
								<div class="toolbar-form">
									<form action="#">
										<div class="tolbar-select">
											<p>Sort by</p>
											<select>
											  <option value="volvo">Default sorting</option>
											  <option value="saab">Sort by popularity</option>
											  <option value="mercedes">Sort by popularity</option>
											  <option value="audi">Sort by newness</option>
											  <option value="audi">Sort by price: low to high</option>
											  <option value="audi">Sort by price: high to low</option>
											</select> 
										</div>
									</form>								
								</div>
							</div>
						</div>
						<!-- toolbar end -->						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- blog-main-area end -->
@endsection
@section('javascript')
<script type="text/javascript">
	$(document).ready(function(){
		$('.page').each(function(){
			$(this).click(function(e){
				e.preventDefault();
				var page = $(this).attr('id');
				$.ajax({
					url: "{{ route('page') }}",
					method: "GET",
					data: {page: page},
					success:function(data)
					{
						$('#data-product').html(data);
					}
				});
			});
		});
	});
</script>
@endsection