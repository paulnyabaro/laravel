<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Laravel full tutorial</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                
            </style>
        @endif
    </head>
    <h1>This is the homepage</h1>
    {{ $ninjas[0]["name"] }}

    @if($ninjas)
    @foreach($ninjas as $ninja)
    <p>{{ $ninja["name"] }} is an expert in {{ $ninja["skills"] }} <a href="{{ url('/ninjas/') }}">Read more</a></p>
    @endforeach
    @else
    No ninjas available
    @endif
</html>
