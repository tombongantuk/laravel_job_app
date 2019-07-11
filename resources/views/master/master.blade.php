<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- boostrap core css--}}
    <link href="{{ asset('css/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    {{-- shared header --}}
    <header>
        @include('shared.header')
    </header>

    {{-- main content --}}
    <main role="main" class="container">
        <br>
        <br>
        @yield('content')
    </main>

    {{-- js file --}}
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>