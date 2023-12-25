@extends('admin.layout.auth-scaffold')
@push('title')
{{ $title ?? '' }}
@endpush
@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Core CSS -->
<link rel="stylesheet" href="{{asset('asset/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{asset('asset/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{asset('asset/css/demo.css')}}" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{asset('asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{asset('asset/vendor/libs/node-waves/node-waves.css')}}" />
<link rel="stylesheet" href="{{asset('asset/vendor/libs/typeahead-js/typeahead.css')}}" />
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('asset/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<!-- Page CSS -->
<!-- Page -->
<link rel="stylesheet" href="{{asset('asset/vendor/css/pages/page-auth.css')}}">
   <style>

   .button-danger {
      background-color: #e81110;
      border-color: #e81110;
      color: white;
}

.button-danger:hover {
   background-color: #e81110;
      border-color: #e81110;
      color: white;
}

.button-danger:not([class*=button-danger-]):active, .button-danger:not([class*=button-danger-]).active, .button-danger:not([class*=button-danger-]).show, .button-danger:not([class*=button-danger-]) {
   background-color: #e81110;
      border-color: #e81110;
      color: white;
}

</style>
@endpush
@section('content')
<!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<!-- End Google Tag Manager -->
<!-- Favicon -->
<!-- Fonts -->
<!-- Helpers -->
</head>
<body>
   <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
   <!-- End Google Tag Manager (noscript) -->
   <!-- Content -->
   <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
         <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card">
               <div class="card-body">
                  <!-- Logo -->
                  <div class="app-brand justify-content-center mb-4 mt-2">
                     <a href="{{ url('/') }}" class="app-brand-link gap-2">
                        <div>
                            <img src="{{ asset('assets/imgs/trade-accepted-logo.png') }}" alt="" height="100px" width="250px">
                        </div>
                     </a>
                  </div>
                  <!-- /Logo -->
                  <h4 class="mb-1 pt-2">Welcome to {{ env('APP_NAME')}}! 👋</h4>
                  <p class="mb-4">Please sign-in to your account</p>
                  @if(Session::has('error'))
                  <div class="alert alert-danger">{{ Session::get('error') }}</div>
                  @endif
                  <form id="formAuthentication" class="mb-3" action="{{ route('admin.login') }}" method="POST">
                     @csrf
                     <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus>
                        <small class="text-danger">@error ('email') {{ $message }} @enderror</small>
                     </div>
                     <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" autofocus>
                        <small class="text-danger">@error ('password') {{ $message }} @enderror</small>
                        <div class="mt-3">
                            <input type="checkbox" onclick="MyFunction()">
                             Show Password
                        </div>
                     </div>
                     <div class="mb-3">
                        <button class="btn button-danger d-grid w-100 hover" type="submit">Sign in</button>
                     </div>
                  </form>
               </div>
            </div>
            <!-- /Register -->
         </div>
      </div>
   </div>
   @push('scripts')
<script>
        function MyFunction(){
        var show = document.getElementById('password');
        if(show.type == 'password'){
            show.type = 'text';
        }
        else{
            show.type = 'password';
        }
    }</script>
<script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5J3LMKC');

   </script>
   <script src="{{asset('asset/vendor/libs/jquery/jquery.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/popper/popper.js')}}"></script>
   <script src="{{asset('asset/vendor/js/bootstrap.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/node-waves/node-waves.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/hammer/hammer.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/i18n/i18n.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/typeahead-js/typeahead.js')}}"></script>
   <script src="{{asset('asset/vendor/js/menu.js')}}"></script>
   <!-- endbuild -->
   <!-- Vendors JS -->
   <script src="{{asset('asset/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
   <script src="{{asset('asset/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
   <!-- Main JS -->
   <script src="{{asset('asset/js/main.js')}}"></script>
   <!-- Page JS -->
   <script src="{{asset('asset/js/pages-auth.js')}}"></script>
   @endpush
   @endsection
