<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased">
      

    <section id="nav">@include('nav')</section>
    <section id="stiple">@include('stiple')</section>
    <section id="services">@include('services')</section>
    <section id="events">@include('events')</section>
    <section id="about">@include('about')</section>
    <section id="footer">@include('footer')</section>
            
                
    </body>
</html>
