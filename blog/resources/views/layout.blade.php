<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title', 'laracast') </title>
    </head>
    <body>
        <ul>
            <li><a href="/laravelapps/blog/public/"> Home </a></li>
            <li><a href="/laravelapps/blog/public/about"> About Us </a></li>
            <li><a href="/laravelapps/blog/public/contact"> Contact </a></li>
        </ul>
        @yield('content');
    </body>
</html>
