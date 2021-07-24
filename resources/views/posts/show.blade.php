<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="pb-8 space-y-1 border-b border-gray-200 dark:border-gray-700">
                        <dl class="flex justify-between">
                            <div>
                                <dt>Published on</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time datetime="2021-07-18">{{ $post->created_at->format('d F Y') }}</time>
                                </dd>
                            </div>
                            <div>
                                @foreach ($post->tags as $tag)
                                    <span
                                        class="mr-3 text-sm font-medium uppercase">#{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </dl>

                        @if($post->created_at <= now()->subMonths(6))
                            <div class="p-2">
                                <div
                                    class="inline-flex items-center p-2 text-sm leading-none text-indigo-600 bg-white rounded-full shadow text-teal">
                                    <span
                                        class="inline-flex items-center justify-center h-6 px-3 text-white bg-blue-600 rounded-full">Info</span>
                                    <span class="inline-flex px-2">This post is older than 6 months. Some info might be outdated.</span>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="divide-y divide-gray-200 xl:pb-0 xl:col-span-3 xl:row-span-2">
                        <div class="pt-10 pb-8 prose max-w-none">
                            {!! nl2br($post->post) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
