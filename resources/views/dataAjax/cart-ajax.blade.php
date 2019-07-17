
<ul>
	<li><a href="cart.html"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">{{ $qtyTotal }}</span></a>
		<div class="mini-cart-content">
			@foreach($items as $item)
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
			<p class="total">Tổng tiền: <span class="amount">{{ number_format($totalPrice) }} VND</span></p>
			<div class="clear"></div>
			<p class="cart-button-top"><a href="checkout.html">Giỏ hàng</a></p>
			<p class="cart-button-top"><a href="checkout.html">Thanh toán</a></p>
		</div>
	</li>
</ul>