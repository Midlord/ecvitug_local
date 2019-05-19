<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EC Vitug Construction Company</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('sbadmin/css/sb-admin-2.css')}}" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
  <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
  @toastr_css
</head>

<body background="{{asset('images/construction.jpg')}}" style="background-position: center; background-size: cover;">
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form class="user" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user {{ $errors->has('name') ? ' is-invalid' : '' }}" id="exampleLastName" name="name" value="{{old('name')}}" placeholder="FullName" autofocus>
                    
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail" name="email" value="{{old('email')}}" placeholder="Email Address">
                
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif


                </div>
                <div class="form-group">
                    <input type="number" class="form-control form-control-user {{ $errors->has('mobilePhone') ? ' is-invalid' : '' }}" id="phone" name="mobilePhone" value="{{old('mobilePhone')}}" placeholder="Phone Number">
                
                    @if ($errors->has('mobilePhone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mobilePhone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="Password" name="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password_confirmation" id="exampleRepeatPassword" placeholder="Repeat Password" autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="uploadPhoto"> Upload Photo:</label>
                    <input type="file" name="photo" id="uploadPhoto">
                </div>
                <div class="form-group">
                    {!! NoCaptcha::display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </span>
                    @endif
                </div>
                <button class="btn btn-primary btn-user btn-block">
                    Register Account
                </button>
                <hr>
                <a href="{{route('redirectToProvider', ['google'])}}" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
                <a href="{{route('redirectToProvider', ['facebook'])}}" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
                </form>
                <hr>
                <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                @endif

                </div>
                <div class="text-center">
                <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@jquery
@toastr_js
@toastr_render

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('sbadmin/js/sb-admin-2.min.js')}}"></script>
  <script src="{{asset('js/toastr.min.js')}}"></script>


</body>

</html>
