{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="asse/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="asse/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('asse/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        {{-- <img class="img-fluid" alt="" src="assets/images/logo/logo.png"> --}}
                                        <h2 class="m-b-0">Sign In</h2>
                                    </div>
                                         <form method="POST" action="{{ route('login') }}">
                        @csrf


                                            <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email Address</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <br/>
                                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            @if (Route::has('password.request'))
                                            <a class="float-right font-size-13 text-muted" href="{{ route('password.request') }}">Forget Password?</a>
                                            @endif
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                     <br/>
                                                     @error('password')
                                                     <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <div class="checkbox">
                                                    <input id="checkbox" type="checkbox"name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="checkbox"><span>Remember me</label>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('admin.footer')
               
            </div>
        </div>
    </div>

    

    <!-- Core Vendors JS -->
    <script src="asse/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="asse/js/app.min.js"></script>

</body>




</html>

