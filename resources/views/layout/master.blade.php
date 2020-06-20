<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="An application to assist a community in discovering local nature trails, plants and wildlife">
        <meta name="author" content="Christian Harvey">

        <title>@yield('title', 'Forager')</title>

        {{-- Styles --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/application.css') }}" rel="stylesheet">
    </head>

    <body>
        @yield('content')
        <script src="{{ asset('assets/application.js') }}"></script>
    </body>
</html>