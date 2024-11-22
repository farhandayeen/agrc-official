<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'Default Title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="icon" href="{{ asset('img/AGRC.png') }}" type="image/png">


        @include('partials.styles')
    </head>

    <body>

        @include('partials.header')

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            @include('partials.navbar')

            @yield('headerstart')
        </div>
        <!-- Navbar & Hero End -->


        <div>
            @yield('content')
        </div>

        @include('partials.footer')
        
        @include('partials.script')
        <!-- @stack('scripts') -->
    </body>

</html>