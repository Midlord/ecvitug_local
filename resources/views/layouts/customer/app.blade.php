<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{asset('interface/img/fav.ico')}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="author" content="colorlib">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>E.C Vitug Construction Company</title>
	@toastr_css

	@include('layouts.customer.css')
	@yield('css')
</head>

<body>
	<div class="preloader-area">
		<div class="loader-box">
			<div class="loader"></div>
		</div>
	</div>

@include('layouts.customer.topnav')

  <div id="app">
    @yield('content')
  </div>
@include('layouts.customer.footer')
@include('layouts.customer.modal')
	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="ti-angle-double-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->
@jquery
@toastr_js
@toastr_render
@yield('scripts')
@include('layouts.customer.scripts')
</body>

</html>