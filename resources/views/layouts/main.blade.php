<html>
<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('stylesheets/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('stylesheets/screen.css')}}">
</head>
<body>

<div class="container">
    @yield('content')
</div>

