<x-app-layout>
    <x-slot name="slot">
        @foreach ($applications as $application)
        <a href="{{ url('/app' . '/' . $application->route) }}" class="flex flex-col items-center h-64 w-64 m-6 shadow-xl bg-indigo-50 rounded-full p-10 hover:bg-indigo-200 transition duration-500 ease-in-out">
            <img src="{{ asset('/images/app.png') }}" alt="app_icon" class="w-32">
            <h2 class="text-inidigo-900 text-xl text-bold">{{ $application->title }}</h2>
            <span class="text-gray-400 text-sm">{{ $application->short_description }}</span>
        </a>
        @endforeach
    </x-slot>
</x-app-layout>
