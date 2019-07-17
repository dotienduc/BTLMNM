<!doctype html>
<html class="no-js" lang="">
    
<!-- Tieu Long Lanh -->
<head>
		<!-- Basic page needs
		============================================ -->	
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home page</title>
        <meta name="description" content="">
		
		<!-- Mobile specific metas
		============================================ -->		
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Font
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>		
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ url('MNM/img/favicon.ico') }}">

		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('MNM/css/bootstrap.min.css') }}">
		
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('MNM/css/owl.carousel.css') }}">	
		
		<!-- owl.theme CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('MNM/css/owl.theme.css') }}">

		<!-- owl.transitions CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('MNM/css/owl.transitions.css') }}">
		
		<!-- font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('MNM/css/font-awesome.min.css') }}">
		
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{ url('MNM/css/animate.css') }}">
		
		<!-- slicknav CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ url('MNM/css/slicknav.css') }}">
		
		<!-- rs-plugin CSS
		============================================ -->			
		<link href="{{ url('MNM/lib/rs-plugin/css/settings.css') }}" rel="stylesheet" />			
		
		<!-- normalize CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ url('MNM/css/normalize.css') }}">

        <!-- jquery-ui CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ url('MNM/css/jquery-ui.css') }}">
		
		<!-- main CSS
		============================================ -->		
        <link rel="stylesheet" href="{{ url('MNM/css/main.css') }}">
		
		<!-- style CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ url('MNM/style.css') }}">
		
		<!-- responsive CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ url('MNM/css/responsive.css') }}">

        @yield('css')
		
		<!-- modernizr js
		============================================ -->		
        <script src="{{ url('MNM/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
   
   @include("partial/header")

	

	@yield('content')
	
	
	@include('partial/footer')
	
	
	<!-- QUICKVIEW PRODUCT -->
	<div id="quickview-wrapper">
		<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<div class="product-images">
								<div class="main-image images">
									<img alt="" src="{{ url('MNM/img/product/13.jpg') }}">
								</div>
							</div><!-- .product-images -->
							
							<div class="product-info">
								<h1>Diam quis cursus</h1>
								<div class="price-box">
									<p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
								</div>
								<a href="shop.html" class="see-all">See all features</a>
								<div class="quick-add-to-cart">
									<form method="post" class="cart">
										<div class="numbers-row">
											<input type="number" id="french-hens" value="3">
										</div>
										<button class="single_add_to_cart_button" type="submit">Add to cart</button>
									</form>
								</div>
								<div class="quick-desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social-icons">
											<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
											<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
											<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
											<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
											<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- .product-info -->
						</div><!-- .modal-product -->
					</div><!-- .modal-body -->
				</div><!-- .modal-content -->
			</div><!-- .modal-dialog -->
		</div>
		<!-- END Modal -->
	</div>
	<!-- END QUICKVIEW PRODUCT -->	
		

		<!-- JS -->
		
		<!-- jquery js -->
		<script src="{{ url('MNM/js/vendor/jquery-3.4.1.min.js') }}"></script>
		
		<!-- bootstrap js -->
		<script src="{{ url('MNM/js/bootstrap.min.js') }}"></script>
		
		<!-- owl.carousel.min js -->
		<script src="{{ url('MNM/js/owl.carousel.min.js') }}"></script>
		
		<!-- slicknav js -->
		<script src="{{ url('MNM/js/jquery.slicknav.js') }}"></script>
		
		<!-- countdown js -->
		<script src="{{ url('MNM/js/jquery.countdown.min.js') }}"></script>
		
		<!-- price-slider js -->
		<script src="{{ url('MNM/js/price-slider.js') }}"></script>
		
		<!-- jquery.scrollUp js -->
		<script src="{{ url('MNM/js/jquery.scrollUp.min.js') }}"></script>			
		
		<!-- Lib js -->		
		<script src="{{ url('MNM/lib/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
		<script src="{{ url('MNM/lib/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		<script src="{{ url('MNM/lib/rs-plugin/rs.home.js') }}"></script>
		
		<!-- wow js -->
        <script src="{{ url('MNM/js/wow.js') }}"></script>		
		<script>
			new WOW().init();
		</script>		

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>		
		
		<!-- plugins js -->
		<script src="{{ url('MNM/js/plugins.js') }}"></script>
		
		<!-- main js -->
		<script src="{{ url('MNM/js/main.js') }}"></script>
		
		@yield('javascript')
    </body>

<!-- Tieu Long Lanh -->
</html>
