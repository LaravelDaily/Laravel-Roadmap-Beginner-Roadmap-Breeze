<x-admin-layout>
    <x-slot name="header">
        Edit tag
    </x-slot>
    
    <div class="leading-loose">
        <form method="POST" action="{{ route('admin.tags.update', $tag->id) }}">
            @method('PUT')
            @csrf
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Name</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded @error('name') border-red-600 @enderror" id="name" name="name" type="text" required value="{{ $tag->name }}" placeholder="Tag name">
                @error('image')
                    <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-6">
                <x-button>Submit</x-button>
            </div>
        </form>
    </div>
</x-admin-layout>

