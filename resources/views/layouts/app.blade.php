<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>
        <link rel="canonical" href="{{ url()->full() }}"/>
        <meta name="description" content="{{ $description }}">
        <meta name="country" content="BY">
        <meta name="author" content="БелиИнструментТорг">
        <meta name="copyright" content="БелиИнструментТорг">
        <meta name="theme-color" content="#37A764">

        <!-- Favicons Icon -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        @include('layouts.partials.preloader')

        @include('layouts.partials.header')

        {{ $slot }}

        @include('layouts.partials.footer')

        @include('layouts.partials.cookies-popup')

        @include('layouts.partials.scrolltop')

        @livewireScripts
    </body>
</html>
