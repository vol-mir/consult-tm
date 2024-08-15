<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>
        <link rel="canonical" href="{{ url()->full() }}"/>
        <meta name="description" content="{{ $description }}">
        <meta name="keywords" content="{{ $keywords }}">
        <meta name="country" content="BY">
        <meta name="author" content="Консалтинженеринг ТМ">
        <meta name="copyright" content="Консалтинженеринг ТМ">
        <meta name="theme-color" content="#37A764">

        <!-- Favicons Icon -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

        <!-- Yandex -->
        <meta name="yandex-verification" content="da1b99ca3365cba1" />

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TSLJRF6FNQ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-TSLJRF6FNQ');
        </script>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        @includeIf('schemas.schema-org')

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
