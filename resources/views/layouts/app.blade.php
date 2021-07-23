<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
@include('layouts.navigation')

<!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <footer class="text-gray-600 bg-white body-font">
        <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
            <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="344.564 330.278 111.737 91.218" width="53.87" height="43.61">
                    <defs>
                        <linearGradient id="logo_svg__b" gradientUnits="userSpaceOnUse" x1="420.97" y1="331.28"
                                        x2="420.97" y2="418.5">
                            <stop offset="0%" stop-color="#06b6d4"></stop>
                            <stop offset="100%" stop-color="#67e8f9"></stop>
                        </linearGradient>
                        <linearGradient id="logo_svg__d" gradientUnits="userSpaceOnUse" x1="377.89" y1="331.28"
                                        x2="377.89" y2="418.5">
                            <stop offset="0%" stop-color="#06b6d4"></stop>
                            <stop offset="100%" stop-color="#67e8f9"></stop>
                        </linearGradient>
                        <path d="M453.3 331.28v28.57l-64.66 58.65v-30.08l64.66-57.14z" id="logo_svg__a"></path>
                        <path d="M410.23 331.28v28.57l-64.67 58.65v-30.08l64.67-57.14z" id="logo_svg__c"></path>
                    </defs>
                    <use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use>
                    <use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use>
                </svg>
                <span class="ml-3 text-xl">TailwindBlog</span>
            </a>
            <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0">
                &copy; {{ date('Y') }}</p>
            <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
                  <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         class="w-5 h-5" viewBox="0 0 24 24">
                      <path
                          d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                      <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                      <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                  </a>
                </span>
        </div>
    </footer>
</div>
</body>
</html>
