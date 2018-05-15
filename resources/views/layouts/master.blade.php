<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>

    <title>base 1</title>
    @yield('head')

</head>

<body>

@yield('header')

@yield('content')

@yield('footer')

</body>
</html>