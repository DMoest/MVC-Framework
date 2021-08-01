<!doctype html>
<html lang="en" class="w-full">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="author" content="Daniel Andersson, daap19">
        <meta name="description" content="This is a web page made for the course MVC @ Blekinge Intitute of Technologies.">
        <meta name="keywords" content="mvc, laravel, php, bth, webprogrammering">

        <title>Daniels Super Applikation</title>

        {{-- Google fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Lato&family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">

        {{-- CSS Style sheet --}}
        <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">

        {{-- Use JS stuff with Laravel.mix --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>


    <body class="w-full font-body">

        @include('partials/header')

        {{ $slot  }}

        @include('partials/footer')

    </body>
</html>
