<x-app-layout>
    <x-slot name="slot">
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 p-8 items-start">
            @foreach ($applications as $application)
            <a href="{{ url('/app' . '/' . $application->route) }}"
               class="flex flex-col m-4 p-4 h-full min-w-full
                      shadow-xl bg-gray-800 rounded-2xl hover:bg-gray-700 transition duration-500 ease-in-out">
                <img src="{{ asset('/images/app.png') }}" alt="app_icon" class="w-32 mx-auto">
                <div class="">
                    <h2 class="text-inidigo-900 text-xl text-bold tracking-widest text-gray-100">{{ $application->app_name }}</h2>
                    <span class="text-sm text-gray-400">{{ $application->short_description }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </x-slot>
</x-app-layout>
