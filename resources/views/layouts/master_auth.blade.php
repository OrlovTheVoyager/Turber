<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TURBER</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
    <!-- <link rel="stylesheet" href="{{ asset('css/skeleton.css') }}" type="text/css"> -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.sidenav')
    <div class="content">
        @yield('content')
    </div>
</body>
</html>