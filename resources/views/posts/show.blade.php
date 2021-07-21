<x-app-layout>
    <header>
        <div class="pb-10 space-y-1 text-center border-b border-gray-200 dark:border-gray-700">
            <dl>
                <div>
                    <dt class="sr-only">Published on</dt>
                    <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                        <time datetime="2021-07-18">{{ $post->created_at->format('d F Y') }}</time>
                    </dd>
                </div>
            </dl>
            <div>
                <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">{{ $post->title }}</h1>
            </div>

            @if($post->created_at <= now()->subMonths(6))
                <div class="p-2">
                    <div class="inline-flex items-center p-2 text-sm leading-none text-indigo-600 bg-white rounded-full shadow text-teal">
                    <span class="inline-flex items-center justify-center h-6 px-3 text-white bg-blue-600 rounded-full">Info</span>
                    <span class="inline-flex px-2">This post is older than 6 months. Some info might be outdated.</span>
                    </div>
                </div>
            @endif
        </div>
        
    </header>
    <div class="divide-y divide-gray-200 xl:pb-0 xl:col-span-3 xl:row-span-2">
        <div class="pt-10 pb-8 prose max-w-none">
            {!! nl2br($post->post) !!}
        </div>
    </div>
</x-app-layout>