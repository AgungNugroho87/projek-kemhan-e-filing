<!-- Stored in resources/views/app.blade.php -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        @yield('footer')
    </body>
</html>