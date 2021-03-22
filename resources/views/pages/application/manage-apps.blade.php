<x-app-layout>
    <x-slot name="slot">
        <div class="flex flex-col items-center w-full">
            <div class="min-w-full">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">#</th>
                            <th class="py-3 px-6 text-left">Application name</th>
                            <th class="py-3 px-6 text-center">Short description</th>
                            <th class="py-3 px-6 text-center">Logo</th>
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
                                        <div class="w-4 mr-2 transform hover:text-gray-800 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                    </a>
                                    <a href="{{ url('/app/delete/' . $app->id) }}">
                                        <div class="w-4 mr-2 transform hover:text-gray-800 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <form action="{{ route('add_new_app') }}" method="POST">
                        @csrf
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">#</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <x-input id="app_name_id" class="block mt-1 w-full" type="text" placeholder="New application name" name="app_name"/>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <x-input id="short_description_id" class="block mt-1 w-full" type="text" placeholder="A short description" name="short_description"/>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-red-300 text-red-700 py-1 px-3 rounded-full text-xs">Inctive</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <button type="submit" class="w-8 mr-2 transform hover:text-gray-800 hover:scale-110">
                                        Add
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
            <div class="flex flex-row">
                @error('app_name')
                <x-error-card>
                    <p class="text-sm">{{ $message }}</p>
                </x-error-card>
                @enderror
                @error('short_description')
                <x-error-card>
                    <p class="text-sm">{{ $message }}</p>
                </x-error-card>
                @enderror

                @if (session('success'))
                <x-success-card>
                    <p class="text-sm">{{ session('success') }}</p>
                </x-success-card>
                @endif
            </div>
        </div>
    </x-slot>
</x-app-layout>
