<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <div class="container">
        <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <a href="/extra">Extra</a>

    @yield('content')

    @section('extraField')
    <p>Lorem ipsum dolor sit, amet consectetur</p>
    @show

    @yield('script')
    </div>
</body>
</html>