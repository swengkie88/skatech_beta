<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <title>@yield('title') | Sistem Informasi PKL</title>
</head>
<body>
    @if(Session::get('akses')=="admin")
        <div class="left" style="width: 22%;">
            @include('inc.navbar-admin')
        </div>
        <div class="right" style="width: 78%;">
            @include('inc.nav-top')
            @yield('content')
            @include('inc.footer-admin')
        </div>

    @else
        @include('inc.alert');
        @include('inc.navbar')
        @yield('content')
        @include('inc.footer')
    @endif
</body>
</html>