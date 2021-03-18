<x-app-layout>
    <x-slot name="slot">
        <table class="rounded-t-2xl m-5 w-full table-fixed shadow-lg text-gray-100 bg-gradient-to-r from-gray-700 to-gray-900" style="width:98%">
            <tr class="text-left border-b-2 border-blue-300">
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">Title</th>
                <th class="px-4 py-3">Short description</th>
                <th class="px-4 py-3 w-2/4">Description</th>
                <th class="px-4 py-3 w-1/8">Action</th>
            </tr>
            @foreach ($apps as $app)
            <tr class="border-b border-blue-400">
                <td class="px-4 py-3">{{ $apps->firstItem()+$loop->index }}</td>
                <td class="px-4 py-3"><a class="hover:underline" href="{{ url('app_' . $app->route) }}">{{ $app->title }}</a></td>
                <td class="px-4 py-3">{{ $app->short_description }}</td>
                <td class="px-4 py-3">{{ $app->body }}</td>
                <td class="px-4 py-3">
                    <a href="{{ url('/app/edit/' . $app->id) }}" class="py-2 px-5 rounded-full hover:bg-indigo-700">
                        Edit
                    </a>
                    <a href="{{ url('/app/delete/' . $app->id) }}" class="py-2 px-5 rounded-full hover:bg-red-700">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
          </table>
    </x-slot>
</x-app-layout>
