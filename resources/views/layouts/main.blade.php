<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link al public css -->

    <title> Laravel Comics | @yield('title')</title>
</head>
<body>
    
    @include('partials.header', ['header_links' => config('header_nav_items')])

    <main>
        @include('partials.jumbotron')
        @yield('content')
    </main>

    @include('partials.footer', ['header_links' => config('header_nav_items')])


    @yield('script-adder')    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>