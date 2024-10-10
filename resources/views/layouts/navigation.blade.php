<nav x-data="{ open: false }" class="border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <!-- Logo -->
                <div class="flex shrink-0 items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="block h-9 w-auto">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @if (Auth::check())
                        @if (Auth::user()->usertype == 'staff')
                            <!-- Staff Links -->
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                            <x-nav-link href="#">
                                {{ __('Patients') }}
                            </x-nav-link>
                            <x-nav-link :href="route('staff.schedules.index')" :active="request()->routeIs('staff.schedules.index')">
                                {{ __('Schedules') }}
                            </x-nav-link>
                            <x-nav-link href="#">
                                {{ __('Resources') }}
                            </x-nav-link>
                        @elseif (Auth::user()->usertype == 'admin')
                            <!-- Admin Links -->
                            <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                            <x-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.index')">
                                {{ __('Users') }}
                            </x-nav-link>
                            <x-nav-link :href="route('admin.schedules.index')" :active="request()->routeIs('admin.schedules.index')">
                                {{ __('Schedules') }}
                            </x-nav-link>
                            <x-nav-link :href="route('admin.medicines.index')" :active="request()->routeIs('admin.medicines.index')">
                                {{ __('Medicines') }}
                            </x-nav-link>
                            <x-nav-link :href="route('admin.equipment.index')" :active="request()->routeIs('admin.equipment.index')">
                                {{ __('Equipment') }}
                            </x-nav-link>
                        @endif
                    @else
                        <!-- Guest Links -->
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                            {{ __('About Us') }}
                        </x-nav-link>
                        <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                            {{ __('Services') }}
                        </x-nav-link>
                        <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                            {{ __('Contact') }}
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown and Authentication Links -->
            <div class="hidden sm:ms-6 sm:flex sm:items-center">
                @if (Auth::check())
                    <!-- User Settings Dropdown -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none dark:bg-gray-800 dark:text-gray-400 dark:hover:text-gray-300">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                             this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Login and Register Links -->
                    @if (Route::has('login'))
                        <x-nav-link href="{{ route('login') }}">
                            {{ __('Log in') }}
                        </x-nav-link>

                        @if (Route::has('register'))
                            <x-nav-link href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-nav-link>
                        @endif
                    @endif
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-900 dark:hover:text-gray-400 dark:focus:bg-gray-900 dark:focus:text-gray-400">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="space-y-1 pb-3 pt-2">
            @if (Auth::check())
                @if (Auth::user()->usertype == 'staff')
                    <!-- Staff Links -->
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#">
                        {{ __('Patients') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('staff.schedules.index')" :active="request()->routeIs('staff.schedules.index')">
                        {{ __('Schedules') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#">
                        {{ __('Resources') }}
                    </x-responsive-nav-link>
                @elseif (Auth::user()->usertype == 'admin')
                    <!-- Admin Links -->
                    <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.index')">
                        {{ __('Users') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('admin.schedules.index')" :active="request()->routeIs('admin.schedules.index')">
                        {{ __('Schedules') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('admin.medicines.index')" :active="request()->routeIs('admin.medicines.index')">
                        {{ __('Medicines') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('admin.equipment.index')" :active="request()->routeIs('admin.equipment.index')">
                        {{ __('Equipment') }}
                    </x-responsive-nav-link>
                @endif
            @else
                <!-- Guest Links -->
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('About Us') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')">
                    {{ __('Services') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Authentication Links -->
        @if (Route::has('login'))
            <div class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600">
                <div class="px-4">
                    @auth
                        <x-responsive-nav-link href="{{ url('/dashboard') }}">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                    @else
                        <x-responsive-nav-link href="{{ route('login') }}">
                            {{ __('Log in') }}
                        </x-responsive-nav-link>

                        @if (Route::has('register'))
                            <x-responsive-nav-link href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-responsive-nav-link>
                        @endif
                    @endauth
                </div>
            </div>
        @endif

        @if (Auth::check())
            <!-- Responsive Settings Options -->
            <div class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600">
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</nav>
