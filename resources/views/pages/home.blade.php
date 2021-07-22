<x-app-layout>
    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
        <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">Latest</h1>
        <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">Laravel Roadmap: Beginner Project Blog</p>
    </div>
    
    <section class="overflow-hidden text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">

            @foreach ($posts as $post)    
                <div class="flex flex-wrap py-8 md:flex-nowrap">
                    <div class="flex flex-col flex-shrink-0 mb-6 md:w-64 md:mb-0">
                        @if($post->image)
                            <img src="{{ asset('uploads/' . $post->image) }}" width="100" height="100">
                        @else
                            <img src="{{ asset('no_image.jpg') }}" width="100" height="100">
                        @endif
                        <span class="font-semibold text-gray-700 title-font">{{ $post->category->name }}</span>
                        <span class="mt-1 text-sm text-gray-500">{{ $post->created_at->format('d F Y') }}</span>
                    </div>
                    <div class="md:flex-grow">
                    <div class="space-y-6">
                        <div>
                            <h2 class="text-2xl font-medium tracking-tight text-gray-900 title-font">{{ $post->title }}</h2>
                            <div class="flex flex-wrap">
                                @foreach ($post->tags as $tag)
                                    <span class="mr-3 text-sm font-medium text-green-400 uppercase hover:text-green-600">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div>
                            <p class="leading-relaxed">{{ $post->post }}</p>
                        </div>
                    </div>
                    <a href="{{ route('posts.show', $post) }}" class="inline-flex items-center mt-4 text-green-500 hover:text-green-600">Read More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>
</x-app-layout>