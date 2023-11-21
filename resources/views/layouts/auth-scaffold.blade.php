<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{config("app.name")}} - @stack('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('asset/img/trade-accepted-favico.png')}}">
    @include('partial.style')

</head>

<body>
    @yield('content')
    @include('partial.script')
    @stack('scripts')
</body>

</html>
