<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Styles -->
    <link href="{{ asset('css/apps.css') }}" rel="stylesheet">
     <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>