<x-app-layout>
    <x-slot name="header">
        Create category
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm text-gray-600" for="title">Title</label>
                            <input
                                class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded @error('title') border-red-600 @enderror"
                                id="title" name="title" required value="{{ old('title') }}" type="text"
                                placeholder="Post title">
                            @error('title')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-600" for="image">Image</label>
                            <input
                                class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded @error('image') border-red-600 @enderror"
                                id="image" name="image" type="file" placeholder="Post title">
                            @error('image')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-600" for="tags">Tags</label>
                            <input
                                class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded @error('tags') border-red-600 @enderror"
                                id="tags" name="tags" type="text" value="{{ old('tags') }}" placeholder="Write tags">
                            <span class="text-xs text-gray-400">Separated by comma</span>
                            @error('tags')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-600" for="category">Category</label>
                            <select name="category" id="category"
                                    class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded @error('category') border-red-600 @enderror">
                                <option value="#">--- SELECT CATEGORY ---</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @if (in_array($category->id, old('category', []))) checked @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600" for="post">Post</label>
                            <textarea
                                class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded @error('post') border-red-600 @enderror"
                                id="post" name="post" required rows="6"
                                placeholder="Write your thoughts here">{{ old('post') }}</textarea>
                            @error('post')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-button>Submit</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

