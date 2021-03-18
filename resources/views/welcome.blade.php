<x-app-layout>
    <x-slot name="slot">
        @foreach ($applications as $application)
        <a href="{{ url('/app' . '/' . $application->route) }}" class="flex flex-col items-center m-4 px-4 w-1/5 h-1/2 overflow-hidden sm:w-1/2 md:w-1/3 lg:w-1/5 xl:w-1/5 shadow-xl bg-gray-800 rounded-2xl p-10 hover:bg-gray-700 transition duration-500 ease-in-out">
            <img src="{{ asset('/images/app.png') }}" alt="app_icon" class="w-32">
            <h2 class="text-inidigo-900 text-xl text-bold text-gray-100">{{ $application->app_name }}</h2>
            <span class="text-gray-400 text-sm text-gray-400">{{ $application->short_description }}</span>
        </a>
        @endforeach
    </x-slot>
</x-app-layout>
