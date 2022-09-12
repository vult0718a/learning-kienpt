<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.style')
    <title>@yield('title')</title>
</head>

<body id="reportsPage">
    @include('layouts.header')

    @yield('content')
    
    @include('layouts.footer')

    @yield('layouts.script')
</body>

</html>