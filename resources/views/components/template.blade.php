<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

    @include('components.nav')
    {{-- <div class="my-10 mx-20"> --}}

    @yield('content')

</body>


</html>