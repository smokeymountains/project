@extends('layouts.LR')

@section('content')
    <!-- BEGIN register -->
    <div class="register register-with-news-feed">
        <!-- BEGIN news-feed -->
        <div class="news-feed">
            <div class="news-image" style="background-image: url(assets1/img/login-bg/login-bg-15.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>TAHOTZ |</b> The Awaited One Hand Tanzania</h4>
                <p>
                    We aream to create a vibrant destiny of the underprivileged.
                </p>
                <p>
                    You are the awaited one hand,together we can make a charity to supporting great purpose for helpless
                    people.
                </p>
            </div>
        </div>
        <!-- END news-feed -->
        <!-- BEGIN register-container -->
        <div class="register-container">
            <!-- BEGIN register-header -->
            <div class="register-header mb-25px h1">
                <div class="mb-1">Sign Up</div>
                <small class="d-block fs-15px lh-16">Join us. And serve the underprivileged whenever you are ready.</small>
            </div>
            <!-- END register-header -->

            <!-- BEGIN register-content -->
            <div class="register-content">
                <form action="{{ route('register') }}" method="POST" class="fs-13px">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-2">{{ __('Name') }} <span class="text-danger">*</span></label>
                        <div class="row gx-3">
                            <div class="mb3">
                                <input type="text" class="form-control fs-13px  @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Full name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{ __('Email') }}<span class="text-danger">*</span></label>
                        <input id="email" type="email"
                            class="form-control fs-13px @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email address" />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{ __('Password') }} <span class="text-danger">*</span></label>
                        <input id="password" type="password"
                            class="form-control fs-13px @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="mb-2">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>
                        <input type="password" class="form-control fs-13px" placeholder="Password"
                            name="password_confirmation" required autocomplete="new-password" />

                    </div>
                    <div class="mb-4">
                        <button type="submit"
                            class="btn btn-primary d-block w-100 btn-lg h-45px fs-13px">{{ __('Register') }}</button>
                    </div>
                    <div class="mb-4 pb-5">
                        Already a member? Click <a href="{{ route('login') }}">here</a> to login.
                    </div>
                    <hr class="bg-gray-600 opacity-2" />
                    <p class="text-center text-gray-600">
                        &copy; TAHOTZ Admin All Right Reserved
                    </p>
                </form>
            </div>
            <!-- END register-content -->
        </div>
        <!-- END register-container -->
    </div>
@endsection
