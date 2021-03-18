<div class="w-64 flex-none p-2 flex flex-col @auth items-center @endauth">
    @auth
        <img src="{{ asset('/images/profile.jpg') }}" alt="profile_image" class="rounded-full h-24 border-2 border-indigo-900 shadow-md">

        {{-- <span class="text-sm my-4 text-gray-700">{{ '@' . Str::lower(str_replace(' ', '', Auth::user()->name)) }}</span> --}}
        <span class="text-sm my-4 text-gray-700">{{ Auth::user()->email }}</span>
        <!-- Settings Dropdown -->
        <h1 class="text-xl font-semibold text-indigo-500 mt-2 my-4">{{ Auth::user()->name }}</h1>

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Disconnect') }}
            </x-nav-link>
        </form>
    @else
        <a href="{{ route('login') }}" class="ml-6 text-lg text-gray-400">Log in</a>
        <a href="{{ route('register') }}" class="ml-6 mt-2 text-lg  text-gray-400">Register</a>
    @endauth
    
</div> 

