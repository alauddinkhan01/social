<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/etrans/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jan 2022 06:50:43 GMT -->
<head>
	<!-- strip payments -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('frontend/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('frontend/assets/plugins/OwlCarousel/css/owl.carousel.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('frontend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('frontend/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('frontend/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/icons.css') }}" rel="stylesheet">
	<title>eTrans - eCommerce HTML Template</title>
</head>
<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		{{-- <div class="discount-alert bg-dark-1 d-none d-lg-block">
			<div class="alert alert-dismissible fade show shadow-none rounded-0 mb-0 border-bottom">
				<div class="d-lg-flex align-items-center gap-2 justify-content-center">
					<p class="mb-0 text-white">Get Up to <strong>40% OFF</strong> New-Season Styles</p>	<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Men</a>
					<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Women</a>
					<p class="mb-0 font-13 text-light-3">*Limited time only</p>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div> --}}
		<!--start top header wrapper-->
        @include('layouts.frontend.header')
		<!--end top header wrapper-->
		<!--start slider section-->
        @yield('slider')
		<!--end slider section-->
		<!--start page wrapper -->
        @yield('products')
        @yield('content')
		<!--end page wrapper -->
		<!--start footer section-->
        @include('layouts.frontend.footer')
		<!--end footer section-->
		<!--start quick view product-->
		<!-- Modal -->
        @yield('quickproductoverview')
		<!--end quick view product-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	<!--start switcher-->
    @include('layouts.frontend.switcher')
	<!--end switcher-->
	@yield('scripts')
	<!-- Bootstrap JS -->
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/plugins/OwlCarousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('frontend/assets/js/app.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/index.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/product-details.js') }}"></script>
</body>


<!-- Mirrored from codervent.com/etrans/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jan 2022 06:50:43 GMT -->
</html>