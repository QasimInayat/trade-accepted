
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
                                        <form method="POST" action="{{ route('login') }}" class="auth-form w-100">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <div class="position-relative pass-eye">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    <i class="fa-solid fa-eye toggle-password"></i>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                      <form method="POST" action="{{ route('register') }}" class="auth-form w-100">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">First
                                                            Name</label>
                                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                                            @error('first_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Last
                                                            Name</label>
                                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                                            @error('last_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail2" class="form-label">Email</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <div class="position-relative pass-eye">
                                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    <i class="fa-solid fa-eye toggle-password"></i>
                                                       @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                                <div class="position-relative pass-eye">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    <i class="fa-solid fa-eye toggle-password"></i>
                                                </div>
                                            </div> --}}
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



