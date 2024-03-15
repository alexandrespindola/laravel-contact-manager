<header class="bg-gradient-to-t from-blue-500 to-blue-700 text-white shadow-lg py-3">
    <div class="container">
        <div class="flex justify-end space-x-8 sm:-my-px sm:ml-10 sm:flex">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-blue-500 p-3 rounded-md hover:bg-blue-700">{{ __('Logout') }}</button>
                </form>
            @else
                <x-nav-link :href="route('index')" :active="request()->routeIs('index')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Login') }}
                </x-nav-link>
            @endauth
        </div>
    </div>
</header>
