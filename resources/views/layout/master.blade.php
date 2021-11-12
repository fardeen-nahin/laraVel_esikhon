<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>

    @yield('content')
    @yield('script')
</body>
</html>