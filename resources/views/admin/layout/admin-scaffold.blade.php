<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="{{asset('asset')}}" data-template="vertical-menu-template">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
      <title>{{ env('APP_NAME')}} | @stack('title')</title>
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 5">
      <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
      <link rel="canonical" href="">
      <link rel="icon" type="image/x-icon" href="{{asset('asset/img/trade-accepted-favico.png')}}">
      @include('admin.partial.style')
      @stack('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">

   </head>
   <body>

      <div class="layout-wrapper layout-content-navbar  ">
         <div class="layout-container">
            @yield('content')
            @include('admin.partial.sidebar')
               @include('admin.partial.header')
            </div>
            <div class="layout-page">
            @include('admin.partial.footer')
            </div>
      </div>
      @include('admin.partial.script')
      @stack('scripts')
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
      <script>

      </script>
   </body>
</html>
