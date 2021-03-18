<x-app-layout>
    <x-slot name="slot">
        <div class="p-6 min-w-full">

            <x-auth-session-status class="mb-4" :status="session('success')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form action="{{ url('app/update/' . $app->id) }}" method="POST">
                @csrf
                <div>
                    <x-label for="title" :value="__('Title')" />
                    <x-input id="title_id" class="block mt-1 w-full" type="text" name="title" :value="$app->title" required autofocus />
                </div>
                <div>
                    <x-label for="short_description" :value="__('Short description')" />
                    <x-input id="short_description_id" class="block mt-1 w-full" type="text" name="short_description" :value="$app->short_description" required />
                </div>
                <div>
                    <x-label for="body" :value="__('Full description')" />
                    <x-input id="body_id" class="block mt-1 w-full" type="text" name="body" :value="$app->body" required />
                </div>
                <x-button class="m-3">
                    {{ __('Sauver les modifications') }}
                </x-button>
                <a href="{{ route('app_management') }}">
                    <button class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Annuler les modificiations
                    </button>
                </a>
            </form>
        </div>
    </x-slot>
</x-app-layout>
