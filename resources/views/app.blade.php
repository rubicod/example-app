<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        
    </head>
    <body>
    <h1>@yield('title')</h1> 
    @yield('content')
     
        <footer>
          <p>
          &copy; Copyright {{('Y')}}
          &middot;<a href="/about-us">About Us</a>
          </p>
        </footer>
    </body>
</html>
  