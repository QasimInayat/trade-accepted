
@extends('layouts.auth-scaffold')
@push('title')
Forgot Password
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
                                <form action="{{ route('password.email') }}" method="POST" class="auth-form w-100">
                                @csrf
                                    <h3>Forgot password?</h3>
                                    <div class="auth-policy mb-4">
                                        <p class="mb-0">Please enter your email, we’ll send you reset password link.</p>
                                    </div>
                                    <div class="col-md-12">
                                        @if (session('status'))
                                        <div style="" class="alert alert-success" role="alert">
                                           {{ session('status') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" class="@error('email') is-invalid @enderror form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 fw-bold mt-4">Reset Password</button>
                                    <center>
                                    </center>

                                    <a style="text-decoration: none " href="{{ route('login') }}" class="text-center text-primary mt-3"></a>
                                    <center>
                                        <a href="{{route('login')}}" class="forgot text-center">Wait, I remember my password... Login</a>

                                        </center>
                                </form>

                            </div>
                            <div class="auth-policy">
                               <a href="{{ route('home') }}"> <img src="{{asset('assets/imgs/logo.png')}}" width="120" alt=""></a>
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
