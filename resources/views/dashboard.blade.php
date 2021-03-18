<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome back {{ __(Auth::user()->name) }} !
        </h2>
    </x-slot>

    <div class="p-6 bg-white border-2 border-gray-200 shadow min-w-full min-h-full rounded-2xl">
        <x-label>
            {{ __('Label') }}
        </x-label>
        <x-input id="email" class="block mt-1 w-full" type="email" name="email">
            {{ __('Input') }}
        </x-input>
    </div>
</x-app-layout>
