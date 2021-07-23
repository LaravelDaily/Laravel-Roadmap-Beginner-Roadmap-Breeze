<x-app-layout>
    <x-slot name="header">
        Posts list
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex mb-4">
                        <x-admin.create-button :href="route('admin.posts.create')"/>
                    </div>
                    <table class="w-full text-left border-collapse">
                        <thead>
                        <tr>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                                #
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                                Title
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                                Category
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 border-b border-gray-200">{{ $post->id }}</td>
                                <td class="px-6 py-4 border-b border-gray-200">{{ $post->title }}</td>
                                <td class="px-6 py-4 border-b border-gray-200">{{ $post->category->name }}</td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <a class="px-4 py-2 text-white font-light mr-3 tracking-wider bg-[#3d68ff] hover:bg-[#1947ee] rounded"
                                       href="{{ route('admin.posts.edit', $post->id) }}">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit"
                                               class="px-4 py-2 font-light tracking-wider text-white bg-red-600 rounded hover:bg-red-800"
                                               value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
