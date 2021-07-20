<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charSet="utf-8"/>
    
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased text-black bg-white dark:bg-gray-900 dark:text-white">
        
    <div class="max-w-3xl px-4 mx-auto sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="flex flex-col justify-between h-screen">
            <header class="flex items-center justify-between py-10">
                <div>
                    <a aria-label="Tailwind CSS Blog" href="/">
                        <div class="flex items-center justify-between">
                            <div class="mr-3">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="344.564 330.278 111.737 91.218" width="53.87" height="43.61"><defs><linearGradient id="logo_svg__b" gradientUnits="userSpaceOnUse" x1="420.97" y1="331.28" x2="420.97" y2="418.5"><stop offset="0%" stop-color="#06b6d4"></stop><stop offset="100%" stop-color="#67e8f9"></stop></linearGradient><linearGradient id="logo_svg__d" gradientUnits="userSpaceOnUse" x1="377.89" y1="331.28" x2="377.89" y2="418.5"><stop offset="0%" stop-color="#06b6d4"></stop><stop offset="100%" stop-color="#67e8f9"></stop></linearGradient><path d="M453.3 331.28v28.57l-64.66 58.65v-30.08l64.66-57.14z" id="logo_svg__a"></path><path d="M410.23 331.28v28.57l-64.67 58.65v-30.08l64.67-57.14z" id="logo_svg__c"></path></defs><use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use><use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use></svg>
                            </div>
                            <div class="hidden h-6 text-2xl font-semibold sm:block">TailwindBlog</div>
                        </div>
                    </a>
                </div>
                
                <div class="flex items-center text-base leading-5">
                    <div class="hidden sm:block">
                        <a class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100" href="/blog">Blog</a>
                        <a class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100" href="/tags">Tags</a>
                        <a class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100" href="/projects">Projects</a>
                        <a class="p-1 font-medium text-gray-900 sm:p-4 dark:text-gray-100" href="/about">About</a>
                    </div>
                    <div class="sm:hidden">
                        <div class="fixed right-0 z-10 w-full h-full duration-300 ease-in-out transform translate-x-full bg-gray-200 top-24 dark:bg-gray-800 opacity-95">
                            <button type="button" aria-label="toggle modal" class="fixed w-full h-full cursor-auto focus:outline-none"></button>
                            <nav class="fixed h-full mt-8">
                                <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/blog">Blog</a>
                                </div>
                                <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/tags">Tags</a>
                                </div>
                                <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/projects">Projects</a>
                                </div>
                                <div class="px-12 py-4">
                                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/about">About</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            
            <main class="mb-auto">
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
                        <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">Latest</h1>
                        <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">Laravel Roadmap: Beginner Project Blog</p>
                    </div>

                    <section class="overflow-hidden text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="-my-8 divide-y-2 divide-gray-100">
                            <div class="flex flex-wrap py-8 md:flex-nowrap">
                                <div class="flex flex-col flex-shrink-0 mb-6 md:w-64 md:mb-0">
                                <span class="font-semibold text-gray-700 title-font">CATEGORY</span>
                                <span class="mt-1 text-sm text-gray-500">12 Jun 2019</span>
                                </div>
                                <div class="md:flex-grow">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="text-2xl font-medium tracking-tight text-gray-900 title-font">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                        <div class="flex flex-wrap">
                                            <a href="#" class="mr-3 text-sm font-medium text-green-400 uppercase hover:text-green-600">next-js</a>
                                            <a href="#" class="mr-3 text-sm font-medium text-green-400 uppercase hover:text-green-600">tailwind</a>
                                            <a href="#" class="mr-3 text-sm font-medium text-green-400 uppercase hover:text-green-600">guide</a>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                    </div>
                                </div>
                                <a href="#" class="inline-flex items-center mt-4 text-green-500 hover:text-green-600">Read More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                </div>
                            </div>
                            
                            <div class="flex flex-wrap py-8 md:flex-nowrap">
                                <div class="flex flex-col flex-shrink-0 mb-6 md:w-64 md:mb-0">
                                    <span class="font-semibold text-gray-700 title-font">CATEGORY</span>
                                    <span class="text-sm text-gray-500">12 Jun 2019</span>
                                </div>
                                <div class="md:flex-grow">
                                    <div class="space-y-6">
                                        <div>
                                            <h2 class="text-2xl font-medium tracking-tight text-gray-900 title-font">Woke master cleanse drinking vinegar salvia</h2>
                                            <div class="flex flex-wrap">
                                                <a href="#" class="mr-3 text-sm font-medium text-green-400 uppercase hover:text-green-600">next-js</a>
                                                <a href="#" class="mr-3 text-sm font-medium text-green-400 uppercase hover:text-green-600">tailwind</a>
                                                <a href="#" class="mr-3 text-sm font-medium text-green-400 uppercase hover:text-green-600">guide</a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                        </div>
                                    </div>
                                    <a href="#" class="inline-flex items-center mt-4 text-green-500 hover:text-green-600">Read More
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </main>

            <footer class="text-gray-600 body-font">
                <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
                  <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="344.564 330.278 111.737 91.218" width="53.87" height="43.61"><defs><linearGradient id="logo_svg__b" gradientUnits="userSpaceOnUse" x1="420.97" y1="331.28" x2="420.97" y2="418.5"><stop offset="0%" stop-color="#06b6d4"></stop><stop offset="100%" stop-color="#67e8f9"></stop></linearGradient><linearGradient id="logo_svg__d" gradientUnits="userSpaceOnUse" x1="377.89" y1="331.28" x2="377.89" y2="418.5"><stop offset="0%" stop-color="#06b6d4"></stop><stop offset="100%" stop-color="#67e8f9"></stop></linearGradient><path d="M453.3 331.28v28.57l-64.66 58.65v-30.08l64.66-57.14z" id="logo_svg__a"></path><path d="M410.23 331.28v28.57l-64.67 58.65v-30.08l64.67-57.14z" id="logo_svg__c"></path></defs><use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use><use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use></svg>
                    <span class="ml-3 text-xl">TailwindBlog</span>
                  </a>
                  <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0">&copy; {{ date('Y') }}</p>
                  <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
                    <a class="text-gray-500">
                      <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                      </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                      <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                      </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                      </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                      <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                      </svg>
                    </a>
                  </span>
                </div>
              </footer>
        </div>
    </div>
    </body>
</html>