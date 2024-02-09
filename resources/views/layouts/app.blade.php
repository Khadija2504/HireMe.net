<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="og:title" content="Home page — Manchester Centre for Plastic Surgery & Burns">
    <meta name="og:description" content="The Manchester Centre for Plastic Surgery and Burns provides specialist care to the population of Greater Manchester and is the major tertiary referral centre for complex reconstruction in the North West of England.">
    <meta name="og:image" content="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png">
    <meta name="description" content="The Manchester Centre for Plastic Surgery and Burns provides specialist care to the population of Greater Manchester and is the major tertiary referral centre for complex reconstruction in the North West of England.">
    <meta name="keywords" content="Manchester Centre for Plastic Surgery, Burns, specialist care, reconstruction, Greater Manchester, North West of England">
    <meta name="author" content="Manchester University NHS Foundation Trust">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#005eb8">
    <meta name="msapplication-navbutton-color" content="#005eb8">
    <meta name="apple-mobile-web-app-status-bar-style" content="#005eb8">
    <meta name="msapplication-TileColor" content="#005eb8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page — Manchester Centre for Plastic Surgery & Burns</title>
    <!-- Add Tailwind CSS -->
    
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../../design.css">
    <link rel="stylesheet" type="text/css" href="../../home.css">

    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="32x32">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="96x96">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" sizes="180x180">
    <link rel="mask-icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" color="#005eb8">
    <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
