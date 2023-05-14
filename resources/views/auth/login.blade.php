@extends('layouts.LR')

@section('content')
    <!-- BEGIN login -->
    <div class="login login-with-news-feed">
        <!-- BEGIN news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url(../assets1/img/login-bg/login-bg-11.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>TAHOTZ |</b> The Awaited One Hand Tanzania</h4>

            </div>
        </div>
        <!-- END news-feed -->
        <!-- BEGIN login-container -->
        <div class="login-container">
            <!-- BEGIN login-header -->
            <div class="login-header mb-30px">
                <div class="brand">
                    <div class="d-flex align-items-center">
                        <span class="logo"></span>


                        <b>TAHOTZ </b>
                    </div>
                    <small>Have an account ? Please Login Or Register to create One.</small>
                </div>
                <div class="icon">
                    <a href="{{ url('/') }}"><i class="fa fa-sign-in-alt"></i></a>
                    
                </div>
            </div>
            <!-- END login-header -->
            <!-- BEGIN login-content -->
            <div class="login-content">
                <form action="{{ route('login') }}" method="POST" class="fs-13px">
                    @csrf
                    <div class="form-floating mb-15px">
                        <input type="email" class="form-control h-45px fs-13px @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email Address" id="email" />
                        <label for="emailAddress"
                            class="d-flex align-items-center fs-13px text-gray-600">{{ __('Email Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-15px">
                        <input type="password" class="form-control h-45px fs-13px @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password" placeholder="Password"
                            id="password" />
                        <label for="password"
                            class="d-flex align-items-center fs-13px text-gray-600">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check mb-30px">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }} />
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="mb-15px">
                        <button type="submit" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="text-primary" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="mb-40px pb-40px text-dark">
                        Not a member yet? Click <a href="{{ route('register') }} " class="text-primary">here</a> to register.
                    </div>
                    <hr class="bg-gray-600 opacity-2" />
                    <div class="text-gray-600 text-center  mb-0">
                        &copy;TAHOTZ All Right Reserved
                    </div>
                </form>
            </div>
            <!-- END login-content -->
        </div>
    @endsection
