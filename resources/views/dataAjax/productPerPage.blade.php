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