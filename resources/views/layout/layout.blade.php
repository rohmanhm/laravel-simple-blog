<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

    <script type="text/javascript" src="{{ URL::to('js/jquery-3.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/script.js') }}"></script>
    @stack('scripts')
    </body>
</html>
