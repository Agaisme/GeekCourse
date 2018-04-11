<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GeekCourse - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <div id="app">
            <Myheader></Myheader>

            <div class="container is-widescreen">
                <router-view></router-view>
                
                <div class="flex-center position-ref full-height">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>

            <Myfooter></Myfooter>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
