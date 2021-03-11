<header class="flex flex-row justify-between w-screen px-10 mb-6">
    <a href="{{ url('/') }}" class="hover:text-gray-300 font-bold text-2xl">MYAPPS</a>
    <nav class="flex flex-row">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>
        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
            {{ __('About') }}
        </x-nav-link>
        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-nav-link>
        <x-nav-link :href="route('help')" :active="request()->routeIs('help')">
            {{ __('Help') }}
        </x-nav-link>
    </nav>
</header>