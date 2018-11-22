<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <title>@yield('title') | Sistem Informasi PKL</title>
</head>
<body>
    @if(Session::get('akses')=="admin")
        <div class="left" style="width: 22%;">
            @include('section-layouts.navbar-admin')
        </div>
        <div class="right" style="width: 78%;">
            @include('section-layouts.nav-top')
            @yield('content')
            @include('section-layouts.footer-admin')
        </div>

    @else
        @include('section-layouts.alert');
        @include('section-layouts.navbar')
        @yield('content')
        @include('section-layouts.footer')
    @endif
</body>
</html>