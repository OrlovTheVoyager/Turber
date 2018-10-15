
{{-- View for our Master Layout. --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TURBER</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
        @include('layouts.errors')
    </div>
</body>
</html>