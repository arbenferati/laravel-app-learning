<x-app-layout>
    <x-slot name="slot">


        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Application name</th>
                    <th class="py-3 px-6 text-center">Short description</th>
                    <th class="py-3 px-6 text-center">Picture</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($apps as $app)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">
                            <span class="font-medium">{{ $app->id }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class="flex items-center">
                            <span>{{ $app->app_name }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex items-center justify-center">
                            <span>{{ $app->short_description }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span class="bg-red-300 text-red-700 py-1 px-3 rounded-full text-xs">Inctive</span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <a href="{{ url('/app/edit/' . $app->id) }}">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="{{ url('/app/delete/' . $app->id) }}">
                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- <table class="rounded-t-2xl m-5 w-full table-fixed shadow-lg text-gray-100 bg-gradient-to-r from-gray-700 to-gray-900" style="width:98%">
            <tr class="text-left border-b-2 border-blue-300">
                <th class="px-4 py-3 w-1/12">#</th>
                <th class="px-4 py-3 w-1/6">Title</th>
                <th class="px-4 py-3 w-1/4">Short description</th>
                <th class="px-4 py-3 w-3/6">Description</th>
                <th class="px-4 py-3 w-2/6">Action</th>
            </tr>
            @foreach ($apps as $app)
            <tr class="border-b border-blue-400">
                <td class="px-4 py-3">{{ $apps->firstItem()+$loop->index }}</td>
                <td class="px-4 py-3">{{ $app->title }}</td>
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
          </table> --}}
    </x-slot>
</x-app-layout>
