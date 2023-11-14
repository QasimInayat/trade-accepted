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

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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

@extends('layouts.auth-scaffold')
@push('title')
Login/Register
@endpush
@section('content')

    <main>

        <section class="auth">
            <div class="container-fluid px-0">
                <div class="row g-0">
                    <div class="col-md-6 d-md-block d-none">
                        <div class="side-img">
                            <img src="{{asset('assets/imgs/side-img.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="auth-form-cotainer">
                            <div class="w-100">
                                <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="login-tab" data-bs-toggle="pill"
                                            data-bs-target="#login" type="button" role="tab" aria-controls="login"
                                            aria-selected="true">Login</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="register-tab" data-bs-toggle="pill"
                                            data-bs-target="#register" type="button" role="tab" aria-controls="register"
                                            aria-selected="false">Register</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="login" role="tabpanel"
                                        aria-labelledby="login-tab" tabindex="0">
                                        <form action="" class="auth-form w-100">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <div class="position-relative pass-eye">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1">
                                                    <i class="fa-solid fa-eye toggle-password"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label fw-light fs-14"
                                                        for="exampleCheck1">Keep me login</label>
                                                </div>
                                                <div>
                                                    <a href="{{route('password.request')}}" class="forgot">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary w-100 fw-bold mt-4">Login</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="register" role="tabpanel"
                                        aria-labelledby="register-tab" tabindex="0">
                                        <form action="" class="auth-form w-100">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">First
                                                            Name</label>
                                                        <input type="text" class="form-control" id="f-name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Last
                                                            Name</label>
                                                        <input type="text" class="form-control" id="f-name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail2" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2"
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <div class="position-relative pass-eye">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1">
                                                    <i class="fa-solid fa-eye toggle-password"></i>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100 fw-bold mt-4">Register
                                                Now</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="auth-policy">
                                <img src="{{asset('assets/imgs/logo.png')}}" width="120" alt="">
                                <p class="mb-0">All trademarks are the property of Trades Accepted or a related company
                                    or a licensor unless otherwise noted. ©2023 Trades Accepted. All rights reserved.
                                </p>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        $(".toggle-password").click(function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
@endpush



