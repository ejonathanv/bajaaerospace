<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Baja California, a state with global talent in the aerospace sector, expertise in aeronautics and space, accredited SMEs supply chain value and over five decades seniority in word-class management." />
        <meta name="keywords" content="Baja California, Mexico, Aerospace, Cluster, Tijuana, Ensenada, Mexicali, Tecate, Rosarito, Baja Aerospace Cluster, Baja California Aerospace Cluster, Baja Aerospace, Baja California Aerospace, Aerospace Cluster, Aerospace Cluster Mexico, Aerospace Cluster Baja California, Aerospace Cluster Baja, Aerospace Cluster Tijuana, Aerospace Cluster Ensenada, Aerospace Cluster Mexicali, Aerospace Cluster Tecate, Aerospace Cluster Rosarito, Aerospace Tijuana, Aerospace Ensenada, Aerospace Mexicali, Aerospace Tecate, Aerospace Rosarito, Aerospace Baja California, Aerospace Baja, Aerospace Baja Mexico, Aerospace Baja Tijuana, Aerospace Baja Ensenada, Aerospace Baja Mexicali, Aerospace Baja Tecate, Aerospace Baja Rosarito" />
        <meta name="author" content="Baja Aerospace Cluster" />

        <title> @if($title) {{$title}} -  @endif {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LQ5HSGBYCG"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LQ5HSGBYCG');
        </script>

    </head>
    <body class="font-sans text-gray-900 antialiased" id="app">
        <x-website.header></x-website.header>
        {{ $slot }}
        <x-website.footer></x-website.footer>
    </body>
</html>
