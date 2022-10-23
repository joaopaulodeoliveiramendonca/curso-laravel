<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Meu titulo')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    @stack('styles')
</head>
<body>
    layout
    @yield('content')

    <script src="{{asset('/assets/js/app.js')}}"></script>
    @stack('scripts')
</body>
</html>