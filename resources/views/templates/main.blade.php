<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Laravel</title>
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap4/bootstrap.css') }}">
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap4/bootstrap.js') }}"></script>
</head>
<body>
    <div class="container">
        @include('navs.nav')

        @yield('content')

    </div>
</body>
</html>