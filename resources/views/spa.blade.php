<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <title>Vue SPA</title>
</head>
<body>
    <div id="app">
        <app></app>
        <modal></modal>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    
</body>
</html>


