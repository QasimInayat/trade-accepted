<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{config("app.name")}} - @stack('title')</title>
    @include('partial.style')
    @stack('styles')
</head>

<body>
    @yield('content')
    @include('partial.sidebar')
       @include('partial.header')
    @include('partial.script')
    @stack('scripts')
</body>

</html>
