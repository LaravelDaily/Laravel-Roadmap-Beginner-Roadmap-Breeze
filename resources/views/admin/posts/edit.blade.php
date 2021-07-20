<x-admin-layout>
    <x-slot name="header">
        Create category
    </x-slot>
    
    <div class="leading-loose">
        <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
            @method('PUT')
            @csrf
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Name</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" value="{{ $category->name }}" placeholder="Category name" aria-label="Name">
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">Submit</button>
            </div>
        </form>
    </div>
</x-admin-layout>

