<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title></title>
</head>

<body>
    @yield('content')
    <ul>
        <li><a href="/about">about</a> </li>
        <li><a href="/gallery">my work</a> </li>
        <li><a href="/">home</a> </li>
    </ul>
</body>
</html>