<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Front Office</title>
</head>
<body>
    {{-- all'interno dello yield inserisco il div root --}}
    @yield('content')

    {{-- Script vue.js --}}
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>