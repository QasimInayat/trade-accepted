
@extends('layouts.auth-scaffold')
@push('title')
Reset Password
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
                                <form action="{{ route('password.update') }}" method="POST" class="auth-form w-100">
                                    @csrf
                                    <h3 class="mb-5">Reset password?</h3>
                                     <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="mb-3">
                                        <label for="email">Email <span>*</span></label>
                                         <input class="form-control" id="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Type your password</label>
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
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Retype your password</label>
                                        <div class="position-relative pass-eye">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            <i class="fa-solid fa-eye toggle-password"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 fw-bold mt-4">Update Password</button>
                                </form>

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

