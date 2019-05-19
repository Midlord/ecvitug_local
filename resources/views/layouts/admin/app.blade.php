<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>EC Vitug Construction Company</title>
	@toastr_css
  @include('layouts.admin.css')
  {{--  <link href="{{asset('css/app.css') }}" rel="stylesheet">  --}}
  <style>
    .toast {
      background-color: #030303 !important;
    }
    .toast-success {
      background-color: #51A351 !important;
    }
    .toast-error {
      background-color: #BD362F !important;
    }
    .toast-info {
      background-color: #2F96B4 !important;
    }
    .toast-warning {
      background-color: #F89406 !important;
    }
  </style>
  @yield('css')
</head>

<body id="page-top">
  <div id="wrapper">
    @include('layouts.admin.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.admin.topnav')
        <div class="container-fluid">
            @yield('content')
        </div>
      </div>
        @include('layouts.admin.footer')
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @jquery
  @toastr_js
  @toastr_render
@include('layouts.admin.modal')

@include('layouts.admin.script')
@yield('scripts')
</body>
</html>
