<div class="w-64 flex-none p-2 flex flex-col items-center">
    @auth
        <img src="{{ asset('/images/profile.jpg') }}" alt="profile_image" class="rounded-full h-24 border-2 border-indigo-900 shadow-md">

        {{-- <span class="text-sm my-4 text-gray-700">{{ '@' . Str::lower(str_replace(' ', '', Auth::user()->name)) }}</span> --}}
        <span class="text-sm my-4 text-gray-700">{{ Auth::user()->email }}</span>
        <!-- Settings Dropdown -->
        <h1 class="text-xl font-semibold text-indigo-500 mt-2 my-4">{{ Auth::user()->name }}</h1>

        <form method="POST" action="{{ route('logout') }}" class="min-w-full">
            @csrf
            <div class="flex flex-col">
                <x-sidebar-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-sidebar-nav-link>
                <x-sidebar-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Disconnect') }}
                </x-sidebar-nav-link>
            </div>
        </form>
    @else
    <x-sidebar-nav-link :href="route('login')" :active="request()->routeIs('login')">
        {{ __('Login') }}
    </x-sidebar-nav-link>
    <x-sidebar-nav-link :href="route('register')" :active="request()->routeIs('register')">
        {{ __('Register') }}
    </x-sidebar-nav-link>
    @endauth

</div>

